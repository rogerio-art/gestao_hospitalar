<?php
session_start();
include('config/db.php');

if (isset($_POST['loginuser'])) {
    $username = $_POST['username'];
    $password = md5(md5(mysqli_real_escape_string($connection, $_POST['password'])));

    if ($username && $password) {
        $sql = "SELECT * FROM patientregister WHERE email = '{$username}'";
        $query = mysqli_query($connection, $sql);
        $rowCount = mysqli_num_rows($query);

        if ($rowCount != 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                $dbusername = $row['email'];
                $dbpassword = $row['password'];
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['phone'];
                $imageupload = $row['imageupload'];
            }

            if ($username == $dbusername && $password == $dbpassword) {
                $_SESSION['email'] = $username;
                $_SESSION['id'] = $id;
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                $_SESSION['phone'] = $phone;
                $_SESSION['imageupload'] = $imageupload;

                header("Location: ./actividades.php");
         
            } else {
                echo "<script>alert('Por favor, entre com seu e-mail e senha corretos.');</script>";
                header("refresh:0;url=login.php");
                exit();
            }
        } else {
            echo "<script>alert('O usuário não existe.');</script>";
            header("refresh:0;url=login.php");
            exit();
        }
    } else {
        echo "<script>alert('Introduza o email e a senha.');</script>";
        header("refresh:0;url=login.php");
        exit();
    }
}
?>
<!-- Your HTML content goes here -->
