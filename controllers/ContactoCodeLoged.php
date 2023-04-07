
  

<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// require 'vendor/autoload.php';
// $mail = new PHPMailer;
// $mail->isSMTP();
// $mail->Host       = 'smtp.gmail.com';
// $mail->SMTPAuth   = true;
// $mail->Username   = 'rogeriolameira2017@gmail.com';
// $mail->Password   = 'Rosaandre2018';
// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
// $mail->Port       = 587;
// $mail->CharSet    = 'UTF-8';// emissor e recetor
// $mail->setFrom('rogeriolameira2017@gmail.com','roger klim');
// $mail->addAddress('rogeriolameira2017@gmail.com');
// //Provide file path and name of the attachments
// // $mail->addAttachment("file.txt", "File.txt");        
// // $mail->addAttachment("image"); //Filename is optional

//     if ($mail->addReplyTo($_POST['email'], $_POST['telefone'])){
//         $mail->Subject = 'Formulario de contacto';
//         $mail->isHTML(false);
//         $mail->Body = <<<EOT
// Email: {$_POST['email']}
// Assunto: {$_POST['assunto']}
// Mensagem: {$_POST['mensagem']}
// Telefone: {$_POST['telefone']}
// file: {$_POST['file']}
// EOT;
//         if (!$mail->send()) {
//             $msg = 'Desculpa, encontramos alguns erros. Por favor tenta mais tarde.';
//         } else {
//             $msg = 'Mensagem enviada! Obrigada por nos contactar.';
//         }
//     } else {
//         $msg = '';
//     }

    // Database connection
    include('config/db.php');
    require_once './vendor/autoload.php';


   
    ?>

<?php
    if(isset($_POST["submit"])) {
        $id  = $_POST["id"];
        $nome  = $_POST["nome"];
        $email     = $_POST["email"];
        $assunto      = $_POST["assunto"];
        $mensagem         = $_POST["mensagem"];
        $telefone  = $_POST["telefone"];
        $contactType  = $_POST["contactType"];
      
        
   
      //upload file inicio
        $d1=date('Y-m-d');
        $patient=$_POST['email'];
        $title=$_POST['email'];

        $target_dir="../Upload/File/";
$name=$_FILES["file"]["name"];
$type = $_FILES["file"]["type"];
$size = $_FILES["file"]["size"];

$temp = $_FILES["file"]["tmp_name"]; 
$error = $_FILES["file"]["error"];//size
 //echo "string"; exit;
 move_uploaded_file($temp,"./Upload/File/".$name);//move upload file  
 // echo"Upload Complete";  
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
                    </div>
                ';
            } else {
                // clean the form data before sending to database
                $_first_name = mysqli_real_escape_string($connection, $email);
                $_last_name = mysqli_real_escape_string($connection, $assunto);
               $_email = mysqli_real_escape_string($connection, $mensagem);
                $_mobile_number = mysqli_real_escape_string($connection, $telefone);
                $_senha = mysqli_real_escape_string($connection, $file);

        
                    // Query
                    $sql = "INSERT INTO contacto (name, email, assunto, mensagem, telefone, contactType, file) VALUES ('{$nome}', '{$email}', '{$assunto}', '{$mensagem}', '{$telefone}','{$contactType}', '{$name}')";
                    
                    // Create mysql query
                    $sqlQuery = mysqli_query($connection, $sql);
                }
                    if(!$sqlQuery){
                        die("MySQL query failed!" . mysqli_error($connection));
                    } 
                    header("Location: ./contacto_sucessoLoged.php");
                    // Send verification mensagem
                     if($sqlQuery) {
                       $msg = 'Clica no link de activação para verificares no teu e-mail. <br><br>
                        <a href="http://localhost/gestaohospitalar/user_verificaiton.php?TipodePaciente='.$TipodePaciente.'"> Click here to verify mensagem</a>
                     ';

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