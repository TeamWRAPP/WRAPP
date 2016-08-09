<?php 
	//$servername = "localhost";
	//$username = "root";
	//$password = "TeamWrapp";
	//$dbname = "P1";
	$getD = $_POST['postD'];
	$getTITLE = $_POST['postTITLE'];
	$getURL = $_POST['postURL'];
	$getNAME = $_POST['postNAME'];
	$getP1 = $_POST['postP1'];
	$getP2 = $_POST['postP2'];
	$getP3 = $_POST['postP3'];
	$getP4 = $_POST['postP4'];
	$getP5 = $_POST['postP5'];
	$getP6 = $_POST['postP6'];
	$getP7 = $_POST['postP7'];
	$getP8 = $_POST['postP8'];
	$getOS = $_POST['postOS'];
	$dbc = mysql_connect('localhost','root','TeamWrapp');
	if(!$dbc) {
		die("Not connected : " . mysql_error());
	}
	else {
		echo "PART 1 CONNECTS\n";
	}
	
	// Select DB
	$db_selected = mysql_select_db("P1", $dbc);
	if(!$db_selected) {
		die("Can't connect : " . mysql_error());
	}
	else {
		echo "PART 2 CONNECTS\n";
	}
	$sqlInsert = 'INSERT INTO Results '.'(D, TITLE, URL, NAME, P1, P2, P3, P4, P5, P6, P7, P8, OS) '."VALUES ($getD, $getTITLE, $getURL, $getNAME, $getP1, $getP2, $getP3, $getP4, $getP5, $getP6, $getP7, $getP8, $getOS) ";
	$retval = mysql_query($sqlInsert);
	if(!$retval) {
		die('Could not enter data: ' . mysql_error());
	}
	echo "Entered data successfully\n";
	mysql_close($dbc);
?>