<?php
$servername="localhost";
$username="root";
$password="";
$dbname="j1_php";

$conn=new mysqli($servername,$username,$password,$dbname);

if (!$conn) {
    echo "not connected";
}


?>