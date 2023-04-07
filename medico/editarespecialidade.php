<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>
<?php 
  include("../inc/connect.php") ;
  
    //session_start();
  $sql="SELECT * FROM especialidade WHERE Id='".$_GET['id']."'";
  $write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
// print_r($sql); exit;
    $row=mysqli_fetch_array($write)or die (mysqli_error($connection));
    $id=$row['Id'];
    $nomeespecialidade=$row['Nome'];
    $preco=$row['Preco'];
   
   //print_r($row); exit;
   //echo "$firstname"; exit();
?>
<?php
//include("../inc/connect.php") ;

//session_start();
if(isset($_POST['submit']))
{ //echo $write; exit();
    $id=$_POST['id'];
    $nomeespecialidade=$_POST['nomeespecialidade'];
    $preco=$_POST['preco'];
    
    $write=mysqli_query($connection,"UPDATE especialidade SET Nome='$nomeespecialidade', Preco='$preco' WHERE id='".$_GET['id']."'") or die(mysqli_error($connection));
   
      echo " <script>setTimeout(\"location.href='../medico/especialidade.php';\",150);</script>";
}

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editar Especialidade
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Casa</a></li>
        <li class="active">Editar Especialidade</li>
      </ol>
    </section>
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <form method="POST">
                <input type="hidden" class="form-control" name="id" id="exampleInputEmail1" placeholder=""><br>
              <label>Especialidade </label><br>
            <input type="name" class="form-control" name="nomeespecialidade" id="exampleInputEmail1" placeholder="" value="<?php echo $nomeespecialidade;?>">
            <label>Nome </label><br>
            <input type="name" class="form-control" name="preco" id="exampleInputEmail1" placeholder="" value="<?php echo $preco;?>">
           
            <br><br>
              <button type="submit" name="submit" class="btn bg-blue">Atualizar</button>
              <a href="./especialidade.php" name="submit" class="btn bg-blue">Voltar</a><br><br>
              </form>
            </div>
        </div>
    </div>
</div>
</section>
</div>
<?php include "../Include/footer.php";?>