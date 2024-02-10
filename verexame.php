<?php session_start();?>
<?php
include('config/db.php');
include('header.php');
include('sidebar.php');



$query=mysqli_query($connection,"SELECT * FROM exameeletronico  WHERE id='".$_GET['id']."'")or die (mysqli_error($connection));
$row=mysqli_fetch_array($query)or die (mysqli_error($connection));
//print_r($row); exit;
     $name=$row['nome'];
      $pontuacao =$row['pontuacao'];
       $resultado=$row['resultado'];
       $descricao=$row['Descricao'];
       $data=$row['data'];
 
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
            <div class="col-md-4">
           
              <div style="float: left;" >
             
              <b>Nome:</b>&nbsp;
         <?php echo $name; ?><br>
         <b>pontuacao:</b>&nbsp;
         <?php echo $pontuacao; ?><br>
         <b> Resultado:</b>&nbsp; 
          <?php echo $resultado; ?><br> 
          <b> Data:</b>&nbsp; 
          <?php echo $data; ?><br>
          
       </div>
        </div>
     </div>
     </div>
   </div>
 </div>
<div class="box box-primary">
  <div class="box-header with-border">
<form method="POST" enctype="multipart/form-data" >
   <div class="box-body">
      <div class="col-md-12">
       <br>
         </div>
        </form> 
        <table   class="table table-bordered table-hover " >
                     <thead  >
                         <tr>
                             <th><i class=""></i> <h3 class="fa fa-envelope"> Descriação do Exame Eletrónico</h3></th>
                           
                         </tr>
                     </thead>
                     <tbody>

                                <tr>
                                <td ><?php echo $descricao;   ?> </td>
                                      </tr>

                     </tbody>
        </table>
        
        <div class="box-footer">
           <!--  <button type="reset"  name="reset" class="btn btn-primary" value="reset"><i class="f fa fa-undo"></i> Reset</button> -->
              </div>
              
   </div>
         
  </div>
</section>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="verexameElletronico.php"><button type="button" name="cancel" class="btn btn-primary" STYLE = "color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #2196f3;"><i class="fa fa-times"></i> Voltar</button></a>

</div>
<?php include "footer.php";?>