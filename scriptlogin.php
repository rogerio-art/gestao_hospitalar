
<?php include('config/db.php'); ?>



<?php 
if(isset($_POST['loginuser']))
{
$username=$_POST['username'];
?>
<?php
//$password=$_POST['password'];

}
$password=md5(md5(mysqli_real_escape_string($connection,$_POST['password'])));

if(strlen($password)<6){
    echo "Password should have atleast 6 characters. Redirecting you back to login page...";
}    ?>
    <meta http-equiv="refresh" content="2;url=login.php" />
    <?php
//echo$password; exit();
if($username && $password)
{	
	// $query="SELECT * FROM login WHERE username='$username' "or die (mysqli_error($connection));
	// $numrows=mysqli_num_rows($connection,$query); 
  $sql = "SELECT * From patientregister WHERE email = '{$username}' ";
  $query = mysqli_query($connection, $sql);
  $rowCount = mysqli_num_rows($query);
	//echo $numrows;
	if ($rowCount!=0)
	{
		while($row=mysqli_fetch_assoc($query))
		{
			$dbusername=$row['email'];
			$dbpassword=$row['password'];
      $id            = $row['id'];
      $name     = $row['name'];    
      $email         = $row['email'];
      $phone   = $row['phone'];
      $imageupload   = $row['imageupload'];
			//echo $dbpassword; exit();
		}	
	
   
		if($username==$dbusername && $password==$dbpassword)
		{

			//echo"You are in !. ";
			//$_SESSION['userid'] =$row['id'];
			$_SESSION['email']=$username;
			
      header("Location: ./actividades.php");
      $_SESSION['id'] = $id;
      $_SESSION['name'] = $name;
      $_SESSION['andress'] = $andress;
      $_SESSION['email'] = $email;
      $_SESSION['phone'] = $phone;
      $_SESSION['imageupload'] = $imageupload;


		}
		else
    echo " <script>alert('Por favor entra com o seu e-mail e senha...');</script>";

    ?>
    <meta http-equiv="refresh" content="0;url=login.php" />
     <?php
	}
	else
	//die("That user does't exist!");
  echo " <script>alert('O usuário não existe...');</script>";

  ?>
  <meta http-equiv="refresh" content="0;url=login.php" />?>
   <?php
}
                                                                                                                                                                                                                                                                                                         
	else
	//die("Please enter a username and password");
  echo " <script>alert('Introdusa o email e a senha...');</script>";

  ?>
  <meta http-equiv="refresh" content="0;url=login.php" />
   