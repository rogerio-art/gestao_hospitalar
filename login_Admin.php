     
   <?php include('./header.php'); ?>
   <?php include"./dashboard/Include/sidebarPatient.php";?>
<?php  include("./config/db.php") ;?>
  <?php include('./controllers/login_admincode.php'); ?>
  <?php require_once('./vendor/autoload.php'); ?>

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

<body>


    <!-- Page content -->
    <div class="content">
        <section class="content-header">
      <h1>
       Login do Admon 
        <small></small>
       </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i>Casa</a></li>
       <li class="active"> Login Admin</li>
     </ol>
   </section>
   <section class="content">
     <div class="box box-primary">
       <div class="box-header with-border">
         <i class=""></i>
          <h3 class="box-title ">Login do Admin</h3>
          </div>
        

<!-- Page content -->
<div class="content">
<div class="">
    <div class="row my-5">
        <div class="col-sm-6 offset-sm-3">
 
            <div>
            <h3><font color="bronw">LOGIN ADMIN</font></h3>

                <form action="?a=admin_login_submit" method="post">

                    <div class="my-3">
                        <label>Administrador:</label>
                        <input type="email" name="email_sing" id="email_sing"placeholder="email admin" required class="form-control">
                    </div>
                    <div class="my-3">
                        <label>Senha:</label>
                        <input type="password" name="senha_sing" id="senha_sing" placeholder="Senha" required class="form-control">
                    </div>
                    <div class="my-3 text-center">
                    <button type="submit" name="login_admin" id="sign_in" class="btn btn-primary">Entrar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>                   

</div>
   </body>
</html>
<?php include('./rodape.php'); ?>