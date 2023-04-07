
<?php
// fiz uma gambiarra aqui ao nomepatientenitificar os campos do formulatrios os  nomes não estao sincronizados mas acertei para fazer a iserção ods dados na mesma ordem mas tenho que ajustar depois
if(isset($_POST["submit"])) {
      $id     = $_POST["patient"];
    $nomeconsulta      = $_POST["tipo"];

    $medico  = $_POST["medico"];
   $TipodePaciente      = $_POST["consulta"];
    $preco      = $_POST["preco"];
$namepatient                = $_POST["namepatient"];

       if(empty($preco)){
        echo " <script>alert('O capo data não pode estar vazio...');</script>";
    }           
    
    // PHP valnomepatientation
    // Verify if form values are not empty
    if(!empty($id) && !empty($namepatient) && !empty($nomeconsulta) && !empty($medico)&& !empty($preco)&& !empty($TipodePaciente)){
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
            $_last_name = mysqli_real_escape_string($connection, $nomeconsulta);
          
            $_mobile_number = mysqli_real_escape_string($connection, $medico);
            // $_name_patient = mysqli_real_escape_string($connection, $namepatient);
            $TipodePaciente = mysqli_real_escape_string($connection, $TipodePaciente);
        
            
   $sql = "INSERT INTO addappointment(patient, doctor, app_date, medico, remark,preco,sms,namepatient) VALUES ('{$id}', 
 '{$nomeconsulta}',now(),   '{$medico}',
'{$TipodePaciente}', '{$preco}', '1', '{$namepatient}')";
                
                // Create mysql query
                 $sqlQuery = mysqli_query($connection, $sql);
              
                if(!$sqlQuery){
                    die("MySQL query failed!" . mysqli_error($connection));
                } 
                echo " <script>alert('Consulta Marcada com sucesso...');</script>";
   
                header("Location: ./allappointment.php");
                // Send verification emaildocliente
                
            }
        }
    } else {
        if(empty($nomepaciente)){
            $fNameEmptyErr = '<div class="alert alert-danger">
                O campo nome não pode estar em branco.
            </div>';
        }
        if(empty($nomeconsulta)){
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