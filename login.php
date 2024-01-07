<?php include('headerlogout.php');?>

<link rel="favicon" href="assets/frontend/default/img/icons/favicon.ico' ?>">
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
<script src="('assets/backend/js/jquery-3.3.1.min.js"></script>

<section class="category-course-list-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
              <div class="user-dashboard-box mt-3">
                  <div class="user-dashboard-content w-100 login-form">
                      <div class="content-title-box">
                          <div class="title" >login</div>
                          <div class="subtitle">Confirme seus dados de usuario para inicar.</div>
                      </div>
                      <form action="scriptlogin.php" method="post">
                          <div class="content-box">
                              <div class="basic-group">
                                  <div class="form-group">
                                      <label for="login-email"><span class="input-field-icon"><i class="fas fa-envelope"></i></span> email:</label>
                                      <input type="email" class="form-control" name = "username" id="username" placeholder="email" value="" required>
                                  </div>
                                  <div  class="form-group">
                                      <label for="login-password"><span class="input-field-icon"><i class="fas fa-lock"></i></span> senha:</label>
                                      <input type="password" class="form-control" name = "password" placeholder="password" value="" required>
                                  </div>
                              </div>
                          </div>
                          <div class="content-update-box">
                              <input name="loginuser" type="submit"  onclick="submit" id="log-btn" value="Entrar" STYLE = "color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #2196f3;" size = "10" maxlength = "30" class="form-control" class="btn btn-primary"  />
                      
                      
                            </div>
                          <div class="forgot-pass text-center">
                              <span></span>
                              <a href="changepassword.php">Esqueceu sua senha?</a>
                          </div>
                          <div class="account-have text-center">
                              ainda não tem uma conta? <a href="./signup.php">Regista se Agora</a>
                          </div>
                      </form>
                  </div> 
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

