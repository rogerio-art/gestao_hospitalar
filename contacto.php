
<?php include('./controllers/ContactoCode.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

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
                        <label>Seu e-mail</label>
                        <input type="text" placeholder="" class="form-control" name="email" id="email" required="true" />

                     
                    </div>

                    <div class="col-md-6">
                        <label>Assunto</label>
                        <input type="text" class="form-control" placeholder="" name="assunto" id="assunto" required="true" />

                       
                    </div>

                   
                    <div class="col-md-6">
                        <label>Telefone</label>
                        <input type="text" class="form-control" name="telefone" required="true" id="telefone" />

                    </div>

                    <div class="col-md-6">
  <label>Anexar Ficheiro</label>
   <input class="form-control" type="file" name="file" id="fileToUpload">

  </br>     
</div>
<div class="col-md-12">
<label for="inputState" class="form-label">Digite Sua Mensagem</label>
                    
                        <textarea type="text" name="mensagem" id="mensagem" class="form-control" cols=100 rows="10" required="true"></textarea>
              
                    </div>
                    <div class="col-md-6">
</br>
    
</div>
 

    <div class="col-md-6">
    </br>   
    </div>
                   <div class="col-md-6">
                     
                   <button type="submit" onclick="myfunction()"  name="submit" class="btn btn-primary">
<td><a href="./download.php?file=<?php echo $row['file'];?>"><button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Enviar</button>
           
                    </button>
                    </div>
             
                    
                    </form>


                  </div>
</div>

     
      
</section>
</div>     
     </body>
  
     </html>
     <?php include('footer.php'); ?>