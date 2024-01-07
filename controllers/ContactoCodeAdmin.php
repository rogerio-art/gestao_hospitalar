
  

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
include("../inc/connect.php");
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
            move_uploaded_file($temp, "./Upload/File/" . $name);
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
        if(!empty($email) && !empty($assunto) && !empty($id) && !empty($contactType) && !empty($mensagem) && !empty($telefone))
       
        // clean the form data before sending to database
      {
         // Query
         $sql = "INSERT INTO contacto (userID, name, email, assunto, mensagem, telefone, contactType, file, Direcao) VALUES ('{$id}', '{$nome}', '{$email}', '{$assunto}', '{$mensagem}', '{$telefone}','{$contactType}', '{$name}','Admin')";
         // Create mysql query
         $sqlQuery = mysqli_query($connection, $sql);

         if(!$sqlQuery){
             die("MySQL query failed!" . mysqli_error($connection));
         } 
         header("Location: ./contacto_sucessoAdmin.php");
         

      }

?>