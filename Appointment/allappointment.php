<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>
<?php
include("../inc/connect.php");



$s=("SELECT * FROM addappointment WHERE `app_date`");
$query=mysqli_query($connection,$s)or die (mysqli_error($connection));

$numrows=mysqli_num_rows($query)or die (mysqli_error($connection));
$row1=mysql_fetch_all($query);
function mysql_fetch_all($query) {
    $all = array();
    while ($all[] = mysqli_fetch_assoc($query)) {$temp=$all;}
    return $temp;
}
//echo 'xdgfdxg'.count($numrows); exit;
//print_r($row1); exit;
//$row1[]=mysql_fetch_assoc($query)or die (mysql_error());
?>
 <!-- <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css"> -->
        <!-- jquery library -->
        <!-- <script type="text/javascript" src="../bootstrap/js/jquery-3.2.1.min.js"></script> -->
        <!-- Latest compiled and minified javascript -->
        <!-- <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script> -->
        <!-- External CSS -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gestão de Consultas
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../Index2/index.php"><i class="fa fa-dashboard"></i> Casa</a></li>
        <li class="active"></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
  <div class="col-xs-12">
    <div class="box box-primary">
    

      <div class="box-header with-border ">
        <i class="fa fa-user"></i> <h3 class="box-title">Consultas Activas</h3>
        <br><br>

         <a href="./addappointment.php"><button type="submit"   name="submit" class="btn bg-blue"><i class="fa fa-plus-square"></i> Marcar Consulta</button></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--    <td>
<button type="button" class="btn btn-default">Copy</button>
</td> -->
<div>
<td>

 </td>
 <!-- </td>&nbsp;&nbsp;
<td>
<a href="./csvallappointment.php"><button type="button" class="btn btn-default">CSV</button></a>
</td>&nbsp;&nbsp;
<td>
<a href="./PDF/allapp_pdf.php"><button type="button" class="btn btn-default">PDF</button></a>
</td> -->

</td>
</div>
<div class="box-body">
<table id="example1" class="table table-bordered table-hover">
<thead>
 <tr>
                  <!-- <th>id</th> -->
                  <th>Paciente</th>
                  <th>Especialidade</th>
                  <th>Médico</th>
                  <th>Data</th>
                 <th>Hora</th>
                  <th>Opção</th>
                  
                </tr>
                </thead>
                <tbody>
                  <?php
     foreach ($row1 as $row)
      { 
        $sql1=" SELECT name FROM patientregister";// WHERE id='".$row['patient']."'";  ****************************** Comentei porque no site estava a dar erro ao apresentear o ecran o ecran vinha na parte de baixo
        $write1 =mysqli_query($connection,$sql1) or die(mysqli_error($connection));
       //print_r($sql); exit;
          $row2=mysqli_fetch_array($write1)or die (mysqli_error($connection));
      //print_r($row2); echo $row2['name']; exit;
         //echo "$description"; exit();
      
      
      ?> 
      <tr>
      <!-- <td><?php //echo $row['id'];?></td> -->
      <td><?php echo $row['namepatient'];?></td>
      <td><?php echo $row['especialidade'];?></td>
      <td><?php echo $row['doctor'];?></td>
      <td><?php echo $row['app_date'];   ?></td>
     <td><?php echo $row['hora'];?></td> 
     
   
<td> <a href="info.php?id=<?php echo $row['id'];?>"><span class="btn bg-blue"><i class="fa fa-eye"></i> Ver</span></a>
<!-- <a href="delete.php?id=<?php echo $row['id']; ?>"><span class="btn btn-danger"><i class="fa fa-trash-o"></i>Cancelar</span></a></td>  -->
</tr>
<?php }  ?>
  </tbody>
</table>
</div>
</section>
  </div>
 <?php include"../Include/footer.php";?> 
        </div>
      </div>       
      </div>
   