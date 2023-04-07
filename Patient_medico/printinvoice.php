<?php include"../Include/headerMedico.php";?>
<?php include"../Include/sidebarMedico.php";?>
<?php
include("../inc/connect.php") ;
$p_query=mysqli_query($connection,"SELECT * FROM addpayment WHERE id='".$_GET['id']."'")or die (mysqli_error($connection));
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
     	 
          <address>
            <strong></strong>
            <b><p>Localização |</b>Zaire-Soyo Bairro Pangala Rua principal</p>
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
			$sql="SELECT id,name,address,phone FROM patientregister WHERE id='".$p_row1['patient']."'";
			//echo "$sql";
			$query=mysqli_query($connection,$sql)or die (mysqli_error($connection));
			$numrows=mysqli_num_rows($query)or die (mysqli_error($connection));
			$row1=mysqli_fetch_array($query);
			?>
           <b>Nome:</b> <?php echo $row1['name'];?> <br>
           <b>Morada:</b> <?php echo $row1['address'];?> <br>
           <b>Telefone:</b>	<?php echo $row1['phone'] ;?> 
          </address>
        </div>
 		</div>
      </div>
  </section>
   <div class="row">
	<div class="col-xs-12 table-responsive">
  <!--<h3>XXXX--Invoice Entries --></h3>
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Nº do Paciente</th>
              <th>Nome do Serviço</th>
              <th>Quantidade</th>
              <th>Preço</th>
             </tr>
            </thead>
            <tbody>
            <tr>
              <td><?php echo $row1['id'];?></td>
              <td><?php echo $p_row1['refdbydoctor'];?></td>
              <td><?php echo $p_row1['vatper'];?></td>
              <td><?php echo $p_row1['subtotal'];?></td>
            </tr>
           </tbody>
          </table>
        </div>
      </div>
	 <!-- <div class="row">
	<div class="col-xs-6" style="float: right;">
	<form method="POST">
       <div class="table-responsive">
          <table class="table">
             <tr>
              <th style="width:50%">Total:<input type="hidden" name="subtotal" value="<?php //echo $p_row1['subtotal'];?>"></th>
           		 <td><?php //echo $p_row1['subtotal'];?></td> 
             </tr>
             <tr>
                <th>Vat<br>Percentagem:<input type="percentage" name="vatper"></th>
			<td><?php // echo $total;?>
				</td>
				</td>
              </tr>
              <tr>
                <th>Desconto:<input type="percentage" name="discount" ><br><br>
                	<input type="submit" name="submit" value="submit">
                </th>
                <td><?php // echo $cal_discount;?></td>
              </tr>
            </table>
          </div>
          </form>
        </div>
      </div> -->
	 <section class="invoice">
     	<div class="row">
     	 <div class="row invoice-info">
       		  <div class="col-xs-6" style="float: right;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            	<strong>	<lable> Total Geral:</lable> &nbsp;&nbsp;
       <?php echo number_format( $p_row1['grosstotal'],2 );?> Kz</strong>
 				</div>
		</div>
	 </div>
  </section>
      	
  </section>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <button onclick=" window.print();" id="print-btn" class="btn bg-blue"><i class="fa  fa-print"></i>  Imprimir</button>
  <a href="patientlist.php"><span class="btn bg-blue"><i class="fa fa-back"></i> Voltar<!--span class="popuptext" id="myPopup">Get full version at rogeriolameira@gmail.com</span--></span></a><!--&nbsp;&nbsp-->

 
  
    <div class="clearfix">
   </div>
  </div>
 

<?php include "../Include/footer.php";?>