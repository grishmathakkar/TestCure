<?php
     $servername="localhost"; 
$username="root";
$password="";
$db_name="testcure";
$tbl_name="scores";
$id = $_POST['testno']; // required
// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "FROM $tbl_name where testid = $id";
$retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_assoc($retval))

     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "ID :{$row['testid']}  <br> ".
         " Test Name: {$row['testname']} <br> ".
         "Taker id : {$row['takerid']} <br> ".
         "Score : {$row['score']} <br> ".
         "--------------------------------<br>";
     }


$conn->close();
?>  