<?php
session_start();
include"db_con.php";
extract($_POST);

if(is_numeric($reg) && !empty($password)){

    $query="select * from user_list where reg='$reg' && password='$password'";
    $loginresult=mysqli_query($con,$query);
    $num=mysqli_num_rows($loginresult);
    if($loginresult){
        if($num==1){
            $row=mysqli_fetch_array($loginresult);
            $_SESSION['reg']=$reg;
             echo "Login"; 
             header("location://localhost/web-athon/index.php"); 

    }
    else{
        echo "more than 1 entery";
    }


}
else{
    echo "login fail";
   
}



   
}
else{
    echo "Fill all Fields";
}


?>