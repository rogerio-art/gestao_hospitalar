<?php
include("../inc/connect.php") ;
$id=$_POST['ajax_id'];
$q1=mysqli_query($connection,"SELECT * FROM mainservices WHERE id='".$id."'")or die (mysqli_error($connection));
$p_numrows=mysqli_num_rows($q1)or die (mysqli_error($connection));
$m_row=mysql_fetch_all($q1);
function mysql_fetch_all($query)
 {
 	$temp='';
    $all = array();
    while ($all[] = mysqli_fetch_assoc($query)) {$temp=$all;}
    return $temp;
}
$a='';
foreach ($m_row as $value) {
	$a.='<option value="'.$value['preco'].'">'.$value['preco'].'</option>';
}
echo $a;
?>