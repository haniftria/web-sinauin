<?php
$conn = mysqli_connect("localhost","root","","db_sinauin") ;

if (!$conn)
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>