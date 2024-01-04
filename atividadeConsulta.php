
<?php include('config/db.php'); ?>
<?php include('header.php');?>
<?php include('sidebar.php');?>

        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap 3.3.7 -->                                       
     <link rel="stylesheet" type="text/css"  href="print.css" media="print">
        </head>
        <!-- Page contentfaz a pagina se ajustar dentro do header e do sidbar-->
        <?php
        $s="SELECT * FROM addappointment  WHERE  patient='".$_SESSION['id']."'";
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
    <!-- Content Header (Page header) -->
        <br><br>
<div class="content-wrapper">
<section class="content-header">
<h1>
Minhas Consultas
<small></small>
</h1>
<ol class="breadcrumb">
<li><a href="./actividades.php"><i class="fa fa-dashboard"></i> Início</a></li>
<li class="active">Gestão de Consultas
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

</br></br>

        &nbsp;&nbsp;&nbsp;&nbsp;  <a href="./marcarconsulta.php"><button type="submit"   name="submit" class="btn btn-primary bg-blue"><i class="fa fa-plus-square"></i>&nbsp; Agendar Consulta</button></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--    <td>
<button type="button" class="btn btn-default">Copy</button>
</td> -->

<div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <!-- <th>id</th> -->
                  <th>Paciente</th>
                  <th>Nom da Consulta</th>
                  <th>Médico</th>
                  <th>Data</th>
                  <th>Hora</th>
                  <th>Estado</th>
                  <th>Opção</th>
                 
                </tr>
                </thead>
                <tbody>
                  <?php
     foreach ($row1 as $row)
      { 
        $sql1=" SELECT name FROM patientregister WHERE id='".$_SESSION['id']."'";
        $write1 =mysqli_query($connection," SELECT name FROM patientregister WHERE id='".$_SESSION['id']."'") or die(mysqli_error($connection));
       //print_r($sql); exit;
          $row2=mysqli_fetch_array($write1)or die (mysqli_error($connection));
      //print_r($row2); echo $row2['name']; exit;
         //echo "$description"; exit();
      
      ?> <tr>
      <!-- <td><?php // echo $row['id'];?></td> -->
      <td><?php echo $row['namepatient'];?></td>
        <td><?php echo $row['especialidade'];?></td>
        <td><?php echo $row['doctor'];?></td>
      <td><?php echo $row['app_date'];   ?></td>
      <td><?php echo $row['hora'];   ?></td>

      <?php
 if ($date_now= date("Y-m-d") > $row['app_date'] && $row['estado']=='1'  ){
    ?>  
     <td>
   <label type="" class=""><i class=""></i><font color="green"> Processado </font></label>    
   </td>
  <?php
  }


 else if ($date_now= date("Y-m-d") <= $row['app_date']  && $row['estado']=='3'  ){
    ?>  
     <td>
   <label type="" class=""><i class=""></i><font color="black"> Pendente </font></label>    
   </td>
  <?php
  }


  else if ($date_now= date("Y-m-d") == $row['app_date']  && $row['estado']=='1'  ){
    ?>  
     <td>
   <label type="" class=""><i class=""></i><font color="green"> Em curso </font></label>    
   </td>
  <?php
  }

  
 else if ($date_now= date("Y-m-d") > $row['app_date'] && $row['estado']=='3'  ){
  ?>  
   <td>
 <label type="" class=""><i class=""></i><font color="red"> Cancelado </font></label>    
 </td>
<?php
}



  else if ($date_now= date("Y-m-d") < $row['app_date'] && $row['estado']=='1'  ){
    ?>  
     <td>
   <label type="" class=""><i class=""></i><font color="green"> Confirmado </font></label>    
   </td>
  <?php
  }


  else if ( $row['estado']=='2'  ){
    ?>  
     <td>
   <label type="" class=""><i class=""></i><font color="red"> Cancelado </font></label>    
   </td>
  <?php
  }


  else{
    ?>
<td>
    <!--label type="" class=""><i class=""></i><font color="blue"> Em curso </font></label-->   
    </td>
<?php 
  }
  ?>
   
   <?php
   if ($date_now= date("Y-m-d") > $row['app_date'] && $row['estado']=='1'  ) {
   ?>
  


   <td> 
  <a href="recibo.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-primary bg-blue">Recibo <i class="fa fa-eye"></i></button></a>
  </td>

  <?php
  
}



else  {
  ?>
  <td> 
 <a href="
   updatestatos.php?id=<?php echo $row["id"]; ?>"> 
  <button type="button" class="btn btn-primary bg-red"><i class=""></i>Cancelar</button>
   </a>
   </td>
  <?php
}

?>
 


</tr>
<?php } ?>

</tbody>
</table>
      </br>
              <a href="actividades.php"><button type="button" class="btn btn-primary bg-blue">Voltar</button></a><!--&nbsp;&nbsp;-->
              <a href="./excelallappointment.php"><button type="button" class="btn btn-primary bg-blue">Exportar Excel</button></a>
              <!-- <button onclick=" window.print();" id="print-btn" class="btn bg-blue"><i class="fa  fa-print"></i>  Imprimir</button> -->
      
     


            </div>
      </div>
    </div>
  </div>
  </div>
</section>
  </div>        
 

<?php include('footer.php');?>
