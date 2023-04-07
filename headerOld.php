
<!-- menu fim -->
<?php include"./inc/connect.php";?>
    
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/app.css">
    <link rel="stylesheet" href="CSS/all.min.css">
    <script src="JS/bootstrap.bundle.min.js"></script>
    
    <script src="JS/app.js"></script>
       
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
          <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
   
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                    <div class="container-fluid">
                 <a class="btn btn-white" id="sidebarToggle"><span class="navbar-toggler-icon"></span></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="./index.php"><font color="white"><i class="fa fa-home"></i> Casa </font></a></li>
                                <li class="nav-item"><a class="nav-link" href="./actividades.php"><font color="white"><i class="fa fa-panel"></i> Área do paciente </font></a></li>
                                <li class="nav-item active"><a class="nav-link" href="./signup.php"><font color="white"> Resgista se </font></a></li>
                                <li class="nav-item"><a class="nav-link" href="./login.php"><font color="white"> Entrar </font></a></li>
                                <li class="nav-item">
                    <a class="nav-link" href="./dashboard.php"><font color="white">
                  <?php 
                    if(empty($_SESSION ['name'])){$_SESSION = [];}else
                    echo' '. ($_SESSION ['name']); ?> </font></a>
                </li>

                    <li class="nav-item">
                        
         

<img src="./dashboard/Upload/Adminprofile/<?php echo $_SESSION['imageupload'];?>" style="height:30px;width:30px;"  class="rounded-circle">

</li>  
                            </ul>
                        </div>
                    </div>
                </nav>

               