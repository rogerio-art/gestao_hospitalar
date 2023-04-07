<?php
include("../inc/connect.php") ;

$query=("SELECT `id`, `doc_date`, `patient`, `title`, `file` FROM addfiles")or die (mysqli_error($connection));
$numrows=mysqli_num_rows($connection,$query)or die (mysqli_error($connection));


// $row1=mysql_fetch_all($query);
// function mysql_fetch_all($query) {
//     $all = array();
//     while ($all[] = mysql_fetch_assoc($query)) {$temp=$all;}
//     return $temp;SELECT * FROM patientregister"
//}
// $stmt=$db_con->prepare('SELECT * FROM medicinecategory');
// $stmt->execute();


?>

<html>
<head>
<title>Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="panel">
    <div class="panel-heading">
      <h3>Document</h3>
      <div class="panel-body">
        <table border="1" class="table table-bordered table-striped">
            <tr>
              <th>Sr.no</th>
              <th>Date</th>
              <th>Patient</th>
              <th>Title</th>
              <th>Document</th>
              
              
            </tr>
          <?php
// while($row = mysql_fetch_assoc($extract))
          while($row=mysqli_fetch_assoc($query))
          {
            
            echo '
            <tr>
              <td>'.$row["id"].'</td>
              <td>'.$row["date"].'</td>
              <td>'.$row["patient"].'</td>
              <td>'.$row["description"].'</td>
              <td>'.$row["document"].'</td>
            </tr>
            ';
          }
          ?>
        </table>
        <a href="excelapp.php">Exportar para Excel</a>

      </div>

    </div>

  </div>

</div>



</body>
</html>
