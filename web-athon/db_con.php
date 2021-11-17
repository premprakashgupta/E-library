<?php

$con=mysqli_connect('localhost','root');
$status=mysqli_select_db($con,'webathon') or die("Connection failed: " . $status->connect_error);

?>