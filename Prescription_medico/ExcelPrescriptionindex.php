<?php
include("../inc/connect.php") ;

$query=mysqli_query($connection,"SELECT * FROM addnewpres")or die (mysqli_error($connection));
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
      <h3>Categoria</h3>
      <div class="panel-body">
        <table border="1" class="table table-bordered table-striped">
            <tr>
              <th>Nº</th>
              <th>Data</th>
              <th>Paciente</th>
              <!-- <th>History</th>
              <th>Medication</th>
              <th>Note</th> -->
              
            </tr>
          <?php
// while($row = mysql_fetch_assoc($extract))
          while($row=mysqli_fetch_assoc($query)){
            echo '
            <tr>
              <td>'.$row["id"].'</td>
              <td>'.$row["date"].'</td>
              <td>'.$row["patient"].'</td>
              <td>'.$row["history"].'</td>
              <td>'.$row["medication"].'</td>
              <td>'.$row["genericname"].'</td>
              <td>'.$row["note "].'</td>
              
              
            </tr>
            ';
          }
          ?>
        </table>
        <a href="ExcelPrescription.php">Exportar para Excel</a>

      </div>

    </div>

  </div>

</div>



</body>
</html>
