<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>
<?php 
  include("../inc/connect.php") ;
 ?>
  <script src="../dist/dist/jquery.min.js"></script>


  <script>
  
  $ (function (){
  $ ("#patient") .change(function(){
      var mostrarnome=$("#patient option:selected").text();
      $ ("#namepatient") .val (mostrarnome);
     })
  })
  </script> 
  

<?php
//include("../inc/connect.php") ;

//session_start();
if(isset($_POST['submit']))

{
  
    $patient=$_POST['patient'];
   
    $titulo=$_POST['titulo'];
    $descriacao=$_POST['descriacao'];
    $dotorname=$_POST['dotorname'];
    $namepatient=$_POST['namepatient'];
    $peso=$_POST['peso'];
    $descricao2=$_POST['descricao2'];
    $descricao3=$_POST['descricao3'];
    $data1=$_POST['data1'];
    $data2=$_POST['data2'];
   
    $write =mysqli_query($connection,"INSERT INTO justify(`id_patient`,`patient`,`date`,`titulo`,`descriacao`,`descricao2`,`descricao3`,`data1`,`data2`,`dotorname`) VALUES ('$patient','$namepatient',now(),'$titulo','$descriacao','$descricao2','$descricao3','$data1','$data2','$dotorname')") or die(mysqli_error($connection));
    //$query=mysql_query("SELECT * FROM user ")or die (mysql_error());
      //$numrows=mysql_num_rows($query)or die (mysql_error());
       echo " <script>setTimeout(\"location.href='./justify.php';\",150);</script>";
}
  

?>
<?php

$p_query=mysqli_query($connection,"SELECT * FROM patientregister")or die (mysqli_error($connection));
$p_numrows=mysqli_num_rows($p_query)or die (mysqli_error($connection));
$p_row1=mysql_fetch_all($p_query);


function mysql_fetch_all($query) {
    $all = array();
    while ($all[] = mysqli_fetch_assoc($query)) {$temp=$all;}
    return $temp;
}
?>
<script src="../dist/dist/jquery.min.js"></script>


<script>

$ (function (){
$ ("#patient") .change(function(){
    var mostrarnome=$("#patient option:selected").text();
    $ ("#namepatient") .val (mostrarnome);
   })
})
</script> 

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     Repouso Médico
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../Index2"><i class="fa fa-dashboard"></i> Casa</a></li>
        <li class="active"> </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
<div class="col-md-12">
    <div class="box box-primary">
            <div class="box-header with-border bg-blue">
             <i class="fa fa-edit"></i> <h3 class="box-title">Criar Justificativo Médico</h3>
            </div>
        <form method="POST" >
              <div class="box-body">
                <div class="form-group">
       
                  <div class="form-group">
                <label for="exampleInputEmail1">Nome do Paciente</label><br>

                 <select name="patient" id="patient"  class="form-control select2"  style="width:100%;"  required="required">
<option> Escolher</option>
<?php  

$p_query="SELECT * FROM beneficiario ";
$res=mysqli_query($connection,$p_query);
while ($row1 =mysqli_fetch_array($res)) {
?>
<option value="<?php echo $row1['id'];?>"><?php echo htmlentities($row1['namebenif']);?>
</option>            
 
<?php } ?> 

<?php

 $p_query="SELECT * FROM patientregister";
$res=mysqli_query($connection,$p_query);
while ($row1 =mysqli_fetch_array($res)) {
  echo $row1['id'];?>
<option value="<?php echo $row1['id'];?>"><?php echo htmlentities($row1['name']);?>
 </option>
<?php } ?></select>
                 
                </div>
                </div>
                
<input type="hidden" class="form-control" name="namepatient" id="namepatient" value="<?php echo $row1?>"  readonly="readonly">
      
                  <div class="form-group">
                  <label for="exampleInputPassword1">Título</label>
                  <input type="text" class="form-control" name="peso" id="peso" value="REPOUSO MÉDICO">
</div>

<div class="form-group">
                  <label for="exampleInputPassword1">Sub Título </label>

          <input id="text" name="titulo" class="form-control" value="Declaração Médica para Justificativo de Faltas ao Serviço"> 
                                           
                </div>
                <div class="form-group">
                  <!--label for="exampleInputPassword1">Declaração do Médico</label-->
          <input type="hidden" id="descriacao" name="descriacao" class="form-control" value="<?php echo $_SESSION['fname'],' '. $_SESSION['lname']?>, Médico(a) em serviço neste Hospital, declaro ter observado o (a) paciente "--> 
</div>
      
         <div class="form-group">
            
          <input type="hidden" id="descriacao2" name="descricao2" class="form-control" value=" nesta unidade hospitalar no dia "> 

          <div class="form-group">
          
          <input type="hidden" id="descriacao3" name="descricao3" class="form-control" value="  onde foi observado(a) e medicado(a). Deve beneficiar de repouso do dia "> 


</div>

    
          <div class="col-md-6">
          <div class="form-group">
                  <label for="exampleInputPassword1">Início do Repouso</label>
          <input type="date" id="note" name="data1" class="form-control" value="<?php echo date('Y-m-d') ?>">
          </div>
          </div>

          <div class="col-md-6">
          <div class="form-group">
                  <label for="exampleInputPassword1">Fim do Repouso</label>
          <input type="date" id="note" name="data2" class="form-control" value="<?php echo date('Y-m-d') ?>">
          </div>
                 
                </div>

          <div class="form-group">
                  <label for="exampleInputPassword1"></label>
          <input type="hidden" id="" name="dotorname" class="form-control" value="<?php echo $_SESSION['fname'],' '. $_SESSION['lname']?>">
          </div>
          
             
               <input name="submit" type="submit"  onclick="submit" id="log-btn" value="Salvar" STYLE = "color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #2196f3;" size = "10" maxlength = "30" class="form-control" class="btn btn-primary"  />
     
          </div>
      </form>
    </div>
  </div>
</div>
</section>
</div>
<?php include "../Include/footer.php";?>
<script src="../bower_components/ckeditor/ckeditor.js">
</script>
<script>
  $(function () { 
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })

  $(function () { 
    // Replace the <textarea id="editor2"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor2')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
   $(function () { 
    // Replace the <textarea id="editor3"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor3')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>