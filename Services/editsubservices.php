<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>
<?php 
  include("../inc/connect.php") ;
  
    //session_start();
  $sql="SELECT * FROM subservices WHERE service_id='".$_GET['id']."'";
  $write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
// print_r($sql); exit;
    $row=mysqli_fetch_array($write)or die (mysqli_error($connection));
    $service_id=$row['service_id'];
    $subservicename=$row['subservicename'];
     $Fee=$row['Fee'];
  // print_r($row); exit;
   //echo "$firstname"; exit();
?>
<?php
//include("../inc/connect.php") ;

//session_start();
if(isset($_POST['submit']))
{ //echo $write; exit();
    $service_id=$_POST['service_id'];
    $subservicename=$_POST['subservicename'];
    $Fee=$_POST['Fee'];
    
    $write=mysqli_query($connection,"UPDATE subservices SET subservicename='$subservicename',Fee='$Fee' WHERE service_id='".$_GET['id']."'") or die(mysqli_error($connection));
   
      echo " <script>setTimeout(\"location.href='../Services/services.php';\",150);</script>";
}

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editar Sub Serviços
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Casa</a></li>
        <li class="active">Editar Sub Serviços</li>
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
              <label>Nome subserviços</label><br>
            <input type="name" class="form-control" name="subservicename" id="exampleInputEmail1" placeholder="" value="<?php echo $subservicename;?>">
            <br>
            <label>Taxa</label><br>
            <input type="name" class="form-control" name="Fee" id="exampleInputEmail1" placeholder="" value="<?php echo $Fee;?>">
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