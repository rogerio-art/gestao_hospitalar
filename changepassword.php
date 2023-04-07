<?php include('header.php');?>
<?php include('sidebar.php');?>


<?php
session_start();
include("./inc/connect.php") ;
 // echo "string"; exit();
$user= $_SESSION['username'];

	if(isset($_POST['submit']))
	{ //print_r($_POST); exit();
		$oldpassword=md5($_POST['oldpassword']);
		$newpassword=md5($_POST['newpassword']);
		$repeatnewpassword=md5($_POST['repeatnewpassword']);
		//echo"$oldpassword/$newpassword/$repeatnewpassword";
	// 	$connect=mysql_connect("localhost","root","")or die("couldn't connect");
	// mysql_select_db("hms") or die("Couldn't find db");
	
	$queryget=mysqli_query($connection,"SELECT password FROM login WHERE username='$user'")or die (mysqli_error($connection));
	$numrows=mysqli_num_rows($queryget);
	$row=mysqli_fetch_array($queryget);
	
	$oldpassworddb=$row['password'];
	
	//echo $oldpassworddb ."<br>";
	
//echo $oldpassword ."<br>";
	
	if($oldpassword==$oldpassworddb)
	{
		if($newpassword==$repeatnewpassword)
		{
			//echo"Success!";
			$querychange=mysqli_query($connection,"UPDATE login SET password='$newpassword' WHERE username='$user'");
		session_destroy();
		die("Your password has been changed.<a href='index.php'>Return</a>to the main page");
			// header("location:index.php");
			// echo "<script>alert('Your Password Has BEEN CHANGED...');</script>";
		}
	}
	else
	die("Old password doesn't match");
	}
		
	
else
	echo"You must be logged in to change your password";
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title> Recoperar senha</title>
  <?php include('./css2/css.php'); ?>
  <!-- Bootstrap 3.3.7 -->                                       
  <link rel="stylesheet" href="CSS/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/app.css">
    <link rel="stylesheet" href="CSS/all.min.css">
    <script src="JS/bootstrap.bundle.min.js"></script>
    
    <script src="JS/app.js"></script>
       
  

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   
       
</head>


             <!-- Page content -->
        <div class="content-wrapper">
        <section class="content-header">
      <h1>
      <font color="black">Login</font>  
        <small></small>
       </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i>Casa</a></li>
       <li class="active">Login</li>
     </ol>
   </section>
   <section class="content">
     <div class="box box-primary">
       <div class="box-header with-border">
         <i class=""></i>
          <h3 class="box-title ">Entra com os seus dados</h3>
          </div>

<body>
<div class="container">
  <div class="row">
    <form  method="POST" class="col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
      <div class="row">
        <h1><i class="fa fa-lock"></i> log-in</h1>
        <div class="form-group">
          <label class="col-sm-1 control-label" for="e-mail"><i class="fa fa-key"></i></label>
          <div class="col-sm-11">
            <input class="form-control" id="e-mail" name="oldpassword" type="password" placeholder="Old password"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-1 control-label" for="password"><i class="fa fa-key"></i></label>
          <div class="col-sm-11">
            <input class="form-control" id="password" name="newpassword" type="password" placeholder="New Password"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-1 control-label" for="password"><i class="fa fa-key"></i></label>
          <div class="col-sm-11">
            <input class="form-control" id="password" name="repeatnewpassword" type="password" placeholder=" Repeate New Password"/>
          </div>
        </div>
        <button type="submit"  class="btn btn-primary btn-lg" name="submit">Submit</button>
         </div>
    </form>
  </div>
</div>
</div>

</section>
</div>     
        
  

</body>

</html>

<?php include('footer.php');?>
