
<?php
include("../inc/connect.php") ;
?>
<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>

<link rel="stylesheet" type="text/css"  href="print.css" media="print">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="../bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
       
        


   <!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
        
              <!-- Bootstrap 3.3.7 -->                                       
  
 
       

        </head>
    <!-- The sidebar -->
 
                        <?php $query1=mysqli_query($connection,"SELECT * FROM addnewpres WHERE id='".$_GET['id']."'")or die (mysqli_error($connection));
$numrows1=mysqli_num_rows($query1)or die (mysqli_error($connection));
$p_row=mysql_fetch_all($query1);

// $query2=mysqli_query($connection,"SELECT * FROM patientregister WHERE id='".$_SESSION['id']."'")or die (mysqli_error($connection));
// $numrows2=mysqli_num_rows($query2)or die (mysqli_error($connection));
// $p_row1=mysql_fetch_all($query2);


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
?>

        
<body>
  
  <div class="content-wrapper">
         <section class="content-header">
       <h1>
       <font color="black">Prescrição</font>
         <small></small>
        </h1>
      <ol class="breadcrumb">
        <li><a href="./index.php"><i class="fa fa-dashboard"></i>Casa</a></li>
   
      </ol>
    </section>
    <section class="content">
      <div class="box box-primary">
        <div class="box-header with-border">
        <div class="container">
     <div class="row">
         <div class="col">
         <table class="table">
                     <thead>
                         <img src="../Upload/Adminprofile/Logotipo Clinica Saude.png"  width="10%" height="10%" class="img-circle" alt="Clinica saude logo">
                         <th>
                        
                         <h3><p>Lameira-Soft</p></h3>
                           <b><p>Localização |</b>Luanda - Viana - Viana Angola</p>
                            <b><p>Telefone |</b> 944 259 591 | 957 264 334</p>
                            <b><p>Email |</b> atendimento@lameirasoft.ao</p>
                            <b><p>Site |</b> www.lameirasoft.ao</p>
                         
                          <p><strong>Nº da Prescrição <?= time(); ?></strong></p></h5> 
                        </th>
                        <th ><h3> <p><strong>Prescrição Médica</strong></p></h3> </th>
                        
                     
                      <th ><h4> <p>Utente: <strong><?=  $p_row[0]['patient']; ?></strong></p></h4> </th>
                   </thead>
              </table>
           </div>
     </div>
 </div>
 <div class="content">
     <div class="row">
         <div class="col">
  

                <table   class="table table-bordered table-hover " >
                     <thead  >
                         <tr>
                             <th>Data de Emissão</th>
                             <th class="text-center">Idade</th>
                             <th class="text-center">Peso</th>
                             <th class="text-end">Gênero</th>
                         </tr>
                     </thead>
                     <tbody>

                     <?php
     foreach ($p_row as $row)
      { 
        $sql1=" SELECT name,yearsOld,gender FROM patientregister WHERE id='".$row['id_patient']."'";
        $write1 =mysqli_query($connection,$sql1) or die(mysqli_error($connection));
       //print_r($sql); exit;
          $row2=mysqli_fetch_array($write1)or die (mysqli_error($connection));
      //print_r($row2); echo $row2['name']; exit;
         //echo "$description"; exit();
    ?> 
      <tr>
        <td><?php echo $row['date'];?></td>
        <td class="text-center align-middle"><?php echo $row2['yearsOld'] ; ?> anos</td>
        <td class="text-center align-middle"><?php echo $row['peso'];   ?> kg</td>
        <td class="text-end align-middle"><?php echo $row2['gender'];   ?></td>
     </tr>
    <?php } ?>

                </tbody>
              </table>
              <!-- <table   class="table table-bordered table-hover " >
                     <thead  >
                         <tr>
                             <th>Histórico Médico</th> -->
                           
                         <!-- </tr> -->
                     <!-- </thead>
                     <tbody> -->

                                <!-- <tr>
                                <td class="text-center align-middle"><?php //echo $row['history'];   ?> </td>
                                      </tr> -->

                     <!-- </tbody>
                </table>  -->
             
              <table   class="table table-bordered table-hover " >
                     <thead  >
                         <tr>
                             <th>Medicação</th>
                           
                         </tr>
                     </thead>
                     <tbody>

                                <tr>
                                <td><?php echo $row['medication'];   ?> </td>
                                      </tr>

                     </tbody>
                </table>
                </table>
              <table   class="table table-bordered table-hover " >
                     <thead  >
                         <tr>
                             <th>Nota importante</th>
                           
                         </tr>
                     </thead>
                     <tbody>

                                <tr>
                                <td ><?php echo $row['note'];   ?> </td>
                                      </tr>

                     </tbody>
                </table>
  
                <?php
$sql="SELECT * FROM login";
    $write =mysqli_query($connection, $sql) or die(mysqli_error($connection));
     $row2=mysqli_fetch_array($write)or die (mysqli_error($connection));
     //print_r($row2); exit();
?>
            
                <!-- <h5 class="bg-dark text-white p-2">Dados do Paciente</h5> -->
               

                <div class="row">
                <div class="col-md-12">
                        <p><center> O (a) Médico(a) </center></p>
                        <p><center> ________________________________________________ </center></p>
                        <p><center> <?php echo $row2['fname'];?>&nbsp;
           <?php echo $row2['lname'];?>
              </p>
                    </div>
                    </div>
      </br>
                    <div class="row">
                <div class="col-md-12">
                    <p> Processado por computador </p>
                        <p>Desenvolvidopor Consenci-Consultoria de Informática </p>
                        <p> www.consenci.com</p>
                    <!-- <div class="col-md-6">
                        <p>Email: <strong><?//=$_SESSION['email']; ?></strong></p>
                        <p>Telefone: <strong><?//=$_SESSION['phone']; ?></strong></p>
                    </div> -->
                    </div>
                    </div>
                    
                </div>
            </div>
     </div>
    
</div>
</div>

<div class="row">
<div class="col-md-6">
<a href="./prescription.php"><span  class="btn bg-blue" class="hidden-xs" ><i class="fa fa-back"></i>Voltar</span></a><!--&nbsp;&nbsp;-->
         <button onclick=" window.print();" id="print-btn" class="btn bg-blue"><i class="fa  fa-print"></i>  Imprimir</button>
         </div>
         </div>

</div>
</div>
</div>
</section>
</div>
</div>
</body>
<?php include('../Include/footer.php');?>
</html>