<?php
include('../config/db.php');

if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST["mensagem"];
    $telefone = $_POST["telefone"];
    $contactType = $_POST["contactType"];

    // Upload file
    if (!empty($_FILES["file"]["name"])) {
        $target_dir = "../Upload/File/";
        $name = $_FILES["file"]["name"];
        $size = $_FILES["file"]["size"];

        // Check if the file size is within the limit (10 megabytes)
        if ($size <= 10 * 1024 * 1024) {
            $temp = $_FILES["file"]["tmp_name"];
            $error = $_FILES["file"]["error"];

            // Move the uploaded file if there are no errors
            if ($error === UPLOAD_ERR_OK) {
                move_uploaded_file($temp, $target_dir . $name);
            } else {
                echo "Erro ao Carregar o ficheiro. Tenta novamente por favor.";
            }
        } else {
            echo "O tamanho do ficheiro excede o limite de Mega Byte. Por favor carrega um ficheiro até 10 megabytes.";
        }
    } else {
        $name = null; // If file is not uploaded, set it to null
    }

    // PHP validation
    if (!empty($email) && !empty($assunto) && !empty($id) && !empty($contactType) && !empty($mensagem) && !empty($telefone)) {
        // Clean the form data before sending to the database
        $nome = mysqli_real_escape_string($connection, $nome);
        $email = mysqli_real_escape_string($connection, $email);
        $assunto = mysqli_real_escape_string($connection, $assunto);
        $mensagem = mysqli_real_escape_string($connection, $mensagem);
        $telefone = mysqli_real_escape_string($connection, $telefone);
        $contactType = mysqli_real_escape_string($connection, $contactType);

        // Query
        $sql = "INSERT INTO contacto (userID, name, email, assunto, mensagem, telefone, contactType, file, Direcao, Data)
                VALUES ('$id', '$nome', '$email', '$assunto', '$mensagem', '$telefone', '$contactType', '$name', 'enviadoUser', now())";

        // Create mysql query
        $sqlQuery = mysqli_query($connection, $sql);

        if (!$sqlQuery) {
            die("MySQL query failed!" . mysqli_error($connection));
        }

        header("Location: ../contacto_sucessoLoged.php");
    }
}
?>
