<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>
<?php
include("../inc/connect.php") ;


//echo "string"; exit();
//session_start();
if(isset($_POST['b1']))
{ //echo "string"; exit();
  $invoice=$_POST['invoice'];
  $patient=$_POST['patient'];
  //$refdbydoctor=$_POST['refdbydoctor'];
  $a=$_POST['servico'];
  //print_r($a)
  //print_r(implode(",",(array)$a));
  $categoryselect=$_POST['servico'];
    $subtotal=$_POST['subservice'];
    $quantidade=$_POST['quantidade'];
    $grosstotal=$_POST['grosstotal'];
    $amountreceived =$_POST['amountreceived'];
    $servico =$_POST['temp2'];
    $p_name =$_POST['p_name'];
  
    $grosstotal=$quantidade * $subtotal;
    

    //$date=$_POST['date'];
  $write =mysqli_query($connection,"INSERT INTO addpayment(`invoice`,`patient`,`refdbydoctor`,`categoryselect`,`subtotal`,`vatper`,`grosstotal`,`amountreceived`,`depositammount`,`date`) VALUES ('$invoice','$patient','$servico','$categoryselect','$subtotal','$quantidade','$grosstotal','$amountreceived','$p_name',now())") or die(mysqli_error($connection));
      //$query=mysql_query("SELECT * FROM user ")or die (mysql_error());
      //$numrows=mysql_num_rows($query)or die (mysql_error());
       echo " <script>alert('Dados Salvo com Sucesso..');</script>";
    
//header("location:paymenthistory.php?id=".$p_row1['id']);
  //  header("location:./Patient/paymenthistory.php");
    }
?>
<?php
//include("../inc/connect.php") ;
$q1=mysqli_query($connection,"SELECT * FROM mainservices")or die (mysqli_error($connection));
$p_numrows=mysqli_num_rows($q1)or die (mysqli_error($connection));
$m_row=mysql_fetch_all($q1);

$p_query=mysqli_query($connection,"SELECT * FROM patientregister WHERE  id='".$_GET['id']."'")or die (mysqli_error($connection));
$p_numrows=mysqli_num_rows($p_query)or die (mysqli_error($connection));
$p_row1=mysqli_fetch_array($p_query);

// $sql="SELECT * FROM addpayment ";
// //SELECT `id`, `invoice`,`depositammount`,`date` FROM addpayment
// $write =mysql_query($sql) or die(mysql_error($connection));
// // print_r($sql); exit;
// $a_row=mysql_fetch_all($write)or die (mysql_error($connection));

function mysql_fetch_all($query)
 {
  $temp='';
    $all = array();
    while ($all[] = mysqli_fetch_assoc($query)) {$temp=$all;}
    return $temp;
}
//print_r($a_row); exit;
//$row1[]=mysql_fetch_assoc($query)or die (mysql_error());
?>
<?php
//include("../inc/connect.php") ;
//session_start();
if(isset($_POST['submit']))
{
  // $doctor=$_POST['doctor'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $birthdate=$_POST['birthdate'];
    $bloodgroup=$_POST['bloodgroup'];
    
  $target_dir="../Upload/";
   $imgname=$_FILES["imageupload"]["name"];
   $type = $_FILES["imageupload"]["type"];
   $size = $_FILES["imageupload"]["size"];

   $temp = $_FILES["imageupload"]["tmp_name"]; 
   $error = $_FILES["imageupload"]["error"];//size
  if($error>0)
  {
    die("Error uploading file! Code $error.");
  }
  else
  { 
    if ($type=="images/" || $size > 5000000)
    {
      die("that format is not allowed or file size is too big!");
    }
    else
    { move_uploaded_file($temp,"../Upload/".$imgname);//move upload file  
      echo"Upload Complete";
    }
  }
      $imageupload=$_FILES["imageupload"]["name"];

   $write =mysqli_query($connection,"INSERT INTO patientregister(`doctor`,`name`,`email`,`password`,`address`,`phone`,`gender`,`birthdate`,`bloodgroup`,`imageupload`) VALUES ('$doctor','$name','$email','$password','$address','$phone', '$gender','$birthdate','$bloodgroup','$imageupload')") or die(mysqli_error($connection));
      //$query=mysql_query("SELECT * FROM user ")or die (mysql_error());
     //$numrows=mysql_num_rows($query)or die (mysql_error());
      echo " <script>alert('Dados inseridos com Sucesso..');</script>";
      header("location:paymenthistory.php?id=".$row['patient']);
    }
    ?>
     <script src="../dist/dist/jquery.min.js"></script>


<script>
$ (function (){
$ ("#categoryselect") .change(function(){
    var mostrarnome=$("#categoryselect option:selected").text();
    $ ("#temp2") .val (mostrarnome);
   })
})
</script> 
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
       Adicionar Pagamento
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="./Index"><i class="fa fa-dashboard"></i> Casa</a></li>
        <li class="active"></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
             <i class="fa fa-plus-circle"></i> <h3 class="box-title">Adicionar Novo Pagamento</h3>
            </div>
                
<div class="content">
<div class="row">
        <div class="col-md-12">
  <!-- Trigger the modal with a button -->
   <!-- <a href="./patientregister.php"> -->
   <!-- <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal" style="height: 40px;"><i class="fa fa-plus-square"></i> Register Patient</button> </a> --><br><br> 

  <!-- Modal -->


  
  <!-- Trigger the modal with a button -->
   <!-- <a href="./patientregister.php"> -->
   <!-- <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal" style="height: 40px;"><i class="fa fa-plus-square"></i> Register Patient</button> </a> --><br><br> 

  <!-- Modal -->
 
  

  <form method="POST" >
  <div class="col-md-4">
<label> Número da Fatura</label>
  <?php 
$query = "SELECT * FROM addpayment ORDER BY id DESC LIMIT 1";
$w4=mysqli_query($connection,$query) or die(mysqli_error($connection));
$r4=mysqli_fetch_array($w4)or die (mysqli_error($connection));
// $result = mysql_query($query);
// mysql_num_rows($result);
$no=$r4['id'];
        ?>


         <input type="text" name="invoice" class="form-control" placeholder="" value="CS-<?php echo sprintf("%'.08d",$no);?>">
<br>
  <label >Paciente</label><br>
  <input type="text" name="p_name" value="<?php echo $p_row1['name'];?>" class='form-control' placeholder='' readonly>
  <input type="hidden" name="patient" value="<?php echo $p_row1['id'];?>">
  <br>
   
 <label> Escolher o Serviço</label>
<select name="servico" id="categoryselect" placeholder="" class='form-control'>
  <option>--Selecione--</option>
  <?php foreach ($m_row as $p) {?>
  <option value="<?php echo $p['id'];?>"><?php echo $p['mainservicename'];?></option>
<?php } ?>  
</select>
<input type ="hidden" name="temp2" id="temp2" >
<select name="subservice" id="subservice" size="2" style="width: 100%;" multiple="multiple">

</select>
</div>  
 <div class="col-md-2">
<div type="hidden" class="box">
  
  <div id="sub" ></div>
  </div>
</div>
<div class="col-md-6"  style="float:right;">

 <!-- <label> Total</lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  -->
  <input type ="hidden" name="subtotal" id="subtotal" value="0"><br><br>
  <input type ="hidden" name="temp" id="temp" value="">
<label> Quantidade </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type ="text" name="quantidade" id="chDiscount" ><br><br>
   <label> Total Geral</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  <input type ="text" name="grosstotal" id="result" value="0"><br><br>
   <!-- <label> Data</label> -->
   <input type ="hidden" name="amountreceived"><br><br>

 <button type="submit" name="b1" class="btn bg-blue" >Salvar</button>
 <!--a href="paymenthistory.php?id=<?php echo $_GET['id']; ?>"><span class="btn btn-primary"><i class="fa fa-back"></i> Voltar -->   <!--span class="popuptext" id="myPopup">Get full version at rogeriolameira@gmail.com</span--></span></a><!--&nbsp;&nbsp-->

            </div>
           </form>
           </div>
           </section>
</div>
<?php include "../Include/footer.php";?>
     
       
       </div>
       

       </div>
    </div>
   </div>
</div>
</div>

<script type="text/javascript">
$('#categoryselect').on('change', function()
 {
  var id=this.value;
  $.ajax({
    url:'ajax.php',
    type:'POST',
    data:{ajax_id:id}
  }).done(function(result)
  {
    $('#subservice').html(result);
  })
  
})
var a=0;
var b='';
$('#subservice').on('change', function()
 {
  
  var service_id=this.value;
  $.ajax({
    url:'ajaxsub.php',
    type:'POST',
    data:{sub_id:service_id}
  }).done(function(result)
  {
    //$('#sub').append(result);
    $('#sub').append("<br> resultado: " + result);
    var temp=$('#temp').val(result); 
    //$('#subtotal')=a+result;
    //alert(sum)
    submit(temp);
    list(service_id);
  })  
  function submit(temp)
  {
    var add=temp.val();
    a+=+add;
    $('#subtotal').val(a);
  }
  function list(service)
  {
    var add=service;
    b=b+','+add;
    //alert(b);
    $('#service').val(b);
  }
});
$(document).on("change keyup blur", "#chDiscount", function() {
var main = $('#subtotal').val();
var disc = $('#chDiscount').val();
var dec = (disc/100).toFixed(2); //its convert 10 into 0.10
var mult = main*dec; // gives the value for subtract from main value
var discont = main-mult;
$('#result').val(discont);
//alert(discont);
});
</script>