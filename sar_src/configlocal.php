<?php

/**
 * @author      
 * @create 		[$day-$month-$year]
 * @email
 * @copyright 	2008
 * @konfigurasi settingan
 */



// DATABASE SETTING

require_once('library/adodb_lite/adodb.inc.php');

$host	=	'localhost';

$username	=	'root';

$password	=	'';

$dbname		=	'sar';

$debug_db   =   0;

$db_engine	=	'mysql';

$ADODB_COUNTRECS = true;

$db = ADONewConnection($db_engine);



$db->debug = $debug_db;

$db->Connect($host, $username, $password, $dbname);

// DIRECTORY SETTING
$db1 = clone $db; //cloning object
$db2 = clone $db; //cloning object

$application_folder = 'application/';

// KONSTANTA

$nilai = true;

//Show load time = true;
$showLoadTime = false;

//pesan kesalahan pada ajax
$pesan_db_error = '<br><br><br><table align="center">
					<tr bgcolor="#FFFF00"><td><b><font color="#FF0000">Oopppss, Database Down..</font></b></td></tr></table>'

?>
























