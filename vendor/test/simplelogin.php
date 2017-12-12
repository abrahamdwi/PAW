<?php 
	require "testlogin.php";

	class simplelogin extends \PHPUnit_Framework_TestCase{
		public function testlogin(){
			$fungsilogin = new testlogin();
			$nilai = $fungsilogin->login();
			$this->assertEquals(" Berhasil ",$nilai);
		}
	}
 ?>