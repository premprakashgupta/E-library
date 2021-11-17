<?php
include "db_con.php";
$result=mysqli_query($con,'select * from issued_book');
$num=mysqli_num_rows($result);
?>