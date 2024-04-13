<?php

$connect=mysqli_connect("localhost","root","","alumnidb");

if(!$connect){
	echo "Database not connected,contact to system administration";
}


?>