<?php 
  include("../inc/connect.php") ;
  
    //session_start();
  $sql=mysqli_query($connection,"SELECT * FROM patientregister");
  $write =mysqli_query($connection,"SELECT * FROM patientregister ") or die(mysqli_error($connection));
 // print_r($sql); exit;
    $row=mysqli_fetch_array($write)or die (mysqli_error($connection));
    $id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    $address =$row['address'];
    $phone =$row['phone'];
    $gender=$row['gender'];
    $birthdate=$row['birthdate'];
    $bloodgroup=$row['bloodgroup'];
    $imageupload=$row['imageupload'];
    $status=$row['status'];
   //print_r($row); exit;
   //echo "$firstname"; exit();
?>

<?php include"../Include/headerMedico.php";?>
<?php include"../Include/sidebarMedico.php";?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Informações pessoais do Paciente
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li class="active">Informações pessoais do Paciente</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

<div class="container">
  <div class="box box-primary">
    <h3 >&nbsp;&nbsp;&nbsp;Informações pessoais do Paciente</h3>
   <div class="box-body box-profile" >
    <form method="POST" enctype="multipart/form-data" >
         <div class="col-md-8">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span style="color:red;"></span><b>Nome completo</b>
    <div class="form-group">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo  $name;?></div>

     <div class="col-md-3" style="float: right;">
    <img class="profile-img " name="imageupload" src="../Upload/profile/<?php  echo  $imageupload; ?>" alt="profile picture" style="height:200px;width:200px;" class="form-control">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
  </div>
    <div class="col-md-2">
<span style="color:red;"></span><b>Género</b>
<?php echo  $gender;?>
</div>
 <div class="col-md-2">
<b> Grupo Sanguino</b>
   
<?php echo  $bloodgroup;?></div>
   <div class="col-md-2">
       <b>Data de aniversário</b>
  <?php echo  $birthdate;?>
  </div>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
  <div class="col-md-2" >
    <span style="color:red;"></span><b>Telefone</b><br>
 <?php echo  $phone;?>
</div>
     <div class="col-md-2" >
<b>Endereço</b>
<?php echo  $address;?>
</div><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
 <div class="col-md-2" >
<span style="color:red;"></span><b>Email</b><br><b>do Paciente</b>
   <?php echo  $email;?>
 </div>
 <div class="col-md-2" >
   <span style="color:red;"></span><b>Estado</b><br>
  <?php if($row['status']=='1'){ echo 'Activo'; } ?>
 <?php if($row['status']=='0'){ echo 'Inativo'; } ?>
</div><br><br><br><br>
<div class="box-footer">
    <a href="./patient.php"><button type="button" name="cancel" class="btn btn-primary"><i class="fa fa-times"></i> Cancelar</button></a>
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