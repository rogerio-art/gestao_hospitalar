 <?php include"../Include/header.php";?>
 <?php include"../Include/sidebar.php"; ?>
 <?php
include("../inc/connect.php") ;

$sql=mysqli_query($connection, "SELECT * FROM addappointment WHERE `app_date` = '".date('Y-m-d')."'");
//echo $sql;
$q=mysqli_query($connection,"SELECT * FROM addappointment WHERE `app_date` = '".date('Y-m-d')."'")or die (mysqli_error($connection));
$q_row=mysql_fetch_all($q);
function mysql_fetch_all($query) 
{
  $temp='';
$all = array();
while ($all[] = mysqli_fetch_assoc($query)) {
  $temp=$all;
}
return $temp;
}
//echo $sql;
//print_r($q_row); exit();
?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Detalhe da consulta
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Casa</a></li>
        <li class="active">Detalhe da consulta</li>
      </ol>
    </section>
    <section class="content">
      <div class="box box-primary">
        <div class="box-header with-border">
          <i class=""></i>
           <h3 class="box-title ">Detalhe da consulta</h3>
           </div>
           <?php
   
   foreach ($q_row as $row)
   {
     $sql1=" SELECT name FROM patientregister WHERE id='".$row['patient']."'";
$write1 =mysqli_query($connection,$sql1) or die(mysqli_error($connection));
//print_r($sql); exit;
$row2=mysqli_fetch_array($write1)or die (mysqli_error($connection));

?> <center><font size="5">   
            <label> Nome do Paciente:</label>
            <?php echo $row2['name'];?><br>
            <label> Nome da Consulta:</label>
            <?php echo $row['remark'];?><br>
             <label> Data da Consulta:</label>
             <?php echo $row['app_date'];?><br>
              <label>Preço:</label>
               <?php echo $row['preco'];?> Kz<br>
               <label>Médico:</label>
                <?php echo $row['medico'];?><br>
               </font>
   </br>
   </br>
               <?php } ?>

<a href="../Index/index.php"><button type="submit" name="submit" class="btn bg-blue">Voltar</button></a><br><br>
       </center>
   </div>

</section>
</div>

<?php include "../Include/footer.php";?>
