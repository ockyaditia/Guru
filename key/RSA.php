<?php
	class RSA {
		public $pubkey = '-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCoxVyIm1pHSrHA4KB2ftS0tBun
TfQdMHacKdhpCD7D09CGGc7eD0S1slfW7LvPuukWBSzT5dR8mNSU+8Lq23lqD4Hm
sesYWj+5ziZq5Tqc8pIF/t4MOCn+/n+tRw0p9BGXEZetgVM/DzMiqfbDPMbxFMqz
kliKeTKm0JJj9EG37QIDAQAB
-----END PUBLIC KEY-----';
		public $privkey = '-----BEGIN RSA PRIVATE KEY-----
MIICXAIBAAKBgQCoxVyIm1pHSrHA4KB2ftS0tBunTfQdMHacKdhpCD7D09CGGc7e
D0S1slfW7LvPuukWBSzT5dR8mNSU+8Lq23lqD4HmsesYWj+5ziZq5Tqc8pIF/t4M
OCn+/n+tRw0p9BGXEZetgVM/DzMiqfbDPMbxFMqzkliKeTKm0JJj9EG37QIDAQAB
AoGAVX3UR+baLm7p6BhhcGUC/p6Vu4RDel3IV4bi9yGUGcK8SJHeNqJpXdj/ogG9
iZbW566rbJNptcv9M5Lsw+d1cq+o7EvbqmcrvncETTyif+HBhsKtUVA4d0l/ZYXN
ZMYg693xrcDPUtpb8VzXMv45Peb6WDzQwM56p+cWrQj8J8ECQQDZTTcgk7EME298
BzwjvAv0NYKCcmMkXcLSypvjenYB64MeZlfEqc0VsI3EEEzFAcHVSehnSZTrLReT
fbwnGBXJAkEAxtOhsmCAOMvPKlNXCFEsc5vRyPpR2b+vUPaLY1Wr0mVbYX+vI1pQ
eqsZV2gHiZThRQXCD1YbTMHh1CQH5wBzBQJAKqZkHom+Yy9hX0eQPzdGZV0nS3Em
ElowxeysYh6EEOZnqszNhzUIoqwvdv74AmbQ44sJCVTA3NPR38n65vVsOQJAC80w
Adh8g+KFD2wW9GVtEAelsho5lYUtMM8Rgvno0vo1LFpZ2O1ZbY6OWIPSPrZZkLFA
zYw83pd7gg4JcgqyyQJBAJTsbFD5aF3egJb1mi296nWXEoeAvloqkoonzheemic6
ay5EG+ArLvwirwqCjUvJyYvTFamWmOvlK3Xp+jAtsqQ=
-----END RSA PRIVATE KEY-----';
		
		public function encrypt($data) {
			if (openssl_public_encrypt($data, $encrypted, $this->pubkey))
				$data = base64_encode($encrypted);
			else
				throw new Exception('Unable to encrypt data.');
			
			return $data;
		}
		
		public function decrypt($data) {
			if (openssl_private_decrypt(base64_decode($data), $decrypted, $this->privkey))
				$data = $decrypted;
			else
				$data = '';
			
			return $data;
		}
	}
		
	//$RSA = new RSA();
	//$password = $RSA->decrypt("b3deGx1A8UgdUuaoN9l13OerQekRqkeTmVMSnosiP/tWnSCh4iN8rPLQbTS1TNJ39KSSkLo2Y+wO5KbtpkLJh44qZb4RDarzOBefM7GXxfPf0juGxZOYrh3zKCU6KLkzKH0R60qn0IhQfmUXr7q8XfryIaVWTDARwCXnPS1aAE0=");
	//$password = $RSA->encrypt("admin");
	
	//echo $password;
?>