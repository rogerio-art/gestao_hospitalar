<?php include"../Include/headerMedico.php";?>
<?php include"../Include/sidebarMedico.php";?>
<?php 
  include("../inc/connect.php") ;
 ?>
  <script src="../dist/dist/jquery.min.js"></script>


  <script>
  
  $ (function (){
  $ ("#patient") .change(function(){
      var mostrarnome=$("#patient option:selected").text();
      $ ("#patientname") .val (mostrarnome);
     })
  })
  </script> 
  

<?php
//include("../inc/connect.php") ;

//session_start();
if(isset($_POST['submit']))

{
  
    $patient=$_POST['patient'];
    $data=$_POST['data'];
    $resultadoexame=$_POST['resultadoexame'];
    $note=$_POST['note'];
    $patientname=$_POST['patientname'];
    $preco=$_POST['preco'];
  
    
   
    $write =mysqli_query($connection,"INSERT INTO exame(`patiente`,`data`,`nameexame`,`preco`,`patientname`,`note`) VALUES ('$patient','$data','$resultadoexame','$preco','$patientname','$note')") or die(mysqli_error($connection));
    //$query=mysql_query("SELECT * FROM user ")or die (mysql_error());
      //$numrows=mysql_num_rows($query)or die (mysql_error());
       echo " <script>setTimeout(\"location.href='../Exame/examelist.php';\",150);</script>";
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
      Criar Exame
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
             <i class="fa fa-edit"></i> <h3 class="box-title">Criar Exame</h3>
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
                
<input type="hidden" class="form-control" name="patientname" id="patientname" value="<?php echo $row1?>"  readonly="readonly">
      
                  <div class="form-group">
                  <label for="exampleInputPassword1">Data</label>
                
                  <input type="date" class="form-control" name="data" id="data" value="<?php echo  date('Y-m-d');?>"  >
                  </div>

                  <div class="form-group">
                  <label for="exampleInputPassword1">Preço</label>
                  <input type="text" id="preco"  name="preco"   class="form-control ">
                  </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Resultado do Exame</label>

          <textarea id="editor1" name="resultadoexame" class="form-control"> 
                                           
                    </textarea>
                </div>
              
        <div class="form-group">
                  <label for="exampleInputPassword1">Nota do Exame</label>
          <textarea id="editor3" name="note" class="form-control">
                                   
                    </textarea>
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