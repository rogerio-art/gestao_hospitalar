<?php include"../Include/headerMedico.php";?>
<?php include"../Include/sidebarMedico.php";?>
<?php 
include("../inc/connect.php") ;

//session_start();
$sql="SELECT * FROM login";

$w =mysqli_query($connection,$sql) or die(mysqli_error($connection));
// print_r($sql); exit;
$row=mysqli_fetch_array($w)or die (mysqli_error($connection));
$fname=$row['fname'];
$lname=$row['lname'];
$password=$row['password'];
$username=$row['username'];

//echo $row;
//print_r($row); exit

?>
<?php
//include("../inc/connect.php") ;

//session_start();
if(isset($_POST['submit']))
{ 
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $password=$_POST['password'];
    $passwordP=md5("$password");
    $username=$_POST['username'];
   
      $write =mysqli_query($connection,"UPDATE login SET fname='$fname',lname='$lname',username='$username',password='$passwordP'  WHERE id='".$_SESSION['id']."'") or die(mysqli_error($connection));
      //$query=mysql_query("SELECT * FROM user ")or die (mysql_error());
      //$numrows=mysql_num_rows($query)or die (mysql_error());
      echo " <script>alert('Atualização feita com sucesso..');</script>";
    
}

?>
<div class="content-wrapper">
    <section class="content-header">
      <h1>
       Gestor de Perfil
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li class="active">Perfil</li>
      </ol>
    </section>
      <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
             <i class="fa fa-user"></i> <h3 class="box-title">Perfil</h3>
            </div>
                <form method="POST" >
                  <div class="box-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Primeiro nome</label>
                    <input type="text"  name="fname" placeholder="" class="form-control" value="<?php echo $_SESSION['fname'];?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Último nome</label>
                    <input type="text" class="form-control" name="lname" placeholder="" value="<?php echo $_SESSION['lname'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alterar Senha</label>
                    <input type="password" name="password" class="form-control" placeholder="" value="<?php echo $_SESSION['password'];?>">
                    <input type="hidden" name="pswd" class="form-control" value="<?php echo $password;?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Email</label>
                    <input type="email" name="username" class="form-control" placeholder="" value="<?php echo $_SESSION['username'];?>">
                  
                  </div>
                
              </div>
    <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Salvar</button>
              </div>
            </form> 
        </div>
    </div>
    </div>
     </section> 
  </div>
<?php include "../Include/footer.php";?>