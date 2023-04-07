
<?php include('./controllers/ContactoCode.php'); ?>
<?php include('header.php'); ?>

        <!doctype html>
        <html lang="en">
        <head>
    <meta charset="utf-8">

</head>
<!-- The sidebar -->
  <!-- Bootstrap 3.3.7 -->                                       
  <!--link rel="stylesheet" href="CSS/bootstrap.min.css"-->
  
       
             <!-- Page content -->
        <div class="content-wrapper">
        <section class="content-header">
      <h1>
      <font color="black">Fala Connosco</font>  
        <small></small>
       </h1>
     <ol class="breadcrumb">
       <li><a href="./index.php"><i class="fa fa-dashboard"></i>Casa</a></li>
  
     </ol>
   </section>
   <section class="content">
     <div class="box box-primary">
       <div class="box-header with-border">
   <form method="POST" enctype="multipart/form-data" class="row g-3">
   <div class="col-md-6">
                        <label>Nome Completo</label>
                        <input type="text" placeholder="" class="form-control" name="nome" id="nome" value=""  required="required" />
                       </div>

  
  
                        <div class="col-md-6">
                        <label>Seu e-mail</label>
                        <input type="text" placeholder="" class="form-control" name="email" id="email" required="required" value="" />

                     
                    </div>

                    <div class="col-md-6">
                        <label>Assunto</label>
                        <input type="text" class="form-control" placeholder="" name="assunto" id="assunto" required="required" />

                       
                    </div>

                   
                    <div class="col-md-6">
                        <label>Telefone</label>
                        <input type="text" class="form-control" name="telefone" required="required" id="telefone" value="" />

                    </div>

                    <div class="col-md-6">
  <label >Tipo de Contacto</label>
      <select name="contactType" id="contactType"  class="form-control" required="required">
      <option value="" disabled selected="selected">Escolher</option>
      <option>Candidatura</option>
      <option>Contacto</option>
      <option>Solicitação de Justificativo</option>
      </select>
      </div>

                    <div class="col-md-6">
  <label>Anexar Ficheiro</label>
   <input class="form-control" type="file" name="file" id="fileToUpload">

  </br>     
</div>
<div class="col-md-12">
<label for="inputState" class="form-label">Digite Sua Mensagem</label>
                    
                        <textarea type="text" name="mensagem" id="mensagem" class="form-control" cols=100 rows="10" required="required"></textarea>
              
                    </div>

                    
     
  <div class="col-md-12">
    <br>
    <input name="submit" type="submit" onclick="myfunction()" id="log-btn" value="Enviar" STYLE = "color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #2196f3;" size = "10" maxlength = "30" class="form-control" class="btn btn-primary "  />
     
                    </div>         
                                      
<div class="col-md-6">
  <input type="hidden" class="form-control" name="id" required="required" id="id" value="<?php echo ($_SESSION ['id'] ); ?>" />

  </div>
  </form>


                  </div>
</div>

     
      
</section>
 

</body>
</div>   
     <?php include('footer.php'); ?> 
     </html>
 