


<?php include('header.php');?>
<?php include('sidebar.php');?>


<!DOCTYPE html>
<html lang="en" >
<title> Login  </title>
<head>
  <meta charset="UTF-8">
   <link rel="stylesheet" href="css/style3.css">
    <!-- Bootstrap 3.3.7 -->                                       
    
</head>

      <!-- The sidebar -->

 
      <div class="content-wrapper">
        <section class="content-header">
    <h1>
      <font color="black">Login Médico</font>  
        <small></small>
       </h1>

     <ol class="breadcrumb">
       <li><a href="./index.php"><i class="fa fa-dashboard"></i>Casa</a></li>
    
     </ol>
   </section>
   <section class="content">
     <div class="box box-primary">
       <div class="box-header with-border">

    <form action="scriptmedicologin.php"  method="post" class="col-sm-12 offset-sm-4">
      <div class="row">
      <center>  <h1><i class="fa fa-user"></i> Login Médico</h1></center>
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
       
      <input name="loginmedi" type="submit"  onclick="submit" id="log-btn" value="Entrar" STYLE = "color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #2196f3;" size = "10" maxlength = "30" class="form-control" class="btn btn-primary"  />
      </div>

   
    </form>
  </section>
</div>
</div>
</div>
        </div>

</body>

</html>
<?php include('footer.php');?>