<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>
<?php

include("../inc/connect.php") ;
$query=mysqli_query ($connection,"SELECT `id`,`name`,`phone` FROM patientregister")or die (mysqli_error($connection));
$numrows=mysqli_num_rows($query)or die (mysqli_error($connection));





//echo $numrows; exit;
$row1=mysql_fetch_all($query);  
function mysql_fetch_all($query) 
{
    $all = array();
    while ($all[] = mysqli_fetch_assoc($query)) {$temp=$all;}
    return $temp;
}
//$row1[]=mysql_fetch_assoc($query)or die (mysql_error());

//include("../inc/connect.php") ;
//session_start();
if(isset($_POST['submit']))
{
  // $doctor=$_POST['doctor'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $yearsOld=$_POST['yearsOld'];
    $bloodgroup=$_POST['bloodgroup'];
    $cartaodesaude=$_POST['cartaodesaude'];
    $token ='[{"production_client_id":""}]';
    $stripkay='[{"public_live_key":"","secret_live_key":""}]';
    $verification='68054b4b50838c6fd4bcd950d70bef6c';
    $statos='1';
    $senhaChat= $_POST['password'];

      
   $write =mysqli_query($connection,"INSERT INTO patientregister(`yearsOld`,`name`,`email`,`password`,`address`,`phone`,`gender`,`birthdate`,`bloodgroup`,`imageupload`,`cartaodesaude`) VALUES ('$yearsOld','$name','$email','$password','$address','$phone', '$gender',now(),'$bloodgroup','.png','$cartaodesaude')") or die(mysqli_error($connection));
  echo " <script>alert('Paciente registrado com sucesso...');</script>";
  header("Location: ./patientlist.php");

  
  $user_registration_query="INSERT INTO users (first_name, last_name, email, password, social_links, biography,role_id,date_added,last_modified,watch_history,wishlist,title,	paypal_keys,stripe_keys,verification_code,	status)
  VALUES ('{$name}','.','{$email}', '$senhaChat', '$address', '{$phone}', '2',now(),now(),'.png','[]','sem titulo','{$token}','{$stripkay}','{$verification}','{$statos}')";
 


 $user_registration_result=mysqli_query($connection,$user_registration_query) or die(mysqli_error($connection));

 
 
    }
  
   
    ?>

<div class="content-wrapper">
    <section class="content-header">
      <h1>
      Registar paciente 
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../Index"><i class="fa fa-dashboard"></i> casa</a></li>
        <li class="active"></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
<div class="col-md-12">
    <div class="box box-primary">
            <div class="box-header with-border bg-blue">
             <i class="fa fa-edit"></i> <h3 class="box-title">Registar paciente </h3>
            </div>

          <form method="POST" enctype="multipart/form-data">
          <div class="box-body">
                <div class="form-group">
                <div class="form-group">

                <label for="exampleInputEmail1">Nome Completo</label>
                <input type="text" name="name" class="form-control" placeholder="" required="">
               </div>
               <div class="form-group">
               <label for="exampleInputEmail1">Email</label>
               <input type="Email" name="email" class="form-control" placeholder="" required="">
              </div>
              <div class="form-group">
              <label for="exampleInputFile">Password</label>
              <input type="Password" name="password" class="form-control" placeholder="">
              </div> 
               <div class="form-group">
               <label for="exampleInputPassword1">Endereço</label>
              <input type="text" name="address"class="form-control" placeholder="" required="">
               </div>
               <div class="form-group">
              <label for="exampleInputPassword1">Telefone</label>
              <input type="text" name="phone" class="form-control" placeholder="" required="">
              </div>
              <div class="form-group">
              <label for="exampleInputPassword1">Género</label>
              <select name="gender" class="form-control" placeholder="" required="">
              <option value="" disabled selected="selected"> Escolher</option>
              <option value="Masculino">Masculino</option> <option value="Femenino">Femenino</option>
              <option value="Other">Outro</option>
              </select>
            </div>
             <div class="form-group">
            <label for="exampleInputPassword1">Idade </label>
            <input type="text" name="yearsOld" class="form-control" placeholder="" required="">
           </div>

           <div class="form-group">
            <label for="exampleInputPassword1">Nº de Cartão de Saúde </label>
            <input type="text" name="cartaodesaude" class="form-control" placeholder="" required="">
           </div>

           <div class="form-group">
            <label for="exampleInputPassword1">Grupo sanguino</label>
          <select name="bloodgroup" class="form-control" id="c" placeholder="" required="">
            <option value="" disabled selected="selected">  Selecionar Categoria</option>
            <option value="A+">A+</option> <option value="A-">A-</option>
            <option value="B+">B+</option><option value="B-">B-</option> <option value="AB+">AB+</option> <option value="AB-">AB-</option> <option value="O+">O+</option><option value="O-">O-</option>
          </select>
          </div>
          <!-- <td><b>Carregar imagem</b></font>
          <input type="file" name="imageupload" id="fileToUpload" ></td> -->
           <div class="box-footer">
           </div>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="submit" name="submit" class="btn bg-blue">Registrar</button>
       
       <button type="button" class="btn bg-blue" data-dismiss="modal">fechar</button>
      
      </form>
    
</section>
</div>
<?php include "../Include/footer.php";?>

  
      </div>
      </div>
      </div>

