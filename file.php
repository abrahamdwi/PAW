<?php 
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "kolektor_db";
	mysql_connect($host, $user, $password);
	mysql_set_charset($database);

	$sql_query1=mysql_query(" SELECT * FROM user ");
	$data=mysql_num_rows($sql_query1);

	$sql_query = mysql_query("SELECT * FROM user where id_user =  5");
	$nop = mysql_fetch_array($sql_query);
	$nopnya = $not['nama'];

	echo "$nopnya";
 ?>