<?php
$institution = 'etsk' ;
$website = 'www.etsk.sch.ng' ;
$db = new mysqli('remotemysql.com', 'O5l0hXf4FI', 'AUYwGA2uNj', 'O5l0hXf4FI');

if($db->connect_errno){
	die('Sorry unable to connect to database at the moment, Please try again later.');
	}
ob_start();	
if(!ISSET($_SESSION)){SESSION_START();}
	
?>
