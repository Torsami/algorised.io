<?php
$institution = 'etsk' ;
$website = 'www.etsk.sch.ng' ;
$db = new mysqli('localhost', 'root', 'eduportal101', 'db');

if($db->connect_errno){
	die('Sorry unable to connect to database at the moment, Please try again later.');
	}
ob_start();	
if(!ISSET($_SESSION)){SESSION_START();}
	
?>
