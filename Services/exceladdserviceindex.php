<?php
include("../inc/connect.php") ;

$query=mysqli_query($connection,"SELECT * FROM mainservices")or die (mysqli_error($connection));
$numrows=mysqli_num_rows($query)or die (mysqli_error($connection));


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
<title>Serviços Principais</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="panel">
    <div class="panel-heading">
      <h3>Serviços Principais</h3>
      <div class="panel-body">
        <table border="1" class="table table-bordered table-striped">
    				<tr>
    				<th>Sr.No</th>
              <th>Nome Serviços Principais</th>
           
    				</tr>
    			<?php
// while($row = mysql_fetch_assoc($extract))
    			while($row=mysqli_fetch_assoc($query)){
    				echo '
    				<tr>
    					<td>'.$row["id"].'</td>
    					<td>'.$row["mainservicename"].'</td>
             
    				</tr>
    				';
    			}
    			?>
    		</table>
    		<a href="exceladdscervice.php">Exportar para Excel</a>

      </div>

    </div>

  </div>

</div>



</body>
</html>
