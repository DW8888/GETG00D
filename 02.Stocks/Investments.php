
<?php
include("DButility.php");




$sqlStatement = "SELECT * from investments limit 20";
$sql=new DBUtility();
$data = $sql->execute($sqlStatement);


print_r("Darwhin Gomez \n");
print_r($data);
print_r("Darwhin Gomez");
?>
