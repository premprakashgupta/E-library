<?php
session_start();
if(!isset($_SESSION['reg'])){
    header("location://localhost/web-athon/index.php");
}
 include"book_available_m.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <title>Document</title>
    
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
<body>
    <div class="container-fluid available_container_f">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="#">
                <img src="assets/image/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source-removebg-preview.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                E - Library
              </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">Sign Out</a>
                  </li>
              </ul>
              
            </div>
          </nav>
          <div class="universal_search my-3">
              <div class="universal_search_box">
              <input type="text" placeholder="Search Book Name" class="form-control">
              </div>
                 <i class="fa fa-search"></i>
              </div>
          <div class="available_content mt-5">
              
          <?php
if($num>0){

for($i=0;$i<$num;$i++)
{
                                    
$row=mysqli_fetch_array($result); 
                ?>
             <div class="box">
                 <div class="box_book_img">
                     <img src="assets/<?php echo $row['book_img'];?>" alt="" class="d-block m-auto">
                 </div>
                 <div class="box_book_name">
                     <h3><?php echo $row['book_name'];?></h3>
                 </div>
                 <div class="box_book_available">
                    <p class="font-weight-bold"><?php echo $row['available'];?> P</p>
                </div>
             </div>
             <?php
             }}else
             {
                 ?>
                 <h2>Nothing to display</h2>
                 <?php
             }
                ?>

          </div>
    </div>
</body>
<script src="assets/javascript/main.js"></script>
</html>