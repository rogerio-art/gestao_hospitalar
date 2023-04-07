<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>
<?php
include("../inc/connect.php") ;

$s=mysqli_query($connection,"SELECT * FROM addappointment WHERE `app_date` >= '".date('Y-m-d')."'");
$query=mysqli_num_rows($s);//or die (mysqli_error($connection));

$row1=mysql_fetch_all($s);
function mysql_fetch_all($s) 
{
  $temp='';
$all = array();
while ($all[] = mysqli_fetch_assoc($s)) {$temp=$all;}
return $temp;
// print_r($numrows);echo "string"; exit();
}
?>

<div class="content-wrapper">
<section class="content-header">
<h1>
Consultas Activas
<small></small>
</h1>
<ol class="breadcrumb">
<li><a href="../Index"><i class="fa fa-dashboard"></i> Início</a></li>
<li class="active">Agenda de Consultas
</li>
</ol>
</section>
<section class="content">
<!-- Small boxes (Stat box) -->
<div class="row">
<div class="col-md-12">
<div class="box box-primary">
<div class="box-header with-border">
<i class="fa fa-user"></i> <h3 class="box-title">Consultas Activas</h3>
</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="./addappointment.php"><button type="submit"   name="submit" class="btn btn-success bg-blue"><i class="fa fa-plus-square"></i> Adicionar Consulta</button></a><br>
<!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<   <td-->
<!--button type="button" class="btn btn-default">Copy</button>
</td> -->
</br>

<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!--a href="./Exceltoday.php"><button type="button" class="btn btn-default">Excel</button></a-->
</td>&nbsp;&nbsp;
<td>
<!-- <a href="./csvtoday.php"><button type="button" class="btn btn-default">CSV</button></a>
</td>&nbsp;&nbsp;
<td>
<a href="./PDF/today_pdf.php"><button type="button" class="btn btn-default">PDF</button></a>
</td>&nbsp;&nbsp;
<td>
<button type="button" onclick="window.print();" class="btn btn-default">Print</button>
</td> -->
<div class="box-body">
<table id="example1" class="table table-bordered table-striped table-hover">
<thead>
<tr>
<!-- <th>id</th> -->
  <th>Paciente</th>
  <th>Data</th>
  <th>Preço</th>
  <th>Médico</th>
  <th>Consulta</th>
  <th>Hora</th>
  <th>Estado</th>
  <th>Opção</th>
</tr>
</thead>
<tbody>
<?php
foreach ($row1 as $row)
{ 
$sql1=mysqli_query($connection," SELECT name FROM patientregister WHERE id='".$row['patient']."'");
$write1 =mysqli_query($connection," SELECT name FROM patientregister WHERE id='".$row['patient']."'") or die(mysqli_error($connection));
//print_r($sql); exit;
$row2=mysqli_fetch_array($write1)or die (mysqli_error($connection));
//print_r($row2); echo $row2['name']; exit;
//echo "$description"; exit();
//print_r($row1); exit;
//echo "$description"; exit();


?> <tr>
<!-- <td><?php # echo $row['id'];?></td> -->
<td><?php echo $row['namepatient'];?></td>
<td><?php echo $row['app_date'];?></td>
<td><?php echo $row['preco'];?></td>
<td><?php echo $row['doctor'];?></td> 
<td><?php echo $row['especialidade'];?></td>
<td><?php echo $row['hora'];?></td>

<?php


if($row['estado']=='1') 
    {
        ?>
       
     <td> 
      <label type="" class=""><i class=""></i><font color="green">Confirmado</font></label>
      </td>
      <?php
     
  }

  else if($row['estado']=='2')

{
  ?>
  <td> <a href="
  apdateestatos.php?id=<?php echo $row["id"]; ?>"> 
  <label type="" class=""><i class=""></i>Cancelado</label></a>
  </td>;

  <?php
}

else if($row['estado']=='3')

{
  ?>
  <td> 
  <label type="" class=""><i class=""></i><font color="red"> Pendente </font></label>
  </td>;

  <?php
}

 
?>


   <td> 
   <a href="apdateestatos.php?id=<?php echo $row["id"]; ?>"> 

    <button type="button" <span class="btn bg-blue"><i class=""></i>Confirmar  </span></button></a>
  
    </td>
    
 
<!--td><a href="deletet.php?id=<?php echo $row['id']; ?>"><span class="btn btn-danger"><i class="fa fa-trash-o"></i> Cancelar</span></a></td--> 
</tr>
<?php } ?>

</tbody>
</table>
</div>
</div>
</div>
</div>
</section>
</div>
<?php include "../Include/footer.php";?>
 
