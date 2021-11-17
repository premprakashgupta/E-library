<?php
 include"search_m.php";


?><!DOCTYPE html>
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
    </head>
<body>
    <div class="container-fluid search_container_f">
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
                    <a class="nav-link" href="#">Sign Out</a>
                  </li>
              </ul>
              
            </div>
          </nav>
          <div class="search_content mt-3">
              <div class="row">
              <?php
               for($i=0;$i<1;$i++)
               {
                                                   
               $row=mysqli_fetch_array($result); 
                ?>
                  <div class="col-lg-5 col-md-6 col-sm-12 mb-3 d-flex justify-content-center align-items-center">
                      <img src="assets/<?php echo $row['book_img'];?>" alt="" class="d-block m-auto">
                  </div>
                  <div class="col-lg-5 col-md-6 col-sm-12 mb-3 d-flex justify-content-center align-items-center">
                      <div class="sp_book_detail">
                        <h3><div class="sp_book_name"><?php echo $row['book_name'];?></div></h3>
                    <span class="sp_writer_name font-weight-bold">
                        <i class="fa fa-chevron-right"></i> <?php echo $row['writer'];?>
                    </span>
                    <p><i class="fa fa-chevron-right"></i><?php echo $row['description'];?></p>
                    <div class="no_f_page"><i class="fa fa-chevron-right"></i> <?php echo $row['page'];?> page <strong> English Medium</strong></div>
                    <div class="availability"><i class="fa fa-chevron-right"></i> <?php echo $row['available'];?> piece <strong>Available</strong></div>
                    <div class="note mt-5">Note:
                        This is book is issue by Library of Nalanda College Of Engineering,chandi. <br>
                        Please return on time and in same condition otherwise punishment fee will be apply according to rule.</div>
                      </div>
                    
                </div>


                <?php
               }
                ?>
              </div>
          </div>
    </div>
</body>
</html>