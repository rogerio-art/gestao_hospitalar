<?php include('headerlogout.php');?>
<!doctype html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Lameira| Soft</title>
        <link rel="favicon" href="assets/frontend/default/img/icons/favicon.ico">
<link rel="apple-touch-icon" href="assets/frontend/default/img/icons/icon.png">
<link rel="stylesheet" href="assets/frontend/default/css/jquery.webui-popover.min.css">
<link rel="stylesheet" href="assets/frontend/default/css/select2.min.css">
<link rel="stylesheet" href="assets/frontend/default/css/slick.css">
<link rel="stylesheet" href="assets/frontend/default/css/slick-theme.css">
<!-- font awesome 5 -->
<link rel="stylesheet" href="assets/frontend/default/css/fontawesome-all.min.css">

<link rel="stylesheet" href="assets/frontend/default/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/frontend/default/css/bootstrap-tagsinput.css">
<link rel="stylesheet" href="assets/frontend/default/css/main.css">
<link rel="stylesheet" href="assets/frontend/default/css/responsive.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
<link rel="stylesheet" href="assets/global/toastr/toastr.css' ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.css" />
<script src="assets/backend/js/jquery-3.3.1.min.js"></script>

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

<!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="./bower_components/bootstrap/dist/css/bootstrap.min.css">
    </head>
    
    <body id="top">
   
<section class="category-course-list-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
              <div class="user-dashboard-box mt-3">
                  <div class="user-dashboard-content w-100 login-form hidden">
                      <div class="content-title-box">
                          <div class="title">login</div>
                          <div class="subtitle"></div>
                      </div>
                      
                  </div>
                  <div class="user-dashboard-content w-100 register-form">
                      <div class="content-title-box">
                          <div class="title">Faça o seu registo</div>
                          <!--div class="subtitle">faça o seu registro.</div-->
                      </div>
                      <form action="register.php" method="post">
                          <div class="content-box">
                              <div class="basic-group">
                                  <div class="form-group">
                                      <label for="first_name"><span class="input-field-icon"><i class="fas fa-user"></i></span> nome:</label>
                                      <input type="text" class="form-control" name = "name" id="name" placeholder="name" value="" required>
                                  </div>
                                  <!--div class="form-group">
                                      <label for="endereco"><span class="input-field-icon"><i class="fas fa-user"></i></span> endereco:</label-->
                                      <input type="hidden" class="form-control" name = "endereco" id="endereco" placeholder="endereco" value="Viana" required>
                                  <!--/div-->

                                  <!--div class="form-group">
                                      <label for="phone"><span class="input-field-icon"><i class="fas fa-user"></i></span> phone:</label-->
                                      <input type="hidden" class="form-control" name = "phone" id="phone" placeholder="phone" value="944259591" required>
                                  <!--/div-->
                                  <!--div class="form-group"->
                                      <label for="phone"><span class="input-field-icon"><i class="fas fa-user"></i></span> idade:</label-->
                                      <input type="hidden" class="form-control" name = "yearsOld" id="yearsOld" placeholder="idade" value="30" required>
                                  <!--/div-->

                                  <!--div class="form-group">
    <label for="inputState" class="form-label">Género</label-->
    <!--select type="hidden" id="genero"  name="genero"  class="form-control" value="Masculino"-->
      <!--option selected>Escolher</option>
      <option>Masculino</option>
      <option>Femenino</option>
      <option>outro</option>
    </select>
  </div-->

                                  <!--div class="form-group">
                                      <label for="cartaodesaude"><span class="input-field-icon"><i class="fas fa-user"></i></span> cartaodesaude:</label-->
                                      <input type="hidden" class="form-control" name = "cartaodesaude" id="cartaodesaude" placeholder="cartaodesaude" value="1234567" required>
                                  <!--/div-->

                                  <div class="form-group">
                                      <label for="registration-email"><span class="input-field-icon"><i class="fas fa-envelope"></i></span> email:</label>
                                      <input type="email" class="form-control" name = "email" id="email" placeholder="email" value="" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="senhad"><span class="input-field-icon"><i class="fas fa-lock"></i></span> password:</label>
                                      <input type="password" class="form-control" name = "senha" id="senha" placeholder="password" value="" required>
                                  </div>
                              </div>
                          </div>
                          <div class="content-update-box">
                          <!--input  type="submit" name="submit" id="submit" class="form-control" value="Salvar" STYLE = "color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #2196f3;" size = "10" maxlength = "30" class="form-control" class="btn btn-primary"  /-->
  
                             
                              <input name="submit" type="submit"  onclick="submit" id="log-btn" value="Salvar" STYLE = "color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #2196f3;" size = "10" maxlength = "30" class="form-control" class="btn btn-primary"  />
                      
                          </div>
                          <div class="account-have text-center">
                              Já tem uma conta? <a href="./login.php">login</a>
                          </div>
                      </form>
                  </div>

                  
                          
                      </form>
                  </div>
              </div>
            </div>
        </div>
    </div>
    </section>
<?php include('rodape.php'); ?>
<script type="text/javascript"> 
  function toggoleForm(form_type) {
    if (form_type === 'login') {
      $('.login-form').show();
      $('.forgot-password-form').hide();
      $('.register-form').hide();
    }else if (form_type === 'registration') {
      $('.login-form').hide();
      $('.forgot-password-form').hide();
      $('.register-form').show();
    }else if (form_type === 'forgot_password') {
      $('.login-form').hide();
      $('.forgot-password-form').show();
      $('.register-form').hide();
    }
  }
</script>
</body>
</html>