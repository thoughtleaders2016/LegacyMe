<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="ems";
$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);
if(!$conn) die("Connection Problem !");