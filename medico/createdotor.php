<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>  
<?php 
  include("../inc/connect.php") ;

//session_start();***********************************
//   $sql="SELECT * FROM addnewpres WHERE id='".$_GET['id']."'";
//   $write =mysqli_query($connection,$sql) or die(mysqli_error($connection));
//  // print_r($sql); exit;
//     $row=mysqli_fetch_array($write)or die (mysqli_error($connection));
//     $date =$row['date'];
//     $patient=$row['patient'];
//     $history=$row['history'];
//     $medication=$row['medication'];
//     $note=$row['note'];**********************************

    //echo $row['date  ']; exit();
   //print_r($row); exit;
   //echo "$firstname"; exit();
?>
<?php
//include("../inc/connect.php") ;

//session_start();
if(isset($_POST['submit']))
{
    $especialidade=$_POST['especialidade'];
    $nomemedico=$_POST['nome'];
    $emaildomedico=$_POST['email'];
    $numerodetelefone=$_POST['telefone'];
    $morada=$_POST['morada'];
    $timework=$_POST['escala'];
    $write =mysqli_query($connection,"INSERT INTO medicos(`nomemedico`,`especialidade`,`emaildomedico`,`numerodetelefone`,`morada`,`timework`) 
    VALUES ('$nomemedico','$especialidade','$emaildomedico','$numerodetelefone','$morada','$timework')") or die(mysqli_error($connection));
    //$query=mysql_query("SELECT * FROM user ")or die (mysql_error());
      //$numrows=mysql_num_rows($query)or die (mysql_error());
       echo " <script>setTimeout(\"location.href='../medico/listdotor.php';\",150);</script>";
}
  
?>
<?php
$p_query=mysqli_query($connection,"SELECT * FROM medicos")or die (mysqli_error($connection));
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
      Cadastrar Médico
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> casa</a></li>
        <li class="active"> Cadastrar Médico</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
<div class="col-md-12">
    <div class="box box-primary">
            <div class="box-header with-border bg-blue">
             <i class="fa fa-edit"></i> <h3 class="box-title">Cadastrar Médico</h3>
            </div>
        <form method="POST" >
              <div class="box-body">
               
                   <div class="form-group">
                   <label for="exampleInputEmail1">Nome do Médico</label><br>
                   <input type="text" name="nome" class="form-control">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <div class="form-group">
                <label for="exampleInputEmail1">Especialidade</label><br>
 <select name="especialidade" class="form-control select2" >
<option>..Escolher..</option>
<?php

 $p_query="SELECT * FROM especialidade";
$res=mysqli_query($connection,$p_query);
while ($row1 =mysqli_fetch_array($res)) {
   echo $row1['Id'];?>
<option value="<?php echo $row1['Nome'];?>"><?php echo $row1['Nome'];?>
 </option>
<?php } ?></select>
                 
                </div>
                </div>
                <div class="form-group">
                   <label for="exampleInputEmail1">E-mail</label><br>
                   <input type="text" name="email" class="form-control" value="" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>

                <div class="form-group">
                   <label for="exampleInputEmail1">Telefone</label><br>
                   <input type="text" name="telefone" class="form-control" value="" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               </div>

         <div class="form-group">
                   <label for="exampleInputEmail1">Área de atuação do Médico</label><br>
                   <textarea id="editor1" name="morada" class="form-control"></textarea>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               
                </div>

                <div class="form-group">
                   <label for="exampleInputEmail1">Escala Laboral</label><br>
                   <textarea id="editor2" name="escala" class="form-control"></textarea>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   
                </div>
               <button type="submit"  name="submit" class="btn bg-blue">Salvar</button>
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