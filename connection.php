<?php
$servername= "localhost";
$username = "root";
$password = "";
$dbname = "db2";

$conn = mysqli_connect($servername,$username,$password,$dbname);


if($conn)
{
	echo "";
}
    else
 {
 	echo "Connectiion Failed";
 }
?>

