<?php
include "db_con.php";
$result=mysqli_query($con,'select * from notification');
$num=mysqli_num_rows($result);
?>