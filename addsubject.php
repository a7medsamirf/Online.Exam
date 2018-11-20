<?php
session_start();
error_reporting(1);
?>
<html>

<head>
  <title> Login - Web site For Online Exam </title>
  <link href="stylelogin.css" type="text/css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link href="stylemain.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/Style.css">

</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="header">
          <h2>Add Subject</h2>
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
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-user"></i>Setting
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="login_teacher.php"><i class="fas fa-sign-out-alt"></i> sign out</a>
          </li>

        </ul>
      </div>
    </nav>
    <!-- End Navbar -->

    <section class="subject-name">

<?php

$cn=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db('exam');
extract($_POST);
extract($_GET);
extract($_SESSION);
echo "<BR>";
if (isset($_SESSION['login']))
{
	echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
	echo "<a href=login_teacher.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
echo "<BR><h3 class=head1> Enter Subject Name </h3>";

echo "<table width=100%>";
echo "<tr><td align=center></table>";
if($submit=='submit' || strlen($subname)>0 )
{
	$sql="select * from mst_subject where sub_name='$subname'";
$rs=mysql_query($sql);
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>subject is Already Exists</div>";
	exit;
}
$sql2="insert into mst_subject(sub_name) values ('$subname')";
mysql_query($sql2,$cn) or die(mysql_error());
echo "<p align=center>Subject  <b> \"$subname \"</b> Added Successfully.</p>";
$submit="";
}

?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.subname.value;
if (mt.length<1) {
alert("Please Enter Subject Name");
document.form1.subname.focus();
return false;
}
return true;
}
</script>

      <div class="row">

        <div class="col-md-8 offset-md-2">
          <form class="form-s" name="form1" method="post" onSubmit="return check();">

            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Enter Subject Name</label>
              <div class="col-sm-9">
                <input name="subname" type="text" id="subname" class="form-control" placeholder="Enter Subject Name">
              </div>
            </div>
            <div class="text-center">
              <button type="submit" value="Add" class="btn btn-primary"> Add</button>
              <button type="submit" value="Next" onclick="window.location.href='addtest.php'" class="btn btn-primary">
                Next</button>
            </div>

          </form>

        </div>
    </section>


    <div id="footer">
      <div class="row">
        <div class="col-lg-12 col-md-6 text-center">
          <p> <a href="#"> &copy Web Site For Online Exam </a></p>
        </div>

      </div>


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <script src="assets/js/wow.min.js"></script>
      <script src="assets/js/main.js"></script>

</body>

</html>