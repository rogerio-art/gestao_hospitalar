<?php include('./controllers/registar_admincode.php'); ?>


         <?php require_once('./vendor/autoload.php'); ?>
<?php include('./header_admin.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>paginaprincipal</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body><!-- The sidebar -->
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



<div class="sidebar">
    
<a class="active" href="http://localhost/gestaohospitalar/index.php">Visão Geral</a>
  <a href="http://localhost/gestaohospitalar/marcarconsulta.php">Marcar Online</a>
  <a href="http://localhost/gestaohospitalar/especialidade.php">Especialidades</a>
  <a href="http://localhost/gestaohospitalar/contacto.php">Fala Connosco</a>
   <a href="http://localhost/gestaohospitalar/login_admin.php">Admin</a>
</div>
<!-- Page content -->    
<div class="row my-5">
        <div class="col-sm-6 offset-sm-3">
            <div class="inner-block">
                <form action="" method="post">
                <h3><font color="bronw">Cadastrar Admin</font></h3>

                    <?php //echo $success_msg; ?>
                    <?php// echo $email_exist; ?>

                    <?php// echo $email_verify_err; ?>
                    <?php// echo $email_verify_success; ?>

                    <div class="form-group">
                        <label>Nome do Admin</label>
                        <input type="text" class="form-control" name="nomeadmin" id="nomeadmin" />

                        <?php// echo $fNameEmptyErr; ?>
                        <?php //echo $f_NameErr; ?>
                    </div>

                  
                    <div class="form-group">
                        <label>Email do Admin</label>
                        <input type="email" class="form-control" name="emaildoadmin" id="emaildoadmin" />

                        <?php //echo $_emailErr; ?>
                        <?php //echo $emailEmptyErr; ?>
                    </div>

                    <div class="form-group">
                        <label>Senha</label>
                        <input type="text" class="form-control" name="senhadoadmin" id="senhadoadmin" />

                        <?php //echo $_mobileErr; ?>
                        <?php// echo $mobileEmptyErr; ?>
                    </div>

                    
                    

                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Cadastrar
                    </button>
                </form>
            </div>
        </div>
    </div>

   </body>
   <?php include('./rodape.php'); ?>
</html>
