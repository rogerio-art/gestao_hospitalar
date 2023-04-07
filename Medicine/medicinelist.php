<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>
<?php
include("../inc/connect.php") ;

$query=mysqli_query ($connection,"SELECT `id`,`name`,`category`,`expiredate` FROM addnewmedicine")or die (mysqli_error($connection));
$numrows=mysqli_num_rows($query)or die (mysqli_error($connection));





//echo $numrows; exit;
$row1=mysql_fetch_all($query);  
function mysql_fetch_all($query) 
{
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
       
        
<div class="content-wrapper">
<section class="content-header">
<h1>
Medicamento
<small></small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa fa-dashboard"></i> Casa</a></li>
<li class="active">Medicamento</li>
</ol>
</section>
<section class="content">
<!-- Small boxes (Stat box) -->
<div class="row">
<div class="col-xs-12">
<div class="box box-primary">
<div class="box-header with-border">
<i class="fa fa-user"></i> <h3 class="box-title"> Medicamentos</h3>
</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="./addmedicine.php"><button type="submit" name="submit" class="btn btn-success bg-blue"><i class="fa fa-plus-square"></i> Adicionar Novo</button></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div class="modal fade" id="myModal" role="dialog">
        
        <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title"> Registrar Paciente</h4>
           </div>
           <div class="modal-body">
             <form method="POST" enctype="multipart/form-data">
              <!--    <div class="form-group">
                  <label for="exampleInputEmail1">Doctor</label>
                  <input type="name" class="form-control" name="doctor" placeholder="">
                 </div> -->
                 <div class="form-group">
               
         </div>
       </form>
       </div>
     </div>
       </div>
       </div>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   
 <!--    <td>
 <button type="button" class="btn btn-default">Copy</button>
 </td> -->
 <td>
 
 <a href="./excelMedicineList.php"> <button type="button" class="btn btn-default">Excel</button><!--span class="popuptext" id="myPopup">Get full version at mayuri.infospace@gmail.com</span--></a>
 </td>&nbsp;&nbsp;&nbsp;
 <td>
 <!--a href="./excelpatientlistindex.php"><button type="button" class="btn btn-default">CSV</button--><!--span class="popuptext" id="myPopup">Get full version at mayuri.infospace@gmail.com</span--></a>
 </td>&nbsp;&nbsp;&nbsp;
 <td>
 <a href="./PDF/lidtapdf.php"><button type="submit" class="btn btn-default">PDF</button><!--span class="popuptext" id="myPopup">Get full version at mayuri.infospace@gmail.com</span--></a>
 </td>&nbsp;&nbsp;
 <td>
 <button type="button" onclick="window.print();" class="btn btn-default">Imprimir</button>
 </td>
 <div class="box-body">
 <table id="example1" class="table table-bordered table-hover">
 <thead>
  <tr>

   <th>Nome</th>
   <th>Categoria</th>
   <th>Data de Exp</th>
   <th>Opções</th>
                   
 </tr>
 </thead>
 <tbody>
 <?php 
      foreach ($row1 as $row)
       {
 
 ?> <tr>
  

 <td><?php echo $row['name'];?></td>
 <td><?php echo $row['category'];?></td>
 <td><?php echo $row['expiredate'];?></td>
 <td>
   
 <a href="editmedicine.php?id=<?php echo $row['id']; ?>"><span class="btn btn-success bg-green"><i class="fa fa-edit"></i>Editar </span></a>
 
  <a href="deleteml.php?id=<?php echo $row['id']; ?>"><span class="btn btn-danger"><i class="fa fa-trash-o"></i>Apagar </span></a></td>
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