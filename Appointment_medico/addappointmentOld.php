<?php include"../Include/headerMedico.php";?>
<?php include"../Include/sidebarMedico.php";?>
<?php include"../controllers/marcarconsulta_admin.php";?>  

<?php 
  include("../inc/connect.php") ;
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
      Marcar Consulta
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../Index"><i class="fa fa-dashboard"></i> casa</a></li>
        <li class="active"> Marcar Consulta</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
<div class="col-md-12">
    <div class="box box-primary">
            <div class="box-header with-border bg-blue">
             <i class="fa fa-edit"></i> <h3 class="box-title">Marcar Consulta</h3>
            </div>
        <form method="POST" >
              <div class="box-body">
                <div class="form-group">
       
                
                <div class="form-group">
                <label for="exampleInputEmail1">Nome do Paciente </label><br>
                 <select name="patient"  id="patient" class="form-control select2"  placeholder="">
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
  echo "Escolher";?>
<option value="<?php echo $row1['id'];?>"><?php echo $row1['name'];?>
 </option>            
  
<?php } ?> 
</select>
</div>
<!-- <input type="text" class="form-control" name="namepatient" id="namepatient" value="<?php echo $row1 ?>" readonly="readonly"> -->
    
<label for="exampleInputEmail1">Data</label><br>
<input type="date" id="data" name="data" class="form-control" value="" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <div class="form-group">
                  <label for="exampleInputPassword1">Nome da Consulta</label>
                  <select id="nomeconsulta"  name="consulta" id="consulta"  class="form-control select2">
      <option selected>..Escolher..</option>
      <option>Medicina Geralal</option>
      <option>Obstetria</option>
      <option>Dentária</option>
      <option>Pre-Natal</option>
    </select>                                    
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Hora de Início</label>
          <input type="time"  id="starttime" name="starttime" class="form-control">
            </div>

       <div class="form-group">
                  <label for="exampleInputPassword1">Hora do Fim</label>
          <input type="time"  id="endtime" name="endtime" class="form-control">
            </div>

                <div class="form-group">
                <label for="inputState" class="form-label">Tipo de Paciente</label>
     <select id="TipodePaciente"  name="tipo" id="tipo"   class="form-control select2">
      <option selected>...Selecione...</option>
      <option>Particular</option>
      <option>Empresa</option>
    </select></div>


                <div class="form-group">
                  <label for="exampleInputPassword1">Telefone</label>
                  <input type="text" class="form-control" name="phone" id="phpne" />
                </div>
              
        
               <button type="submit"  name="submit" class="btn btn-primary">Ok</button>
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
    // Replace the <input id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.input').wysihtml5()
  })

  $(function () { 
    // Replace the <input id="editor2"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor2')
    //bootstrap WYSIHTML5 - text editor
    $('.input').wysihtml5()
  })
   $(function () { 
    // Replace the <input id="editor3"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor3')
    //bootstrap WYSIHTML5 - text editor
    $('.input').wysihtml5()
  })
</script>