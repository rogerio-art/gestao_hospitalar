<?php include"./header.php";?>
<?php include"./sidebar.php";?>
<?php
include("./config/db.php") ;
//echo "string"; exit();
//session_start();
if(isset($_POST['submit']))
{//print_r($_POST); exit();
    $id=$_POST['id'];
		$name=$_POST['name'];
    $endereco=$_POST['endereco'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $genero=$_POST['genero'];
    $idade=$_POST['idade'];
		
 $write =mysqli_query($connection,"INSERT INTO beneficiario(`id`,`namebenif`,`endereco`,`email`,`telefone`,`genero`,`idade`) VALUES ('$id','$name','$endereco','$email','$telefone','$genero','$idade')") or die(mysqli_error($connection));
echo " <script>setTimeout(\"location.href='./beneficiario_list.php';\",100);</script>";
   // echo "<script>alert('Records Successfully Inserted..');</script>";
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     Adicionar Beneficiário
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Casa</a></li>
        <li class="active"> Adicionar Beneficiário</li>
      </ol>
    </section>
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      	<div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
            	<form method="POST">
            
            <input type="hidden" class="form-control" name="id" id="exampleInputEmail1" value="<?php echo $_SESSION['id'] ?>" readonly>
            
            <label>Nome do Beneficiário</label><br>
            <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="" required="">
      
                        <label>Endereço</label>
                        <input type="text" class="form-control" name="endereco" id="endereco" />

                    
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $_SESSION['email'] ?>"  />

                       
                        <label>Telefone</label>
                        <input type="text" class="form-control" name="telefone" id="phone"value="<?php echo $_SESSION['phone'] ?>"  />

                            
                    
    <label for="inputState" class="form-label">Género</label>
    <select id="genero"  name="genero"  class="form-control">
      <option selected>Escolher</option>
      <option>Masculino</option>
      <option>Femenino</option>
      <option>outro</option>
    </select>
 

   
  <label>Idade</label>
<input type="text" class="form-control" name="idade" id="idade" required="true" />    





            <br><br>
            <input name="submit" type="submit"  onclick="submit" id="log-btn" value="Salvar" STYLE = "color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #2196f3;" size = "10" maxlength = "30" class="form-control" class="btn btn-primary"  />
     
            

              <!-- <a href="./actividades.php" name="" class="btn btn-primary">Voltar</a><br> -->
              </form>
            </div>
         
          </div>
          </section>
    </div>

</div>
</div>
</section>
<?php include "./footer.php";?>