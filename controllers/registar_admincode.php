<?php
   
    // Database connection
    include('config/db.php');

    // Swiftmailer lib
    require_once './vendor/autoload.php';
    
    // Error & success messages
    // global $success_msg, $emaildoadmin_exist, $f_NameErr, $l_NameErr, $_emaildoadminErr, $_mobileErr, $_moradaErr;
    // global $fNameEmptyErr, $lNameEmptyErr, $emaildoadminEmptyErr, $mobileEmptyErr, $moradaEmptyErr, $emaildoadmin_verify_err, $emaildoadmin_verify_success;
    
    // Set empty form vars for validation mapping
 //   $_first_name = $_last_name = $_emaildoadmin = $_mobile_number = $_morada = "";

    if(isset($_POST["submit"])) {
        $emaildoadmin         = $_POST["emaildoadmin"];
        $nomeadmin	     = $_POST["nomeadmin"];
        $senhadoadmin      = $_POST["senhadoadmin"];
        
    

        // check if emaildoadmin already exist
        $emaildoadmin_check_query = mysqli_query($connection, "SELECT * FROM admins WHERE emaildoadmin = '{$emaildoadmin}' ");
        $rowCount = mysqli_num_rows($emaildoadmin_check_query);


        // PHP validation
        // Verify if form values are not empty
        if(!empty($nomeadmin	) && !empty($emaildoadmin) /*&& !empty($emaildoadmin) */&& !empty($senhadoadmin)){
            
            // check if user emaildoadmin already exist
            if($rowCount > 0) {
                $emaildoadmin_exist = '
                    <div class="alert alert-danger" role="alert">
                       O e-mail do usuário já existe!
                    </div>
                ';
            } else {
                // clean the form data before sending to database
                $_ememail = mysqli_real_escape_string($connection, $emaildoadmin);
                $_nome= mysqli_real_escape_string($connection, $nomeadmin);
                $_medico = mysqli_real_escape_string($connection, $senhadoadmin);
              
            
             

                // perform validation
            //     if(!preg_match("/^[a-zA-Z ]*$/", $_first_name)) {
            //         $f_NameErr = '<div class="alert alert-danger">
            //         É permitido apenas letras e espaço.
            //             </div>';
            //     }
            //     if(!preg_match("/^[a-zA-Z ]*$/", $_last_name)) {
            //         $l_NameErr = '<div class="alert alert-danger">
            //                 É permitido apenas letras e espaço.
            //             </div>';
            //     }
            //    /* if(!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
            //         $_emailErr = '<div class="alert alert-danger">
            //                 Formato de e-mail inválido.
            //             </div>';
            //     }*/
            //     if(!preg_match("/^[0-9]{10}+$/", $_mobile_number)) {
            //         $_mobileErr = '<div class="alert alert-danger">
            //                 apenas 9 número é permitido.
            //             </div>';
            //     }
            //     if(!preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{6,20}$/", $_morada)) {
            //         $_moradaErr = '<div class="alert alert-danger">
            //                 A morada deve ter entre 6 ou 20 letras, uma letra maiúcula e um símbolo.
            //             </div>';
            //     }
                
            //     // Store the data in db, if all the preg_match condition met
            //     if(!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
            //         $_emailErr = '<div class="alert alert-danger">
            //                 Formato de e-mail inválido.
            //             </div>';
            //         // Generate random activation TipodePaciente
               //     $TipodePaciente = md5(rand().time());

                    // Password hash
              //      $morada_hash = password_hash($morada, PASSWORD_BCRYPT);

                    // Query
                    $sql = "INSERT INTO admins ( nomeadmin, emaildoadmin, senhadoadmin) 
                    VALUES ('{$nomeadmin}', '{$emaildoadmin}', '{$senhadoadmin}')";
                    
                    // Create mysql query
                    $sqlQuery = mysqli_query($connection, $sql);
                    
                    if(!$sqlQuery){
                        die("MySQL query failed!" . mysqli_error($connection));
                    } 
                    header("Location: ./registar_admin_sucesso.php");
                    // Send verification emaildoadmin
                     if($sqlQuery) {
                       $msg = 'Clica no link de activação para verificares no teu e-mail. <br><br>
                        <a href="http://localhost/gestaohospitalar/user_verificaiton.php?TipodePaciente='.$TipodePaciente.'"> Click here to verify emaildoadmin</a>
                     ';

                        // Create the Transport
                        $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
                         ->setUsername('your_emaildoadmin@gmail.com')
                        ->setPassword('your_emaildoadmin_morada');

                         // Create the Mailer using your created Transport
                         $mailer = new Swift_Mailer($transport);

                         // Create a message
                         $message = (new Swift_Message('Por favor, Verifica a sua caixa de e-mail!'))
                         ->setFrom([$emaildoadmin => $nomeadmin	 . ' ' . $senhadoadmin])
                         ->setTo($emaildoadmin)
                        ->addPart($msg, "text/html")
                         ->setBody('Olá! Usuário');

                         // Send the message
                         $result = $mailer->send($message);
                          
                         if(!$result){
                         $emaildoadmin_verify_err = '<div class="alert alert-danger">
                            Verificado, emaildoadmin não enviado!!
                            </div>';
                        } else {
                            $emaildoadmin_verify_success = '<div class="alert alert-success">
                               Verificado, emaildoadmin enviado!
                       </div>';
                        }
                     }
                }
            }
        } else {
            if(empty($nomeadmin	)){
                $fNameEmptyErr = '<div class="alert alert-danger">
                    O campo nome não pode estar em branco.
                </div>';
            }
            if(empty($senhadoadmin)){
                $lNameEmptyErr = '<div class="alert alert-danger">
                O campo sobre-nome não pode estar em branco.
                </div>';
            }
            if(empty($emaildoadmin)){
                $emaildoadminEmptyErr = '<div class="alert alert-danger">
                O campo e-mail não pode estar em branco.
                </div>';
            }
            if(empty($numerodetelefone)){
                $mobileEmptyErr = '<div class="alert alert-danger">
                O campo Telefone não pode estar em branco.
                </div>';
            }
            if(empty($morada)){
                $moradaEmptyErr = '<div class="alert alert-danger">
                O campo morada não pode estar em branco.
                </div>';
            }           
            if(empty($TipodePaciente)){
                $moradaEmptyErr = '<div class="alert alert-danger">
                O campo morada não pode estar em branco.
                </div>';
            }           
            
            if(empty($exame)){
                $moradaEmptyErr = '<div class="alert alert-danger">
                O campo morada não pode estar em branco.
                </div>';
            }  
           }
 

?>