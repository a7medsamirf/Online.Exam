<?php
if(isset($_POST['submit']))
 {
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$Email = $_POST['Email'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$again_password = $_POST['again_password'];
 
if($Fname&&$Lname&&$Email&&$Username&&$Password&&$again_password)
 {

	 if($Password==$again_password)
	 {
 $cn = mysql_connect('localhost','root','') or die('Error');
mysql_select_db('exam');
$sql = mysql_query("INSERT INTO teacher2 VALUES('$Fname','$Lname','$Email','$Username','$Password','$again_password')")
 or die ('Error');
 mysql_query($sql,$cn) or die(mysql_error());
	  
	 }
 }
 }
 
?>
<html>
<head>
<title> Web site for Online Exam </title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/Style.css">

</head>
<body>

    <div class="container">
    <div class="row">
    <div class="col-md-4 offset-md-1">
    <img class="logo" src="assets/images/logo.png" alt="Responsive image">
      </div>
      <div class="col-md-6">
        <div id="header">
          <h2>Subscribe Teacher</h2>
        </div>
      </div>
    </div>
    
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">Online <span>Exam</span> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php"><i class="fa fa-fw fa-home"></i> Home <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-envelope"></i> Subscribe
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item active" href="add_teacher.php"><i class="fas fa-chalkboard-teacher"></i> Subscribe Teacher</a>
              <a class="dropdown-item" href="student.php"><i class="fas fa-user-graduate"></i> Subscribe Student</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.php"><i class="fas fa-phone"></i> Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-user"></i>Login
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="login_teacher.php"><i class="fas fa-chalkboard-teacher"></i> Teacher Login</a>
              <a class="dropdown-item" href="login_student.php"><i class="fas fa-user-graduate"></i> Student Login</a>
              <a class="dropdown-item" href="login_admin.php"><i class="fas fa-user"></i> admin Login</a>

          </li>

        </ul>
      </div>
    </nav>
    <!-- End Navbar -->

    <div id="subscribe-form" class="wow fadeIn animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
      <div class="row">
        <div class="col-md-5 offset-md-4">
          <form class="subscribe" method="POST" action="add_teacher.php">
            <div class="form-group">
              <label><i class="fas fa-user"></i> First name</label>
              <input type="text" class="form-control" placeholder="First name" name="Fname" />
            </div>
            <div class="form-group">
              <label><i class="fas fa-user"></i> Last name</label>
              <input type="text" class="form-control" placeholder="Last name" name="Lname" />
            </div>
            <div class="form-group">
              <label><i class="fas fa-envelope"></i> Email address</label>
              <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" name="Email" />
            </div>
            <div class="form-group">
              <label><i class="fas fa-user"></i> Username</label>
              <input type="text" class="form-control" placeholder="Enter User Name" name="Username" />
            </div>
            <div class="form-group">
              <label><i class="fas fa-unlock-alt"></i> Password</label>
              <input type="password" class="form-control" placeholder="Password" name="Password" />
            </div>
            <div class="form-group">
              <label><i class="fas fa-check-circle"></i> Confirm</label>
              <input type="password" class="form-control" placeholder="Confirm" name="again_password" />
            </div>
            <button type="submit" class="btn btn-primary" id="btn" value="Subscribe" onclick="window.location.href='t_chooes.php'">
              <i class="fas fa-paper-plane"></i> Subscribe</button>
          </form>
        </div>
      </div>
    </div>

    <div id="footer">
      <div class="row">
        <div class="col-md-12 text-center">
          <p> <a href="#"> &copy Web Site For Online Exam </a></p>
        </div>

      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/main.js"></script>



 </body>
</html>