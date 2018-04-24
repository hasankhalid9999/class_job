<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body class="container" background="images/bg-image.jpg">
        <div class="jumbotron mb-0 p-0">
           <div class="m-0">
               <img src="images/kpik_banner.png" alt="kpik banner" class="w-100"/>
           </div>

        </div>
<!----------------------------------------Nav Start here----------------------------------------------------->
            <nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top" >
                <div class="container">
                    <a href="" class="navbar-brand">
                        <img src="images/polycode_logo.png" alt="" style="width:30px;"/>
                    </a>

                    <button type="button" class="navbar-toggler" data-target="#main_Menu" data-toggle="collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="main_Menu">
                        <ul class="navbar-nav mr-auto">
                            <li><a href="index.php" class="nav-link">Home</a> </li>
                            <li class="dropdown "><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Students info</a>
                                <ul class="dropdown-menu bg-primary-new">
                                    <li><a href="" class="nav-link">CMT</a></li>
                                    <li><a href="" class="nav-link">AIDT</a></li>
                                    <li><a href="" class="nav-link">ENT</a></li>
                                    <li><a href="" class="nav-link">EEE</a></li>

                                </ul>
                            </li>
                            <li><a href="" class="nav-link">Teachers info</a> </li>
                            <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Department</a>
                                <ul class="dropdown-menu bg-primary-new">
                                    <li><a href="" class="nav-link">CMT</a></li>
                                    <li><a href="" class="nav-link">AIDT</a></li>
                                    <li><a href="" class="nav-link">ENT</a></li>
                                    <li><a href="" class="nav-link">EEE</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Result</a>
                                <ul class="dropdown-menu bg-primary-new">
                                    <li><a href="" class="nav-link">1st Semester</a></li>
                                    <li><a href="" class="nav-link">2nd Semester</a></li>
                                    <li><a href="" class="nav-link">3rd Semester</a></li>
                                    <li><a href="" class="nav-link">4th Semester</a></li>
                                    <li><a href="" class="nav-link">5th Semester</a></li>
                                    <li><a href="" class="nav-link">6th Semester</a></li>
                                    <li><a href="" class="nav-link">7th Semester</a></li>
                                    <li><a href="" class="nav-link">Average Result </a></li>

                                </ul>

                            </li>
                            <li><a href="" class="nav-link">Notice</a> </li>
                             <li><a href="" class="nav-link">Help</a> </li>
                        </ul>

                                <ul class="navbar-nav">
                                    <li><a href="" class="nav-link" data-toggle="modal" data-target="#login-modal">Login</a> </li>
                                    <li><a href="register.php" class="nav-link">Sign Up</a></li>
                                </ul>

                    </div>
                </div>
            </nav>
        <!-------------------------------------------------Nav end Here----------------------------------------------->


        <!--------------------------------------Slider Start Here------------------>
        <div class="carousel ride h-auto" data-ride="carousel" data-interval="1500" id="main_slider">
            <ol class="carousel-indicators">
                <li data-target="#main_slider" data-slide-to="0" ></li>
                <li data-target="#main_slider" data-slide-to="1" class="active"></li>
                <li data-target="#main_slider" data-slide-to="2" ></li>
                <li data-target="#main_slider" data-slide-to="3" ></li>

            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/slider/slide4.jpg" alt="" class="w-100" height="400"/>
                </div>

                <div class="carousel-item">
                    <img src="images/slider/slide1.jpg" alt="" class="w-100" height="400"/>
                </div>

                <div class="carousel-item">
                    <img src="images/slider/slide2.jpg" alt="" class="w-100" height="400"/>
                </div>

                <div class="carousel-item">
                    <img src="images/slider/slide3.jpg" alt="" class="w-100" height="400"/>
                </div>

            </div>
            <a href="#main_slider" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>

            <a href="#main_slider" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>


        <!------------------------------------------Slider end here------------------------------------------>


        <!------------------- Sign in model start----------------------------->

                  <div class="modal fade" id="login-modal">
                      <div class="modal-dialog modal-sm">
                          <div class="modal-content">
                              <div class="modal-header">
                                 <center><h3>Sign In</h3></center>
                                  <button type="button" class="close" data-dismiss="modal">
                                      &Cross;
                                  </button>
                              </div>
                              <div class="modal-body">
                                  <form action="" method="post">
                                      <div class="form-group form-control">
                                          <input type="email" name="Email" id="login_email_id" class="form-control mb-2 " placeholder="Email"/>
                                          <input type="password" name="password" id="login_pass_id" class="form-control mb-2" placeholder="Password"/>
                                          <input type="submit" name="submit" id="login_btn_id" value="Log in" class="form-control btn btn-success"/>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </div>
                  </div>


        <!--------------------------------------Modal end here----------------------------->


            <div class="col-lg bg-new" style="height: 50px;">
                <footer c


                        lass="text-center">&copy 2018 Khalid. All Rights Reserved</footer>
            </div>
        <script src="js/jquery-3.3.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>