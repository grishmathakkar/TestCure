<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("testcure",$con);
$id=$_POST['tdel'];

$result = mysql_query("Delete FROM testd where id = $id ");

echo("Test deleted successfully");
?>