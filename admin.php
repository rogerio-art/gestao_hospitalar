


<?php include('inc/connect.php');?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Clínica| Saúde</title>
        <?php //include('header3.php');?>
        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link href="cssi/bootstrap.min.css" rel="stylesheet">

        <link href="cssi/bootstrap-icons.css" rel="stylesheet">

        <link href="cssi/owl.carousel.min.css" rel="stylesheet">

        <link href="cssi/owl.theme.default.min.css" rel="stylesheet">

        <link href="cssi/templatemo-medic-care.css" rel="stylesheet">


   
    <!-- Font Awesome -->
  <!-- Ionicons -->
   <!-- Select2 -->
  <!-- Theme style -->
<!--

TemplateMo 566 Medic Care

https://templatemo.com/tm-566-medic-care

-->
    </head>
    
    <body id="top">
    
        <main>

        <nav class="navbar navbar-expand-lg  fixed-top " STYLE ="color: white; background-color: #0d6efd;">
                <div class="container">
                    <a class="navbar-brand mx-auto d-lg-none" href="index.php">
                        
                        <strong class="d-block"><font color="white">Gestão Hospitalar</font></strong>
                    </a>


                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon "></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php"><font color="white">Início</font></a>
                            </li>

                           
                            <li class="nav-item">
                                <a class="nav-link" href="admin.php"><font color="white">Entrar</font></a>
                            </li>

                           
								       </ul>
                    </div>

                </div>
            </nav>
    
 <body>
 <div class="content">
        <section class="content-header">
    <h1>
      <font color="black"> </font>  
        <small></small>
       </h1>

     <ol class="breadcrumb">
       <li><a href="./index.php"><i class="fa fa-dashboard"></i></a></li>
    
     </ol>
   </section>
   <section class="content">
     <div class="box box-primary">
       <div class="box-header with-border">

    <form action="scriptadmin.php"  method="post" class="col-sm-8 offset-sm-2">
      <div class="row">
      <center>  <h1><i class="fa fa-user"></i> Login Admin</h1></center>
        <div class="form-group">
          <label class="col-sm-1 control-label" for="e-mail"><i class="fa fa-envelope">Email</i></label>
          <div class="col-sm-12" >
            <input class="form-control" id="e-mail" name="username" type="email" />
          </div>
        </div>

        <br>
        <div class="form-group">
          
          <label class="col-sm-1 control-label" for="password"><i class="fa fa-key">Senha</i></label>
          <div class="col-md-12">
            <input class="form-control" id="password" name="password" type="password"/>
          </div>
        </div>
        <br>
       
          
          <label class="col-sm-1 control-label" for="password"><font color="white"  <i class=""></i>Clica </label></font>
          <div class="col-md-12">
            <!-- <button class="form-control btnbackground-blue"  id="log-btn" name="login" type="submit"  class="btn btn-primary">Entrar</button>
          <a href=""  id="submit" name="btn-lg" type="submit"   class="btn btn-primary">Entrar</a> -->
       
      <input name="loginadmin" type="submit"  onclick="submit" id="log-btn" value="Entrar" STYLE = "color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #2196f3;" size = "10" maxlength = "30" class="form-control" class="btn btn-primary"  />
      </div>

  
    </form>
    

  </section>

  <br>
  <br>
</body>
</div>
<br>


<footer class="site-footer section-padding" id="contact">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 me-auto col-12">
                        <h5 class="mb-lg-4 mb-3"><font color="white">Hora de Atendimento </font></h5>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex">
                            <font color="white">  Segunda</font>
                            <span><font color="white">Aberto 24h/24h</font></span>
                            </li>

                            <li class="list-group-item d-flex">
                            <font color="white"> Terça</font>
                            <span><font color="white">Aberto 24h/24h</font></span>
                            </li>

                            <li class="list-group-item d-flex">
                            <font color="white">Quarta</font>
                                <span><font color="white">Aberto 24h/24h</font></span>
                            </li>
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex">
                            <font color="white">   Quinta</font>
                            <span><font color="white">Aberto 24h/24h</font></span>
                            </li>

                            <li class="list-group-item d-flex">
                            <font color="white"> Sexta</font>
                                <span><font color="white">Aberto 24h/24h</font></span>
                            </li>

                            <li class="list-group-item d-flex">
                            <font color="white">Sábado</font>
                                <span><font color="white">Aberto 24h/24h</font></span>
                            </li>
                            <li class="list-group-item d-flex">
                            <font color="white">  Domingo</font>
                                <span><font color="white">Aberto 24h/24h</font></span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 col-12 my-4 my-lg-0">
                        <h5 class="mb-lg-4 mb-3"><font color="white">Telefone</font></h5>

                        <p><a href="mailto:atendimento@clinica-saude.co.ao"><font color="white">Email | atendimento@clinica-saude.co.ao</font></a><p>

                        <p><font color="white">Localização |Zaire-Soyo Bairro Pangala Rua principal</font></p>
                        <p><font color="white">Telefone |937 277 985 | 998 521 361 | 937 279 624</font></p>
                  
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 ms-auto">
                        <h5 class="mb-lg-4 mb-3"><font color="white">Redes Sociais</font></h5>

                        <ul class="social-icon">
                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-12 ms-auto mt-4 mt-lg-0">
                        <p class="copyright-text">Copyright © Clínica Saúde 2021 
                        <br><br>Desenvolvido: <a href="http://www.radiomixa.ao" target="_parent"><font color="white">Rogério Lameira Alfredo</font></a></p>
                    </div>

                </div>
            </section>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="jsi/jquery.min.js"></script>
        <script src="jsi/bootstrap.bundle.min.js"></script>
        <script src="jsi/owl.carousel.min.js"></script>
        <script src="jsi/scrollspy.min.js"></script>
        <script src="jsi/custom.js"></script>
<!--

TemplateMo 566 Medic Care

https://templatemo.com/tm-566-medic-care

-->
    </body>
    
</html>