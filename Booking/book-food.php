<?php
session_start();
error_reporting(0);
include'dbconnection.php';
//Checking session is valid or not
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['Submit']))
{

    $name=$_POST['name'];
    $email=$_POST['email'];
    $food_name=$_POST['food_name'];
    $mobile_no=$_POST['mobile_no'];
    $date=$_POST['date'];

    $msg=mysqli_query($con,"insert into food(name,email,food_name,mobile_no,date) 
          values('$name','$email','$food_name','$mobile_no','$date')");

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin </title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>
    <section id="container" >
        <header class="header black-bg"  style="background-color:black;">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <a href="dashboard.php" class="logo"><b>Food Order </b></a>
            <div class="nav notify-row" id="top_menu"> </ul></div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </header>
        <aside>
            <div id="sidebar"  class="nav-collapse " style="background-color:#212121; color:white;">
                <ul class="sidebar-menu" id="nav-accordion">       
                    <h5 class="centered"><?php echo $_SESSION['login'];?></h5>       
                    <li class="mt"><a href="dashboard.php"><span>Dashboard</span></a></li>
                    <li class="mt"><a href="book-movies.php"> <span>Movies </span></a> </li>
                    <li class="mt"><a href="book-dress.php"> <span>Dress </span></a> </li>
                    <li class="mt"><a href="book-food.php"><span>Foods </span></a> </li>
                    <li class="mt"><a href="book-courses.php"> <span>Courses</span></a> </li>
                    <li class="mt"><a href="movie-report.php"> <span>Movie Report</span></a> </li>
                    <li class="mt"><a href="dress-report.php"><span>Dress Report</span></a></li> 
                    <li class="mt"><a href="food-report.php"><span>Food Report</span></a></li> 
                    <li class="mt"><a href="course-report.php"><span>Courses Report</span></a></li> 
                    <li class="mt"><a href="change-password.php"><span>Change Password</span></a></li>
                    <li class="sub-menu"><a href="manage-users.php" ><span>Manage Users</span></a></li>
                </ul>   
            </div>
        </aside>
        <section id="main-content">
            <section class="wrapper">
                <h3><i class="fa fa-angle-right"></i>Order Food </h3>
                <div class="row"> 
                    <div class="col-md-12">
                        <div class="content-panel">
                            <form class="form-horizontal style-form" name="form1" method="post" enctype="multipart/form-data" action="" onSubmit="return valid();">
                            <p style="color:#F00"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
                            
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" value="" >
                                </div>
                            </div>
                          
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Email Id</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="email" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Food Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="food_name" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Mobile Number</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="mobile_no" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Booking Date</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="date" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Food Delivery</label>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Online Payment
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Offline Payment
                                        </label>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">veg/non-veg</label>
                                <div class="col-sm-10">
                                    <div class="form-check" >
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Veg
                                        </label>
                                    </div>
                                    <div class="form-check " >
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Non-Veg
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Both
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">FeedBack</label>
                                <div class="form-outline" style="padding: 40px">
                                    <textarea class="form-control " style="" id="" rows="4"></textarea>
                                </div>
                            </div>
                            
                            <div style="margin-left:100px; padding-bottom:20px;" >
                                <input type="submit" name="Submit" value="Order Food" class="btn btn-theme" style="color:white;
                                background-color:black">
                            </div>
                        
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  

  </body>
</html>
<?php } ?>