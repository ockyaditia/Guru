function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
	  var submitButton = document.getElementById("submit");
	  var resultTimedOut = document.getElementById("result-timed-out");
	  var tryAgainButton = document.getElementById("try-again");
	  submitButton.click();
      submitButton.style.visibility = "hidden";
	  
      resultTimedOut.style.display = "inline-block";
	  
      tryAgainButton.style.display = "inline-block";
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var timer = document.getElementById("timer").innerHTML;
var deadline = new Date(Date.parse(new Date()) + timer * 60 * 60 * 1000);
initializeClock('clockdiv', deadline);