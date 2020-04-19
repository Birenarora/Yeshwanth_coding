<?php

// mysql://b3fcbeb814e3fe:a4cff551@us-cdbr-iron-east-01.cleardb.net/heroku_19663bd198e395f?reconnect=true

$servername='localhost';
$uname='root';
$passwd='';
$dbname='biren';
$conn=new mysqli($servername,$uname,$passwd,$dbname);
if($conn->connect_error)
{
die("Connection failed;".$conn->connect_error);
}
?>