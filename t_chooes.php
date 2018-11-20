<html>
<head>
<title> Login - Web site For Online Exam  </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
          <h2>Please Select</h2>
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
          <li class="nav-item active">
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

<section class="chooes">

<div class="row">
                <div class="col-md-4 col-sm-6 wow fadeIn animated animated animated animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                    <div class="box">
                        <img src="assets/images/Subject.jpg">
                        <div class="box-content">
                            <ul class="icon">
                            <li><a href="addsubject.php"><i class="fas fa-search"></i></a></li>

                            </ul>
                            <h3 class="title">Add Subject</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 wow fadeIn animated animated animated animated" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">
                    <div class="box">
                        <img src="assets/images/Test.jpg">
                        <div class="box-content">
                            <ul class="icon">
                                <li><a href="addtest.php"><i class="fas fa-search"></i></a></li>
                            </ul>
                            <h3 class="title">Add Test</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 wow fadeIn animated animated animated animated" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeIn;">
                    <div class="box">
                        <img src="assets/images/Question.jpg">
                        <div class="box-content">
                            <ul class="icon">
                            <li><a href="addquestion.php"><i class="fas fa-search"></i></a></li>
                            </ul>
                            <h3 class="title">Add Question</h3>
                        </div>
                    </div>
                </div>
            </div>

    </section>



    <div id="footer">
    <div class="row">
      <div class="col-md-12 text-center">
              <p> <a href="#"> &copy Web Site For Online Exam   </a></p>
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
