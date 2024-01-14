<?php
session_start();

if (empty($_SESSION['id'])) {
    header("location: ./Validar_user_logado.php");

}
    ?>
<?php include('./controllers/marcarconsultaCode.php'); ?>
<?php include('header.php');?>
<?php include('sidebar.php');?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
                                    
  <!--link rel="stylesheet" href="CSS/bootstrap.min.css"-->
  <!--link rel="stylesheet" href="CSS/app.css">
    <link rel="stylesheet" href="CSS/all.min.css">
    <script src="JS/bootstrap.bundle.min.js"></script>
    
    <script src="JS/app.js"></script-->
       
</head>

<body>
  
  <!-- Page content -->
    
  <div class="content-wrapper">
        <section class="content-header">
      <h1>
      <font color="black">Agendar Consulta </font> 
        <small></small>
       </h1>
     <ol class="breadcrumb">
       <li><a href="index.php"><i class="fa fa-dashboard"></i>Casa</a></li>
       <li class="active"></li>
     </ol>
   </section>
   <section class="content">
     <div class="box box-primary">
      
    
       <div class="box-header with-border">
         <i class=""></i>
        
      
             <!-- Page content -->
<script>	
 function getdoctor(val) {
	$.ajax({
	type: "POST",
	url: "get_doctor.php",
	data:'specilizationid='+val,
	success: function(data){
		$("#doctor").html(data);
  
	}
	});
}
</script>	


   <script>
function getfee(val) {
	$.ajax({
	type: "POST",
	url: "get_doctor.php",
	data:'Price='+val,
	success: function(data){
		$("#Preco").html(data);
	}
	});
}
</script>	 

<!-- <script src="./dist/dist/jquery.min.js"></script>


<script>
$ (function (){
$ ("#Nome") .change(function(){
    var mostrarnome=$("#Nome option:selected").text();
    $ ("#Preco") .val (mostrarnome);
   })
})
</script>  -->

           
<form action="" method="post" class="row g-3">


<div class="col-md-6">
  <label>Paciente ou Benificiário</label>
 <select name="nomepaciente" id="nomepaciente" class="form-control " >
 <option ><?php echo ($_SESSION['name']); ?></option>

<?php

 $p_query="SELECT * FROM beneficiario WHERE id='".$_SESSION['id']."'";
$res=mysqli_query($connection,$p_query);
while ($row1 =mysqli_fetch_array($res)) {
   echo $row1['id'];?>
<option value="<?php echo $row1['namebenif'];?>"><?php echo $row1['namebenif'];?>
 </option>            
  
<?php } ?> 

</select>

</select>  
</div>
 

  <div class="col-md-6">
  <!--label>Email do Paciente</label-->
  <input type="hidden" class="form-control" name="emaildocliente" id="emailpaciente" value="<?php echo ($_SESSION ['email'] ); ?>"/>
  </div>
 
  <div class="col-md-6">
  <label>Data</label>
  <input class="form-control datepicker" name="dataconsulta"  required="required" value="<?php echo date('Y-m-d');  ?>"  data-date-format="yyyy-mm-dd">
  </div>
  

  <div class="form-group">
  <div class="col-md-6">
  <label for="DoctorSpecialization">
																Nome  da Consulta
															</label>
							<select name="especialidade" id ="Nome" class="form-control"  onChange="getdoctor(this.value);" onclick="getfee(this.value);" required="required">
																<option value="">Seleciona a especialidade</option>
<?php $ret=mysqli_query($connection,"select * from especialidade");
while($row=mysqli_fetch_array($ret))
{


?>
<option value="<?php echo ($row['Nome']);?>">
																	<?php echo ($row['Nome']);?>
																</option>
																<?php } ?>
                                </select>
                                
            </div>
            </div>

  <div class="col-md-6">
  <label>Telefone</label>
  <input type="text" class="form-control" name="numerodetelefone" id="numerodetelefone" value="<?php echo ($_SESSION ['phone'] ); ?>"/>
  </div>
 


            <div class="form-group">
            <div class="col-md-6">
															<label >
																Médico
															</label>
						<select name="doctor" class="form-control" id="doctor"  required="required">
						<option value="">Selecione o Médico</option>
						</select>
														</div>
                            </div>


            <div class="form-group">
            <div class="col-md-6">
  <label >Hora</label>
  <input type="time" class="form-control" name="Hora" id="timepickellllr1"   required="required">
            </div>
            </br></br>
  <div class="form-group">
            <div class="col-md-6">
															<label >
																Preço
															</label>
                              <select name="preco" class="form-control" id="Preco"   required="required">
						<option value="">Selecione o Preço</option>
						</select>
														</div>
                            </div>
                                                      
  <div class="col-md-6">
   <input type="hidden" class="form-control" readonly="readonly"  name="id" id="id" value="<?php echo ($_SESSION ['id'] ); ?>"/>
  </div>

  <div class="col-md-12">
</br>
  <input  type="submit" name="submit" id="submit" value="Salvar" STYLE = "color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #2196f3;" size = "10" maxlength = "30" class="form-control" class="btn btn-primary"  />
   
               
                    </div>

  <!-- <a href="atividadeConsulta.php"><button type="button" class="btn btn-primary bg-blue">Voltar</button></a>&nbsp;&nbsp; -->
    </div>
  
</form>
</br>

               
</div>
  
                
</div>

</section>
<script src="bower_components/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="bower_components/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>




</section>

</body>

</div>


<?php include('footer.php');?>
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
</html>

