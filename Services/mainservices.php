<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>
<?php
include("../inc/connect.php") ;
//echo "string"; exit();
//session_start();
if(isset($_POST['submit']))
{//print_r($_POST); exit();
    $id=$_POST['id'];
		$mainservicename=$_POST['mainservicename'];
    $mainserviceprice=$_POST['mainserviceprice'];
		
 $write =mysqli_query($connection,"INSERT INTO mainservices(`mainservicename`,`preco`) VALUES ('$mainservicename','$mainserviceprice')") or die(mysqli_error($connection));
echo " <script>setTimeout(\"location.href='../Services/addservices.php';\",100);</script>";
   // echo "<script>alert('Records Successfully Inserted..');</script>";
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     Cadastrar Serviço
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Casa</a></li>
        <li class="active"> Cadastrar serviço</li>
      </ol>
    </section>
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      	<div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
            	<form method="POST">
            	<label>Inserir nome do Serviço</label><br>
            <input type="name" class="form-control" name="mainservicename" id="exampleInputEmail1" placeholder="" required="">
            <br><br>
            <label>Inserir Preço do Serviço</label><br>
            <input type="name" class="form-control" name="mainserviceprice" id="exampleInputEmail1" placeholder="" required="">
            <br><br>
          
            	<button type="submit" name="submit" class="btn btn-primary">Salvar</button>
              
<a href="addservices.php"><span class="btn btn-primary"><i class="fa fa-back"></i> Voltar<!--span class="popuptext" id="myPopup">Get full version at rogeriolameira@gmail.com</span--></span></a><!--&nbsp;&nbsp-->
<br>
            	</form>
            </div>
        </div>
    </div>
</div>
</section>
</div>
<?php include "../Include/footer.php";?>