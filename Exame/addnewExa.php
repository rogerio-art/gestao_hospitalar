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
//include("../inc/connect.php") ;

//session_start();
if(isset($_POST['submit']))

{
  
    $patient=$_POST['patient'];
    $data=$_POST['data'];
    $resultadoexame = isset($_POST['resultadoexame']) ? $_POST['resultadoexame'] : array();
    $note=$_POST['note'];
    $patientname=$_POST['patientname'];
    $preco = isset($_POST['preco']) ? $_POST['preco'] : array();

   $resultadoexame= implode("\n",$resultadoexame);
    $preco= implode("\n",$preco);

    $write =mysqli_query($connection,"INSERT INTO exame(`patiente`,`data`,`nameexame`,`preco`,`patientname`,`note`) VALUES ('$patient','$data','$resultadoexame','$preco','$patientname','$note')") or die(mysqli_error($connection));
    //$query=mysql_query("SELECT * FROM user ")or die (mysql_error());
      //$numrows=mysql_num_rows($query)or die (mysql_error());
     //  echo " <script>setTimeout(\"location.href='../Exame/examelist.php';\",150);</script>";
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
             <select name="patient" id="patient"  class="form-control select2"  style="width:100%;">
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
<option value="<?php echo $row1['id'];?>"><?php echo $row1['name'];?>
 </option>
<?php } ?></select>
        <label>Selecione um Item:</label>
        <form id="addItemForm">
            <select id="dropdown">
            <option value=<?php include '../Patient/dropdown.php';?>
            </select>
            <input type="button" value="Adicionar" onclick="addSelectedItem()">
        </form>
        
        <div style="display: flex; justify-content: space-between;">
      
            <div style="flex: 1;">
            <div class="form-group">
                <label>Lista de Serviços:</label>
                <ul id="selected-items-list" name="resultadoexame">
                    <!-- Os itens selecionados serão exibidos aqui -->
                </ul>
            </div>
            </div>
            
            <div style="flex: 1;">
            <div class="form-group">
                <label>Preço do serviço:</label>
                <ul id="added-items-list" name="preco">
                    <!-- Os itens adicionados serão exibidos aqui -->
                </ul>
            </div>
        </div>
        </div>
        <input type="hidden" class="form-control" name="patientname" id="patientname" value="<?php echo $row1?>"  readonly="readonly">  

        <label>Total:</label>
        <p id="total-value">0</p>
        <div class="form-group">
                  <label for="exampleInputPassword1">Data</label>
                  <input type="date" class="form-control" name="data" id="data" value="<?php echo  date('Y-m-d');?>"  >
                  </div>
        <div class="form-group">
                  <label for="exampleInputPassword1">Nota do Exame</label>
          <textarea id="editor2" name="note" class="form-control">
                    </textarea>
                </div>
    </div>
     <button type="submit"  name="submit" class="btn bg-blue">Salvar</button>
               <a href="./examelist.php" type=""  name="" class="btn bg-blue">Voltar</a>
          </div>
      </form>
    </div>
  </div>
</div>
</section>
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
    <script type="text/javascript">
        function addSelectedItem() {
            // Obter o valor selecionado na dropdown
            var dropdown = document.getElementById("dropdown");
            var selectedValue = dropdown.options[dropdown.selectedIndex].value;

            // Obter o texto (mainservicename) selecionado na dropdown
            var selectedText = dropdown.options[dropdown.selectedIndex].text;

            // Verificar se o item já foi selecionado antes de adicioná-lo à lista
            if (!isItemAlreadySelected(selectedValue)) {
                // Criar um novo item de lista para a lista de itens selecionados
                var selectedListItem = document.createElement("li");
                selectedListItem.textContent = selectedText; // Usar o texto ao invés do valor

                // Adicionar o item à lista de itens selecionados
                var selectedItemsList = document.getElementById("selected-items-list");
                selectedItemsList.appendChild(selectedListItem);

                // Criar um novo item de lista para a lista de itens adicionados
                var addedListItem = document.createElement("li");
                addedListItem.textContent = selectedValue; // Usar o texto ao invés do valor
                addedListItem.setAttribute("data-price", selectedValue); // Adicionar atributo com o preço
                
                //addedListItem.textContent = selectedValue; // Usar o valor ao invés do texto
                //addedListItem.setAttribute("data-price", selectedValue); // Atualizar o atributo com o preço

                // Adicionar o item à lista de itens adicionados
                var addedItemsList = document.getElementById("added-items-list");
                addedItemsList.appendChild(addedListItem);

                // Atualizar o total
                updateTotal();
            }
        }

        function isItemAlreadySelected(itemValue) {
            // Verificar se o item já está na lista de itens selecionados
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
            // Calcular o total dos valores na lista de itens adicionados
            var addedItemsList = document.getElementById("added-items-list");
            var items = addedItemsList.getElementsByTagName("li");
            var total = 0;

            for (var i = 0; i < items.length; i++) {
                // Usar o valor do atributo data-price para obter o preço
                total += parseFloat(items[i].getAttribute("data-price"));
            }

            // Exibir o total no elemento HTML
            var totalElement = document.getElementById("total-value");
            totalElement.textContent = total;
        }
    </script>

<?php include "../Include/footer.php";?>