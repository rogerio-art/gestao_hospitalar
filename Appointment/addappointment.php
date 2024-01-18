<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?> 
<?php include"../controllers/marcarconsulta_admin.php";?>  
<?php 
  include("../inc/connect.php") ;

?>
<script src="../dist/dist/jquery.min.js"></script>

<script>
function getdoctor(val) {
    $.ajax({
        type: "POST",
        url: "../get_doctor.php",
        data: 'specilizationid=' + val,
        success: function(data) {
            $("#doctor").html(data);
        }
    });
}

function getfee(val) {
    $.ajax({
        type: "POST",
        url: "../get_doctor.php", // Corrigi o nome do arquivo PHP para receber a solicitação de preço
        data: 'Price=' + val,
        success: function(data) {
            $("#Preco").html(data);
        }
    });
}

$(function() {
    $("#patient").change(function() {
        var mostrarnome = $("#patient option:selected").text();
        $("#namepatient").val(mostrarnome);
    });
});
</script>
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
      Marcar Consulta
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../Index"><i class="fa fa-dashboard"></i> Casa</a></li>
        <li class="active"></li>
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
                <label for="exampleInputEmail1">Paciente</label><br>
                 <select name="patient" id="patient" class="form-control select2"  placeholder=""  required="required">
                 
<?php

$p_query="SELECT * FROM beneficiario ";
$res=mysqli_query($connection,$p_query);
while ($row1 =mysqli_fetch_array($res)) {
  echo "Escolher";?>
<option value="<?php echo $row1['id'];?>"><?php echo $row1['namebenif'];?>

</option>  
 
<?php } ?> 
<?php

 $p_query="SELECT * FROM patientregister";
$res=mysqli_query($connection,$p_query);
while ($row1 =mysqli_fetch_array($res)) {
   echo $row1['id'];?>
<option value="<?php echo $row1['id'];?>"><?php echo $row1['name'];?>
 </option>            
  
<?php } ?> 

</select>
</div>

<div class="form-group">
                <label for="DoctorSpecialization">
																Especialidade do médico
															</label>
							<select name="especialidade" class="form-control"  onChange="getdoctor(this.value);" onclick="getfee(this.value);" required="required">
																<option value="">Selecione a especialidade</option>
<?php $ret=mysqli_query($connection,"select * from especialidade");
while($row=mysqli_fetch_array($ret))
{
?>
<option value="<?php echo htmlentities($row['Nome']);?>">
																	<?php echo htmlentities($row['Nome']);?>
																</option>
																<?php } ?>
                                </select>         
                  
                </div>

              
<label >
																Médico
															</label>
						<select name="doctor" class="form-control" id="doctor"  required="required">
						<option value="">Selecione o Médico</option>
						</select>


              	<label >
																Preço
															</label>
                              <select name="preco" class="form-control" id="Preco"   required="required">
						<option value="">Selecione o Preço</option>
						</select>



<label for="exampleInputEmail1">Data da Consulta</label><br>
<input type="hidden" class="form-control" name="namepatient" id="namepatient" value="<?php echo $row1 ?>"  readonly="readonly">
      <!-- <label for="exampleInputEmail1">Data</label><br> -->

<input type="date" id="data" name="data" class="form-control" value="<?php echo date('Y-m-d');  ?>" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<div class="form-group">
                <label>Hora</label>
     <input type="time"  name="hora" id="hora" class="form-control"  >
     </div>
               
                
            <div class="form-group">
          

      
           

<!-- 
                <div class="form-group">
                  <label for="exampleInputPassword1">Telefone</label>
                  <input type="text" class="form-control" name="phone" id="phpne" />
                </div> -->
              
        
               <button type="submit"  name="submit" class="btn bg-blue">Salvar</button>
          </div>
      </form>
    </div>
  
</section>
</div>
<?php include "../Include/footer.php";?>
</div>
</div>
<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});

			$('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    startDate: '-3d'
});
		</script>
		  <script type="text/javascript">
            $('#timepicker1').timepicker();
        </script>
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