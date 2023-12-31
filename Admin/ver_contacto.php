<?php session_start();?>
<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>
<?php include("../inc/connect.php") ;



$query=mysqli_query($connection,"SELECT * FROM contacto  WHERE id='".$_GET['id']."'")or die (mysqli_error($connection));
$row=mysqli_fetch_array($query)or die (mysqli_error($connection));
//print_r($row); exit;
     $name=$row['name'];
      $email =$row['email'];
       $assunto=$row['assunto'];
    $mensagem=$row['mensagem'];
    $telefone=$row['telefone'];
    $contactType=$row['ContactType'];
?>

<div class="content-wrapper">
    <section class="content-header">
      <h1>
         Mensagem de Contacto
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li class="active">Painel Principal</li>
      </ol>
    </section>
   <section class="content">
      <div class="row">
        <div class="col-md-12">
       <div class="box box-primary">
          <div class="box-header with-border">
          <img src="../Upload/File/<?php echo $row['file'];?>" style="height:100px; width:100px; float: left;" alt="<?php echo pathinfo($row['file'], PATHINFO_FILENAME) ?>"/>

            <div class="col-md-4">´
           
              <div style="float: right;" >
             
              <b>Nome:</b>&nbsp;
         <?php echo $name; ?><br>
         <b>Email:</b>&nbsp;
         <?php echo $email; ?><br>
         <b> Assunto:</b>&nbsp; 
          <?php echo $assunto; ?><br> 
          <b> Telefone:</b>&nbsp; 
          <?php echo $telefone; ?><br>
          <b> Typo de coontacto:</b>&nbsp; 
          <?php echo $contactType; ?><br>
          
       </div>
        </div>
     </div>
     </div>
   </div>
 </div>
<div class="box box-primary">
  <div class="box-header with-border">
<i class=""></i> <h3 class="fa fa-envelope"> Mensagem</h3>
<form method="POST" enctype="multipart/form-data" >
   <div class="box-body">
      <div class="col-md-12">
       <br>
       <input type="text" name="fname" class="form-control" value="<?php echo $mensagem; ?>" readonly="readonly"><br>
          
          </div>
        </form> 
        <div class="box-footer">
           <!--  <button type="reset"  name="reset" class="btn btn-primary" value="reset"><i class="f fa fa-undo"></i> Reset</button> -->
              </div>
              
   </div>
         
  </div>
</section>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../Admin/recrutamento.php"><button type="button" name="cancel" class="btn btn-primary" STYLE = "color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #2196f3;"><i class="fa fa-times"></i> Voltar</button></a>
  
</div>
<?php include "../Include/footer.php";?>