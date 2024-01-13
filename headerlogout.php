
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Lameira | Soft</title>


  
  </head>
<body class="hold-transition skin-blue sidebar-mini  ">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      
      <!-- logo for regular state and mobile devices -->
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-expand-lg "STYLE = "color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 20px; background-color: #0d6efd;">
  <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
  

              <ul class="nav navbar-nav"><?php  if(isset($_SESSION['email'])){
                           ?>
                          <li > <a href="dashboard.php"><font color ="white">Olá: <?php echo  ($_SESSION ['name']); ?></font></a></li>
                          <li > <a href="logout.php"><font color ="white">Sair</font></a></li>
                         
                         <?php
                           }else{
                            ?>
                            <li class="nav-item"> <a class="nav-link" href="login.php"></span><font color ="white">Clínica</font></a></li>
                            <li class="nav-item"> <a class="nav-link" href="signup.php"></span><font color ="white">Saúde</font></a></li>
                           <?php
                           }
                           ?> </ul>
                           
             
      </div>
    </nav>
  </header>
 