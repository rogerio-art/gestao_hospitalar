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
   
    $history=$_POST['history'];
    $medication=$_POST['medication'];
    $note=$_POST['note'];
    $namepatient=$_POST['namepatient'];
    $peso=$_POST['peso'];
    
   
    $write =mysqli_query($connection,"INSERT INTO addnewpres(`id_patient`,`patient`,`date`,`history`,`medication`,`note`,`peso`) VALUES ('$patient','$namepatient',now(),'$history','$medication','$note','$peso')") or die(mysqli_error($connection));
    //$query=mysql_query("SELECT * FROM user ")or die (mysql_error());
      //$numrows=mysql_num_rows($query)or die (mysql_error());
       echo " <script>setTimeout(\"location.href='./prescription.php';\",150);</script>";
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
      Criar Prescrição
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../Index"><i class="fa fa-dashboard"></i> Casa</a></li>
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
             <i class="fa fa-edit"></i> <h3 class="box-title">Criar Prescrição</h3>
            </div>
        <form method="POST" >
              <div class="box-body">
                <div class="form-group">
       
                  <div class="form-group">
                <label for="exampleInputEmail1">Nome do Paciente</label><br>

                 <select name="patient" id="patient"  class="form-control select2"  style="width:100%;">
<option>
<?php

$p_query="SELECT * FROM beneficiario ";
$res=mysqli_query($connection,$p_query);
while ($row1 =mysqli_fetch_array($res)) {
  echo "Escolher";?>
<option value="<?php echo $row1['id'];?>"><?php echo $row1['namebenif'];?>
</option>            
 
<?php } ?> 
</option>
<?php

 $p_query="SELECT * FROM patientregister";
$res=mysqli_query($connection,$p_query);
while ($row1 =mysqli_fetch_array($res)) {
  echo $row1['id'];?>
<option value="<?php echo $row1['id'];?>"><?php echo $row1['name'];?>
 </option>
<?php } ?></select>
                 
                </div>
                </div>
                
<input type="hidden" class="form-control" name="namepatient" id="namepatient" value="<?php echo $row1?>"  readonly="readonly">
      
                  <div class="form-group">
                  <label for="exampleInputPassword1">Peso do Paciente</label>
                  <input type="text" class="form-control" name="peso" id="peso" >
</div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Historico</label>

          <textarea id="editor1" name="history" class="form-control"> 
                                           
                    </textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Medicação</label>
          <textarea id="editor2" name="medication" class="form-control">
                                      
                    </textarea>
                </div>
        <div class="form-group">
                  <label for="exampleInputPassword1">Descrição</label>
          <textarea id="editor3" name="note" class="form-control">
                                   
                    </textarea>
                </div>
               <button type="submit"  name="submit" class="btn btn-primary">Salvar</button>
               <a href="prescription.php"  name="submit" class="btn btn-primary">Voltar</a>
          </div>
      </form>
    </div>
    </section>
</div>
<?php include "../Include/footer.php";?>
  </div>
</div>

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