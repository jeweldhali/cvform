<?php

$DB_HOST="localhost";
$DB_USER="root";
$DB_PASS="";
$DB_NAME="cv";

$conn=new mysqli($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
if(!$conn){
	echo "server not connect";
}

?>