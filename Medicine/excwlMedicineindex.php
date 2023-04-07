<?php
include("../inc/connect.php") ;

$query=mysqli_query($connection,"SELECT * FROM addnewmedicine")or die (mysqli_error($connection));
$numrows=mysqli_num_rows($query)or die (mysqli_error($db_connect));


// $row1=mysql_fetch_all($query);
// function mysql_fetch_all($query) {
//     $all = array();
//     while ($all[] = mysql_fetch_assoc($query)) {$temp=$all;}
//     return $temp;
//}
// $stmt=$db_con->prepare('SELECT * FROM medicinecategory');
// $stmt->execute();


?>

<html>
<head>
<title>Categoria do Medicamento</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="panel">
    <div class="panel-heading">
      <h3>Categoria do Medicamento</h3>
      <div class="panel-body">
        <table border="1" class="table table-bordered table-striped">
    				<tr>
    					<th>Sr.No</th>
              <th>Nome</th>
              <th>Categoria</th>
              <th>Preço</th>
              <th>Quantidade</th>
    					<th>Nome Generico</th>
              <th>Empresa</th>
              <th>Efeito</th>
              <th>Data de Expiração</th>
    				</tr>
    			<?php
// while($row = mysql_fetch_assoc($extract))
    			while($row=mysqli_fetch_assoc($query)){
    				echo '
    				<tr>
    					<td>'.$row["id"].'</td>
    					<td>'.$row["name"].'</td>
              <td>'.$row["category"].'</td>
              <td>'.$row["price"].'</td>
              <td>'.$row["quantity"].'</td>
              <td>'.$row["genericname"].'</td>
              <td>'.$row["company"].'</td>
              <td>'.$row["effect"].'</td>
              <td>'.$row["expiredate"].'</td>
              
    				</tr>
    				';
    			}
    			?>
    		</table>
    		<a href="ExcelMedicineCategory.php">Exportar para Excel</a>

      </div>

    </div>

  </div>

</div>



</body>
</html>
