<?php
ob_start();


try {

$cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server   = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db       = substr($cleardb_url["path"],1);
//"root" in place of username, "" in place of password

$con = new PDO("mysql:dbname=".$cleardb_db.";host=".$cleardb_server, $cleardb_username, $cleardb_password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

}
catch(PDOException $e){
	echo "Connection failed: " . $e->getMessage();
}
?>
