<?php
session_start();
 $cn=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db('exam'); 
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
          <h2> Add Question </h2>
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

    <section class="question-page">

    <?php
extract($_POST);

echo "<BR>";
if (isset($_SESSION[login]))
{
	echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
	echo "<a href=login_teacher.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
echo "<BR><h3 class=head1>Add Question </h3>";
if($_POST[submit]=='Save' || strlen($_POST['testid'])>0 )
{
extract($_POST);
mysql_query("insert into mst_question(test_id,que_desc,ans1,ans2,ans3,ans4,true_ans) values ('$testid','$addque','$ans1','$ans2','$ans3','$ans4','$anstrue')",$cn) or die(mysql_error());
echo "<p align=center>Question Added Successfully.</p>";
unset($_POST);
}
?>
    <SCRIPT LANGUAGE="JavaScript">
      function check() {
mt=document.form1.addque.value;
if (mt.length<1) {
alert("Please Enter Question");
document.form1.addque.focus();
return false;
}
a1=document.form1.ans1.value;
if(a1.length<1) {
alert("Please Enter Answer1");
document.form1.ans1.focus();
return false;
}
a2=document.form1.ans2.value;
if(a1.length<1) {
alert("Please Enter Answer2");
document.form1.ans2.focus();
return false;
}
a3=document.form1.ans3.value;
if(a3.length<1) {
alert("Please Enter Answer3");
document.form1.ans3.focus();
return false;
}
a4=document.form1.ans4.value;
if(a4.length<1) {
alert("Please Enter Answer4");
document.form1.ans4.focus();
return false;
}
at=document.form1.anstrue.value;
if(at.length<1) {
alert("Please Enter True Answer");
document.form1.anstrue.focus();
return false;
}
return true;
}
</script>


      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="question-form">

            <form name="form1" method="post" onSubmit="return check();">

              <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Select Test Name</label>
                    <div class="col-sm-9">
                    <select name="testid" id="testid" class="form-control">
                    <option>Select Test Name</option>
                </select>
                  </div>
                </div>


        <?php
    $sql4="Select * from mst_test order by test_name";
      $rs=mysql_query($sql4,$cn);
          while($row=mysql_fetch_array($rs))
      {
      if($row[0]==$testid)
      {
      echo "<option value='$row[0]' selected>$row[2]</option>";
      }
      else
      {
      echo "<option value='$row[0]'>$row[2]</option>";
      }
      } 
     ?>
     
                    </select>

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Enter Question</label>
                    <div class="col-sm-9">
                    <textarea name="addque" id="addque" class="form-control" rows="3"></textarea>
                  </div>
                </div>
          
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Enter Answer 1</label>
                    <div class="col-sm-9">
                      <input name="ans1" type="text" id="ans1" class="form-control" placeholder="Enter Answer 1">
                    </div>
                  </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Enter Answer 2</label>
                    <div class="col-sm-9">
                      <input name="ans2" type="text" id="ans2" class="form-control" placeholder="Enter Answer 2">
                    </div>
                  </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Enter Answer 3</label>
                    <div class="col-sm-9">
                      <input name="ans3" type="text" id="ans3" class="form-control" placeholder="Enter Answer 3">
                    </div>
                  </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Enter Answer 4</label>
                    <div class="col-sm-9">
                      <input name="ans4" type="text" id="ans4" class="form-control" placeholder="Enter Answer 4">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Enter True Answer</label>
                    <div class="col-sm-9">
                      <input name="anstrue" type="text" id="anstrue" class="form-control" placeholder="Enter True Answer">
                    </div>
                  </div>
                  <button type="submit" value="Add" class="btn btn-primary"> Add</button>
            </form>
    
          </div>
        </div>
      </div>
    </section>

    <div id="footer">
      <div class="row">
        <div class="col-lg-12 col-md-6 text-center">
          <p> <a href="#"> &copy Web Site For Online Exam </a></p>
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