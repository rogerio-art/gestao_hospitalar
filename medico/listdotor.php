
<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>
<?php
include("../inc/connect.php");


$query=mysqli_query ($connection,"SELECT `id_medico`,`nomemedico`,`especialidade` FROM medicos") or die (mysqli_error($connection));
$numrows=mysqli_num_rows($query)or die (mysqli_error($connection));

//echo $numrows; exit;
$row1=mysql_fetch_all($query);  
function mysql_fetch_all($query) 
{
    $all = array();
    while ($all[] = mysqli_fetch_assoc($query)) {$temp=$all;}
    return $temp;
}
//$row1[]=mysql_fetch_assoc($query)or die (mysql_error());
//include("../inc/connect.php") ;
//session_start();
//$Password_hash = password_hash($password, PASSWORD_BCRYPT);
 ?>
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="../bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
       
        
<div class="content-wrapper">
    <section class="content-header">
      <h1>
         Medicos Activos no Sistema
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../Index"><i class="fa fa-dashboard"></i> Início</a></li>
        <li class="active">Lista de Médicos</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
  <div class="col-xs-12">
    <div class="box box-primary">
    

      <div class="box-header with-border ">
        <i class="fa fa-user"></i> <h3 class="box-title">Medicos Activos</h3>
      </div>
         <div class="box-header">
         <a href="createdotor.php"><button  data-toggle="modal" data-target="#myModal" class= "btn bg-blue" type="button" ><i class="fa fa-plus-square"></i> Registrar<!--span class="popuptext" id="myPopup">para obter a versão completa contacte o admin.rogeriolameira2017@gmail.com</span--></button></a>
    </div>
  
      <div class="modal fade" id="myModal" role="dialog">
        
       <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
           </div>
          <div class="modal-body">
            </div>
    </div>
      </div>
      </div>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
<!--    <td>
<button type="button" class="btn btn-default">Copy</button>
</td> -->
<td>

<div class="col text-end">
<td>

</td>
</div>
<div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-hover">
  <thead>
 <tr>

  <th>Nome do Médico</th>
  <th>Especialidade</th>
  <th>Opções</th>
                  
</tr>
</thead>
<tbody>
<?php 
     foreach ($row1 as $row)
      {

?> <tr>
 

<td><?php echo $row['nomemedico'];?></td>
<td><?php echo $row['especialidade'];?></td>
<td><!-- <a href="editpatient1.php?id=<?php// echo $row['id_medico']; ?>"><span class="btn btn-success bg-green"><i class="fa fa-edit"></i>Editar </span></a> -->

 <a href="medicoinfo.php?id_medico=<?php echo $row['id_medico']; ?>"><span class="btn bg-blue"><i class="fa fa-info"></i> Info</span><!--&nbsp;&nbsp;-->

  <!--a href="payments.php"><span class="btn btn-primary"><i class="fa fa-money"></i>Pagam<span class="popuptext" id="myPopup">Get full version at rogeriolameira@gmail.com</span--></span></a><!--&nbsp;&nbsp-->

  <!-- <a href="delete.php?id=<?php //echo $row['id_medico']; ?>"><span class="btn btn-danger"><i class="fa fa-trash-o"></i>Apagar </span></a></td> -->
</tr>
<?php }  ?>
  </tbody>
</table>
</div>
        
        </div>
      </div>       
      </div>
    </section>
  </div>
 <?php include"../Include/footer.php";?>