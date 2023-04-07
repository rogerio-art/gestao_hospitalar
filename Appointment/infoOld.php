<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>
<?php
include("../inc/connect.php") ;
?>


<!-- Page contentfaz a pagina se ajustar dentro do header e do sidbar-->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
Recibo da Consulta
<small></small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa fa-dashboard"></i> Casa</a></li>
<li class="active">Painel</li>
</ol>
</section>
<section class="content">
<div class="box box-primary">
<div class="box-header with-border">
 <i class=""></i>

  </div>


<!-- Small boxes (Stat box) -->

     <div class="box-body table-responsive no-padding">
    <table class="table table-hover">
    <div class="col-md-12"><div class="col-md-4">
 
     <td>Paciente</td>
   
 </div><!-- 
 <div class="col-md-4"><td>Doctor</td></div> -->
 <div class="col-md-4"><td>Info Receita</td>

 </div>
</div>
<?php


// $query=mysql_query("SELECT * FROM addappointment  WHERE patient='".$_GET['id']."'")or die (mysql_error($db_connect));
// $numrows=mysql_num_rows($query)or die (mysql_error($db_connect));
// $row1=mysql_fetch_all($query);


$query1=mysqli_query($connection,"SELECT * FROM addappointment WHERE id='".$_GET['id']."'")or die (mysqli_error($connection));
$numrows1=mysqli_num_rows($query1)or die (mysqli_error($connection));
$p_row=mysql_fetch_all($query1);


  // $query3=mysqli_query($connection,"SELECT * FROM patientregister WHERE patient='".$_GET['id']."'")or die (mysqli_error($connection));
  // $numrows3=mysqli_num_rows($query3)or die (mysqli_error($connection));
  // $p_row1=mysql_fetch_all($query3); 


/*$file_query=mysqli_query($connection,"SELECT * FROM addfiles")or die (mysqli_error($connection));
$file_numrows=mysqli_num_rows($file_query)or die (mysqli_error($connection));
$file_row1=mysql_fetch_all($file_query);*/

function mysql_fetch_all($query) {
$all = array();
while ($all[] = mysqli_fetch_assoc($query)) {$temp=$all;}
return $temp;
}
//print_r($p_row); exit;
//$row1[]=mysql_fetch_assoc($query)or die (mysql_error());
?>
<?php
 // print_r($p_row1[0]['name']);exit;


?> <tr>
<td>Nome: <?php echo $p_row[0]['namepatient'];  ?><br>

Início: <?php echo $p_row[0]['starttime']; ?>
</td>
<!--    <td>Name: <?php echo $p_row1[0]['doctor']; ?> -->
</td>
<td>Data: <?php echo $p_row[0]['app_date']; ?>
</td>
</tr>



<tr>

<th>
<div style="height: 100px;">
Nome da Consulta </div>
</th>
<td><?php echo $p_row[0]['remark'];  ?></td>
</tr> 
<tr>
<tr>
<th>
<div style="height: 100px;">
Início da Consulta</div></th>
<td> <?php echo $p_row[0]['starttime']; ?>
</td></tr>
<tr>
<th>
<div style="height: 100px;">
Fin da Consulta</div></th>
<td> <?php echo $p_row[0]['endtime']; ?>
</td></tr> 
</tr>

</table>
<center>

<button type="button" onclick=" window.print();" name="name" class="btn btn-success"><i class="fa  fa-print"></i>  Imprimir</button></center>
 
</div>
  

      </div>
</div>
</div>

</section>

</div>

<?php include "../Include/footer.php";?>