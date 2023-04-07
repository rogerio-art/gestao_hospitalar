<?php include('config/db.php'); ?>



<?php 
if(isset($_POST['loginadmin']))
{
$username=$_POST['username'];
?>
<?php
//$password=$_POST['password'];

}
$password=md5(md5(mysqli_real_escape_string($connection,$_POST['password'])));
if(strlen($password)<6){
    echo "A senha deve conter no minimo 6 caracter. redirecionando de volta para o login...";
}    ?>
    <meta http-equiv="refresh" content="2;url=admin.php" />
    <?php
//echo$password; exit();
if($username && $password)
{	
	// $query="SELECT * FROM login WHERE username='$username' "or die (mysqli_error($connection));
	// $numrows=mysqli_num_rows($connection,$query); 
  $sql = "SELECT * From login WHERE username = '{$username}' ";
  $query = mysqli_query($connection, $sql);
  $rowCount = mysqli_num_rows($query);
	//echo $numrows;
	if ($rowCount!=0)
	{
		while($row=mysqli_fetch_assoc($query))
		{
			$dbusername    =$row['username'];
			$dbpassword    =$row['password'];
      $id            = $row['id'];
      $name          = $row['fname'];    
      $lname         = $row['lname'];
      $imageupload   = $row['profile'];
			//echo $dbpassword; exit();
		}	
	
   
		if($username==$dbusername && $password==$dbpassword)
		{

			//echo"You are in !. ";
			//$_SESSION['userid'] =$row['id'];
			$_SESSION['username']=$username;
     
      $_SESSION['id'] = $id;
      $_SESSION['fname'] = $name;
      $_SESSION['lname'] = $lname;
      $_SESSION['profile'] = $imageupload;
       header("Location: ./Index");


		}
		else
    echo " <script>alert('Por favor entra com o seu e-mail e senha...');</script>";

    ?>
    <meta http-equiv="refresh" content="0;url=admin.php" />
     <?php
	}
	else
	//die("That user does't exist!");
  echo " <script>alert('O usuário não existe...');</script>";

  ?>
  <meta http-equiv="refresh" content="0;url=admin.php" />?>
   <?php
}
                                                                                                                                                                                                                                                                                                         
	else
	//die("Please enter a username and password");
  echo " <script>alert('Introdusa o email e a senha...');</script>";

  ?>
  <meta http-equiv="refresh" content="0;url=admin.php" />
   <?php


?>