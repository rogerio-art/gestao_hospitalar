<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>consenci loja</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Consenci Loja.</h1>
                       <p>Receba 20% de desconto na sua primeira compra.</p>
                 <a href="products.php" class="btn btn-danger">Comprar agora</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
                <div class="jumbotron">
                    <h2>PRODUTOS EM DESTAQUE E DISPONÍVEIS NA Loja</h2>
                     <br>
                </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/camera.jpg" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Câmeras de Vigilância</p>
                                        <p>Monitor sua empresa ou residência a distância de um click</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/watch.jpg" alt="Watch">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Relógio Biométrico</p>
                                    <p>O melhor da assiduidade para sua Empresa.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/toner.jpg" alt="toner">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Toner Compativel</p>
                                   <p>toners genuinos e compativeis 0% de risco na impressora.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
         
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy <a href="Clinica-saude.co.net">roli-tecnology</a> Loja Online. Todos os direitos reservados.</p>
                   <p>Este website foi desenvolvido por <a href="Clinica-saude.co.net">Rogério Lameira Alfredo.</a></p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>