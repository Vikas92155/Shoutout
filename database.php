<?php
//Connect to mysql
$con = mysqli_connect("localhost","root","","shoutout");
if(mysqli_connect_errno()){
	echo 'Failed to connect: '.mysqli_connect_error();
}