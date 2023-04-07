<?php
include("../inc/connect.php") ;

$query=("SELECT * FROM addappointment WHERE `app_date` = '".date('Y-m-d')."'")or die (mysqli_error($connection));
$numrows=mysqli_num_rows($connection,$query)or die (mysqli_error($connection));


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
<title>Categoria de Medicina</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="panel">
    <div class="panel-heading">
      <h3>Medicine Category</h3>
      <div class="panel-body">
        <table border="1" class="table table-bordered table-striped">
            <tr>
              <th>Sr.Número</th>
              <th>Paciente</th>
              <th>Doctor</th>
              <th>Data</th>
              <th>Data início</th>
              <th>Data fim</th>
              <th>Remarcar</th>
              <th>SMS</th>
              
            </tr>
          <?php
// while($row = mysql_fetch_assoc($extract))
          while($row=mysqli_fetch_assoc($query)){
            echo '
            <tr>
              <td>'.$row["id"].'</td>
              <td>'.$row["patient"].'</td>
              <td>'.$row["doctor"].'</td>
              <td>'.$row["app_date"].'</td>
              <td>'.$row["starttime"].'</td>
              <td>'.$row["endtime"].'</td>
              <td>'.$row["remark "].'</td>
              <td>'.$row["sms "].'</td>
              
              
            </tr>
            ';
          }
          ?>
        </table>
        <a href="ExcelAppointment.php">Exportar para Excel</a>

      </div>

    </div>

  </div>

</div>



</body>
</html>
