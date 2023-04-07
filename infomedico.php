<?php include('config/db.php'); ?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<!--link rel="stylesheet" href="CSS/bootstrap.min.css"-->



   <!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
        
              <!-- Bootstrap 3.3.7 -->                                       
  
 
       

        </head>
    <!-- The sidebar -->
 
                        <?php $query1=mysqli_query($connection,"SELECT * FROM medicos WHERE id_medico='".$_GET['id_medico']."'")or die (mysqli_error($connection));
$numrows1=mysqli_num_rows($query1)or die (mysqli_error($connection));
$p_row=mysql_fetch_all($query1);

$query2=mysqli_query($connection,"SELECT * FROM medicos WHERE id_medico='".$_GET['id_medico']."'")or die (mysqli_error($connection));
$numrows2=mysqli_num_rows($query2)or die (mysqli_error($connection));
$p_row1=mysql_fetch_all($query2);


/*$file_query=mysqli_query($connection,"SELECT * FROM addfiles")or die (mysqli_error($connection));
$file_numrows=mysqli_num_rows($file_query)or die (mysqli_error($connection));
$file_row1=mysql_fetch_all($file_query);*/

function mysql_fetch_all($query) {
    $all = array();
    while ($all[] = mysqli_fetch_assoc($query)) {$temp=$all;}
    return $temp;
}
//print_r($p_row); exit;
//$row1[]=mysql_fetch_assoc($query)or die (mysql_error());
?>
       <?php
         // print_r($p_row1[0]['name']);exit;
  

?>

<body>
  
  <div class="content-wrapper">
         <section class="content-header">
       <h1>
       <font color="black">Ficha do Médico</font>
         <small></small>
        </h1>
      <ol class="breadcrumb">
        <li><a href="./index.php"><i class="fa fa-dashboard"></i>Casa</a></li>
   
      </ol>
    </section>
    <section class="content">
      <div class="box box-primary">
        <div class="box-header with-border">
        <div class="container">
     <div class="row">
         <div class="col">
             <h3 class="my-3"><?php echo $p_row[0]['nomemedico']; ?></h3>
             <hr>
         </div>
     </div>
 </div>
 
 <div class="content">
     <div class="row">
         <div class="col">
   <table class="table">
                     <thead>
                         <tr>
                             <th>Disponíbilidade </th>
                             <th class="text-center">Especialidade</th>
                             <th class="text-end">Médico</th>
                         </tr>
                     </thead>
                     <tbody>

                                <tr>
                                    <td class="align-middle">2º 5º e 6º feira</td>
                                    <td class="text-center align-middle"><?php echo $p_row[0]['especialidade']; ?></td>
                                    <td class="text-end align-middle"><?php echo $p_row[0]['especialidade']; ?></td>
                                </tr>

                     </tbody>
                </table>
                
              
                <h5 class="bg-dark text-white p-2">Dados do Médico</h5>
                <div class="row">
                <div class="col-md-6">
                        
                        <p>Nome: <strong><?= $p_row1[0]['nomemedico']; ?></strong></p>
                        <p>Especialidade: <strong><?= $p_row1[0]['especialidade']?></strong></p>
                        <p>Telefone: <strong><?= $p_row1[0]['numerodetelefone']?></strong></p>
                    </div>
                  
                   
                    <div class="col-md-6">
                        <p>Email: <strong><?=$p_row1[0]['emaildomedico']; ?></strong></p>
                        <p>Nº da Carteira: <strong><?=$p_row1[0]['numerodetelefone']; ?></strong></p>
                    </div>
                    </div>
                    </div>
                

                <!-- DADOS DE PAGAMENTO -->
                
                
                <div class="row">
                <div class="col-md-12">
                <h5 class="bg-dark text-white p-2 ">Identificação do Médico</h5>
                
                <p>Nascido aos: <strong>12/08/1980</strong></p>
                        <p>Natural: <strong><?= time(); ?></strong></p>
                        <p>Endereço  <strong><?//= number_format($produto, 2, ',', '.') . '$' ?></strong></p>
                    </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-12">
                <h5 class="bg-dark text-white p-2 ">Currículo do Médico</h5>
                   <input class="form-check-input" onchange="usar_morada_alternativa()" type="checkbox" name="check_morada_alternativa" id="check_morada_alternativa">
                    <label class="form-check-label" for="check_morada_alternativa">Ver mais...</label>
                </div>
                </div>
                </div>


                <!-- morada alternativa -->
               


                

                    <div class="col text-end">
                         <a href="viewmedico.php"><span class="btn btn-primary bg-blue"><i class="fa fa-back"></i>Voltar</span><!--&nbsp;&nbsp;-->
         
                    <button type="button" onclick=" window.print();" name="name" class="btn bg-blue"><i class="fa  fa-print"></i>  Imprimir</button></center>
             
        </div>
    </div>
</div>
            
</div>


</section>
</div>
</div>
</body>

</html>

<?php include('footer.php');?>