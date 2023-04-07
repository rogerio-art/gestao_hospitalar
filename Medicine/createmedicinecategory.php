<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>
<?php
include("../inc/connect.php") ;

//session_start();
if(isset($_POST['submit']))
{ 
    $category=$_POST['category'];
    $description=$_POST['description'];
    
    if( $category &&  $description )
  { 
      $write =mysqlI_query($connection,"INSERT INTO medicinecategory(`category`, `description`) VALUES ('$category','$description')") or die(mysqlI_error($connection));
      //$query=mysql_query("SELECT * FROM user ")or die (mysql_error());
      //$numrows=mysql_num_rows($query)or die (mysql_error());
       //echo " <script>alert('Records Successfully Inserted..');</script>";
      echo " <script>setTimeout(\"location.href='../Medicine/medicinelist.php';\",150);</script>";
    }
    else
    {
    echo "<script>
      alert('Please Insert Records.. ');
      </script>";
    }     
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
        Criar Categoria do Medicamento
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Casa</a></li>
        <li class="active">Criar categoria do Medicamento</li>
      </ol>
    </section>
     <section class="content">
      <div class="row">
<div class="col-md-12">
	  <div class="box box-primary">
            <div class="box-header with-border">
             <i class="fa fa-medkit"></i> <h3 class="box-title">Criar categoria do Medicamento</h3>
            </div>
        <form method="POST" >
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Categoria do Medicamento</label>
                  <input type="text" class="form-control" name="category" id="exampleInputEmail1" placeholder="" required="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Descrição do Medicamento</label>
                  <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                </div>
         </div>
     <div class="box-footer">
                <button type="submit"   name="submit" class="btn btn-primary">Ok</button>
              </div>
            </form>
          </div>
    </div>
     </div>
    </section>
    </div>
    
<?php include "../Include/footer.php";?>