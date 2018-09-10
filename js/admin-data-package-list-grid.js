//create our editable grid
var editableGrid = new EditableGrid("DemoGridFull", {
	enableSort: true, // true is the default, set it to false if you don't want sorting to be enabled
	editmode: "absolute", // change this to "fixed" to test out editorzone, and to "static" to get the old-school mode
	editorzoneid: "edition", // will be used only if editmode is set to "fixed"
	pageSize: 10,
	maxBars: 10
});

//helper function to display a message
function displayMessage(text, style) { 
	_$("message").innerHTML = "<p class='" + (style || "ok") + "' style='background-color:#0aa9c5'>" + text + "</p>"; 
} 

//helper function to get path of a demo image
function image(relativePath) {
	return "img/core-img/" + relativePath;
}

//this will be used to render our table headers
function InfoHeaderRenderer(message) { 
	this.message = message; 
	this.infoImage = new Image();
	this.infoImage.src = image("information.png");
};

InfoHeaderRenderer.prototype = new CellRenderer();
InfoHeaderRenderer.prototype.render = function(cell, value) 
{
	if (value) {
		// here we don't use cell.innerHTML = "..." in order not to break the sorting header that has been created for us (cf. option enableSort: true)
		var link = document.createElement("a");
		link.href = "javascript:alert('" + this.message + "');";
		link.appendChild(this.infoImage);
		cell.appendChild(document.createTextNode("\u00a0\u00a0"));
		cell.appendChild(link);
	}
};

//this function will initialize our editable grid
EditableGrid.prototype.initializeGrid = function() 
{
	with (this) {
		// use a special header renderer to show an info icon for some columns
		setHeaderRenderer("package", new InfoHeaderRenderer("Paket"));
		setHeaderRenderer("type", new InfoHeaderRenderer("Jenis"));
		setHeaderRenderer("question", new InfoHeaderRenderer("Pertanyaan"));

		// register the function that will handle model changes
		modelChanged = function(rowIndex, columnIndex, oldValue, newValue, row) { 
			displayMessage("Data dari '" + this.getColumnName(columnIndex) + "' dalam baris " + this.getRowId(rowIndex) + " telah diubah dari '" + oldValue + "' menjadi '" + newValue + "'");
			this.renderCharts();
		};

		// update paginator whenever the table is rendered (after a sort, filter, page change, etc.)
		tableRendered = function() { this.updatePaginator(); };

		// update charts when the table is sorted or filtered
		tableFiltered = function() { this.renderCharts(); };
		tableSorted = function() { this.renderCharts(); };

		rowSelected = function(oldRowIndex, newRowIndex) {
			if (oldRowIndex < 0) displayMessage("Baris dipilih '" + this.getRowId(newRowIndex) + "'");
			else displayMessage("Baris dipilih telah diubah dari '" + this.getRowId(oldRowIndex) + "' menjadi '" + this.getRowId(newRowIndex) + "'");
		};

		rowRemoved = function(oldRowIndex, rowId) {
			displayMessage("Baris dihapus '" + oldRowIndex + "' - ID = " + rowId);
		};

		// render for the action column
		setCellRenderer("action", new CellRenderer({render: function(cell, value) {
			// this action will remove the row, so first find the ID of the row containing this cell 
			var rowId = editableGrid.getRowId(cell.rowIndex);

			cell.innerHTML += "&nbsp;<a onclick=\"if (confirm('Apakah anda akan menghapus data tersebut? ')) { href='query/admin-remove-data-package-list.php?remove=" + rowId + "' } \" style=\"cursor:pointer\">" +
			"<img src=\"" + image("delete.png") + "\" border=\"0\" alt=\"hapus\" title=\"Hapus\"/></a>";

		}})); 

		// render the grid (parameters will be ignored if we have attached to an existing HTML table)
		renderGrid("tablecontent", "testgrid", "tableid");

		// set active (stored) filter if any
		_$('filter').value = currentFilter ? currentFilter : '';

		// filter when something is typed into filter
		_$('filter').onkeyup = function() { editableGrid.filter(_$('filter').value); };

		// bind page size selector
		$("#pagesize").val(pageSize).change(function() { editableGrid.setPageSize($("#pagesize").val()); });
		$("#barcount").val(maxBars).change(function() { editableGrid.maxBars = $("#barcount").val(); editableGrid.renderCharts(); });
	}
};

/*EditableGrid.prototype.onloadXML = function(url) 
{
	// register the function that will be called when the XML has been fully loaded
	this.tableLoaded = function() { 
		displayMessage("Data: " + this.getRowCount() + " baris"); 
		this.initializeGrid();
	};

	// load XML URL
	this.loadXML(url);
};

EditableGrid.prototype.onloadJSON = function(url) 
{
	// register the function that will be called when the XML has been fully loaded
	this.tableLoaded = function() { 
		displayMessage("Data: " + this.getRowCount() + " baris"); 
		this.initializeGrid();
	};

	// load JSON URL
	this.loadJSON(url);
};*/

EditableGrid.prototype.onloadHTML = function(tableId) 
{
	// metadata are built in Javascript: we give for each column a name and a type
	this.load({ metadata: [
	                       { name: "package", datatype: "html", editable: false },
	                       { name: "type", datatype: "html", editable: false },
	                       { name: "question", datatype: "html", editable: false },
	                       { name: "action", datatype: "html", editable: false }
	                       ]});

	// we attach our grid to an existing table
	this.attachToHTMLTable(_$(tableId));
	displayMessage("Data: " + this.getRowCount() + " baris"); 

	this.initializeGrid();
};

EditableGrid.prototype.duplicate = function(rowIndex) 
{
	// copy values from given row
	var values = this.getRowValues(rowIndex);

	// get id for new row (max id + 1)
	var newRowId = 0;
	for (var r = 0; r < this.getRowCount(); r++) newRowId = Math.max(newRowId, parseInt(this.getRowId(r)) + 1);

	// add new row
	this.insertAfter(rowIndex, newRowId, values); 
};

//function to render our two demo charts
EditableGrid.prototype.renderCharts = function() 
{
	//this.renderBarChart("barchartcontent", 'Data Soal' + (this.getRowCount() <= this.maxBars ? '' : ' (' + this.maxBars + ' baris dari ' + this.getRowCount() + ' baris)'), 'package', { limit: this.maxBars, bar3d: false, rotateXLabels: this.maxBars > 10 ? 270 : 0 });
	this.renderPieChart("piechartcontent", 'Data Soal', 'package', 'package');
};

//function to render the paginator control
EditableGrid.prototype.updatePaginator = function()
{
	var paginator = $("#paginator").empty();
	var nbPages = this.getPageCount();

	// get interval
	var interval = this.getSlidingPageInterval(20);
	if (interval == null) return;

	// get pages in interval (with links except for the current page)
	var pages = this.getPagesInInterval(interval, function(pageIndex, isCurrent) {
		if (isCurrent) return "" + (pageIndex + 1);
		return $("<a>").css("cursor", "pointer").html(pageIndex + 1).click(function(event) { editableGrid.setPageIndex(parseInt($(this).html()) - 1); });
	});

	// "first" link
	var link = $("<a>").html("<img src='" + image("gofirst.png") + "'/>&nbsp;");
	if (!this.canGoBack()) link.css({ opacity : 0.4, filter: "alpha(opacity=40)" });
	else link.css("cursor", "pointer").click(function(event) { editableGrid.firstPage(); });
	paginator.append(link);

	// "prev" link
	link = $("<a>").html("<img src='" + image("prev.png") + "'/>&nbsp;");
	if (!this.canGoBack()) link.css({ opacity : 0.4, filter: "alpha(opacity=40)" });
	else link.css("cursor", "pointer").click(function(event) { editableGrid.prevPage(); });
	paginator.append(link);

	// pages
	for (p = 0; p < pages.length; p++) paginator.append(pages[p]).append(" | ");

	// "next" link
	link = $("<a>").html("<img src='" + image("next.png") + "'/>&nbsp;");
	if (!this.canGoForward()) link.css({ opacity : 0.4, filter: "alpha(opacity=40)" });
	else link.css("cursor", "pointer").click(function(event) { editableGrid.nextPage(); });
	paginator.append(link);

	// "last" link
	link = $("<a>").html("<img src='" + image("golast.png") + "'/>&nbsp;");
	if (!this.canGoForward()) link.css({ opacity : 0.4, filter: "alpha(opacity=40)" });
	else link.css("cursor", "pointer").click(function(event) { editableGrid.lastPage(); });
	paginator.append(link);
};
