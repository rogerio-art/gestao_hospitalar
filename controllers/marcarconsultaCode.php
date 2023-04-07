<?php
   
    // Database connection
    include('config/db.php');
    require_once './vendor/autoload.php';
    
 
    if($_SESSION["email"]) {
    ?>
    <?php
    }else header("Location: ./Validar_user_logado.php");
  
?>

<?php

    if(isset($_POST["submit"])) {
          $id     = $_POST["id"];
        $especialidade   = $_POST["especialidade"];
        // $emailPaciente   = $_POST["emailpaciente"];
        $numerodetelefone = $_POST["numerodetelefone"];
        $doctor     = $_POST["doctor"];
        $dataconsulta   = $_POST["dataconsulta"];// fiz uma gambiarra os campos do formularios erstão a apontar para os campos contrarios mais fiz uma gambiarra para acertar***************
        $nomepaciente   = $_POST["nomepaciente"];
        $Hora   = $_POST["Hora"];
        $preco   = $_POST["preco"];
        
        // PHP validation
        // Verify if form values are not empty
        if(!empty($id) && !empty($doctor) && !empty($Hora) && !empty($numerodetelefone)&& !empty($dataconsulta)&& !empty($especialidade)&& !empty($nomepaciente)){
            
            // check if user emailpaciente already exist
            if($rowCount > 0) {
                $emailpaciente_exist = '
                    <div class="alert alert-danger" role="alert">
                       O e-mail do usuário já existe!
                    </div>
                ';
            } else {
                // clean the form data before sending to database
                $_first_name = mysqli_real_escape_string($connection, $nomepaciente);
                $_last_name = mysqli_real_escape_string($connection, $doctor);
           
                $_mobile_number = mysqli_real_escape_string($connection, $numerodetelefone);
                $_hora = mysqli_real_escape_string($connection, $hora);
                $_dataconsulta = mysqli_real_escape_string($connection, $dataconsulta);
                $_especialidade = mysqli_real_escape_string($connection, $especialidade);
            
                    $sql = "INSERT INTO addappointment(
                        patient, doctor, app_date, 
                        hora, 
                        especialidade,preco,sms, namepatient,estado)
                     
                     VALUES ('{$id}', 
                    '{$doctor}', '{$dataconsulta}', 
                    '{$Hora}',
                    '{$especialidade}', '{$preco}', '1','{$nomepaciente}','3')";
                    
                    // Create mysql query
                    
                    $sqlQuery = mysqli_query($connection, $sql);
              
                    if(!$sqlQuery){
                        die("MySQL query failed!" . mysqli_error($connection));
                    } 
       
                    header("Location: ./consulta_sucesso.php");
                  
                 
                }
            }
        } else {
            if(empty($nomepaciente)){
                $fNameEmptyErr = '<div class="alert alert-danger">
                    O campo nome não pode estar em branco.
                </div>';
            }
            if(empty($doctor)){
                $lNameEmptyErr = '<div class="alert alert-danger">
                O campo sobre-nome não pode estar em branco.
                </div>';
            }
            if(empty($emailpaciente)){
                $emailpacienteEmptyErr = '<div class="alert alert-danger">
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
        
            if(empty($data)){
                $moradaEmptyErr = '<div class="alert alert-danger">
                O campo morada não pode estar em branco.
                </div>';
            }  
           }
 

?>