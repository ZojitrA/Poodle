<?php
include("../config.php");

if(isset($_POST["linkId"])){

	$query = $con->prepare("UPDATE sites SET clicks = clicks + 1 WHERE id=:id");

	$query->bindParam(":id", $_POST["linkId"]);

	$query->execute();
}
else{
	alert("something went awry, No LinkId passed to LinkCount.php");
}


?>