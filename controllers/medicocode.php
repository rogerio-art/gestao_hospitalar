<?php
   
    // Database connection
    include('config/db.php');

    // Swiftmailer lib
    require_once './vendor/autoload.php';
    
    // Error & success messages
    // global $success_msg, $emaildomedico_exist, $f_NameErr, $l_NameErr, $_emaildomedicoErr, $_mobileErr, $_moradaErr;
    // global $fNameEmptyErr, $lNameEmptyErr, $emaildomedicoEmptyErr, $mobileEmptyErr, $moradaEmptyErr, $emaildomedico_verify_err, $emaildomedico_verify_success;
    
    // Set empty form vars for validation mapping
 //   $_first_name = $_last_name = $_emaildomedico = $_mobile_number = $_morada = "";

    if(isset($_POST["submit"])) {
        $nomemedico     = $_POST["nomemedico"];
        $especialidade      = $_POST["especialidade"];
        $emaildomedico         = $_POST["emaildomedico"];
        $numerodetelefone  = $_POST["numerodetelefone"];
        $morada      = $_POST["morada"];
        $imagem      = $_POST["imagem"];
      

        // check if emaildomedico already exist
        $emaildomedico_check_query = mysqli_query($connection, "SELECT * FROM medicos WHERE emaildomedico = '{$emaildomedico}' ");
        $rowCount = mysqli_num_rows($emaildomedico_check_query);


        // PHP validation
        // Verify if form values are not empty
        if(!empty($nomemedico) && !empty($especialidade) /*&& !empty($emaildomedico) */&& !empty($numerodetelefone) && !empty($morada)){
            
            // check if user emaildomedico already exist
            if($rowCount > 0) {
                $emaildomedico_exist = '
                    <div class="alert alert-danger" role="alert">
                       O e-mail do usuário já existe!
                    </div>
                ';
            } else {
                // clean the form data before sending to database
                $_nome_medico = mysqli_real_escape_string($connection, $nomemedico);
                $_medico_especialidade = mysqli_real_escape_string($connection, $especialidade);
               $_ememaildomedicoail = mysqli_real_escape_string($connection, $emaildomedico);
                $_numero_detelefone = mysqli_real_escape_string($connection, $numerodetelefone);
                $_medico_morada = mysqli_real_escape_string($connection, $morada);
             

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
                   
                    $img='<button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button> '.' '.'<button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>'.' '. '  <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>';
                  
                    // Query
                    $sql = "INSERT INTO medicos (nomemedico, especialidade, emaildomedico, numerodetelefone, morada,imagem) 
                    VALUES ('{$nomemedico}', '{$especialidade}', '{$emaildomedico}', '{$numerodetelefone}', '{$morada}', '{$img}')";
                    
                    // Create mysql query
                    $sqlQuery = mysqli_query($connection, $sql);
                    
                    if(!$sqlQuery){
                        die("MySQL query failed!" . mysqli_error($connection));
                    } 
                    header("Location: ./medico_sucesso.php");
                    // Send verification emaildomedico
                     if($sqlQuery) {
                       $msg = 'Clica no link de activação para verificares no teu e-mail. <br><br>
                        <a href="http://localhost/gestaohospitalar/user_verificaiton.php?TipodePaciente='.$TipodePaciente.'"> Click here to verify emaildomedico</a>
                     ';

                        // Create the Transport
                        $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
                         ->setUsername('your_emaildomedico@gmail.com')
                        ->setPassword('your_emaildomedico_morada');

                         // Create the Mailer using your created Transport
                         $mailer = new Swift_Mailer($transport);

                         // Create a message
                         $message = (new Swift_Message('Por favor, Verifica a sua caixa de e-mail!'))
                         ->setFrom([$emaildomedico => $nomemedico . ' ' . $especialidade])
                         ->setTo($emaildomedico)
                        ->addPart($msg, "text/html")
                         ->setBody('Olá! Usuário');

                         // Send the message
                         $result = $mailer->send($message);
                          
                         if(!$result){
                         $emaildomedico_verify_err = '<div class="alert alert-danger">
                            Verificado, emaildomedico não enviado!!
                            </div>';
                        } else {
                            $emaildomedico_verify_success = '<div class="alert alert-success">
                               Verificado, emaildomedico enviado!
                       </div>';
                        }
                     }
                }
            }
        } else {
            if(empty($nomemedico)){
                $fNameEmptyErr = '<div class="alert alert-danger">
                    O campo nome não pode estar em branco.
                </div>';
            }
            if(empty($especialidade)){
                $lNameEmptyErr = '<div class="alert alert-danger">
                O campo sobre-nome não pode estar em branco.
                </div>';
            }
            if(empty($emaildomedico)){
                $emaildomedicoEmptyErr = '<div class="alert alert-danger">
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