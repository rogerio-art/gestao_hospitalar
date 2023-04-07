<?php include"../Include/headerMedico.php";?>
<?php include"../Include/sidebarMedico.php";?>
<?php 
include("../inc/connect.php") ;

//session_start();
$sql="SELECT * FROM addpayment WHERE id='".$_GET['id']."'";
//SELECT `id`, `invoice`,`depositammount`,`date` FROM addpayment
$write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
// print_r($sql); exit;
$row=mysqli_fetch_array($write)or die (mysqli_error($connection));
$date=$row['date'];
$invoice =$row['invoice'];
$subtotal=$row['subtotal'];
$depositammount =$row['depositammount'];

//print_r($row1); exit;
//echo "$depositammount"; exit();
?>
<?php
//include("../inc/connect.php") ;

//session_start();
if(isset($_POST['submit']))
{	
$invoice=$_POST['invoice'];
$subtotal=$_POST['subtotal'];
$depositammount=$_POST['depositammount'];
$d1=date('Y-m-d');
//$date=$_POST['date'];
//$id=$_GET['id'];

$query=mysqli_query($connection,"UPDATE addpayment SET invoice='$invoice',subtotal='$subtotal',depositammount='$depositammount',date='$d1' WHERE id='".$_GET['id']."'") or die(mysqli_error($connection));
 	echo "<script>alert('Dados salvo com sucesso..');</script>";
	 //  	$fetch="SELECT * FROM addpayment WHERE id=".$_GET['id']."";
  //     	$q=mysql_query($fetch) or die(mysql_error($connection));
		// $result=mysql_fetch_array($q);
		 header("location:paymenthistory.php?id=".$row['patient']);
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
Editar Pagamento<small> </small>
</h1>
<ol class="breadcrumb">
<li><a href="./Index"><i class="fa fa-dashboard"></i> Início</a></li>
<li class="active">Editar Pagamento</li>
</ol>
</section>
<!-- Main content -->
<section class="content">
<!-- Small boxes (Stat box) -->
<div class="row">
<div class="col-md-12">	
<div class="box box-primary">
<div class="box-header with-border">
<i class=""></i> <h3 class="box-title">Editar Pagamento</h3><br><br>

<form method="POST">
<div class="form-group">
<label for="exampleInputPassword1">Data</label>
<input type="date" name="date" value="<?php echo $date;?>" class="form-control" >
</div>
	
<div class="form-group">
<label for="exampleInputPassword1">Fatura</label>
<input type="text" name="invoice" value="<?php echo $invoice;?>"  class="form-control">
</div>

<div class="form-group">
<label for="exampleInputPassword1">Valor</label>
<input type="text" name="subtotal" value="<?php echo $subtotal;?>"  class="form-control">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Depósito </label>

<input type="text" name="depositammount" class="form-control" id="exampleInputPassword1" placeholder="" value="<?php echo $depositammount; ?>" >
</div>
<div class="form-group">
<button type="submit" name="submit" class="btn btn-primary">Actualizar</button>
<a href="paymenthistory.php?id=<?php echo $row['patient']; ?>" name="back" class="btn btn-primary">Voltar</a>
</div>
</form>
</div>
</div>
</div>
</div>
</section>
</div>

<?php include "../Include/footer.php";?>