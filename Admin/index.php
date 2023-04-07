<?php session_start();?>
<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>
<?php 
include("../inc/connect.php") ;
  
$sql="SELECT * FROM login WHERE id='".$_SESSION['id']."'"; //deve estar assim porque senºao quando tiver mais de um admin vai dar probulema porque el só vai pegar o admin da primeira linha na tabela
//echo $sql;
  $write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
//print_r($sql); exit;
$row=mysqli_fetch_array($write)or die (mysqli_error($connection));
//print_r($row); exit;
$id=$row['id'];
     $profile=$row['profile'];
      $fname =$row['fname'];
       $lname=$row['lname'];
    $username=$row['username'];
    $password=$row['password'];
       //print_r($row); exit;
   //echo "$firstname"; exit();
?>
<?php
//include("../inc/connect.php") ;

//session_start();
if(isset($_POST['update']))
{ //print_r($_POST); exit;
  $id=$row['id'];
  if ($_FILES["profileimg"]["name"]!='')
  {
    $target_dir="../Upload/Adminprofile/";
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
        move_uploaded_file($temp,"../Upload/Adminprofile/".$name);
     @unlink('../Upload/Adminprofile/'.$_POST['old_profile']);
       }
    }
  }
   else
    {
      $name=$_POST['old_profile'];
    }
  //  $flag=0;
 //$pswd=$_POST['pswd'];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $password1=md5(md5("$password"));
  $Confirmpassword=$_POST['Confirmpassword'];

  if(!empty($password))
  {
    if($password==$Confirmpassword)
    {
      $write=mysqli_query($connection,"UPDATE login SET profile='$name',fname='$fname',lname='$lname',username='$username',password='$password1' WHERE id='".$_GET['id']."'") or die(mysqli_error($connection));
      //  $_SESSION['username']=$username;
      echo " <script>alert('Dados atualizados com sucesso..');</script>";
    }
    else
    {
      ?>
      <script>
        window.alert("Precisa igualar os dois campos, com a mema senha. ");
    </script><?php
  //    echo " <script>alert('Precisa igualar os dois campos, com a mema senha');</script>";//match-traduzir password dont match
    }
  }
  else
  {
    // $password=$Confirmpassword;
    $write=mysqli_query($connection,"UPDATE login SET profile='$name',fname='$fname',lname='$lname',username='$username',password='$password1' WHERE id='".$_GET['id']."'") or die(mysqli_error($connection));
  //    $_SESSION['username']=$username;
      echo " <script>alert('Dados atualizados com Sucesso..');</script>";
  }

  }


  
?>

<div class="content-wrapper">
    <section class="content-header">
      <h1>
         Perfil do Admin
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../Index"><i class="fa fa-dashboard"></i> Início</a></li>
        <li class="active">Painel Principal</li>
      </ol>
    </section>
   <section class="content">
      <div class="row">
        <div class="col-md-12">
       <div class="box box-primary">
          <div class="box-header with-border">
            <div class="col-md-4">
              <div style="float: right;" >
               <b> Primeiro Nome:</b>&nbsp; 
         <?php echo $fname; ?><br>
         <b>Último Nome:</b>&nbsp;
         <?php echo $lname; ?><br>
         <b> Email:</b>&nbsp; 
          <?php echo $username; ?><br>
       </div>

     <img class="profile-img " name="profile" src="../Upload/Adminprofile/<?php echo $profile;?>" style="height:100px;width:100px;" class="form-control" style="float: left;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
       <br>
         <input type="hidden" name="old_profile" value="<?php echo $profile; ?>" >
        <img class="profile-img " name="profile" src="../Upload/Adminprofile/<?php echo $profile;?>" style="height:100px;width:100px;" class="form-control">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="file" name="profileimg" ><br><br>
          <label>Primeiro Nome</label><br>
          <input type="text" name="fname" class="form-control" value="<?php echo $fname; ?>"><br>
          <label>último Nome</label><br>
          <input type="text" name="lname" class="form-control" value="<?php echo $lname; ?>"><br>
          <div class="form-group">
          <label for="exampleInputEmail1">Usuario</label>
          <input type="email" class="form-control" name="username" value="<?php echo $username;?>">
          </div>
          <div class="form-group">
          <label for="exampleInputPassword1">Senha</label>
          <input type="password" name="password" class="form-control" value="<?php echo $password;?>">
          </div>
          <div class="form-group">
          <label for="exampleInputPassword1"> Confirmar senha</label>
          <input type="text" name="Confirmpassword" class="form-control">
          </div>
         
        </form> 
        <div class="box-footer">
           <button type="submit"  name="update" class="btn btn-success bg-green" STYLE = "color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #2196f3;"><i class="fa fa-file-text"></i> Salvar</button>
          <!--  <button type="reset"  name="reset" class="btn btn-primary" value="reset"><i class="f fa fa-undo"></i> Reset</button> -->
          <a href="../Index/index.php"><button type="button" name="cancel" class="btn btn-primary" STYLE = "color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #2196f3;"><i class="fa fa-times"></i> Cancelar</button></a>
              </div>
   </div>
  </div>
</section>
</div>
<?php include "../Include/footer.php";?>