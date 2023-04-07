<?php include"../Include/headerMedico.php";?>
<?php include"../Include/sidebarMedico.php";?>
<?php
include("../inc/connect.php") ;
$p_query=mysqli_query($connection,"SELECT * FROM addpayment WHERE patient='".$_GET['id']."'")or die (mysqli_error($connection));
$p_numrows=mysqli_num_rows($p_query)or die (mysqli_error($connection));
$p_row1=mysqli_fetch_array($p_query);
//print_r($p_row1); exit;
//$row1[]=mysql_fetch_assoc($query)or die (mysql_error());
?>
<?php
    //  $subtotal=0;
          if(isset($_POST['submit']))
          { //print_r($_POST);
            
           //$subtotal=''; 
            $subtotal=$_POST['subtotal'];
            $vatper=$_POST['vatper'];
            $discount=$_POST['discount'];
            $total= $subtotal * $vatper/100 ;
            //echo $gt=$total+$subtotal;
            //echo $total;              
          $cal_discount= $subtotal * $discount/100 ;
          $GrandTotal=$subtotal+$total-$discount; 
           // $dis= $subtotal*(100-$discount)/100;
          }
          else
          {
            $subtotal=0;
            $vatper=0;
            $discount=0;
            $total=0;
            $cal_discount=0;
            $GrandTotal=0;
          }
          ?>
<?php
//include("../inc/connect.php") ;
//echo "string"; exit();
//session_start();
if(isset($_POST['submit']))
{ //echo "string"; exit();
  $vatper=$_POST['vatper'];
 $discount=$_POST['discount'];

 
  $write =mysqli_query($connection,"UPDATE addpayment SET vatper='$vatper',discount='$discount' WHERE id='".$_GET['id']."'") or die(mysqli_error($connection));

      //$query=mysql_query("SELECT * FROM user ")or die (mysql_error());
      //$numrows=mysql_num_rows($query)or die (mysql_error());
 //echo " <script>alert('Records Successfully Updated..');</script>";

    }
?>
<link rel="stylesheet" type="text/css"  href="print.css" media="print">
 <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Fatura
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li class="active">Fatura</li>
      </ol>
    </section>
    <section class="invoice">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class=""></i><b>&nbsp;&nbsp;&nbsp;Clínica-Saúde</b>
            <small class="pull-right">Date: <?php echo $d1=date('Y-m-d'); ?></small>
          </h2>
        </div>
       </div>
	<div class="row invoice-info">
 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 		<img src="396d647172a127fc92e2e59f5f77ef6d.jpg" width="120" height="120" alt="Stethoscope free icon" title="Stethoscope free icon">
    
		 <div class="col-sm-4 invoice-col" style="float: right;">
          <b>Código da Fatura: <?php echo $p_row1['invoice'];?></b><br>
       
          <b>Date de emissão:</b> <?php echo $p_row1['date'];?><br>
          <b>Disconto:</b> <?php echo $p_row1['discount'].',00 kz';?><br>
          <b>Estado:</b> Pago
        </div>
    </div><br>
	<section class="invoice">
     	<div class="row">
     	 <div class="row invoice-info">
     	 <div class="col-sm-4 invoice-col" style="float: left;">
     	 
          <adddivress>
          
                    <b><p>Localização |</b> Zaire-Soyo Bairro Pangala Rua principal</p>
                            <b><p>Telefone |</b> 937 277 985 | 998 521 361 | 937 279 624</p>
                            <b><p>Email |</b> atendimento@clinica-saude.co.ao</p>
                            <b><p>Site |</b> www.clinica-saude.co.ao</p>
          </address>
        </div>
        <div class="col-sm-4 invoice-col" style="float: right;">
         <b><h4>Dados do Utente</h4></b>
          <address>
            <strong></strong>
            <?php
		$id=$_GET['id'];
    $p_query=mysqli_query($connection,"SELECT * FROM patientregister WHERE id='".$_GET['id']."'")or die (mysqli_error($connection));
    $p_numrows=mysqli_num_rows($p_query)or die (mysqli_error($connection));
    $p_row1=mysqli_fetch_array($p_query);
    
    $sql="SELECT * FROM addpayment WHERE patient='".$id."'";
    $write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
    // print_r($sql); exit;
    $a_row=mysql_fetch_all($write)or die (mysqli_error($connection));
    //print_r($a_row);exit;
    //$id=$_GET['id']
    
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
		
           <b>Nome:</b> <?php echo $p_row1['name'];?> <br>
           <b>Morada:</b> <?php echo $p_row1['address'];?> <br>
           <b>Telefone:</b>	<?php echo $p_row1['phone'] ;?> 
          </address>
        </div>
 		</div>
      </div>
  </section>  
   <div class="row">
	<div class="col-xs-12 table-responsive">
        <!-- general form elements -->
        <div class="box box-btn bg-white">
        <div class="box-header with-border">
  <h3 class="box-title">Dados da Factura</h3>
        </div>
        <!-- <input type="button" value="Print" id="btnPrint" /> -->
        <!-- /.box-header -->
        <!-- form start -->
        <div id="dvContainer">
        <div class="box-body table-responsive no-padding">
        <table id="example1" class="table table-bordered table-hover">
        <tr>
            
        <th>Fatura</th>
        <th>Nome do serviço</th>
        <th>Quantidade</th>
        <!-- <th>Quantidade</th> -->
        <th>Preço</th>
        <th>Total</th>
        </tr>


        <?php if(count($a_row)>0) 
        { 
        foreach ($a_row as $row) { ?>
        <tr>
            
        <td><?php echo $row['invoice'];?></td>
        <td><?php echo $row['refdbydoctor'];?></td>
        <td><?php echo number_format($row['vatper'], 2);?></td>
         <!-- <td><?php// echo $row['depositammount'];?></td> -->
        <td><?php echo number_format( $row['subtotal'], 2); ?></td>
        <td><?php echo number_format( $row['grosstotal'], 2); ?></td>
        <td><?php if (!empty($row['depositammount']))
         {
            ?>    <?php } else{?>
               
           <?php }  ?>
         
        </tr>
        <?php } } else
         { ?>
         
    <tr>
        <td colspan="3">Sem dados</td>
</tr>
      <?php  } ?>
       </table>
   </div>
 
</div>
</div>

<div class="alert  alert-dismissible pull-right"style="width: 12%;" >
         <button type="button" class="close"  aria-hidden="true">&times;</button>
      
            <?php 
            $sql3="SELECT sum(grosstotal) as subtotal FROM addpayment WHERE patient='".$_GET['id']."'";
           // print_r($sql3); exit();
           $write3=mysqli_query($connection,$sql3) or die(mysqli_error($connection));
           $row3=mysqli_fetch_array($write3)or die (mysqli_error($connection));
          //print_r($row3); exit;
          ?>
         <center><font size="3">Total : <?php echo number_format($row3['subtotal'], 2).' '.'Kz';?></font></center>
          </div>
         

          <!-- <div class="alert alert-success alert-dismissible pull-right"style="width:12%;">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="fa fa-money"></i> Depositado</h4>
        <?php 
        $sql4="SELECT sum(depositammount) as depositammount FROM addpayment WHERE patient='".$_GET['id']."'";
        
        $write4=mysqli_query($connection,$sql4) or die(mysqli_error($connection));
        $row4=mysqli_fetch_array($write4)or die (mysqli_error($connection));
     
        ?>
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
  <a href="paymenthistory.php?id=<?php echo $_GET['id']; ?>"><span class="btn bg-blue"><i class="fa fa-back"></i> Voltar<!--span class="popuptext" id="myPopup">Get full version at rogeriolameira@gmail.com</span--></span></a><!--&nbsp;&nbsp-->
  <button onclick=" window.print();" id="print-btn" class="btn bg-blue"><i class="fa  fa-print"></i>  Imprimir</button>
        </div>
  </div>
  </div>
 
   </div>
  </div>
 
  </section>
<?php include "../Include/footer.php";?>