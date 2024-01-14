<?php
  session_start();    

  if (empty($_SESSION['email'])) {
      header("location: ./Validar_user_logado.php");
      exit();
  }
      ?>
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
        $s="SELECT * FROM addnewpres  WHERE  id_patient='".$_SESSION['id']."'";
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
Minhas Prescrições
<small></small>
</h1>
<ol class="breadcrumb">
<li><a href="./actividades.php"><i class="fa fa-dashboard"></i> Início</a></li>
<li class="active">Gestão de Prescrições
</li>
</ol>
</section>
<section class="content">
<!-- Small boxes (Stat box) -->
<div class="row">
<div class="col-md-12">
<div class="box box-primary">
<div class="box-header with-border">
<i class="fa fa-user"></i> <h3 class="box-title">Prescrições Activas</h3>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--    <td>
<button type="button" class="btn btn-default">Copy</button>
</td> -->
</br></br>
<div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <!-- <th>id</th> -->
                  <th>Paciente</th>
                  <th>Data</th>
                  <!--th>Início</th>
                  <th>Fim</th-->
                
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
      <td><?php echo $row['patient'];?></td>
      <td><?php echo $row['date'];   ?></td>
      <!--td><//?php echo $row2['name'];?></td>
      <td><//?php echo $row['endtime'];?></td--> 
   
   
<td> <a href="viewprescription.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-primary bg-blue"><i class="fa fa-eye"></i> Recibo</button></a>

    
</td>

</tr>
<?php } ?>

                </tbody>
              </table>
      </br>
      <a href="actividades.php"><button type="button" class="btn btn-primary bg-blue">Voltar</button></a><!--&nbsp;&nbsp;-->
    <!--&nbsp;&nbsp;-->
              <a href="./excelallappointment.php"><button type="button" class="btn btn-primary bg-blue">Exportar Excel</button></a>

              <button onclick=" window.print();" id="print-btn" class="btn bg-blue"><i class="fa  fa-print"></i>  Imprimir</button>
      
     


            </div>
      </div>
    </div>
  </div>
  </div>
</section>
  </div>        
 

<?php include('footer.php');?>
