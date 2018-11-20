<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title> Select Subject - Web site For Online Exam  </title>
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
          <h2>Select Subject to Give Quiz</h2>
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
          <li class="nav-item">
            <a class="nav-link" href="student.php"><i class="fas fa-graduation-cap"></i> Subscribe Student</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php"><i class="fa fa-fw fa-envelope"></i>Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-user"></i>Login
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="login_teacher.php"><i class="fas fa-chalkboard-teacher"></i> Teacher Login</a>
              <a class="dropdown-item" href="login_student.php"><i class="fas fa-user-graduate"></i> Student Login</a>
          </li>

        </ul>
      </div>
    </nav>
    <!-- End Navbar -->


<form method="POST" action="" >
<?php
$conn=mysql_connect('localhost','root','');
mysql_select_db('exam');
echo "<h2 class=head1></h2>";
 $query ='SELECT * FROM mst_subject;';
$rs=mysql_query($query)or die (mysql_error());
echo "<table align=center>";
while($row = mysql_fetch_row($rs))
{
	echo "<tr><td align=center ><a href=test.php?subid=$row[0]><font size=4>$row[1]</font></a>";
}
echo "</table>";
?>



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
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>