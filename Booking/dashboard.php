<?php
session_start();
include'dbconnection.php';
// checking session is valid for not 
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{

// for deleting user
if(isset($_GET['id']))
{
$adminid=$_GET['id'];
$msg=mysqli_query($con,"delete from admin where id='$adminid'");
if($msg)
{
echo "<script>alert('Data deleted');</script>";
}
}
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Booking App </title>
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
            <a href="dashboard.php" class="logo"><nav class="navbar bg-body-tertiary">
  <b>Book - Now</b></a>
            <div class="nav notify-row" id="top_menu"> 
                </ul>
            </div>
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
          	<h3><i class="fa fa-angle-right"></i> Book Now</h3>
				<div class="row">
				
                  
	                  
                
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
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
<?php } ?>