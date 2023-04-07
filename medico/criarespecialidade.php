<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>

<?php
include("../inc/connect.php") ;
//echo "string"; exit();
//session_start();
if(isset($_POST['submit']))
{//print_r($_POST); exit();
   
    $especialidade=$_POST['nomeespecialidade'];
    $preco=$_POST['preco'];
    
 $write =mysqli_query($connection,"INSERT INTO especialidade(`Nome`,`Preco`) VALUES ('$especialidade','$preco')") or die(mysqli_error($connection));

   // echo "<script>alert('Records Successfully Inserted..');</script>";
      echo " <script>setTimeout(\"location.href='../medico/especialidade.php';\",150);</script>";
}
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Cadastrar Especialidade
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Casa</a></li>
        <li class="active"> Cadastrar Especialidade</li>
      </ol>
    </section>
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      	<div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
            	<form method="POST">
            	<label>Inserir nome da Especialidade</label><br>
            <input type="text" class="form-control" name="nomeespecialidade"  placeholder="" required="">
            <label>Preço</label><br>
            <input type="text" class="form-control" name="preco"  placeholder="" required="">
           
            <br><br>
            	<button type="submit" name="submit" class="btn bg-blue">Salvar</button><br>
            	</form>
            </div>
        </div>
    </div>
</div>
</section>
</div>
<?php include "../Include/footer.php";?>