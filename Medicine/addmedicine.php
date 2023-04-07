<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>

<?php 
  include("../inc/connect.php") ;
  $m_sql="SELECT * FROM medicinecategory ";
  $m_write =mysqli_query($connection,$m_sql) or die(mysqli_error($connection));
 // print_r($sql); exit;
    $m_row=mysqli_fetch_array($m_write)or die (mysqli_error($connection));
    $category=$m_row['category']; 
//     function mysql_fetch_all($query) {
//     $all = array();
//     while ($all[] = mysql_fetch_assoc($query)) {$temp=$all;}
//     return $temp;
// }
    //session_start();
 
   //print_r($row); exit;
   //echo "$firstname"; exit();
?>
<?php
include("../inc/connect.php") ;

//session_start();
if(isset($_POST['submit']))
{ 
    $name=$_POST['name'];
    $category=$_POST['category'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $genericname=$_POST['genericname'];
    $company=$_POST['company'];
    $effect=$_POST['effect'];
    $expiredate=$_POST['expiredate'];
   
    
    
    $write =mysqli_query($connection,"INSERT INTO addnewmedicine(`name`,`category`,`price`,`quantity`,`genericname`,`company`,`effect`,`expiredate`) VALUES ('$name','$category','$price','$quantity','$genericname', '$company','$effect','$expiredate')") or die(mysqli_error($connection)); //$query=mysql_query("SELECT * FROM user ")or die (mysql_error());
      //$numrows=mysql_num_rows($query)or die (mysql_error());
     echo " <script>setTimeout(\"location.href='../Medicine/medicinelist.php';\",150);</script>";
}

?>

<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="../bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="../css7/style.css" type="text/css">
        
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
       Registrar Medicamento
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Casa</a></li>
        <li class="active">Registrar Medicamento</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
<div class="col-md-12">
    <div class="box box-primary">
            <div class="box-header with-border bg-blue">
             <i class="fa fa-plus"></i> <h3 class="box-title">Registrar Medicamento</h3>
            </div>
        <form method="POST" >
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nome</label>
                  <input type="name" class="form-control" name="name" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group">
<label for="exampleInputEmail1">Categoria</label><br>
<select name="category" class="form-control select2"  placeholder="">
<?php

 $p_query="SELECT * FROM medicinecategory";
 //echo $p_query;
$res=mysqli_query($connection,$p_query);
while ($row1 =mysqli_fetch_array($res)) {
   echo $row1['id'];?>
<option <?php if ($category==$row1['id']) {
  echo "Selected";}?>><?php echo $row1['category'];?>
 </option>
<?php } ?></select>

</div>
<div class="form-group">
<label for="exampleInputFile">Preço</label>
<input type="price" name="price" class="form-control" id="exampleInputPassword1" placeholder="" >
</div>
<div class="form-group">
<label for="exampleInputPassword1">Quantidade</label>
<input type="quantity" name="quantity" class="form-control" id="exampleInputPassword1" placeholder="" >
</div>
<div class="form-group">
<label for="exampleInputPassword1">Nome Genérico</label>
<input type="generiname" name="genericname" class="form-control" id="exampleInputPassword1" placeholder="" >
</div>
<div class="form-group">
<label for="exampleInputPassword1">Empresa</label>
<input type="company" name="company" class="form-control" id="exampleInputPassword1" placeholder="" >
</div>
<div class="form-group">
<label for="exampleInputPassword1">Efeitos</label>
<input type="effects" name="effect" class="form-control" id="exampleInputPassword1" placeholder="">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Data de expiração</label>
<input type="date" name="expiredate" class="form-control" id="exampleInputPassword1" placeholder="">
</div>
</div>
<div class="box-footer">
<button type="submit"  name="submit" class="btn btn-primary">Salvar</button>

<a href="medicinelist.php"><span class="btn btn-primary"><i class="fa fa-back"></i> Voltar<!--span class="popuptext" id="myPopup">Get full version at rogeriolameira@gmail.com</span--></span></a><!--&nbsp;&nbsp-->

              </div>
            </form>
          </div>
      </div>
      </div>
     </section>
   </div>
<?php include "../Include/footer.php";?>