<?php
    include('../config/db.php');
   
    ?>

<?php
if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST["mensagem"];
    $telefone = $_POST["telefone"];
    $contactType = $_POST["contactType"];

    // Upload file inicio
    $d1 = date('Y-m-d');
    $patient = $_POST['email'];
    $title = $_POST['email'];

    $target_dir = "../Upload/File/";
    $name = $_FILES["file"]["name"];
    $type = $_FILES["file"]["type"];
    $size = $_FILES["file"]["size"];

    // Check if the file size is within the limit (10 megabytes)
    if ($size <= 10 * 1024 * 1024) {
        $temp = $_FILES["file"]["tmp_name"];
        $error = $_FILES["file"]["error"];

        // Move the uploaded file if there are no errors
        if ($error === UPLOAD_ERR_OK) {
            move_uploaded_file($temp, "../Upload/File/" . $name);
            //echo "Upload Complete";
        } else {
            echo "Error uploading file. Please try again.";
        }
    } else {
        echo "File size exceeds the limit. Please upload a file up to 10 megabytes.";
    }
}
//print_r($_FILES); exit();

//fim do upload file

        // check if mensagem already exist
    

        // PHP validation
        // Verify if form values are not empty
        if(!empty($email) && !empty($assunto) && !empty($id) && !empty($contactType) && !empty($mensagem) && !empty($telefone)){
            
            // check if user mensagem already exist
                if($rowCount > 0) {
                    $mensagem_exist = '
                        <div class="alert alert-danger" role="alert">
                        O e-mail do usuário já existe!
                        </div>';
                } else {
                // clean the form data before sending to database
                $_first_name = mysqli_real_escape_string($connection, $email);
                $_last_name = mysqli_real_escape_string($connection, $assunto);
               $_email = mysqli_real_escape_string($connection, $mensagem);
                $_mobile_number = mysqli_real_escape_string($connection, $telefone);
 //               $_senha = mysqli_real_escape_string($connection, $file);

        
                    // Query
                    $sql = "INSERT INTO contacto (userID, name, email, assunto, mensagem, telefone, contactType, file, Direcao, Data) VALUES ('{$id}', '{$nome}', '{$email}', '{$assunto}', '{$mensagem}', '{$telefone}','{$contactType}', '{$name}','Admin',now())";
        
                    // Create mysql query
                    $sqlQuery = mysqli_query($connection, $sql);
                }
                    if(!$sqlQuery){
                        die("MySQL query failed!" . mysqli_error($connection));
                    } 
                    header("Location: ./contacto_sucessoAdmin.php");
                    // Send verification mensagem
                     if($sqlQuery) {
                       $msg = 'Clica no link de activação para verificares no teu e-mail. <br><br>
                        <a href="http://localhost/gestaohospitalar/user_verificaiton.php?TipodePaciente='.$TipodePaciente.'"> Click here to verify mensagem</a>';

                        // Create the Transport
                        $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
                         ->setUsername('your_mensagem@gmail.com')
                        ->setPassword('your_mensagem_file');

                         // Create the Mailer using your created Transport
                         $mailer = new Swift_Mailer($transport);

                         // Create a message
                         $message = (new Swift_Message('Por favor, Verifica a sua caixa de e-mail!'))
                         ->setFrom([$mensagem => $email . ' ' . $assunto])
                         ->setTo($mensagem)
                        ->addPart($msg, "text/html")
                         ->setBody('Olá! Usuário');

                         // Send the message
                         $result = $mailer->send($message);
                          
                         if(!$result){
                         $mensagem_verify_err = '<div class="alert alert-danger">
                            Verificado, mensagem não enviado!!
                            </div>';
                        } else {
                            $mensagem_verify_success = '<div class="alert alert-success">
                               Verificado, mensagem enviado!
                       </div>';
                        }
                     }
                
            }
       
            
           
 

?>