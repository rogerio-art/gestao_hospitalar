<?php include"../Include/headerMedico.php";?>
<?php include"../Include/sidebarMedico.php";?>
<?php 
  include("../inc/connect.php") ;
  
    //session_start();
  $sql="SELECT * FROM internamento WHERE id='".$_GET['id']."'";
  $write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
 // print_r($sql); exit;
    $row=mysqli_fetch_array($write)or die (mysqli_error($connection));
    $patient=$row     ['patient'];
    $data=$row        ['data'];
    $sala=$row        ['sala'];
    $history=$row     ['descricao'];
    $namepatient=$row ['nome'];
   
    //echo $row['date  ']; exit();
   //print_r($row); exit;
   //echo "$firstname"; exit();
?>
<?php
//include("../inc/connect.php") ;

//session_start();
if(isset($_POST['submit']))

{
  $patient=$_POST     ['patientid'];
  $data=$_POST        ['data'];
  $datafim=$_POST     ['datafim'];
  $sala=$_POST        ['sala'];
  $history=$_POST     ['history'];
  $namepatient=$_POST ['patientnome'];
   
  $write =mysqli_query($connection,"INSERT INTO altas(`data`,`Idpatient`,`descricao`,`nome`,`sala`,`datafim`) VALUES ('$data','$patient','$history','$namepatient','$sala','$datafim')") or die(mysqli_error($connection));
  //$query=mysql_query("SELECT * FROM user ")or die (mysql_error());
    //$numrows=mysql_num_rows($query)or die (mysql_error());
     echo " <script>setTimeout(\"location.href='../internamento/veralta.php';\",150);</script>";



 

     if(isset($_GET['id']))
           {
             $sql="DELETE FROM internamento WHERE  id=".$_GET['id']."";
             //exit;
             $write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
                 
                   header("location:veralta.php");
           }
           else
             echo "Sem Sucesso ao tentar axecutar a query de insert e delet";
        
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Alta do Paciente
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> casa</a></li>
        <li class="active"> Criar Alta do Paciente</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
<div class="col-md-12">
    <div class="box box-primary">
            <div class="box-header with-border bg-blue">
             <i class="fa fa-edit"></i> <h3 class="box-title">Alta do Paciente</h3>
            </div>
        <form method="POST" >
              <div class="box-body">
                <div class="form-group">
       
                  <label for="exampleInputEmail1">Data de entrada</label><br>

                  <input type="date" name="data" class="form-control" value="<?php echo  $data;?>" >
                  <label for="exampleInputEmail1">Data de Saida</label><br>

<input type="date" name="datafim" class="form-control" value="<?php echo  date('Y-m-d');?>" >

                <div class="form-group">
                <label for="exampleInputEmail1">Nome do Paciente</label><br>
                 <input type="text" name="patientnome" class="form-control "  value="<?php echo  $namepatient;?>">
                 <input type="hidden" name="patientid" class="form-control "  value="<?php echo  $patient;?>">


                 
                </div>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Nome da Sala</label>
          <input id="sala" name="sala" class="form-control" value=" <?php echo $sala; ?>   ">
        
          </div>

          <!-- <div class="form-group">
          <label for="exampleInputPassword1">Id</label>
          <input id="id" name="id" class="form-control" value=" <?php //echo $_GET['id']; ?>   ">
                                       
                      </div> -->


                <div class="form-group">
                  <label for="exampleInputPassword1">Justificativo da Alta</label>

          <textarea id="editor1" name="history" class="form-control"><?php // echo $history; ?>
                                           
                    </textarea>
                </div>

     
               <button type="submit"  name="submit" class="btn bg-blue">Criar Altar</button>
               <a href="patientintern.php"  name="submit" class="btn bg-blue">Voltar</a>
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