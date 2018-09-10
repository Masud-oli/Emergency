<?php
$host="localhost"; 
$username="root"; 
$password="1234"; 
$db_name="emergency_service_db"; 
mysql_connect("$host", "$username", "$password")or die("Can't Connect Database");
mysql_select_db("$db_name")or die("Can't Select Database");
?>