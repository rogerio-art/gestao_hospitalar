

<!doctype html>
<title>Pagamento</title>
        <html lang="en">
        <head>

        <?php include("../Include/header.php");?>
        <?php include("../Include/sidebar.php");?>
        <?php include("../inc/connect.php") ;?>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css"  href="print.css" media="print">

              <!-- Bootstrap 3.3.7 -->                                       
    </head>
<?php   
$p_query=mysqli_query($connection,"SELECT * FROM addappointment ")or die (mysqli_error($connection));
$p_numrows=mysqli_num_rows($p_query)or die (mysqli_error($connection));
$p_row1=mysqli_fetch_array($p_query);
//print_r($p_row1); exit;
//$row1[]=mysql_fetch_assoc($query)or die (mysql_error());
?>


        
<body>

  <div class="content-wrapper">
         <section class="content-header">
       
      <ol class="breadcrumb">
   
      </ol>
    </section>
    <section class="invoice">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class=""></i><b>&nbsp;&nbsp;&nbsp;Lameira-Soft</b>
            <small class="pull-right">Date: <?php echo $d1=date('Y-m-d'); ?></small>
          </h2>
        </div>
       </div>
	<div class="row invoice-info">
 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 		<img src="../Upload/Adminprofile/Logotipo%20Clinica%20Saude.png" width="80" height="80" alt="Stethoscope free icon" title="Stethoscope free icon">
    
		 <div class="col-sm-4 invoice-col" style="float: right;">
          <b>Código da Fatura: <?php echo "1234567";?></b><br>
       
         
        </div>
    </div><br>
	<section class="invoice">
     	<div class="row">
     	 <div class="row invoice-info">
     	 <div class="col-sm-4 invoice-col" style="float: left;">
     	 
          <address>
            <strong></strong>
            <b><p>Localização |</b> Luanda - Viana Angola</p>
                            <b><p>Telefone |</b> 944 259 591 | 957 264 334</p>
                            <b><p>Email |</b> atendimento@lameirasoft.ao</p>
                            <b><p>Site |</b> www.lameirasoft.ao</p>
          </address>
        </div>
        <div class="col-sm-4 invoice-col" style="float: right;">
         <b><h4><?php  if(isset($_GET['datainicio'])){echo 'Data:'.' '. $_GET['datainicio'].'  '.'|'.' '.  $_GET['datafim'];}?></h4>
        
          <address>
            <strong></strong>
            <?php
		// $id=$_GET['id'];
    $sql="SELECT count(*) FROM patientregister";
    $write =mysqli_query($connection, $sql) or die(mysqli_error($connection));
     $row=mysqli_fetch_array($write)or die (mysqli_error($connection)); 
//print_r($row); exit;
   ?>
<?php
$sql1="SELECT count(*) FROM  addappointment";
    $write1 =mysqli_query($connection,$sql1) or die(mysqli_error($connection));
     $row1=mysqli_fetch_array($write1)or die (mysqli_error($connection));
   //print_r($row); exit;
                ?>

                
<?php
$sql2="SELECT count(*) FROM  medicos";
    $write2 =mysqli_query($connection,$sql2) or die(mysqli_error($connection));
     $row2=mysqli_fetch_array($write2)or die (mysqli_error($connection));
   //print_r($row); exit;
                ?>

<?php
$sql3="SELECT count(*) FROM  addpayment";
    $write3 =mysqli_query($connection,$sql3) or die(mysqli_error($connection));
     $row3=mysqli_fetch_array($write3)or die (mysqli_error($connection));
   //print_r($row); exit;
                ?>

<?php
$sql4="SELECT count(*) FROM  exame";
    $write4 =mysqli_query($connection,$sql4) or die(mysqli_error($connection));
     $row4=mysqli_fetch_array($write4)or die (mysqli_error($connection));
   //print_r($row); exit;
                ?>
            

            <?php
$sql5="SELECT count(*) FROM  addnewpres";
    $write5 =mysqli_query($connection,$sql5) or die(mysqli_error($connection));
     $row5=mysqli_fetch_array($write5)or die (mysqli_error($connection));
   //print_r($row); exit;
                ?>

<?php
$sql6="SELECT count(*) FROM  internamento";
    $write6 =mysqli_query($connection,$sql6) or die(mysqli_error($connection));
     $row6=mysqli_fetch_array($write6)or die (mysqli_error($connection));
   //print_r($row); exit;
                ?>
            
            
<?php
$sql7="SELECT count(*) FROM  beneficiario";
    $write7 =mysqli_query($connection,$sql7) or die(mysqli_error($connection));
     $row7=mysqli_fetch_array($write7)or die (mysqli_error($connection));
   //print_r($row); exit;
                ?>



<?php
$sql8="SELECT count(*) FROM  contacto";
    $write8 =mysqli_query($connection,$sql8) or die(mysqli_error($connection));
     $row8=mysqli_fetch_array($write8)or die (mysqli_error($connection));
   //print_r($row); exit;
                ?>

<?php
$sql9="SELECT count(*) FROM  justify";
    $write9 =mysqli_query($connection,$sql9) or die(mysqli_error($connection));
     $row9=mysqli_fetch_array($write9)or die (mysqli_error($connection));
   //print_r($row); exit;
                ?>

<?php
$sql10="SELECT count(*) FROM  especialidade";
    $write10 =mysqli_query($connection,$sql10) or die(mysqli_error($connection));
     $row10=mysqli_fetch_array($write10)or die (mysqli_error($connection));
   //print_r($row); exit;
                ?>

                
<?php
$sql11="SELECT count(*) FROM  mainservices";
    $write11 =mysqli_query($connection,$sql11) or die(mysqli_error($connection));
     $row11=mysqli_fetch_array($write11)or die (mysqli_error($connection));
   //print_r($row); exit;
                ?>

  


<?php
   
    function mysql_fetch_all($query)
     {
        $temp='';
    $all = array();
    while ($all[] = mysqli_fetch_assoc($query))
    {
    
        $temp=$all;
    }
    return $temp;
    }
 
    //print_r($p_row1); exit;
    //$row1[]=mysql_fetch_assoc($query)or die (mysql_error());
    ?>
		
           <b>Relatório de Estatísticas gerais</b> 
        </div>
 		</div>
      </div>
  </section>  
   
  <h3 class="box-title">Dados do Sistema</h3>

  <div class="content">
     <div class="row">
         <div class="col">
  
        <table id="example" class="table table-bordered table-hover">
        <thead  >
        <tr>
          
        <th>Paciente</th>
        <th>Consulta</th>
        <th>Médico</th>
        <!-- <th>Quantidade</th> -->
        <th>Pagamentos</th>
          <th>Exames</th>
          <th>Prescrições</th>
        </tr>
        <thead  >
        <tbody>


        <?php
    //  $subtotal=0;
        
       foreach ( $write as  $linha)
        {?>
          <tr> <td> <h3><?php echo $row[0];?></h3></td>
          <td>  <h3><?php echo $row1[0];?></h3></td>
          <td>  <h3><?php echo $row2[0];?></h3></td>
          <td>  <h3><?php echo $row3[0];?></h3></td>
          <td>  <h3><?php echo $row4[0];?></h3></td>
          <td>  <h3><?php echo $row5[0];?></h3></td>
       
          </tr>
          
          <?php
          
       }
    
     
     
     ?>
      
   
     
         </tbody>
         

     
  
      
 
       </table>
   </div>
 
</div>
</div>

<div class="content">
     <div class="row">
         <div class="col">
  
        <table id="example" class="table table-bordered table-hover">
        <thead  >
        <tr>
          
        <th>Pacientes Internado</th>
        <th>Beneficiários</th>
        <th>Contactos</th>
        <!-- <th>Quantidade</th> -->
        <th>Justificativos</th>
          <th>Especialidade</th>
          <th>Serviços Médicos</th>
        </tr>
        <thead  >
        <tbody>


        <?php
    //  $subtotal=0;
        
       foreach ( $write as  $linha)
        {?>
          <tr> <td> <h3><?php echo $row6[0];?></h3></td>
          <td>  <h3><?php echo $row7[0];?></h3></td>
          <td>  <h3><?php echo $row8[0];?></h3></td>
          <td>  <h3><?php echo $row9[0];?></h3></td>
          <td>  <h3><?php echo $row10[0];?></h3></td>
          <td>  <h3><?php echo $row11[0];?></h3></td>
       
          </tr>
          
          <?php
          
       }
    
     
     
     ?>
      
   
     
         </tbody>
         

     
  
      
 
       </table>
   </div>
 
</div>
</div>

         

          <!-- <div class="alert alert-success alert-dismissible pull-right"style="width:12%;">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="fa fa-money"></i> Depositado</h4>
      
        <center><font size="5"> Kz. <?php echo $row4['depositammount'];?></font></center>
        </div>



   <div class="alert alert-success alert-dismissible pull-right"style="width: 12%;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="fa fa-money"></i> Total</h4>
        <?php $r1= $row3['subtotal']-$row4['depositammount'];?>
        <center><font size="5"> Kz.<?php echo $r1;?></font>
        </center>
           </div> -->
      
     
       
  </section>
  <div> 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <button onclick=" window.print();" id="print-btn" class="btn bg-blue"><i class="fa  fa-print"></i>  Imprimir</button>
        </div>
  </div>
  </div>
  </div>
   </div>
  </div>
</body>
       
  
<?php include('../Include/footer.php');?>
</html>