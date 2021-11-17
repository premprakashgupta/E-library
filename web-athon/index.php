<?php
session_start();
 include"notification_display_machine.php";
include "famous_book.php";

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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container-fluid mb-5">
        <main>
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
                    <li class="nav-item active" id="">
                      <a class="nav-link" href="#"><div class="search d-flex justify-content-around align-items-between"><input type="text" id="search_box" placeholder="Search Book Name" class="form-control"><i class="fa fa-search "></i></div></a>
                      <div class="suggestion">
                          <ul class="suggestion_ul">
                              <li>Noting to display</li>
                              
                          </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="available.php">Available Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="issued.php">Issued Book</a>
                      </li>
                      <li class="nav-item notification_li">
                        <a class="nav-link" href="#">Notification</a>
                        <div class="notification">
                            <ul class="notification_ul">
                                <?php
                                for($i=0;$i<$num;$i++)
                                {
                                                                    
                                $row=mysqli_fetch_array($result);   
                                
                                ?>
                                <li><span><?php echo $row['notice'];?></span><span><?php echo $row['cu_time_date'];?></span></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        
                      </li>
                      <li class="nav-item" data-target="#exampleModalCenter" data-toggle="modal">
                        <a class="nav-link" href="#">
                            <?php
                            if(isset($_SESSION['reg']))
                            {
                                echo $_SESSION['reg'];
                            }
                            else{
                                echo "Sign in";
                            }
                            ?>
                        </a>
                      </li>
                  </ul>
                  
                </div>
              </nav>
              <div class="row main_row">
                  <div class="col-lg-4 col-md-4 col-sm-12" data-aos="fade-in">
                      <img src="assets/image/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source-removebg-preview.png" alt="">
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-12 d-flex justify-content-center align-items-center">
                    <h1 class="main_heading" data-aos="fade-in">Your choice,Your Book</h1>
                    
                </div>
              </div>
        </main>
        <section class="famous_book">
            <h3 class="text-center my-5">FAMOUS BOOK</h3>
            <div class="row">
                <?php
            for($i=0;$i<$famous_num;$i++)
                                {
                                                                    
                                $famous_row=mysqli_fetch_array($famous_result);   
                                
                                ?>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3" data-aos="fade-in">
                    <div class="card">
                        <div class="card-header">
                            <img src="assets/<?php echo $famous_row['book_img'];?>" alt="" class="img-fluid m-auto d-block">
                        </div>
                        <div class="card-body bg-light">
                            <h3><?php echo $famous_row['book_name'];?></h3>
                            <p><?php echo $famous_row['writer'];?></p>
                            <div class="likes d-flex justify-content-between"><i class="far fa-heart"></i> Likes &nbsp;<span><?php echo $famous_row['like_count'];?></span></div>
                        </div>
                        <div class="card-footer border-0 d-flex justify-content-around qauntity">
                            <span>Available : <?php echo $famous_row['available'];?> P</span> <span>Issued : 100 P</span>
                        </div>
                    </div>
                </div>
                                    <?php
                                }
                                    ?>
                
            </div>
        </section>
        <section>
            <h3 class="text-center my-5">ABOUT US</h3>
            <div class="row about_row">
                <div class="col-lg-4 col-md-4 col-sm-12" data-aos="fade-in">
                    <img src="assets/image/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source-removebg-preview.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 d-flex justify-content-center align-items-center">
                 <h4 data-aos="zoom-in">"I have always imagined that Paradise will be a kind of a Library."

                     </h4>
                  <p>...Jorge Luis Borges</p>
              </div>
            </div>
        </section>
        <section class="counting" data-aos="fade-in">
           <div class="row p-5">
               <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                   <h4>Available Book</h4>
                   <h1 class="count">10000+</h1>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <h4>Issued Book</h4>
                <h1 class="count">10000+</h1>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <h4>Total Book</h4>
                <h1 class="count">10000+</h1>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <h4>Recent Book</h4>
                <h1 class="count">10000+</h1>
            </div>
           </div>
        </section>


        <!-- login section -------------------------------------------------------------------- -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Sign In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="validation.php" method="post">
      <div class="modal-body">
          
                <div class="form-group">
                    <label for="reg">Registration No.</label>
                    <input type="text" name="reg" class="form-control" id="reg" placeholder="Registration number">
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
      </div>
      <div class="modal-footer">
          
          <?php
           if(isset($_SESSION['reg']))
           {
               echo '<a href="logout.php" class="btn btn-danger logout">Log out</a>';
           }
           else{
               echo '<input type="submit" class="btn btn-primary" id="submit">';
           }
          ?>
            
      </div>
      </form>
    </div>
  </div>
</div>

    </div>
    <footer class="p-5" data-aos="fade-up">
    <a class="navbar-brand" href="#">
                    <img src="assets/image/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source-removebg-preview.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                    E - Library
                  </a>
                  <div class="row">
                      <div class="col-lg-8 col-md-6 col-12 mb-2 d-flex justify-content-center align-items-center">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/kBo3ipDEH6k" title="YouTube video player" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                      <div class="col-lg-4 col-md-6 col-12 mb-2">
                          <div class="complain_box">
                              <h3>Arise Your Issue</h3>
                          <div class="form-group">
                    <label for="complain_reg">Registration No.</label>
                    <input type="text" class="form-control" id="complain_reg" placeholder="Registration number">
                </div>
                <div class="form-group">
                    <label for="c_student_name">Name</label>
                    <input type="text"  class="form-control" id="c_student_name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="msg">Issue</label>
                    <textarea  id="msg" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <?php
           if(isset($_SESSION['reg']))
           {
               echo '<input type="button" value="complain file" class="btn btn-success" id="complain_btn">';
           }
           else{
               echo '<p>Login for complain...</p>';
           }
          ?>
                
                          </div>
                     
                      </div>
                  </div>

                  <p class="text-center text-white">All right reserved <?php echo date('Y')?> &copy; <i class="fab fa-linkedin text-primary bg-white"></i> <a href="https://in.linkedin.com/in/premprakashgupta-">Meet me</a></p>
    </footer>
</body>
<script src="assets/javascript/main.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 300,
      duration: 1000,
      once: true,
    });
  </script>
</html>