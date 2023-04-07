<?php include"../Include/headerMedico.php";?>
<?php include"../Include/sidebarMedico.php";?>
<?php
include("../inc/connect.php") ;
?>


<link rel="stylesheet" type="text/css"  href="print.css" media="print">



   <!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
        
              <!-- Bootstrap 3.3.7 -->                                       
  
 
       

        </head>
    <!-- The sidebar -->
 
                        <?php $query1=mysqli_query($connection,"SELECT * FROM addappointment WHERE id='".$_GET['id']."'")or die (mysqli_error($connection));
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
       <font color="black">Recibo da consulta</font>
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
                        
                         <h3><p>Clínica-Saude</p></h3>
                           <b><p>Localização |</b>Zaire-Soyo Bairro Pangala Rua principal</p>
                            <b><p>Telefone |</b> 937 277 985 | 998 521 361 | 937 279 624</p>
                            <b><p>Email |</b> atendimento@clinica-saude.co.ao</p>
                            <b><p>Site |</b> www.clinica-saude.co.ao</p>
                          <p><strong>Nº da Exame <?= time(); ?></strong></p></h5> 
                        </th>
                        <th ><h3> <p><strong>Recibo de Consulta</strong></p></h3> </th>
                        
                     
                      <th ><h4> <p>Utente: <strong><?=  $p_row[0]['namepatient']; ?></strong></p></h4> </th>
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
                             <th>Data da Consulta</th>
                             <th class="text-center">Nome da Consulta</th>
                             <th class="text-end">Morada do Paciente</th>
                             <th class="text-center">Telefone</th>
                         </tr>
                     </thead>
                     <tbody>

                     <?php
     foreach ($p_row as $row)
      { 
        $sql1=" SELECT name,address,phone FROM patientregister WHERE id='".$row['patient']."'";
        $write1 =mysqli_query($connection,$sql1) or die(mysqli_error($connection));
       //print_r($sql); exit;
          $row2=mysqli_fetch_array($write1)or die (mysqli_error($connection));
      //print_r($row2); echo $row2['name']; exit;
         //echo "$description"; exit();
    ?> 
      <tr>
        <td><?php echo $row['app_date'];?></td>
        <td class="text-center align-middle"><?php echo $row['especialidade'];   ?> </td>
        <td class="text-end align-middle"><?php echo $row2['address'];   ?></td>
        <td class="text-center align-middle"><?php echo $row2['phone'] ; ?> </td>
       
     </tr>
    <?php } ?>

                </tbody>
              </table>
              <table   class="table table-bordered table-hover " >
                     <thead  >
                         <tr>
                             <th>Quantidade</th> 
                           
                          </tr> 
                </thead>
                     <tbody> 

                             <tr>
                                <td >1</td>
                                      </tr> 

                   </tbody>
                </table>
             
              <table   class="table table-bordered table-hover " >
                     <thead  >
                         <tr>
                             <th>Preço da Consulta</th>
                           
                         </tr>
                     </thead>
                     <tbody>

                                <tr>
                                <td >Valor Líquido: <?php echo $row['preco'];   ?> Kz</td>
                                      </tr>

                     </tbody>
                </table>
                </table>
              <table   class="table table-bordered table-hover " >
                     <thead  >
                         <tr>
                             <th>Iva</th>
                           
                         </tr>
                     </thead>
                     <tbody>

                                <tr>
                                <td >Imposto: 00,00</td>
                                      </tr>

                     </tbody>
                </table>
   
                <!-- <h5 class="bg-dark text-white p-2">Dados do Paciente</h5> -->
               

                <div class="row">
                <div class="col-md-12">
                        
              
                   
                      
                        <p><center> Nome do (a) Médico(a) </center></p>
                        <center>      ________________________________________________________</center>
                     
                        <p><center><?php echo $row['doctor'];   ?></center> </p>
                    </div>
                    </div>
      </br>
      </br>
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
                

                <!-- DADOS DE PAGAMENTO -->
                
                
                </div>

                
                </div>

    </div>
    
</div>
         
   
</div>
</section>
<div class="row">
                <div class="col-md-6">
                         <!--button   href="./prescription.php"><span  class="btn bg-blue" class="hidden-xs" ><i class="fa fa-back"></i>Voltar</span></button--><!--&nbsp;&nbsp;-->
       &nbsp; &nbsp;  <button onclick=" window.print();" id="print-btn" class="btn bg-blue"><i class="fa  fa-print"></i>  </button>
        </div>
       

        </div>
     
</div>
</body>
        <?php include('../Include/footer.php');?>
</div>


</html>


