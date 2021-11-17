<?php
include "db_con.php";
extract($_POST);
$result=mysqli_query($con,"select book_name from books where book_name like '%$q%'");
$num=mysqli_num_rows($result);
$output="";
for($i=0;$i<$num;$i++){
    $row=mysqli_fetch_array($result);
    $output.="<li>".$row['book_name']."</li>";
}
echo $output;
?>