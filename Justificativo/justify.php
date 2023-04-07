<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>
<!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
        
              <!-- Bootstrap 3.3.7 -->                                       
  
 
       

        </head>

<?php

include("../inc/connect.php") ;

$query=mysqli_query($connection,"SELECT * FROM justify")or die (mysqli_error($connection));
$numrows=mysqli_num_rows($query)or die (mysqli_error($connection));
$row1=mysql_fetch_all($query);
function mysql_fetch_all($query) {
$all = array();
while ($all[] = mysqli_fetch_assoc($query)) {$temp=$all;}
return $temp;
}
//print_r($row1); exit;
//$row1[]=mysql_fetch_assoc($query)or die (mysql_error());
?>
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="../bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        
<body>
<div class="content-wrapper">
<section class="content-header">
<h1>
Justificativos Médico
<small></small>
</h1>
<ol class="breadcrumb">
<li><a href="../Index2"><i class="fa fa-dashboard"></i> Casa</a></li>
<li class="active"></li>
</ol>
</section>
<section class="content">
<!-- Small boxes (Stat box) -->
<div class="row">
<div class="col-xs-12">
<div class="box box-primary">
<div class="box-header with-border">
<!-- <i class="fa fa-user"></i> <h3 class="box-title"> Justificativos Médico</h3> -->
</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="./addnew.php"><button type="submit" name="submit" class="btn btn-success bg-blue"><i class="fa fa-plus-square"></i> Creiar Justificativo</button></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--    <td>
<button type="button" class="btn btn-default">Copy</button>
</td> -->
<!-- <td>
<a href="./ExcelPrescription.php"><button type="button" class="btn btn-default">Exel</button></a>
</td>&nbsp;&nbsp;
<td> -->

</td>&nbsp;&nbsp;
<!-- <td>
<button type="button" onclick="window.print();" class="btn btn-default">Print</button>
</td> -->
<div class="box-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<th>Paciente</th>
<th>Data</th>
<th>Opção</th>

</tr>
</thead>
<tbody>
<?php
foreach ($row1 as $row)
{
  $s1=" SELECT name FROM patientregister ";
  $w1 =mysqli_query($connection,$s1) or die(mysqli_error($connection));
  //print_r($s1); exit;
    $row1=mysqli_fetch_array($w1)or die (mysqli_error($connection));
//print_r($row1); exit;
 //echo $row1; exit();

?> <tr>
  <td><?php echo $row['patient'];?></td>  
<td><?php echo $row['date'];?></td>

  <td>
  <a href="viewJustify.php?id=<?php echo $row['id'];?>"><span class="btn bg-blue "><i class="fa fa-eye"></i> Ver</span></a>&nbsp;&nbsp;
  <!--a href="editjustify.php?id=<?php echo $row['id'];?>"><span class="btn bg-blue"><i class="fa fa-edit"></i> Editar</span></a-->&nbsp;&nbsp;
  <!-- <a href="delete.php?id=<?php echo $row['id'];?>"><span class="btn btn-danger"><i class="fa fa-trash-o"></i>Apagar</span></a></td> -->
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
</body>
<?php include('../Include/footer.php');?>
</html>