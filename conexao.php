<?php
$server="localhost";
$user="root";
$password="";
$dbName="sistema";
$conn=mysql_connect($server,$user,$password);
$db= mysqli_select_db( $dbName,conn);


?>
