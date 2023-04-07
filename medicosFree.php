
<!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
       
        </head>

<?php  include("./config/db.php") ;?>
  
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

   <!-- Bootstrap 3.3.7 -->                                       
   

       
 <!-- The sidebar -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <body>
        
<?php
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
    <div class="content-wrapper">
<section class="content-header">

<h1>
<font color="black">Médicos disponíveis no Sistema </font>  
<small></small>
</h1>
<ol class="breadcrumb">
<li><a href="./index.php"><i class="fa fa-dashboard"></i> Casa</a></li>
<li class="active">Médicos</li>
</ol>
</section>
<section class="content">
<!-- Small boxes (Stat box) -->
<div class="row">
<div class="col-xs-12">
<div class="box box-primary">
<div class="box-header with-border">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--    <td>
<button type="button" class="btn btn-default">Copy</button>
</td> -->
<td>

<!--div class="col text-end">
<td>
 <a href="./ExcelPrescription.php"><button type="button" class="btn btn-default">Excel</button></a>
</td>&nbsp;&nbsp;

<td>
<button type="button" onclick="window.print();" class="btn btn-default">Pdf</button>
</td></div-->
<div class="box-body">
<table id="example1" class="table table-bordered table-hover">
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
<td>
 <a href="medicoifo.php?id_medico=<?php echo $row['id_medico']; ?>"><span class="btn btn-primary bg-blue"><i class="fa fa-info"></i><?= '&nbsp;&nbsp'?>Info</span><!--&nbsp;&nbsp;-->
</td>
</tr>

<?php }  ?>
  </tbody>
 
</table>
<a href="index.php"><span class="btn btn-primary bg-blue"><i class="fa fa-back"></i>Voltar</span><!--&nbsp;&nbsp;-->

              </section>
              </body>
            </div>
            <?php include('footer.php'); ?>
            </div>        


           
      </div>
    </div>
  </div>
  </div>
</section>


        </html>
  

