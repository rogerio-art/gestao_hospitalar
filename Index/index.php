<?php
session_start();
?>
<?php
 if(!isset($_SESSION['username']))
 {// echo "string";exit();
  header("location:../index.php");
}
?>

<?php

//echo "string"; exit;
?>
<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>

<div class="content-wrapper">
<section class="content-header">
  
    <h3><font color="#e90a0a ">Página Principal</font></h3>

        <small></small>
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li class="active">Painel Principal</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
           <?php 
                $sql="SELECT count(*) FROM patientregister";
                 $write =mysqli_query($connection, $sql) or die(mysqli_error($connection));
                  $row=mysqli_fetch_array($write)or die (mysqli_error($connection)); 
   //print_r($row); exit;
                ?>
              <h3><?php echo $row[0];?></h3>

              <p>Pacientes Activos</p>
            </div>
            <div class="icon">
              <i class="fa fa-wheelchair"></i>
            </div>
            <a href="../Patient/patientlist.php" class="small-box-footer">Mais informação <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <?php 
                $sql="SELECT count(*) FROM  addappointment";
    $write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
     $row=mysqli_fetch_array($write)or die (mysqli_error($connection));
   //print_r($row); exit;
                ?>
              <h3><?php echo $row[0];?></h3>

              <p>Consultas Activas</p>
            </div>
            <div class="icon">
              <i class="fa fa-calendar-check-o"></i>
            </div>
            <a href="../Appointment/allappointment.php" class="small-box-footer"> Mais informação  <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
         <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
                   <?php 
                $sql="SELECT count(*) FROM addpayment";
    $write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
     $row=mysqli_fetch_array($write)or die (mysqli_error($connection));
   //print_r($row); exit;
                ?>
              <h3><?php echo $row[0];?></h3>

              <p>Pagamentos </p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <a href="../Patient/payments.php" class="small-box-footer"> Mais informação  <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
                   <?php 
                $sql="SELECT count(*) FROM addnewpres";
    $write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
     $row=mysqli_fetch_array($write)or die (mysqli_error($connection));
   //print_r($row); exit;
                ?>
              <h3><?php echo $row[0];?></h3>

              <p>Prescrições</p>
            </div>
            <div class="icon">
              <i class="fa fa-pencil-square-o"></i>
            </div>
            <a href="../Prescription/prescription.php" class="small-box-footer"> Mais informação  <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
       
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
      <!-- /.col -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
              <label></label>
      
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
  </div>
 <?php include"../Include/footer.php";?>