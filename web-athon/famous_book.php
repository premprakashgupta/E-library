<?php
include "db_con.php";
$famous_result=mysqli_query($con,'select * from books order by like_count desc limit 3');
$famous_num=mysqli_num_rows($famous_result);
?>