<?php
session_start();    

if (empty($_SESSION['email'])) {
    header("location: ./Validar_user_logado.php");
    
}
    ?>
<?php include('./header.php');?>
<?php include('./sidebar.php');?>



        <!doctype html>
        <html lang="pt-br">
        <head>
    <meta charset="utf-8">

</head>
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
   <form action="./controllers/ContactoCodeLoged.php" method="POST" enctype="multipart/form-data" class="row g-3">
   <div class="col-md-6">
                        <label>Nome Completo</label>
                        <input type="text" placeholder="" class="form-control" name="nome" id="nome" value="<?php echo $_SESSION["name"]?>"  required="required" />
                       </div>

  
  
                        <div class="col-md-6">
                        <label>Seu e-mail</label>
                        <input type="text" placeholder="" class="form-control" name="email" id="email" required="required" value="<?php echo $_SESSION["email"]?>" />

                     
                    </div>

                    <div class="col-md-6">
                        <label>Assunto</label>
                        <input type="text" class="form-control" placeholder="" name="assunto" id="assunto" required="required" />

                       
                    </div>

                   
                    <div class="col-md-6">
                        <label>Telefone</label>
                        <input type="text" class="form-control" name="telefone" required="required" id="telefone" value="<?php echo $_SESSION["phone"]?>" />

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
                    
<textarea id="editor1" name="mensagem" class="form-control"  ></textarea>
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

     <script src="./bower_components/ckeditor/ckeditor.js">
</script>
<script>
  $(function () { 
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })

  $(function () { 
    // Replace the <textarea id="editor2"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor2')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
   $(function () { 
    // Replace the <textarea id="editor3"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor3')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
 