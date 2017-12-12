<?php
 require_once "PHPUnit/Framework/TestCase.php";
 
 class testoperasibilangan extends PHPUnit_Framework_TestCase
 {
 //test penambahan...
 public function testTambah()
 {
 $this->assertEquals(11,5+6);
 }
 //test pengurangan...
 public function testPengurangan()
 {
 $this->assertEquals(-1,5-6);
 }
 }
?>