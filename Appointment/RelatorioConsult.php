

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
       





         <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="card-mt-5">
              <div class="card-header">
                <h4><font color="white">   </font></h4>
       </div>
                <div class="card-body">
       <form action="#" method="GET">
       <div class="row">
         <div class="col-md-2">
           <div class="form-group">
             <label>Data de início</label>
       <input type="date" name="datainicio" class="form-control" value="<?php if(isset($_GET['datainicio'])){echo $_GET['datainicio'];}
       else{
       echo  date('Y-m-d');
       }
       ?>">
       </div>
       </div>
       <div class="col-md-2">
           <div class="form-group">
           <label>Data de Fim</label>
       <input type="date" name="datafim" class="form-control" value="<?php  if(isset($_GET['datafim'])){echo $_GET['datafim'];}
         else{
          echo  date('Y-m-d');
          }
       ?>">
       </div>
       </div>
     
       <div class="col-md-2">
           <div class="form-group">
           <label>Clica para</label>
           <label>Atualisar </label>
     <button type="submit" name="submit"class="btn bg-blue" class="form-control">Atualizar os dados</button>

     </div>
       </div>
       </div>
       
  </form>
  </div>
       </div> 
           </div>
       </div>     
       </div>





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
          
       
          <b>Date de emissão:</b>  <?php echo $d1=date('Y-m-d'); ?><br>
          <b>Disconto:</b> <?php echo "00".',00 kz';?><br>
          <b>Estado:</b> Pago
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
    $p_query=mysqli_query($connection,"SELECT * FROM patientregister ")or die (mysqli_error($connection));
    $p_numrows=mysqli_num_rows($p_query)or die (mysqli_error($connection));
    $p_row1=mysqli_fetch_array($p_query);

  
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
		
           <b>Relatório de Consultas</b> 
        </div>
 		</div>
      </div>
  </section>  
   
  <h3 class="box-title">Dados da Consulta</h3>

  <div class="content">
     <div class="row">
         <div class="col">
  
        <table id="example" class="table table-bordered table-hover">
        <thead  >
        <tr>
          
        <th>Paciente</th>
        <th>Especialidade</th>
        <th>Médico</th>
        <!-- <th>Quantidade</th> -->
        <th>Preço</th>
          <th>Data</th>
        </tr>
        <thead  >
        <tbody>


        <?php
    //  $subtotal=0;
         if(isset($_GET['datainicio']) && isset($_GET['datafim']))
         { //print_r($_POST);
            
          
       $datainicio= $_GET['datainicio'];
       $datafim= $_GET['datafim'];

       $sql="SELECT * FROM addappointment  WHERE  app_date BETWEEN   '$datainicio' AND '$datafim'  ORDER BY app_date DESC";
       $write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
       $a_row=mysql_fetch_all($write)or die (mysqli_error($connection));

       $sql3="SELECT sum(grosstotal) as subtotal FROM addpayment where  date BETWEEN   '$datainicio' AND '$datafim'  ";
       // print_r($sql3); exit();
       $write3=mysqli_query($connection,$sql3) or die(mysqli_error($connection));
       $row3=mysqli_fetch_array($write3)or die (mysqli_error($connection));
    
     
     if(mysqli_num_rows($write) > 0 )
     {
       foreach ( $write as  $linha)
        {?>
          <tr> <td><?php echo $linha['namepatient'];?></td>
          <td><?php echo $linha['especialidade'];?></td>
          <td><?php echo $linha['doctor'];?></td>
           <!-- <td><?php // echo $row['depositammount'];?></td> -->
          <td><?php echo number_format($linha['preco'], 2); ?></td>
          <td><?php echo $linha['app_date']; ?></td>
          </tr>
          
          <?php
          
       }
    
     }
     else
     
     {
       echo "Sem dados para mostrar";
     }
     
     ?>
      
   
     
         </tbody>
         

     
  
      
        <?php
         }
?>  
       </table>
   </div>
 
</div>
</div>

         


   <div class="alert alert-success alert-dismissible pull-right"style="hight: 12%;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="fa fa-money"></i> Total</h4> 
        <?php $r1= $row3['subtotal']?>
        <center><font size="3"> Kz.<?php echo $r1;?></font>
        </center>
           </div>
      
     
       
  </section>
  
  <div> 
  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="#"><span class="btn bg-blue"><i class="fa fa-back"></i> Voltar<!--span class="popuptext" id="myPopup">Get full version at rogeriolameira@gmail.com</span--></span></a><!--&nbsp;&nbsp-->
  <button onclick=" window.print();" id="print-btn" class="btn bg-blue"><i class="fa  fa-print"></i>  Imprimir</button>
        </div>
        </div>
  

<?php include('../Include/footer.php');?>
</div>
  </div>
   </div>
  </div>
</body>
       
  
</html>