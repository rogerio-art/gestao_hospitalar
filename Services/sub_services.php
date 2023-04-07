<?php include"../include/header.php";?>
<?php include"../include/sidebar.php";?>
<?php

include("../inc/connect.php") ;
$query=mysqli_query($connection,"SELECT * FROM mainservices")or die (mysqli_error($connection));
$numrows=mysqli_num_rows($query)or die (mysqli_error($connection));
$row1=mysql_fetch_all($query);

function mysql_fetch_all($query) 
{
    $all = array();
    while ($all[] = mysqli_fetch_assoc($query)) {$temp=$all;}
    return $temp;
}
//$row1[]=mysql_fetch_assoc($query)or die (mysql_error());
?>
<?php

//echo "string"; exit();
//session_start();
if(isset($_POST['submit']))
{//print_r($_POST); exit();
    //$service_id=$_POST['service_id'];
		$subservicename=$_POST['subservicename'];
		$Fee=$_POST['Fee'];
    $sid=$_POST['sid'];
 $write =mysqli_query($connection,"INSERT INTO subservices(`sid`,`subservicename`,`Fee`) VALUES ('$sid','$subservicename','$Fee')") or die(mysqli_error($connection));
  echo " <script>setTimeout(\"location.href='../Services/services.php';\",100);</script>";
  // echo "<script>alert('Records Successfully Inserted..');</script>";
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Sub Serviços
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="./Index"><i class="fa fa-dashboard"></i> Casa</a></li>
        <li class="active"> Sub Serviços</li>
      </ol>
    </section>
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      	<div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
            	<form method="POST">
                <label>Nome serviços princiapais</label>
                   <select class="form-control select2" name="sid">
                  <?php foreach ($row1 as $p) {?>
                  <option value="<?php echo $p['id'];?>"><?php echo $p['mainservicename'];?></option>
                  <?php } ?>
                </select><br><br>
            	<label>Nome Sub Serviços</label><br>
            <input type="name" class="form-control" name="subservicename" id="exampleInputEmail1" placeholder="" required="">
            <br>
            <label>Preço do Serviço</label><br>
            <input type="name" class="form-control" name="Fee" id="exampleInputEmail1" placeholder="" required="">
            <br><br>
            	<button type="submit" name="submit" class="btn btn-primary">Salvar</button>
            
<a href="services.php"><span class="btn btn-primary"><i class="fa fa-back"></i> Voltar<!--span class="popuptext" id="myPopup">Get full version at rogeriolameira@gmail.com</span--></span></a><!--&nbsp;&nbsp-->
	</form>
            </div>
        </div>
    </div>
</div>
</section>
</div>
<?php include "../include/footer.php";?>