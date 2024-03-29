<?php include("inc/connect.php");?>

<?php
// // Inicia a sessão


// // Define o tempo de expiração em segundos (por exemplo, 30 minutos)
// $expira_em_segundos = 1800; // 30 minutos * 60 segundos por minuto

// // Verifica se a sessão existe e está ativa
// if (isset($_SESSION['email']) && (time() - $_SESSION['last_activity']) < $expira_em_segundos) {
//     // Atualiza o último momento de atividade da sessão
//     $_SESSION['last_activity'] = time();
//     // Restante do seu código para a sessão ativa
// } else {
//     // Sessão expirada ou inexistente, redirecione para a página de login
//     header("Location: login.php");
//     exit();
// }
// ?>

 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Lameira | Soft</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="./bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="./bower_components/Ionicons/css/ionicons.min.css">
   <!-- Select2 -->
  <link rel="stylesheet" href="./bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="./dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="./bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="./bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="./bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="./bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="./plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<!-- fullCalendar -->
  <link rel="stylesheet" href="./bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="./bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
  <link rel="stylesheet" href="./bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="css/style3.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<style>
/* Popup container - can be anything you want */
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 220px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}
</style>

  
  </head>
<body class="hold-transition skin-blue sidebar-mini  ">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="actividades.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Lameira-</b>Soft</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-fixed-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
  

              <ul class="nav navbar-nav"><?php  if(isset($_SESSION['email'])){
                           ?>
                          <li > <a href="dashboard.php"><font color ="white">Olá: <?php echo  ($_SESSION ['name']); ?></font></a></li>
                          <li > <a href="logoutUser.php"><font color ="white">Sair</font></a></li>
                         
                         <?php
                           }else{
                            ?>
                            <li class="nav-item"> <a class="nav-link" href="login.php"></span><font color ="white">Entrar</font></a></li>
                            <li class="nav-item"> <a class="nav-link" href="signup.php"></span><font color ="white">Registar-se</font></a></li>
                           <?php
                           }
                           ?> </ul>
                           
             
      </div>
    </nav>
  </header>
 