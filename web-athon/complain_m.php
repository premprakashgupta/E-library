<?php
session_start();
include"db_con.php";
extract($_POST);
if(is_numeric($complain_reg) && !empty($student_name) && !empty($msg)){

    $query="insert into complain (reg,student_name,msg) values ('$complain_reg','$student_name','$msg')";
    $loginresult=mysqli_query($con,$query);
    if($loginresult){
             echo "compalain file"; 


        }
        else{
            echo "Try agian";
        
        }



   
}
else{
    echo "Fill all Fields";
}


?>