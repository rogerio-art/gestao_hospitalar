<?php include('config/db.php'); ?>
<?php include('./header_admin.php'); ?>
<?php include('./rodape.php'); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Gestao hospitalar</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>


<body>
      <!-- The sidebar -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
        body {
          margin: 0;
          font-family: "Lato", sans-serif;
        }
        
        .sidebar {
          margin: 0;
          padding: 0;
          width: 200px;
          background-color: #f1f1f1;
          position: fixed;
          height: 100%;
          overflow: auto;
        }
        
        .sidebar a {
          display: block;
          color: black;
          padding: 16px;
          text-decoration: none;
        }
         
        .sidebar a.active {
          background-color: #04AA6D;
          color: white;
        }
        
        .sidebar a:hover:not(.active) {
          background-color: brown;
          color: white;
        }
        
        div.content {
          margin-left: 200px;
          padding: 1px 16px;
          height: 1000px;
        }
        
        @media screen and (max-width: 700px) {
          .sidebar {
            width: 100%;
            height: auto;
            position: relative;
          }
          .sidebar a {float: left;}
          div.content {margin-left: 0;}
        }
        
        @media screen and (max-width: 400px) {
          .sidebar a {
            text-align: center;
            float: none;
          }
        }
        </style>

<body>  
<div class="sidebar">
            
            <a class="active" href="http://localhost/gestaohospitalar/paginaprincipal_admin.php">Início</a>
            <a href="http://localhost/gestaohospitalar/verpaciente.php">Paciente</a> 
            <a href="http://localhost/gestaohospitalar/verconsulta.php"> Consultas</a>
              <a href="http://localhost/gestaohospitalar/vermedico.php">Médicos</a>
               <a href="http://localhost/gestaohospitalar/perfil_admin.php">Sair</a>
            </div>
           
        <!-- Page content -->    
        <div class="content">
        <div class="clearfix">
  <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 25rem">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">Perfil do Admin</h5>
                    <h3 class="card-subtitle mb-2 text-muted"><?php echo strtoupper($_SESSION ['nomeadmin']); ?>
                    <p class="card-text">Enderesso de E-mail: <?php echo $_SESSION['emaildoadmin']; ?></p>
                   <a class="btn btn-danger btn-block" href="http://localhost/gestaohospitalar/index.php">Sair</a>
                </div>
            </div>
        </div>
    </div>
    </div>
        </div>
</body>

</html>