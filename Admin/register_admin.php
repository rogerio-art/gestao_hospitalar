

<?php
  include("../inc/connect.php") ;

    $name= mysqli_real_escape_string($connection,$_POST['name']);
    $email=mysqli_real_escape_string($connection,$_POST['email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email,$email)){
        echo "Senha Incorreta.Tenta fazer o registro denovo ...";
        ?>
        <meta http-equiv="refresh" content="2;url=acess.php" />
        <?php
    }
    $senha=md5(md5(mysqli_real_escape_string($connection,$_POST['senha'])));
    if(strlen($senha)<6){
        echo "Asenha deve conter no min 6 Caracteres. Tenta novamente...";
        ?>
        <meta http-equiv="refresh" content="2;url=acess.php" />
        <?php
    }
    $sobre=$_POST['sobrenome'];
    $duplicate_user_query="select id from login where username='$email'";
    $duplicate_user_result=mysqli_query($connection,$duplicate_user_query) or die(mysqli_error($connection));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){
        //duplicate registration
        //header('location: signup.php');
        ?>
        <script>
            window.alert("Este email já existe na base de dados!");
        </script>
        <meta http-equiv="refresh" content="1;url=acess.php" />
        <?php
    }else{
        $user_registration_query="INSERT INTO login (profile, fname, lname, username, password)
        VALUES ('Logotipo Clinica Saude.png','{$name}','{$sobre}', '$email', '$senha')";
        //die($user_registration_query);
        $user_registration_result=mysqli_query($connection,$user_registration_query) or die(mysqli_error($connection));
        // echo "Usu?rio registrado com sucesso";
        $_SESSION['username']=$email;
        //The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.
        $_SESSION['id']=mysqli_insert_id($connection); 
        //header('location: products.php');  //for redirecting
        
        ?>  <script>
        window.alert("Registro inserido com sucesso!");
    </script><?php
      
     
    
      ?>
        <meta http-equiv="refresh" content="1;url=../Index/index.php" />
        <?php
        
     
       

    }

    
?>