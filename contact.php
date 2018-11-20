<html>

<head>
  <script src="https://www.w3schools.com/lib/w3.js"></script>
  <title> Main Page- Web site For Online Exam </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/slick-theme.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link href="stylemain.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/Style.css">



</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="header">
          <h2>Contact Us</h2>
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

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-envelope"></i> Subscribe
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="add_teacher.php"><i class="fas fa-chalkboard-teacher"></i> Subscribe Teacher</a>
              <a class="dropdown-item" href="student.php"><i class="fas fa-user-graduate"></i> Subscribe Student</a>
          </li>

          <li class="nav-item active">
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

<!-- Start Contact page -->
<div class="contact-page">

	<div class="row">
 
    <div class="col-lg-6 col-md-12 wow fadeIn animated animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
        <div class="contact-form">
            <form>
            <div class="form-group">
                <label><i class="fas fa-user"></i> First Name</label>
                <input type="text" class="form-control" placeholder="Enter First Name">
            </div>
            <div class="form-group">
                <label><i class="fas fa-user"></i> Last Name</label>
                <input type="text" class="form-control" placeholder="Enter Last Name">
            </div>
            <div class="form-group">
                <label><i class="fas fa-envelope"></i> Email address</label>
                <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label><i class="fas fa-comments"></i> Comment</label>
                <textarea class="form-control"  rows="3"></textarea>
                </div>

            <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Submit</button>
            </form>
            </div>
    </div>
    <div class="col-lg-6 col-md-12 contact-inf">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110502.60389539386!2d31.188423510597946!3d30.05961847040702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296e8423bba!2sCairo%2C+Cairo+Governorate!5e0!3m2!1sen!2seg!4v1527731278037" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>


</div>
</div>
<!-- End Contact page -->


    <div id="footer">
      <div class="row">
        <div class="col-lg-12 col-md-6 text-center">
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