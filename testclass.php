<?php 
	require_once "PHPUnit/Framework/TestCase.php"

	class testclass extends PHPUnit_Framework_TestCase
	{
		public function testFile(){
			include 'file.php'
			$content = $data;

			$this->assertEquals(3,$content);
		}
		public function testname(){
			include 'file.php';
			$content = $nopnya;
			$this->assertEquals('asep',$content);
		}
	}
 ?>