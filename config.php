<?php
ob_start();


try {

//"root" in place of username, "" in place of password

$con = new PDO("mysql:dbname=poodle;host=localhost", "root", "");
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

}
catch(PDOException $e){
	echo "Connection failed: " . $e->getMessage();
}
?>