<?php include"../Include/headerMedico.php";?>
<?php include"../Include/sidebarMedico.php";?>
<?php
include("../inc/connect.php") ;
//echo "string"; exit();
//session_start();
if(isset($_POST['submit']))

{//print_r($_POST['description']); exit();
 //print_r($_POST); exit();
//echo "string"; exit();
    $date=$_POST['date'];
    $patient=$_POST['patient'];
    $description=$_POST['description'];
   $write =mysqli_query($connection,"INSERT INTO addmedicalhistory(`date`,`patient`,`description`) VALUES ('$date','$patient','$description')") or die(mysqli_error($connection));
      //$query=mysql_query("SELECT * FROM user ")or die (mysql_error());
      //$numrows=mysql_num_rows($query)or die (mysql_error());
    echo " <script>setTimeout(\"location.href='../Patient/casehistory.php';\",150);</script>";
    }
      

?>
<?php
//include("../inc/connect.php") ;
$query=mysqli_query($connection,"SELECT * FROM addmedicalhistory")or die (mysqli_error($connection));
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
 <!-- <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css"> -->
        <!-- jquery library -->
        <!-- <script type="text/javascript" src="../bootstrap/js/jquery-3.2.1.min.js"></script> -->
        <!-- Latest compiled and minified javascript -->
        <!-- <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script> -->
        <!-- External CSS -->
        
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Historico do Paciente
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../Index"><i class="fa fa-dashboard"></i> casa</a></li>
        <li class="active"> Historico</li>
      </ol>
    </section>
      <!-- Main content -->
<section class="content">
  <div class="row">
      <div class="col-xs-12">
    <div class="box box-primary">
      <div class="box-header with-border">
        <i class="fa fa-book"></i> <h3 class="box-title"> Historico</h3>
      </div>
        <!-- Modal -->

<div class="box-header">
  <a href="addcasehistory.php" class="btn bg-blue" style="height: 50px;"><i class="fa fa-plus-circle"></i> Adicionar Novo</a><!-- </a> --><br><br>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

   <!--    <td>
    <button type="button" class="btn btn-default">Copy</button>
    </td> -->
  
</td>&nbsp;&nbsp;
  <td>
    <!-- <button type="button" onclick="window.print();" class="btn btn-default">Imprimir</button> -->
  </td>
<div class="box-body">
<table id="example1" class="table table-bordered table-striped">
 <thead>
<tr>
<th>Data</th>
<th>Paciente</th>
<th>Descrição</th>
<th>Opções</th>
</tr>
</thead>
<tbody>
  
<?php
foreach ($row1 as $row)
{
 

  $sql1=" SELECT name FROM patientregister";// WHERE id='".$row['name']."'"; //comentei porque estava a dar erro ao apresentar o ecran no site o ecran aparece tudo escuro
  $write1 =mysqli_query($connection,$sql1) or die(mysqli_error($connection));
 //print_r($sql); exit;
    $row1=mysqli_fetch_array($write1)or die (mysqli_error($connection));
//print_r($row1); exit;
   //echo "$description"; exit();
?> <tr>
  
<td><?php echo $row['date'];?></td>
<td><?php echo $row['patient'];?></td>
<td><?php echo $row['description'];?></td> 
<td><a href="editmedicalhistory.php?id=<?php echo $row['id']; ?>"> <button type="button" class="btn bg-blue"><i class="fa fa-edit"></i> Editar</button></a>
<a href="d1.php?id=<?php echo $row['id'];?>"><button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i> Apagar</button>
</a></td>
</tr>
<?php } ?>
                </tfoot>
              </tbody>
              </div>
              </table>
           
              </div>
          </div>
        </div>
   </section>
  </div>
<?php include "../Include/footer.php";?>
  