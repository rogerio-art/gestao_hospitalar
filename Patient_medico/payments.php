<?php include"../Include/headerMedico.php";?>
<?php include"../Include/sidebarMedico.php";?>

<?php
include("../inc/connect.php") ;

?>


<?php
$query=mysqli_query($connection,"SELECT  DISTINCT `patient`,`depositammount` FROM  addpayment ")or die (mysqli_error($connection));
$numrows=mysqli_num_rows($query)or die (mysqli_error($connection));
$row1=mysql_fetch_all($query);
function mysql_fetch_all($query) {
    $all = array();
    while ($all[] = mysqli_fetch_assoc($query)) {$temp=$all;}
    return $temp;
}
//$row1[]=mysql_fetch_assoc($query)or die (mysql_error());
?>


  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Pagamentos do Apaciente  
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li class="active"> Pagamentos do paciente   </li>
      </ol>
    </section>
    <section class="content">
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-xs-12">
	<div class="box box-primary">
		<div class="box-header with-border">
			<i class="fa fa-user"></i> <h3 class="box-title"> Pagamentos do Apaciente  </h3>
		</div>
 		<div class="box-header">
 			<!-- <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal" style="height: 50px;"><i class="fa fa-plus-square"></i> Registrar Paciente</button> -->  <!--comentei este botão que chama uma popup de registrar paciente achei desnecessário por agora mas vo utilizar o popup numa outra situation-->
 <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Registrar Paciente</h4>
	</div>
	
  <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
     </div>    
</div>
</div>
</div>	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--    <td>
 <button type="button" class="btn btn-default">Copy</button>
</td> -->
<!-- <td>
   <a href="./Excelpayment.php"> <button type="button" class="btn btn-default">Excel</button></a>
</td>&nbsp;&nbsp;
<td>
   <a href="csvpayment.php"><button type="button" class="btn btn-default">CSV</button></a>
</td>&nbsp;&nbsp;
<td>
   <a href="./PDF/payments_pdf.php"><button type="button" class="btn btn-default">PDF</button></a>
</td>&nbsp;&nbsp;
<td>
   <button type="button" onclick="window.print();" class="btn btn-default">Print</button>
</td> -->

       <div class="box-body">
	   <table id="example1" class="table table-bordered table-hover">
             <thead>
                <tr>
                  
                
                  <th>Nome do Cliente</th>
                  <th>Qantidade</th>
              
              
                   
                </tr>
                </thead>
				<tbody>
                	 <?php
                   

     foreach ($row1 as $row)
      {
	

//$row1[]=mysql_fetch_assoc($query)or die (mysql_error());


?>     
<tr>
<td><?php echo $row['depositammount'];?></td>

<td>

<?php
  $sql="SELECT count(*) FROM  addpayment  WHERE patient='".$row['patient']."' ";
                  
  $write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
   $row5=mysqli_fetch_array($write)or die (mysqli_error($connection));
 //print_r($row); exit;
              ?>
             <?php echo' '. $row5[0];?> Faturas
                       
</td>   

<td> <a href="paymenthistory.php?id=<?php echo $row['patient'];?>"><span class="btn bg-blue"><i class="fa fa-money"></i> Pagamento</a></td>
                          
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</section>
<div> 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="../Index/index.php"><span class="btn bg-blue"><i class="fa fa-back"></i> Voltar<!--span class="popuptext" id="myPopup">Get full version at rogeriolameira@gmail.com</span--></span></a><!--&nbsp;&nbsp-->
      </div>
</div>
<?php include "../Include/footer.php";?>
