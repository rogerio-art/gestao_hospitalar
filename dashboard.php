
<?php include('config/db.php'); ?>
<?php include('header.php');?>
<?php include('sidebar.php');?>

  <!-- Bootstrap 3.3.7 -->                                       

  <link rel="stylesheet" href="CSS/app.css">
    <link rel="stylesheet" href="CSS/all.min.css">
    <script src="JS/bootstrap.bundle.min.js"></script>
    
    <script src="JS/app.js"></script>
       



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

</head>
<!-- Page content -->
 <?php
$sql="SELECT * FROM patientregister WHERE email='".$_SESSION['email']."'";
//echo $sql;
  $write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
//print_r($sql); exit;
$row=mysqli_fetch_array($write)or die (mysqli_error($connection));
//print_r($row); exit;
    $profile=$row['imageupload'];
      $fname =$row['name'];
       $phone=$row['phone'];
    $username=$row['email'];
    $password=$row['password'];
    $cartaodesaude=$row['cartaodesaude'];
       //print_r($row); exit;
   //echo "$firstname"; exit();
?>
<?php
//include("../inc/connect.php") ;

//session_start();
if(isset($_POST['submit']))
{ //print_r($_POST); exit;
  if ($_FILES["profileimg"]["name"]!='')
  {
    $target_dir="./Upload/Adminprofile/";
    $name=$_FILES["profileimg"]["name"];
    $type = $_FILES["profileimg"]["type"];
    $size = $_FILES["profileimg"]["size"];
    $temp = $_FILES["profileimg"]["tmp_name"]; 
    $error = $_FILES["profileimg"]["error"];//size

     if($error>0)
    {
       die("Falhou ao carregar imagem! código: $error.");
    }
     else
    { 
      if ($type=="images/" || $size > 5000000)
      {
        die("a imagem é muito grande o sistema não suporta!");
      }
      else
      { //echo "string"; exit;
        move_uploaded_file($temp,"./Upload/Adminprofile/".$name);
     @unlink('.dashboard./Upload/Adminprofile/'.$_POST['old_profile']);
       }
    }
  }
   else
    {
      $name=$_POST['old_profile'];
    }
  $flag=0;
//  $password=$_POST['password']; 
  $fname=$_POST   ['fname'   ];
  $username=$_POST['username'];
  $password=md5($_POST['password']);
  $phone=$_POST['phone'];
  $cartaodesaude=$_POST['cartaodesaude'];

 // $password1=md5("$password");
$Confirmpassword=md5($_POST['Confirmpassword']);
$write =mysqli_query($connection,"UPDATE patientregister SET name='$fname', imageupload='$name', phone='$phone',email='$username',password='$password' WHERE id='".$_SESSION['id']."'")or die(mysqli_error($connection));
      $_SESSION['name']=$fname;
      echo " <script>alert('Dados atualizados com sucesso..');</script>";
       
    }
?>
<body>
<div class="content-wrapper">
    <section class="content-header">
      <h1>
      <font color="black">Perfil do Paciente</font>  
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="./index.php"><i class="fa fa-dashboard"></i> Casa</a></li>
        <li class="active">Painel Principal</li>
      </ol>
    </section>
   <section class="content">
      <div class="row">
        <div class="col-md-12">
       <div class="box box-primary">
          <div class="box-header with-border">
            <div class="col-md-4">
              <div style="float: center;" >
               <b> Nome:</b>&nbsp; 
         <?php echo $fname; ?><br>
         <b> Telefone:</b>&nbsp; 
         <?php echo $phone; ?><br>
         <b> Email:</b>&nbsp; 
          <?php echo $username; ?><br>
          <b> Cartão de Saúde:</b>&nbsp; 
          <?php echo $cartaodesaude; ?><br>
       </div>

     <!--img class="profile-img " name="profile" src="./Upload/Adminprofile/<//?php echo $profile;?>" style="height:100px;width:100px;" class="form-control" style="float: left;" -->
       </div>
     </div>
     </div>
   </div>
 </div>
<div class="box box-primary">
  <div class="box-header with-border">
<i class="fa fa-user"></i> <h3 class="box-title">Perfil</h3>
<form method="POST" enctype="multipart/form-data" >
   <div class="box-body">
      <div class="col-md-12">
       
         <input type="hidden" name="old_profile" value="<?php echo $profile; ?>" >
        <img class="profile-img " name="profile" src="./dashboard/Upload/Adminprofile/<?php echo $profile;?>" style="height:100px;width:100px;" class="form-control">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="file" name="profileimg" ><br><br>
          <label>Primeiro Nome</label><br>
          <input type="text" name="fname" class="form-control" value="<?php echo $fname; ?>"><br>
          <label>Telefone</label><br>
          <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>"><br>
          <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" name="username" value="<?php echo $username;?>">
          </div><br>
          <div class="form-group">
          <label for="exampleInputEmail1">Nº de Cartão de Saúde</label>
          <input type="email" class="form-control" name="username" value="<?php echo $cartaodesaude;?>">
          </div><br>
          <div class="form-group">
          <label for="exampleInputPassword1">Senha</label>
          <input type="hidden" name="pswd" class="form-control" value="<?php echo $password;?>" >
          <input type="text" name="password" value="<?php echo $password;?>" class="form-control" >
          </div>
          <div class="form-group">
          <label for="exampleInputPassword1"> Confirmar senha</label>
          <input type="password" name="Confirmpassword" value="<?php echo $password;?>" class="form-control">
          </div><br>
            
          <div class="col text-end">
                         <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-back"></i>Atualizar</button> </span><!--&nbsp;&nbsp;-->
                         <a href="logout.php"><span class="btn btn-primary bg-blue"><i class="fa fa-back"></i>Sair</span><!--&nbsp;&nbsp;-->
         
                   
        </div>
        </form> 
        </section>
   </div>
  </div>
  </div>
  </div>
</section>

</body>

</html>

<?php include('footer.php');?>




