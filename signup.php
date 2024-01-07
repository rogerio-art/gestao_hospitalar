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
                  <div class="user-dashboard-content w-100 login-form hidden">
                      <div class="content-title-box">
                          <div class="title">login</div>
                          <div class="subtitle"></div>
                      </div>
                      
                  </div>
                  <div class="user-dashboard-content w-100 register-form">
                      <div class="content-title-box">
                          <div class="title">formulário de cadastro</div>
                          <div class="subtitle">faça o seu registro.</div>
                      </div>
                      <form action="register.php" method="post">
                          <div class="content-box">
                              <div class="basic-group">
                                  <div class="form-group">
                                      <label for="first_name"><span class="input-field-icon"><i class="fas fa-user"></i></span> nome:</label>
                                      <input type="text" class="form-control" name = "name" id="name" placeholder="name" value="" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="endereco"><span class="input-field-icon"><i class="fas fa-user"></i></span> endereco:</label>
                                      <input type="text" class="form-control" name = "endereco" id="endereco" placeholder="endereco" value="" required>
                                  </div>

                                  <div class="form-group">
                                      <label for="phone"><span class="input-field-icon"><i class="fas fa-user"></i></span> phone:</label>
                                      <input type="text" class="form-control" name = "phone" id="phone" placeholder="phone" value="" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="phone"><span class="input-field-icon"><i class="fas fa-user"></i></span> idade:</label>
                                      <input type="text" class="form-control" name = "yearsOld" id="yearsOld" placeholder="idade" value="" required>
                                  </div>

                                  <div class="form-group">
    <label for="inputState" class="form-label">Género</label>
    <select id="genero"  name="genero"  class="form-control">
      <option selected>Escolher</option>
      <option>Masculino</option>
      <option>Femenino</option>
      <option>outro</option>
    </select>
  </div>

                                  <div class="form-group">
                                      <label for="cartaodesaude"><span class="input-field-icon"><i class="fas fa-user"></i></span> cartaodesaude:</label>
                                      <input type="text" class="form-control" name = "cartaodesaude" id="cartaodesaude" placeholder="cartaodesaude" value="" required>
                                  </div>

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
  
                              <button type="submit" class="btn">sign_up</button>
                          </div>
                          <div class="account-have text-center">
                              already_have_an_account? <a href="javascript::" onclick="toggoleForm('login')">login</a>
                          </div>
                      </form>
                  </div>

                  <div class="user-dashboard-content w-100 forgot-password-form hidden">
                      <div class="content-title-box">
                          <div class="title">forgot_password</div>
                          <div class="subtitle">provide_your_email_address_to_get_password.</div>
                      </div>
                      <form action="login/forgot_password/frontend" method="post">
                          <div class="content-box">
                              <div class="basic-group">
                                  <div class="form-group">
                                      <label for="forgot-email"><span class="input-field-icon"><i class="fas fa-envelope"></i></span> email:</label>
                                      <input type="email" class="form-control" name = "email" id="forgot-email" placeholder="email" value="" required>
                                      <small class="form-text text-muted">provide_your_email_address_to_get_password.</small>
                                  </div>
                              </div>
                          </div>
                          <div class="content-update-box">
                              <button type="submit" class="btn">reset_password</button>
                          </div>
                          <div class="forgot-pass text-center">
                              want_to_go_back? <a href="javascript::" onclick="toggoleForm('login')">login</a>
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
