
<?php include('inc/connect.php');?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Lameira| Soft</title>
        <?php //include('header3.php');?>
        <!-- CSS FILES -->        
        

   <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="./bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/frontend/default/css/jquery.webui-popover.min.css">
<link rel="stylesheet" href="assets/frontend/default/css/select2.min.css">
<link rel="stylesheet" href="assets/frontend/default/css/slick.css">
<link rel="stylesheet" href="assets/frontend/default/css/slick-theme.css">
<!-- font awesome 5 -->
<link rel="stylesheet" href="assets/frontend/default/css/fontawesome-all.min.css">


<script src="assets/frontend/default/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="assets/frontend/default/js/vendor/jquery-3.2.1.min.js"></script>
<script src="assets/frontend/default/js/popper.min.js"></script>
<script src="assets/frontend/default/js/bootstrap.min.js"></script>
<script src="assets/frontend/default/js/slick.min.js"></script>
<script src="assets/frontend/default/js/select2.min.js"></script>
<script src="assets/frontend/default/js/tinymce.min.js"></script>
<script src="assets/frontend/default/js/multi-step-modal.js"></script>
<script src="assets/frontend/default/js/jquery.webui-popover.min.js"></script>
<script src="https://content.jwplatform.com/libraries/O7BMTay5.js"></script>
<script src="assets/frontend/default/js/main.js"></script>
<script src="assets/global/toastr/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>
<script src="assets/frontend/default/js/bootstrap-tagsinput.min.js"></script>
<script src="assets/frontend/default/js/custom.js"></script>
</head>
    
    <body>
		<nav class="navbar navbar-expand-lg  fixed-top " STYLE ="color: white; background-color: #0d6efd;">
                <div class="container">
                    <a class="navbar-brand mx-auto d-lg-none" href="index.php">
                        <strong class="d-block"><font color="white">Lameira Soft</font></strong>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            
                           
						</ul>
                    </div>

                </div>
            </nav>


		<link href="cssIndex/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="cssIndex/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js2/responsiveslides.min.js"></script>
		  <script>
			
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 100,
			        speed: 600
			      });
			});
		  </script>
	</head>
	<body>
		
			<!--start-image-slider---->
					<div class="image-slider">
						<!-- Slideshow 1 -->
						<img src="Image/Screen.jpg" height="100%"  width="100%" alt="">
					    <ul class="rslides" id="slider1">
					   
					    </ul>
						 <!-- Slideshow 2 -->
					</div>
					<!--End-image-slider---->
					
			
		    <div class="clear"> </div>
		    <div class="content-grids">
		    	<div class="wrap">
		    	<div class="section group">
								
				
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
					
					<center><a href="login.php">  <img src="images/grid-img3.png" alt="Descrição da Imagem" alt="Descrição da Imagem" width="30" height="25"></a></center>
					</div>
					<div class="text list_1_of_2">
					<a href="login.php"><font size="3"><font color="#0077cc"><b>Usuário</b></font></font></a>
						<!--p id="autoResize">Entrar como Paciente</p-->
						  <!--div class="button"><span><a href="./login.php">Clica Aqui</a></span></div-->
					</div>
				
				</div>	
			

				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						
				
					<center><a href="Medico.php"> <img src="images/grid-img1.png" alt="Descrição da Imagem" alt="Descrição da Imagem" width="30" height="25"></a></center>
					</div>
				 
					<div class="text list_1_of_2">
						<a href="Medico.php"><font size="3"><font color="#0077cc"><b>Gestor</b></font></font></a>
						<!--p id="autoResize">Entrar como Médico</p-->
						  <!--div class="button"><span><a href="medico.php">Clica Aqui</a></span></div-->
					</div>
				</div>
				

					<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						
				
						<center><a href="admin.php"><img src="images/grid-img2.png" alt="Descrição da Imagem" alt="Descrição da Imagem" width="30" height="25"></a></center>
					</div>
					<div class="text list_1_of_2">
						<a href="admin.php"><font size="3"><font color="#0077cc"><b>Admin</b></font></font></a>
						<!--p id="autoResize">Entrar como admin</p-->
						  <!--div class="button"><span><a href="admin.php">Clica Aqui</a></span></div-->
				
					 </div>
				</div>			
			</div>
		    </div>
		   </div>
		   <div class="clear"> </div>
		   <div class="footer">
		   	 <div class="wrap">
		   	<div class="footer-left">
		   		
		   	</div>
		   
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>

