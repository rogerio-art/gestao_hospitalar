<?php
   
    // Database connection
    include('config/db.php');

    global $wrongPwdErr, $accountNotExistErr, $emailPwdErr, $verificationRequiredErr, $email_empty_err, $pass_empty_err;

    if(isset($_POST['login'])) {
        $email_signin        = $_POST['email_signin'];
        $password_signin     = $_POST['password_signin'];

        // clean data 
        $user_email = filter_var($email_signin, FILTER_SANITIZE_EMAIL);
        $pswd = mysqli_real_escape_string($connection, $password_signin);

        // Query if email exists in db
        $sql = "SELECT * From usuario WHERE email = '{$email_signin}' ";
        $query = mysqli_query($connection, $sql);
        $rowCount = mysqli_num_rows($query);

        // If query fails, show the reason 
        if(!$query){
           die("SQL Falhou: " . mysqli_error($connection));
        }

        if(!empty($email_signin) && !empty($password_signin)){
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
                    $id            = $row['id'];
                    $primeironome     = $row['primeironome'];
                    $sobrenome      = $row['sobrenome'];
                    $email         = $row['email'];
                    $numerodetelefone   = $row['numerodetelefone'];
                    $pass_word     = $row['senha'];
                    $simbolo         = $row['simbolo'];
                    $esta_ativo      = $row['esta_ativo'];
                }

                // Verify password
          $senha = password_verify($password_signin, $pass_word);

                // Allow only verified user
            if($esta_ativo  == '0'||'1')
                 {
                    if($email_signin == $email && $password_signin == $senha) {
                       header("Location: ./index.php");
                       
                       $_SESSION['id'] = $id;
                       $_SESSION['primeironome'] = $primeironome;
                       $_SESSION['sobrenome'] = $sobrenome;
                       $_SESSION['email'] = $email;
                       $_SESSION['numerodetelefone'] = $numerodetelefone;
                       $_SESSION['simbolo'] = $simbolo;
                       $_SESSION['esta_ativo'] = $esta_ativo;
                      

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
            if(empty($email_signin)){
                $email_empty_err = "<div class='alert alert-danger email_alert'>
                            Email Incorreto.
                    </div>";
            }
            
            if(empty($password_signin)){
                $pass_empty_err = "<div class='alert alert-danger email_alert'>
                            Senha Incorreta.
                        </div>";
            }            
        }

    }

?>    