<?php
	include("line_db.php");

	$connect = connectDB();


	$get = getUser();

	var_dump($get);

?>