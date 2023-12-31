<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>
<?php
include("../inc/connect.php") ;
$query=mysqli_query($connection, "SELECT * FROM contacto")or die (mysqli_error($connection));
$numrows=mysqlI_num_rows($query)or die (mysqli_error($connection));
$row1=mysql_fetch_all($query);
//echo $row1; 
$p_query=mysqli_query($connection, "SELECT * FROM patientregister")or die (mysqli_error($connection));
$p_numrows=mysqlI_num_rows($p_query)or die (mysqli_error($connection));
$p_row1=mysql_fetch_all($p_query);

function mysql_fetch_all($query)

{
$all = array();
while ($all[] = mysqli_fetch_assoc($query)) {$temp=$all;}
return $temp;
}
//print_r($row1); 
//print_r($p_row1);exit;
//$row1[]=mysql_fetch_assoc($query)or die (mysqli_error());
?>



<div class="content-wrapper">
  <section class="content-header">
  <h1>
 Ver Contactos
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="../Index"><i class="fa fa-dashboard"></i> Casa</a></li>
  
  </ol>
</section>
<section class="content">
<div class="row">
<div class="col-xs-12">
<div class="box box-primary">
<div class="box-header with-border">
<i class="fa fa-user"></i> <h3 class="box-title"> Página de contacto</h3>
</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div>
<button type="button" onclick="window.print();" class="btn btn-primary"><i class="fa fa-print"></i> Imprimir</button>
</div>
<div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Assunto</th>
            <th>Documento</th>
            <th>Opções</th>
            </tr>
            </thead>
            <tbody>
               <?php
   foreach ($row1 as $row)
    {
$s1=mysqli_query($connection," SELECT name FROM patientregister WHERE id='".$row['name']."'");
$w1 =mysqli_query($connection," SELECT name FROM patientregister WHERE id='".$row['name']."'") ;//or die(mysqli_error($connection));
//print_r($w1); exit;
$row2=mysqli_fetch_array($w1);//or die (mysqli_error($connection));
 //print_r($row2); exit();
?> <tr>  
<td><?php echo $row['name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['assunto'];?></td> 

<td><img src="../Upload/File/<?php echo $row['file'];?>" style="height:100px;width:100px;" alt="<?php echo pathinfo($row['file'], PATHINFO_FILENAME) ?>"/></td>

<td><a href="ver_contacto.php?id=<?php echo $row['id'];?>"><span class="btn bg-blue "><i class="fa fa-eye"></i> Ver</span></a>&nbsp;&nbsp;
<a href="./donwload.php?file=<?php echo $row['file'];?>"><button type="submit" class="btn btn-primary"><i class="fa fa-download"></i> Download</button></a>&nbsp;
<a href="deleted.php?id=<?php echo $row['id']; ?>"><span class="btn btn-danger"><i class="fa fa-trash-o"></i> Apagar</span></a></td>

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
