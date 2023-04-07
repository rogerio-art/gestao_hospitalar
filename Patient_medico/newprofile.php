<?php
include("../inc/connect.php") ;

//session_start();
if(isset($_POST['Save']))
{ 

//print_r($_FILES["profile_pic"]["name"]); exit;
 if($_FILES["profile_pic"]["name"]!='')
  {
   
$target_dir="../Upload/profile/";
$imgname=$_FILES["profile_pic"]["name"];
$type = $_FILES["profile_pic"]["type"];
$size = $_FILES["profile_pic"]["size"];

$temp = $_FILES["profile_pic"]["tmp_name"]; 
$error = $_FILES["profile_pic"]["error"];//size
  if($error>0)
  {
    die("Error uploading file! Code $error.");
  }
  else
  { 
    if ($type=="images/" || $size > 5000000)
    {
      die("that format is not allowed or file size is too big!");
    }
    else
    { //echo "string"; exit;
     move_uploaded_file($temp,"../Upload/profile/".$imgname); 
     // echo"Upload Complete";  
    }
  }
    } 
    else
    {
      
    }
 //$profilepic=$_FILES["profilepic"]["name"];
 
    $id=$_POST['name'];
    $namebenif=$_POST['namebenif'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
 
    $idade=$_POST['idade'];

      $write =mysqli_query($connection,"INSERT INTO beneficiario(`id`,`namebenif`,`endereco`,`email`,`telefone`,`genero`,`idade`) VALUES ('$id','$namebenif','$address','$email','$phone','$gender','$idade')") or die(mysqli_error($connection));
      //$query=mysql_query("SELECT * FROM user ")or die (mysql_error());
      //$numrows=mysql_num_rows($query)or die (mysql_error());
      //      $last_id = mysqli_insert_id($connection);
      // $deposit =mysqli_query($connection,"INSERT INTO `addpayment`(`patient`,`invoice`) VALUES ('$last_id','')") or die(mysqli_error($connection));
     echo " <script>setTimeout(\"location.href='./patientlist.php';\",150);</script>";
    }
    

?>
<?php include"../Include/headerMedico.php";?>
<?php include"../Include/sidebarMedico.php";?>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="../bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="../css7/style.css" type="text/css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Adicionar Paciente
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li class="active">Novo Paciente</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="container">
          <div class="box box-primary">
           <h3>&nbsp;&nbsp;&nbsp;Informações Passoais</h3>
            <div class="box-body box-profile" >
            <form method="POST" enctype="multipart/form-data" >
              <div class="col-md-4" style="float: right;">
    <!--img class="profile-img " name="imageupload" src="https://raw.githubusercontent.com/smartninja/wd1-exercises/master/lesson-3/img/anonymous.png" alt="profile picture" style="height:100px;width:100px;" class="form-control"-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <b>Fotografia</b>
    <input type="file" name="profile_pic" class="form-control" >
        </div> 
        <div class="col-md-8">
<span style="color:red;">*</span><b>Nome do Associado</b>
<select name="name"  id="name" class="form-control select2"  placeholder="">
<option value="" disabled selected="selected"> ...Seleciona..</option>
  <?php

$p_query="SELECT * FROM patientregister";
$res=mysqli_query($connection,$p_query);
while ($row1 =mysqli_fetch_array($res)) {
 echo "Escolher";?>
<option value="<?php echo $row1['id'];?>"><?php echo $row1['name'];?>
</option>            
 
<?php } ?> 
  </select>
</div><br><br><br><br>

<div class="col-md-3" >
<b>Nome do Benifíciario</b>
<input type ="text" name="namebenif" required="" class="form-control"><br>
 </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>

         <div class="col-md-3">
<span style="color:red;">*</span><b>Género</b>
<select type="text" name="gender" class="form-control" required="">
  <option value="" disabled selected="selected"> ...Seleciona..</option>
<option value="Male">Masculino</option> 
<option value="Female">Femenino</option>
<option value="Other">Outro</option>
  </select>
</div>
 <div class="col-md-3">
<b>Idade</b>
<input type="text" name="idade" class="form-control" id="idade" required="">
</div>
<div class="col-md-3">
    <!-- <b>Data de registro</b>
<input type ="date" name="birthdate" required="" class="form-control">
</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
 <div class="col-md-3" > -->
    <span style="color:red;">*</span><b>Telefone</b><br>
  <input type ="text" name="phone" required="" class="form-control">
</div>
<div class="col-md-3" >
<b>Endereço</b>
<input type ="text" name="address" required="" class="form-control"><br>
 </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
<div class="col-md-3" >
   <span style="color:red;">*</span><b>Email(Nome do usuario)</b><br>
   <input type ="email" name="email" required="" class="form-control">
  </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <span style="color:red;">*</span><b>Estado</b><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type ="radio" name="active" value="1"><b> Activo</b>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type ="radio" name="inactive" value="0"><b> Inativo</b>
 <br><br>
    <div class="box-footer">
           <button type="submit"  name="Save" class="btn btn-success bg-blue" ><i class="fa fa-file-text"></i> Salvar</button>
           <!--button type="reset"  name="reset" class="btn btn-primary" value="reset"><i class="f fa fa-undo"></i> Reiniciar</button-->
          <a href="./patientlist.php"><button type="button" name="cancel" class="btn bg-blue"><i class="fa fa-times"></i> Cancelar</button></a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</section>
</div>
 <?php include "../Include/footer.php";?>