

<?php
   include('config/db.php');

    $name= mysqli_real_escape_string($connection,$_POST['name']);
    $email=mysqli_real_escape_string($connection,$_POST['email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email,$email)){
        echo "Senha Incorreta.Tenta fazer o registro denovo ...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }
    $senha=md5(md5(mysqli_real_escape_string($connection,$_POST['senha'])));

    $senhaChat= mysqli_real_escape_string($connection,$_POST['senha']);
    if(strlen($senha)<2){
        echo "Asenha deve conter no min 2 Caracteres. Tenta novamente...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }
    $phone=$_POST['phone'];
    $yearsOld=$_POST['yearsOld'];
    $genero=mysqli_real_escape_string($connection,$_POST['genero']);
    $address=mysqli_real_escape_string($connection,$_POST['endereco']);
    $token ='[{"production_client_id":""}]';
    $stripkay='[{"public_live_key":"","secret_live_key":""}]';
    $verification='68054b4b50838c6fd4bcd950d70bef6c';
    $statos='1';
    $cartaodesaude=mysqli_real_escape_string($connection,$_POST['cartaodesaude']);
    $duplicate_user_query="select id from patientregister where email='$email'";
    $duplicate_user_result=mysqli_query($connection,$duplicate_user_query) or die(mysqli_error($connection));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    $grupoSanguino = "não definido";
    if($rows_fetched>0){
        //duplicate registration
        //header('location: signup.php');
        ?>
        <script>
            window.alert("Este email já existe na base de dados!");
        </script>
        <meta http-equiv="refresh" content="1;url=signup.php" />
        <?php
    }else{
        $user_registration_query="INSERT INTO patientregister (yearsOld, name, email, password, address,  phone,gender,birthdate,bloodgroup,imageupload,cartaodesaude)
        VALUES ('{$yearsOld}','{$name}','{$email}', '$senha', '$address', '{$phone}', '{$genero}',now(),'{$grupoSanguino}','.png','{$cartaodesaude}')";
        //die($user_registration_query);
        
      

        $user_registration_result=mysqli_query($connection,$user_registration_query) or die(mysqli_error($connection));
        // echo "Usu?rio registrado com sucesso";
        $_SESSION['email']=$email;
        //The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.
        $_SESSION['id']=mysqli_insert_id($connection); 
        //header('location: products.php');  //for redirecting
        ?><?php
      
       $_SESSION['email']=$username;
    
       $_SESSION['name'] = $name;
       $_SESSION['adress'] = $address;
       $_SESSION['email'] = $email;
       $_SESSION['phone'] = $phone;
    
       ?>
        <meta http-equiv="refresh" content="1;url=actividades.php" />

        
        <?php
          $user_registration_query="INSERT INTO users (first_name, last_name, email, password, social_links, biography,role_id,date_added,last_modified,watch_history,wishlist,title,	paypal_keys,stripe_keys,verification_code,	status)
          VALUES ('{$name}','.','{$email}', '$senhaChat', '$address', '{$phone}', '2',now(),now(),'.png','[]','sem titulo','{$token}','{$stripkay}','{$verification}','{$statos}')";
         
  
       
         $user_registration_result=mysqli_query($connection,$user_registration_query) or die(mysqli_error($connection));
       
       

    }

    
?>