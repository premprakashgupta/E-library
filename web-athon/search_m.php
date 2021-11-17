<?php
include "db_con.php";
    $q=$_GET['q'];
    // echo $q;

$result=mysqli_query($con,"select * from books where book_name='$q'");
// if($result)
// {
//     echo "ss";
// }
// else{
//     echo "ff";
// }
// $num=mysqli_num_rows($result);

// for($i=0;$i<1;$i++)
// {
//     $row=mysqli_fetch_array($result); 
//     echo $row['book_name']." ".$row['writer']." ".$row['description']." ".$row['page']." ".$row['available'];
// }

?>