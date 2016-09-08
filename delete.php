<?php
$link=mysqli_connect("localhost:3306", "root", "3a8xNbNo7Ij1frLB");
mysqli_select_db($link, "maps");
$query="DELETE FROM automovil WHERE car='".$_GET["id"]."'";
mysqli_query($link,$query);
echo $query;
	mysqli_close($link);
header("location:car.php");

?>