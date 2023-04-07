<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php  include('config/db.php') ;?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap 3.3.7 -->                                       

 
    <link rel="stylesheet" href="CSS/all.min.css">
    <script src="JS/bootstrap.bundle.min.js"></script>
    
    <script src="JS/app.js"></script>
       
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>InfoConsult</title>
</head>
<body>

      
        

        <!-- Page contentfaz a pagina se ajustar dentro do header e do sidbar-->
        <div class="content-wrapper">
        <section class="content-header">
      <h1>
      <font color="black">Comprovativo da Consulta </font>  
        <small></small>
       </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i>Casa</a></li>
       <li class="active">Comprovativo da Consulta</li>
     </ol>
   </section>
   <section class="content">
     <div class="box box-primary">
       <div class="box-header with-border">
         <i class=""></i>
        
         

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
       </body>
</html>

<?php



// $query=mysql_query("SELECT * FROM addappointment  WHERE patient='".$_GET['id']."'")or die (mysql_error($db_connect));
// $numrows=mysql_num_rows($query)or die (mysql_error($db_connect));
// $row1=mysql_fetch_all($query);

$query1=mysqli_query($connection,"SELECT * FROM addappointment WHERE id='".$_GET['id']."'")or die (mysqli_error($connection));
$numrows1=mysqli_num_rows($query1)or die (mysqli_error($connection));
$p_row=mysql_fetch_all($query1);

$query2=mysqli_query($connection,"SELECT * FROM patientregister WHERE id='".$_SESSION['id']."'")or die (mysqli_error($connection));
$numrows2=mysqli_num_rows($query2)or die (mysqli_error($connection));
$p_row1=mysql_fetch_all($query2);


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
  <td>Nome: <?php echo $p_row1[0]['name'];  ?><br>
    Telefone: <?php echo $p_row1[0]['phone']; ?>
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
</section>     
</div>
          

              </div>
    </div>
  </div>
   
    </section>
    
  </div>

  <?php include('footer.php'); ?>
    
