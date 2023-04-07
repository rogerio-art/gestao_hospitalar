<?php
   
    // Database connection
    include('config/db.php');

    global $wrongPwdErr, $accountNotExistErr, $emailPwdErr, $verificationRequiredErr, $email_empty_err, $pass_empty_err;

    if(isset($_POST['login_admin'])) {
        $email_sing        = $_POST['email_sing'];
        $senha_sing     = $_POST['senha_sing'];

        // clean data 
        $user_email = filter_var($email_sing, FILTER_SANITIZE_EMAIL);
        $pswd = mysqli_real_escape_string($connection, $senha_sing);

        // Query if email exists in db
        $sql = "SELECT * From admins WHERE emaildoadmin = '{$email_sing}' ";
        $query = mysqli_query($connection, $sql);
        $rowCount = mysqli_num_rows($query);

        // If query fails, show the reason 
        if(!$query){
           die("SQL Falhou: " . mysqli_error($connection));
        }

        if(!empty($email_sing) && !empty($senha_sing)){
            if(!preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{6,20}$/", $pswd)) {
                $wrongPwdErr = '<div class="alert alert-danger">
                        A senha deve ter entre 6 ou 20 letras, deve conter Simbolo, letras maiúsculas e menúsculas.
                    </div>';
            }
            // Check if email exist
            if($rowCount <= 0) {
                $accountNotExistErr = '<div class="alert alert-danger">
                        A conta do utilizador não existe.
                    </div>';
            } else {
                // Fetch user data and store in php session
                while($row = mysqli_fetch_array($query)) {
                    $id_admin            = $row['id_admin'];
                    $emaildoadmin     = $row['emaildoadmin'];
                    $nomeadmin      = $row['nomeadmin'];
                    $senhadoadmin         = $row['senhadoadmin'];
                    
                }

                // Verify password
          $senha = password_verify($senha_sing, $pass_word);

                // Allow only verified user
            if($esta_ativo  == '0'||'1')
                 {
                    if($email_sing == $emaildoadmin && $senha_sing == $senhadoadmin) {
                       header("Location: ./paginaprincipal_admin.php");
                       
                       $_SESSION['id_admin'] = $id_admin;
                       $_SESSION['emaildoadmin'] = $emaildoadmin;
                       $_SESSION['nomeadmin'] = $nomeadmin;
                       $_SESSION['senhadoadmin'] = $senhadoadmin;
             

                    } else {
                        $emailPwdErr = '<div class="alert alert-danger">
                                Seu email ou senha está incorreto.
                            </div>';
                    }
                }else {
                    $verificationRequiredErr = '<div class="alert alert-danger">
                            Confirma no seu e-mail para fazer o Login.
                        </div>';
                }

            }

        } else {
            if(empty($email_sing)){
                $email_empty_err = "<div class='alert alert-danger email_alert'>
                            Email Incorreto.
                    </div>";
            }
            
            if(empty($senha_sing)){
                $pass_empty_err = "<div class='alert alert-danger email_alert'>
                            Senha Incorreta.
                        </div>";
            }            
        }

    }

?>    