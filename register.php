<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="container" background="images/bg-image.jpg">
<div class="jumbotron mb-0 p-0">
    <div class="m-0">
        <img src="images/kpik_banner.png" alt="kpik banner" class="w-100"/>
    </div>
</div>
<!----------------------------------------Nav Start here----------------------------------------------------->
<nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top pb-0" >
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
                <li><a href="register.php" class="nav-link">Sign Up</a> </li>
            </ul>

        </div>
    </div>
</nav>
<!-------------------------------------------------Nav end Here----------------------------------------------->


<!--------------------------------------form Start Here------------------>


<div class="col-xl-10 col-lg-10 col-md-9 col-sm-8" >

    <div class="container">
        <div class="row">
            <div class="col-sm-12"></div>
            <form action="" method="post">
                <div class="form-group form-control  mt-0 mb-0 mr-0" >
                    <label for="full_name">Full Name:</label>
                    <input type="text" name="full_name" id="full_name" class="form-control">

                    <label for="email_address">Email:</label>
                    <input type="email" name="e_address" id="email_address" class="form-control">

                    <label for="password">Password:</label>
                    <input type="password" name="pass" id="password" class="form-control">

                    <label for="phone_number">Phone:</label>
                    <input type="number" name="phone" id="phone_number" class="form-control">

                    <label for="Roll">Roll Number:</label>
                    <input type="number" name="roll" id="Roll" class="form-control">

                    <label for="dept_select">Department:</label>
                    <select name="dis_select" class="form-control" id="dept_select">
                        <option>----Select Dept----</option>
                        <option value="cmt">CMT</option>
                        <option value="ent">ENT</option>
                        <option value="eee">EEE</option>
                        <option value="aidt">AIDT</option>
                        <option value="ct">CT</option>
                    </select>

                    <label for="semester_select">Semester:</label>
                    <select name="dis_select" class="form-control" id="semester_select">
                        <option>----Select Semester----</option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                        <option value="4th">4th</option>
                        <option value="5th">5th</option>
                        <option value="6th">6th</option>
                        <option value="7th">7th</option>
                    </select>
                    <div>
                        <input type="submit" class="btn btn-secondary btn-block" value="submit" name="submit_button">
                    </div>

                </div>
            </form>


        </div>
    </div>



</div>
<!------------------------------------------Slider end here------------------------------------------>


<!------------------- Sign in model start----------------------------->
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="modal fade" id="login-modal">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <form action="" method="post">
                                <center class=text-black-50>Sign In</center>
                                <div class="form-group form-control">
                                    <input type="email" name="Email" id="login_email_id" class="form-control mb-2 " placeholder="Email"/>
                                    <input type="password" name="password" id="login_pass_id" class="form-control mb-2" placeholder="Password"/>
                                    <input type="submit" name="submit" id="login_btn_id" value="Log in" class="form-control btn btn-success"/>
                                </div>
                            </form>
                            <button type="button" class="close" data-dismiss="modal">
                                &Cross;
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--------------------------------------Modal end here----------------------------->




<div class="col-lg bg-new" style="height: 50px;">
    <footer class="text-center">&copy 2018 Khalid. All Rights Reserved</footer>
</div>
<script src="js/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>