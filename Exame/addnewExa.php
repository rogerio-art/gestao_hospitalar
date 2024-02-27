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
      $ ("#patientname") .val (mostrarnome);
     })
  })
  </script> 
  <?php
if(isset($_POST['submit'])) {
    $patient=$_POST['patient'];
    $data=$_POST['data'];
    $note=$_POST['note'];
    $valueTotal=$_POST['totalvalue'];
    $patientname=$_POST['patientname'];
     // Inicializa os arrays
     $listaExame = isset($_POST['listaExame']) ? $_POST['listaExame'] : array();
     //$preco = isset($_POST['preco']) ? $_POST['preco'] : array();
     $exameNameListfinal = implode(',', $listaExame);
    
    $parts = explode(",,", $exameNameListfinal);
    if (count($parts) >= 2) {
      // A primeira parte antes de ",," (duas vírgulas)
      $exameName = $parts[0];

      // A segunda parte após ",," (duas vírgulas) até o último caractere
      $examePreco = $parts[1];
  }
 
    if(empty($patientname) or (empty($exameNameListfinal))){ 
      ?>
      <script>
      window.alert("Preenche todos os campos do formuário");
  </script>
  <meta http-equiv="refresh" content="1;url=addnewExa.php" />
  <?php
     }else{
   
    // Processa os arrays para obter os valores finais
    

    $note = $_POST['note'];
    $valueTotal = $_POST['totalvalue'];
    $patientname = $_POST['patientname'];

    // Restante do seu código PHP para inserção no banco de dados
    $write = mysqli_query($connection, "INSERT INTO exame(`patiente`,`data`,`nameexame`, `preco`,`patientname`,`note`,`PrecoTotal`) VALUES ('$patient','$data','$exameName','$examePreco','$patientname','$note',' $valueTotal')") or die(mysqli_error($connection));
    header("refresh:1;url=examelist.php");
}
}
?>



<?php
$q1=mysqli_query($connection,"SELECT * FROM mainservices")or die (mysqli_error($connection));
$p_numrows=mysqli_num_rows($q1)or die (mysqli_error($connection));
$m_row=mysql_fetch_all($q1);

$p_query=mysqli_query($connection,"SELECT * FROM patientregister")or die (mysqli_error($connection));
$p_numrows=mysqli_num_rows($p_query)or die (mysqli_error($connection));
$p_row1=mysql_fetch_all($p_query);


function mysql_fetch_all($query) {
  $temp='';
    $all = array();
    while ($all[] = mysqli_fetch_assoc($query)) {$temp=$all;}
    return $temp;
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
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lameira Soft</title>
</head>
<body>

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
                    
            <div class="container">
                <label for="exampleInputEmail1">Nome do Paciente</label><br>
             <select name="patient" id="patient"  class="form-control select2"  style="width:100%;" required="required">
<option>

<?php $p_query="SELECT * FROM beneficiario ";
$res=mysqli_query($connection,$p_query);
while ($row1 =mysqli_fetch_array($res)) {
  echo "Escolher";  ?>
<option value="<?php echo $row1['id'];?>"><?php echo $row1['namebenif'];?>
</option>            
 
<?php } ?> 
</option>
<?php

 $p_query="SELECT * FROM patientregister";
$res=mysqli_query($connection,$p_query);
while ($row1 =mysqli_fetch_array($res)) {
  echo $row1['id'];?>
<option value="<?php echo $row1['id'];?> "><?php echo $row1['name'];?> 
 </option>
<?php } ?></select>
<br><br>
        <label for="exampleInputEmail1">Selecione um Item:</label><br>
        <form id="addItemForm">
            <select id="dropdown" name="nameExame" class="form-control select2"  style="width:100%;">
            <option value=<?php include '../Patient/dropdown.php';?>
            </select>
            <br>
            <br>
            <input type="button" class="btn bg-blue" value="Adicionar" onclick="addSelectedItem()">
        </form>

        <div style="display: flex; justify-content: space-between;">

            <div style="flex: 1;">
            <div class="form-group">
                <label>Lista de Serviços:</label>
                <ul id="selected-items-list" name="resultadoexames"required="required"></ul>
                <input type="hidden" name="listaExame[]" id="listaExame" value="" required="required">
            </div> 
            </div>

            <div style="flex: 1;">
            <div class="form-group">
                <label>Preço do serviço:</label>
                <ul id="added-items-list" name="precos"required="required"></ul>
                <input type="hidden" name="preco[]" id="preco" value=""readonly="readonly">
            </div>
        </div>
        <div style="flex: 1;">
            <div class="form-group">
            <label>Total:</label>
        <p id="total-value" neme ="totalvalue">0</p>

<input type="hidden" name="totalvalue" id="totalvalue" value="0">
        </div>
        </div>
        </div>
        <input type="hidden" class="form-control" name="patientname" id="patientname" value="<?php echo $row1?>"  >  
        
        <div class="form-group">
                  <!--label for="exampleInputPassword1">Data</label-->
                  <input type="hidden" class="form-control" name="data" id="data" value="<?php echo  date('Y-m-d');?>"  >
                  </div>
        <div class="form-group">
                  <label for="exampleInputPassword1">Nota do Exame</label>
          <textarea id="editor2" name="note" class="form-control">
                    </textarea>
                </div>
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="submit"  name="submit" class="btn bg-blue">Salvar</button>
               <a href="./examelist.php" type=""  name="" class="btn bg-blue">Voltar</a>
          </div>
      </form>
    </div>
  </div>
</div>
</section>
</div>
</body>
</html>
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
  <script type="text/javascript">
    function createCheckbox(name) {
        var checkbox = document.createElement("input");
        checkbox.type = "checkbox";
        checkbox.name = "listaExame[]"; // Use [] para receber como array no PHP
        checkbox.value = name;
        checkbox.checked = true; // Marcar a checkbox por padrão

        return checkbox;
    }

   
    function addSelectedItem() {
        var dropdown = document.getElementById("dropdown");
        var selectedValue = dropdown.options[dropdown.selectedIndex].value;
        var selectedText = dropdown.options[dropdown.selectedIndex].text;

        if (!isItemAlreadySelected(selectedText)) {
            var selectedListItem = document.createElement("li");
            var checkbox = createCheckbox(selectedText);
            selectedListItem.appendChild(checkbox);
            selectedListItem.appendChild(document.createTextNode(selectedText));

            var selectedItemsList = document.getElementById("selected-items-list");
            selectedItemsList.appendChild(selectedListItem);

        }
        if (!isItemAlreadySelected(selectedValue)) {
            var addedListItem = document.createElement("li");          
            var checkboxValue = createCheckbox(selectedValue);  //addedListItem.textContent = selectedValue; // Alterado para usar o do valor em vez de texto 
            addedListItem.appendChild(checkboxValue);
            addedListItem.appendChild(document.createTextNode(selectedValue)); // Alterado para usar o do valor em vez de texto
            
            var addedItemsList = document.getElementById("added-items-list");
            addedItemsList.appendChild(addedListItem);
        
            addedListItem.setAttribute("data-price", selectedValue); // Adicionar atributo com o preço

            // Atualizar o total
            updateTotal();
            updateHiddenInputs();
        }
    }

    function updateHiddenInputs() {
        var selectedItemsList = document.getElementById("selected-items-list");
        var addedItemsList = document.getElementById("added-items-list");

        // Atualizar valores para os campos escondidos
        updateHiddenInput("listaExame", selectedItemsList);
        updateHiddenInput("preco", addedItemsList);
    }

    function updateHiddenInput(inputName, list) {
        var items = list.getElementsByTagName("li");
        var hiddenInput = document.getElementsByName(inputName)[0];
        var values = [];

        for (var i = 0; i < items.length; i++) {
            values.push(items[i].textContent);
        }

        hiddenInput.value = values.join(','); // Armazenar os valores separados por vírgula
    }

    function isItemAlreadySelected(itemValue) {
        var selectedItemsList = document.getElementById("selected-items-list");
        var items = selectedItemsList.getElementsByTagName("li");

        for (var i = 0; i < items.length; i++) {
            if (items[i].textContent === itemValue) {
                alert("Item já selecionado!");
                return true;
            }
        }
        return false;
    }

    function updateTotal() {
        var addedItemsList = document.getElementById("added-items-list");
        var items = addedItemsList.getElementsByTagName("li");
        var total = 0;

        for (var i = 0; i < items.length; i++) {
            total += parseFloat(items[i].getAttribute("data-price"));
        }

        var totalElement = document.getElementById("total-value");
        totalElement.textContent = total;

        // Adiciona o valor total ao campo oculto
        document.getElementById("totalvalue").value = total;
    }
</script>



<?php include "../Include/footer.php";?>