<?php
include("../inc/connect.php");
?>

<?php include"../Include/headerMedico.php";?>
<?php include"../Include/sidebarMedico.php";?>






<?php
$query=mysqli_query ($connection,"SELECT `id`,`name`,`phone`,`email`,`address` FROM patientregister")or die (mysqli_error($connection));
$numrows=mysqli_num_rows($query)or die (mysqli_error($connection));

//echo $numrows; exit;
$row1=mysql_fetch_all($query);  
function mysql_fetch_all($query) 
{
    $all = array();
    while ($all[] = mysqli_fetch_assoc($query)) {$temp=$all;}
    return $temp;
}

?>


<div class="content-wrapper">
    <section class="content-header">
      <h1>
         Gestão de Paciente
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../Index"><i class="fa fa-dashboard"></i> Casa</a></li>
        <li class="active"></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
  <div class="col-xs-12">
    <div class="box box-primary">
    

      <div class="box-header with-border ">
        <i class="fa fa-user"></i> <h3 class="box-title">Gestão de Paciente</h3>
      </div>
         <div class="box-header">
         <!--button  data-toggle="modal" data-target="#myModal" type="button" ><i class="fa fa-plus-square " class="btn btn-primary"></i>Novo<span class="popuptext" id="myPopup">para obter a versão completa contacte o admin.rogeriolameira2017@gmail.com</span--></button>
         <a href="patientregister.php" class="btn bg-blue"><i class="fa fa-calendar-plus-o"></i> Novo</a>
                  
        </div>
  
     
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
<!--    <td>
<button type="button" class="btn btn-default">Copy</button>
</td> -->
<div>
<!-- <td>
&nbsp;&nbsp;&nbsp;<a href="./excelpatientlist.php"> <button type="button" class="btn btn-default">Excel</button><!--span class="popuptext" id="myPopup">Get full version at mayuri.infospace@gmail.com</span--></a>
</td>
<td>
<!--a href="./excelpatientlistindex.php"><button type="button" class="btn btn-default">CSV</button--><!--span class="popuptext" id="myPopup">Get full version at mayuri.infospace@gmail.com</span--></a>
</td>&nbsp;
<td>
<!-- <button type="button" onclick="window.print();" class="btn btn-default">Imprimir</button> -->
</td>
</div>
<div class="box-body">
<table id="example1" class="table table-bordered table-hover">
<thead>
 <tr>
<!-- <th>Id</th> -->
  <th>Nome</th>
  <th>Email</th>
  <th>Morada</th>
  <th>Telefone</th>
  <th>Opções</th>
                  
</tr>
</thead>
<tbody>
<?php 
     foreach ($row1 as $row5)
      {

?> <tr>
 
<!-- <td><?php // echo $row['id'];?></td> -->
<td><?php echo $row5['name'];?></td>
<td><?php echo $row5['email'];?></td>
<td><?php echo $row5['address'];?></td>
<td><?php echo $row5['phone'];?></td>
<td><a href="editpatient1.php?id=<?php echo $row5['id']; ?>"><span class="btn btn-success bg-blue"><i class="fa fa-edit"></i>Editar </span></a>

 <a href="info.php?id=<?php echo $row5['id']; ?>"><span class="btn btn-primary bg-blue"><i class="fa fa-info"></i>Info</span><!--&nbsp;&nbsp;-->

  <a href="casehistory.php"> <span class="btn  bg-blue "><i class="fa fa-history"></i>Historico</span><!--&nbsp;&nbsp;-->

  <?php
  $sql="SELECT count(*) FROM  addpayment WHERE patient='".$row5['id']."'";
                  
  $write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
   $row=mysqli_fetch_array($write)or die (mysqli_error($connection));
 //print_r($row); exit;
              ?>
            
            

            <?php  if($row[0]<1){
                           ?>
                         <a href="addnewpayment.php?id=<?php echo $row5['id'];?>"><span class="small-box-footer"><span class="btn bg-blue"><i class="fa fa-money"></i><?php echo' '. $row[0];?> Pagam</a>
                        
                        <?php
                           }else{
                            ?>
                            <a href="paymenthistory.php?id=<?php echo $row5['id'];?>"><span class="btn bg-blue"><i class="fa fa-money"></i><?php echo' '. $row[0];?> Pagam</a>
                             <?php
                           }
                           ?>
  <!-- <a href="delete.php?id=<?php echo $row['id']; ?>"><span class="btn btn-danger"><i class="fa fa-trash-o"></i>Apagar </span></a></td> -->
</tr>
<?php }  ?>
  </tbody>
</table>
  
      
    </section>

    </div>
    <?php include"../Include/footer.php";?>
   
    </div>
    </div>
        
        </div>
      </div>     