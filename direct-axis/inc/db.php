<?php
$conn=mysqli_connect('localhost','root','','candidates');
if(!$conn)
{
	echo 'Database Error';
	die();
}
?>