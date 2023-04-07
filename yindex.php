<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
        // envia um email para o novo cliente no sentido de confirmar o email

        $mail = new PHPMailer(true);

        try {
            // opções do servidor
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'rogeriolameira2017@gmail.com';
            $mail->Password   = 'Rosaandre2018';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;
            $mail->CharSet    = 'UTF-8';

            // emissor e recetor
            $mail->setFrom('rogeriolameira2017@gmail.com','roger klim');
            $mail->addAddress('rogeriolameira2017@gmail.com');

            // assunto
            $mail->isHTML(true);
            $mail->Subject =' Marcação de Consulta ';
            
              $mail->Body = 'Mensagem de teste<strong>rogerio! macação de consulta</strong>';
            $mail->AltBody = 'Mensagem de teste rogerio!';

           IF( $mail->send()){
               echo"Consulta Marcada com sucesso";
           }
           else{
               echo"falha no envio do e-mail tente novamente";
           }
            
        } catch (Exception $e) {
             echo "erro ao marcar consulta:{$mail->ErrorInfo}";
        }
        ?>
    




   
