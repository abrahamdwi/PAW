<?php 
	include "koneksi.php";
	/**
	* 
	*/
	class testlogin
	{
		
		public function login()
		{
			$email = " abrahamdwi@gmail.com ";
			$password = " qwer12 ";

			$cek = mysqli_query("SELECT * FROM user WHERE email ='$email' AND password = '$password'");
			 $row = mysqli_fetch_array($cek);

			IF($cek > 0 ) {
				$nilai = " Berhasil";

			}else{
				$nilai= "gagal";
			}

			return $nilai;
		}
	}
 ?>