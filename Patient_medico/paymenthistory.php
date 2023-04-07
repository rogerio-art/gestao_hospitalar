<?php include"../Include/headerMedico.php";?>
<?php include"../Include/sidebarMedico.php";?>
<?php
include("../inc/connect.php") ;

if(isset($_POST['submit']))
{//print_r($_POST); exit();
$invoice=$_POST['invoice'];
$depositammount=$_POST['depositammount'];
// $d1=now('Y-m-d');
//$id=$_GET['id'];

$query=mysqli_query($connection,"UPDATE addpayment SET depositammount='$depositammount',date= now() WHERE id='".$_POST['invoice']."'") or die(mysqli_error($connection));

//echo " <script>setTimeout(\"location.href='../Patient/paymenthistory.php';\",250);</script>";
//echo "<script>alert('Records Successfully Inserted..');</script>";
}
?>
<?php
//include("../inc/connect.php") ;
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


<div class="content-wrapper">
    <section class="content-header">
        <h1>Histórico de Pagamento
        <small> </small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li class="active"> Histórico do Paciente</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                    <i class="fa fa-money"></i> <h3 class="box-title"><b>Histórico de Pagamento</b></h3>
                </div>
                <div>&nbsp;&nbsp;
                <a href="addnewpayment.php?id=<?php echo $p_row1['id'];?>"> <button type="button" class="btn bg-blue" style="height: 40px;"><i class="fa fa-plus-circle"></i> Adicionar Pagamento</button></a>&nbsp;&nbsp;

                <!--  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="height: 40px;"><i class="fa fa-plus-circle"></i> Adicionar Depósito</button> -->
            </div><br>
                <!--Patient Info Right-->
        <div class="col-md-4 pull bottom pull-right"style="width: 100%;"><br>
        Nome:
        <?php echo $p_row1['name'];?><br>

        Enderesso:
        <?php echo $p_row1['address'];?><br><br>
        <div class="box box-primary pull-right"style="width: 100%;">
            <div class="box-header with-border">
                <i class="fa fa-envelope-o"></i><span style="float: right;"><?php echo $p_row1['email'];?></span><br>
                <i class="fa  fa-phone"></i><span style="float: right;"> <?php echo $p_row1['phone'];?></span>
            </div>
        </div>
    <!-- Green Box-->
     <!--For Bill Amount-->
       
 <!--For Due Amount End-->
    <!-- Green Box End-->
        <!--Patient Info Right-->
         <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Adicionar Depósito</h4>
        </div>

        <div class="modal-body">
        <form method="POST" >

        <div class="form-group">
        <label for="exampleInputPassword1">Fatura<!--Invoice--></label>
        <select name="invoice" class="form-control"  placeholder="" >
 <?php foreach ($a_row as $p) {?>
<option value="<?php echo $p['id'];?>"><?php echo  $p['invoice'];?></option>
<?php } ?>
</select>
           </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Valor</label>
        <input type="text" name="depositammount" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
        <div class="form-group">
        <button type="submit"  name="submit" class="btn btn-primary">Salvar</button>
        &nbsp;&nbsp;&nbsp;
       
       </div>
         <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>
     </div>
 </div><br><br><br>
         <div class="col-md-12 ">
        <!-- general form elements -->
        <div class="box box-primary">
        <div class="box-header with-border">
        <i class="fa fa-money"></i> <h3 class="box-title">Histórico de Pagamento do Paciente</h3>
        </div>
        <!-- <input type="button" value="Print" id="btnPrint" /> -->
        <!-- /.box-header -->
        <!-- form start -->
        <div id="dvContainer">
        <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
        <tr>
            
        <!-- <th>Fatura</th> -->
        <th>Data</th>
        <th>Serviço</th>
        <!-- <th>Quantidade</th> -->
        <th>Quantidade</th>
        <th>Preço</th>
        <th>Total</th>
        <th>Opções</th>
        </tr>


        <?php if(count($a_row)>0) 
        { 
        foreach ($a_row as $row) { ?>
        <tr>
            
        <!-- <td><?php //echo $row['invoice'];?></td> -->
        <td><?php echo $row['date'];?></td>
        <td><?php echo $row['refdbydoctor'];?></td>
         <td><?php echo number_format($row['vatper'], 2); ?></td>
         <td><?php echo number_format( $row['subtotal'], 2); ?></td>
         <td><?php echo number_format( $row['grosstotal'], 2); ?></td>
        <td><?php if (!empty($row['depositammount']))
         {
            ?><a href="editdeposit.php?id=<?php echo $row['id']; ?>"> <button type="button" class="btn btn-success"><i class="fa fa-edit"></i>Edit</button></a>
            <?php } else{?>
                 <!--a href="editpayment.php?id=<?php echo $row['id'];?>"> <button type="button" class="btn btn-success"><i class="fa fa-edit"></i>edit</button></a-->
                 <a href="editdeposit.php?id=<?php echo $row['id']; ?>"> <button type="button" class="btn btn-success"><i class="fa fa-edit"></i>Edit</button></a>

           <?php }  ?>
           <!-- <a href="delete2.php?id=<?php echo $row['id']; ?>"><span class="btn btn-danger"><i class="fa fa-trash-o"></i>Exc</span></a> -->

         <a href="printinvoice.php?id=<?php echo $row['id'];?>"> <button type="button" class="btn bg-blue"><i class="fa fa-print"></i>Ver</button></a></td>
       
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
<a href="patientlist.php"><span class="btn bg-blue"><i class="fa fa-back"></i> Voltar<!--span class="popuptext" id="myPopup">Get full version at rogeriolameira@gmail.com</span--></span></a><!--&nbsp;&nbsp-->
<a href="printinvoiceGeneral.php?id=<?php echo $p_row1['id'];?>"><span class="btn bg-blue"><i class="fa fa-print"></i> Ver todas Fatura<!--span class="popuptext" id="myPopup">Get full version at rogeriolameira@gmail.com</span--></span></a><!--&nbsp;&nbsp-->
<!-- 
<div class="alert alert-success alert-dismissible pull-right"style="width: 12%;" >
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-money"></i> Valor</h4>
            <?php 
        //     $sql3="SELECT sum(subtotal) as subtotal FROM addpayment WHERE patient='".$_GET['id']."'";
        //    // print_r($sql3); exit();
        //    $write3=mysqli_query($connection,$sql3) or die(mysqli_error($connection));
        //    $row3=mysqli_fetch_array($write3)or die (mysqli_error($connection));
          //print_r($row3); exit;
          ?>
          </div> -->
         

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
</div>

</div>
</div>
</section>

</div>
<?php include "../Include/footer.php";?>