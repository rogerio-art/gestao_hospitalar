<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>
<?php
include("../inc/connect.php") ;

$sql=mysqli_query($connection,"SELECT * FROM addpayment WHERE  id='".$_GET['id']."'");
$write =mysqli_query($connection,"SELECT * FROM addpayment WHERE  id='".$_GET['id']."'") or die(mysqli_error($connection));
$a_row=mysqli_fetch_array($write)or die (mysqli_error($connection));

$p_query=mysqli_query($connection,"SELECT * FROM patientregister WHERE id='".$a_row['patient']."'")or die (mysqli_error($connection));
$p_numrows=mysqli_num_rows($p_query)or die (mysqli_error($connection));
$p_row1=mysqli_fetch_array($p_query);

$q1=mysqli_query($connection,"SELECT * FROM mainservices")or die (mysqli_error($connection));
$p_numrows=mysqli_num_rows($q1)or die (mysqli_error($connection));
$m_row=mysql_fetch_all($q1);

function mysql_fetch_all($query) {
    $all = array();
    while ($all[] = mysqli_fetch_assoc($query)) {$temp=$all;}
    return $temp;
}
//print_r($a_row); exit;
//$row1[]=mysql_fetch_assoc($query)or die (mysql_error());
?>
<?php
//include("../inc/connect.php") ;
//echo "string"; exit();
if(isset($_POST['b1']))
{ //echo "string"; exit();
    $invoice=$_POST['invoice'];
    $patient=$_POST['patient'];
   //$refdbydoctor=$_POST['refdbydoctor'];
    $categoryselect=$_POST['newservice'];
    $subtotal=$_POST['subtotal'];
    $addp_discount=$_POST['addp_discount'];
    $grosstotal=$_POST['grosstotal'];
    $amountreceived=$_POST['amountreceived'];
   // $date=$_POST['date']

      $write =mysqli_query($connection,"UPDATE addpayment SET invoice='$invoice',patient='$patient',categoryselect='$categoryselect',subtotal='$subtotal',addp_discount='$addp_discount',grosstotal='$grosstotal',amountreceived='$amountreceived' WHERE id='".$_GET['id']."'") or die(mysqli_error($connection));

  echo " <script>alert('Records Successfully Updated..');</script>";

    }
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Editar Pagamento
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li class="active">Editar Pagamento</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
             <i class="fa fa-plus-circle"></i> <h3 class="box-title">Edit Payment </h3>
            </div>
                
      <div class="container">
      <form method="POST" >
      <div class="col-md-4">
      <label>Número</label>
       <input type="text" name="invoice" value="<?php echo $a_row['invoice'];?>" class='form-control' placeholder=''><br>

  <label >Paciente</label><br>
  <input type="text" name="p_name" value="<?php echo $p_row1['name'];?>" class='form-control' placeholder='' readonly> <br>
 <input type="hidden" name="patient" value="<?php echo $p_row1['id'];?>">
  <br>
 <label> Selecionar</label>
<select name="categoryselect[]" id="categoryselect" placeholder="" class='form-control'>
  <option>--Selecioner Um--</option>
  <?php foreach ($m_row as $p) {?>
  <option value="<?php echo $p['id'];?>"><?php echo $p['mainservicename'];?></option>
<?php } ?>  
</select>
<input type ="hidden" name="service" id="service" value="">

<select name="subservice" id="subservice" size="10" style="width: 100px;" multiple="multiple" >

</select>
</div>  
 <div class="col-md-2">
<div class="box" style="height: 100px;">
  
  <div id="sub">
    <?php $s1=mysqli_query($connection,"SELECT categoryselect FROM addpayment WHERE  id='".$_GET['id']."'");
$w1 =mysqli_query($connection,"SELECT categoryselect FROM addpayment WHERE  id='".$_GET['id']."'") or die(mysqli_error($connection));
$row=mysqli_fetch_array($w1)or die (mysqli_error($connection));
//print_r($row);
$categoryselect=$row['categoryselect'];
$val= explode(',',$categoryselect);
//echo 'fsdfsdf'.$val; exit;

$s_row='';
for ($i=1;$i<count($val);$i++) 
{
 $s_q1=mysqli_query($connection,"SELECT Fee FROM subservices WHERE  sid='".$val[$i]."'")or die (mysqli_error($connection));
$s_row=mysqli_fetch_array($s_q1)or die (mysqli_error($connection));
echo 'Fee : '.$s_row['Fee'].'<br>';
}?> 
<input type ="hidden" name="newservice" id="newservice" value="<?php echo $categoryselect;?>"> 
 

  </div>
  </div>
</div>


<div class="col-md-6"  style="float:right;">
  <br>
 <label>  Total</lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  <input type ="text" name="subtotal" id="subtotal" value="<?php echo $a_row['subtotal'];?>" ><br><br>
  <input type ="hidden" name="k" id="k" value="0">

  <input type ="hidden" name="temp" id="temp" value="">

  <input type ="hidden" name="total" id="total" value="">
<label> Disconto %</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type ="number" name="addp_discount" id="chDiscount" value="<?php echo $a_row['addp_discount'];?>"><br><br>
   <label> Total Geral</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  <input type ="text" name="grosstotal" id="result" value="<?php echo $a_row['grosstotal'];?>"><br><br>
   <label> Valor  Recebido</label>
 <input type ="text" name="amountreceived" value="<?php echo $a_row['amountreceived'];?>" ><br><br>
 <button type="submit" name="b1" class="btn btn-success" >Atualizar</button>
            </div>
           </form>
       </div>
   </div>
</div>
</div>
</section>
</div>
<?php include "../Include/footer.php";?>
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
    $('#sub').append("<br> Fee: " + result);
    var temp=$('#temp').val(result); 
    var k=$('#k').val(result); 

    //$('#subtotal')=a+result;
    //alert(sum)
    submit(temp,k);
    list(service_id);
  })

  function submit(temp,k)
  {
    var add=temp.val();
    var add=k.val();
    a+=+add;
  $('#total').val(a);
  var subtotal=$('#subtotal').val();
  var kval=$('#k').val();
  var amount= parseInt(subtotal) + parseInt(kval);
$('#subtotal').val(amount);
//alert(amount);

  }
  function list(service)
  {
    var add=service;
    b=b+','+add;
    //alert(b);
    $('#service').val(b);
  $('#ser').val(b);
var s1=$('#subservice').val();
var s2=$('#newservice').val();
var Total=$('#subservice').val()+$('#newservice').val();
   $('#newservice').val(Total);
  //alert(Total);
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