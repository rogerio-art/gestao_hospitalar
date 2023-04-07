

<!doctype html>
<title>Relatório Geral</title>
        <html lang="en">
        <head>

        <?php include"../Include/headerMedico.php";?>
<?php include"../Include/sidebarMedico.php";?>
        <?php include("../inc/connect.php") ;?>
            <meta charset="utf-8">
            
            <link rel="stylesheet" type="text/css"  href="print.css" media="print">

            
          
          </head>


          
<?php   
$p_query=mysqli_query($connection,"SELECT * FROM addpayment ")or die (mysqli_error($connection));
$p_numrows=mysqli_num_rows($p_query)or die (mysqli_error($connection));
$p_row1=mysqli_fetch_array($p_query);
//print_r($p_row1); exit;
//$row1[]=mysql_fetch_assoc($query)or die (mysql_error());
?>


 



<body>
  

<div class="content-wrapper">
  <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="card-mt-5">
              <div class="card-header">
                <h4><font color="black">Escolha uma data para filtrar os dados</font></h4>
       </div>
                <div class="card-body">
       <form action="#" method="GET" >
       <div class="row">
         <div class="col-md-2">
           <div class="form-group">
             <label><fonte color="black">Data de início</font></label>
       <input type="date" name="datainicio" class="form-control" value="<?php if(isset($_GET['datainicio'])){echo $_GET['datainicio'];}
       else{
       echo  date('Y-m-d');
       }
       ?>">
       </div>
       </div>
       <div class="col-md-2">
           <div class="form-group">
           <label><fonte color="black">Data de Fim</font></label>
       <input type="date" name="datafim" class="form-control" value="<?php  if(isset($_GET['datafim'])){echo $_GET['datafim'];}
         else{
          echo  date('Y-m-d');
          }
       ?>">
       </div>
       </div>
     
       <div class="col-md-2">
           <div class="form-group">
           
           <label>Atualisar</label>
     <button type="submit" name="submit"class="btn bg-blue" class="form-control">Clica para Filtrar </button>

     </div>
       </div>
       </div>
       
  </form>
  </div>
       </div> 
           </div>
       </div>     
       </div>
    <section class="content-header">
       
      <ol class="breadcrumb">

   
      </ol>
    </section>
    <section class="invoice">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class=""></i><b>&nbsp;&nbsp;&nbsp;Clínica-Saúde</b>
            <small class="pull-right"> <b><h4><?php  if(isset($_GET['datainicio'])){echo 'Data:'.' '. $_GET['datainicio'].'  '.'|'.' '.  $_GET['datafim'];}?></h4></small>
          </h2>
        </div>
       </div>
	<div class="row invoice-info">
 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 		<img src="396d647172a127fc92e2e59f5f77ef6d.jpg" width="120" height="120" alt="Stethoscope free icon" title="Stethoscope free icon">
    
    
		 <div class="cover" style="float: right;">

            <b><p>Localização |</b> Zaire-Soyo Bairro Pangala Rua Principal</p>
            <b><p>Telefone |</b> 937 277 985 | 998 521 361 | 937 279 624</p>
            <b><p>Email |</b> atendimento@clinica-saude.co.ao</p>
            <b><p>Site |</b> www.clinica-saude.co.ao</p>
  
      </div>
    </div><br>
	<section class="invoice">
  <div class="cover">
     	 <div class="row invoice-info">
     	 <div class="col-sm-4 invoice-col" style="float: left;">
     	 

        <address>
            <strong></strong>
            

            <b>Código da Fatura: <?php echo $p_row1['invoice'];?></b><br>
       
       <b>Date de emissão:</b>  <?php echo $d1=date('Y-m-d'); ?><br>
       <b>Disconto:</b> <?php echo $p_row1['discount'].',00 kz';?><br>
       <b>Estado:</b> Pago

        </address>

        </div>
        <div class="col-sm-4 invoice-col" style="float: right;">
        
        
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
		
        
        </div>
 		</div>
      </div>
  </section>  
   


  <div class="content">
     <div class="row">
         <div class="col">
  
        <table id="example" class="table table-bordered table-hover">
        <thead  >
        <tr>
          
        <th>Paciente</th>
        <th>Nome do serviço</th>
        <th>Quantidade</th>
        <!-- <th>Quantidade</th> -->
        <th>Preço</th>
        <th>Total</th>
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

       $sql="SELECT * FROM addpayment  WHERE  date BETWEEN   '$datainicio' AND '$datafim'  ORDER BY date DESC";
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
          <tr> <td><?php echo $linha['depositammount'];?></td>
          <td><?php echo $linha['refdbydoctor'];?></td>
          <td><?php echo number_format($linha['vatper'], 2);?></td>
  
          <td><?php echo number_format($linha['subtotal'], 2); ?></td>
          <td><?php echo number_format($linha['grosstotal'], 2); ?></td>
          <td><?php echo $linha['date']; ?></td>
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
            //print_r($row3); exit;
          ?>
       
        <?php
         }
?>  

       </table>
       
   </div>
  
</div>
</div>

         

          <!-- <div class="alert alert-success alert-dismissible pull-right"style="width:12%;">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="fa fa-money"></i> Depositado</h4>
        <?php 
      //  $sql4="SELECT sum(depositammount) as depositammount FROM addpayment WHERE patient='".$_GET['id']."'";
        
      //  $write4=mysqli_query($connection,$sql4) or die(mysqli_error($connection));
      //  $row4=mysqli_fetch_array($write4)or die (mysqli_error($connection));
     
        ?>
          </div>



   <div class="alert alert-success alert-dismissible pull-right"style="width: 12%;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="fa fa-money"></i> Total</h4>
        <?php //$r1= $row3['subtotal']-$row4['depositammount'];?>
 
        </center>
           </div> -->
           
         <div class="cover" style="width: 177%;" > <!-- DETERMINA A POSIÇÃO DO VALOR TOTAL GERAL NO ECRÃN -->
         
         <center><font size="3"><strong>TOTAL GERAL:</strong> 
        
         <?php
       if (empty($row3))
       echo $row3= "0.00 kz";
      else {
        echo number_format($row3['subtotal'], 2).' '.'Kz';
      }?>
        </font></center>
         
         </div>
     
  
       
  </section>
  <div> 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="#"><span class="btn bg-blue"><i class="fa fa-back"></i> Voltar<!--span class="popuptext" id="myPopup">Get full version at rogeriolameira@gmail.com</span--></span></a><!--&nbsp;&nbsp-->
  <button onclick=" window.print();" id="print-btn" class="btn bg-blue"><i class="fa  fa-print"></i>  Imprimir</button>
        </div>
        </body>
  </div>
  <?php include '../include/footer.php'; ?>
  </div>
 
       
  

  </div>
   </div>
  </div>

</html>