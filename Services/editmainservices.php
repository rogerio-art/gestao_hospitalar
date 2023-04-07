<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>
<?php 
  include("../inc/connect.php") ;
  
    //session_start();
  $sql="SELECT * FROM mainservices WHERE id='".$_GET['id']."'";
  $write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
// print_r($sql); exit;
    $row=mysqli_fetch_array($write)or die (mysqli_error($connection));
    $id=$row['id'];
    $mainservicename=$row['mainservicename'];
    $mainservicepreco=$row['preco'];
   
   //print_r($row); exit;
   //echo "$firstname"; exit();
?>
<?php
//include("../inc/connect.php") ;

//session_start();
if(isset($_POST['submit']))
{ //echo $write; exit();
    $id=$_POST['id'];
    $mainservicename=$_POST['mainservicename'];
    $mainservicepreco=$_POST['mainservicepreco'];
    
    $write=mysqli_query($connection,"UPDATE mainservices SET mainservicename='$mainservicename', preco='$mainservicepreco' WHERE id='".$_GET['id']."'") or die(mysqli_error($connection));
   
      echo " <script>setTimeout(\"location.href='../Services/addservices.php';\",150);</script>";
}

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editar Serviços Principais
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Casa</a></li>
        <li class="active">Editar Serviços</li>
      </ol>
    </section>
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <form method="POST">
                <input type="hidden" class="form-control" name="id" id="exampleInputEmail1" placeholder=""><br>
              <label>Nome serviços </label><br>
            <input type="name" class="form-control" name="mainservicename" id="exampleInputEmail1" placeholder="" value="<?php echo $mainservicename;?>">
            <label>Prço do serviços </label><br>
            <input type="name" class="form-control" name="mainservicepreco" id="exampleInputEmail1" placeholder="" value="<?php echo $mainservicepreco;?>">
           
            <br><br>
              <button type="submit" name="submit" class="btn btn-primary">Atualizar</button><br>
              </form>
            </div>
        </div>
    </div>
</div>
</section>
</div>
<?php include "../Include/footer.php";?>