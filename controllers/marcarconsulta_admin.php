
<?php
if(isset($_POST["submit"])) {
      $id            = $_POST["patient"];
    $hora            = $_POST["hora"];
     $medico         = $_POST["doctor"];      
    $especialidade   = $_POST["especialidade"];
    $preco           = $_POST["preco"];
$namepatient         = $_POST["namepatient"];
$data                = $_POST["data"];

    
    
    // PHP valnomepatientation
    // Verify if form values are not empty
    if(!empty($id) && !empty($namepatient) && !empty($hora)&& !empty($data) && !empty($especialidade) && !empty($medico)&& !empty($preco)){
        echo " <script>alert('Os capos no formulário não pode estar vazio...');</script>";?>
        <meta http-equiv="refresh" content="0;url=addappointment.php" />
<?php
        // check if user emaildocliente already exist
        if($rowCount > 0) {
            $emaildocliente_exist = '
                <div class="alert alert-danger" role="alert">
                   O e-mail do usuário já existe!
                </div>
            ';
        } else {
            // clean the form data before sending to database
            $_first_name = mysqli_real_escape_string($connection, $id);
            $_last_name = mysqli_real_escape_string($connection, $hora);
          
            $_mobile_number = mysqli_real_escape_string($connection, $medico);
            // $_name_patient = mysqli_real_escape_string($connection, $namepatient);
            $especialidade = mysqli_real_escape_string($connection, $especialidade);
        
            
   $sql = "INSERT INTO addappointment(patient, doctor, app_date, hora, especialidade,preco,sms,namepatient,estado) VALUES ('{$id}', 
 '{$medico}','{$data}',   '{$hora}',
'{$especialidade}', '{$preco}', '1', '{$namepatient}','1')";
                
                // Create mysql query
                 $sqlQuery = mysqli_query($connection, $sql);
              
                if(!$sqlQuery){
                    die("MySQL query failed!" . mysqli_error($connection));
                } 
                echo " <script>alert('Consulta Marcada com sucesso...');</script>";
   
                header("Location: ./today.php");
                // Send verification emaildocliente
                
            }
        }
    } else {
        if(empty($nomepaciente)){
            $fNameEmptyErr = '<div class="alert alert-danger">
                O campo nome não pode estar em branco.
            </div>';
        }
        if(empty($hora)){
            $lNameEmptyErr = '<div class="alert alert-danger">
            O campo sobre-nome não pode estar em branco.
            </div>';
        }
        if(empty($emaildocliente)){
            $emaildoclienteEmptyErr = '<div class="alert alert-danger">
            O campo e-mail não pode estar em branco.
            </div>';
        }
        if(empty($medico)){
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