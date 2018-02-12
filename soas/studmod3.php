<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$error_msg = array();
	if(!isset($_POST['qz1'])){
		$error_msg[] = "No radio buttons were checked.";
	}
}
$servername="localhost"; 
$username="root";
$password="";
$db_name="testcure";
$tbl_name="testd";
$s1 = $_POST['qz1'];
$s2 = $_POST['qz2'];
$s3 = $_POST['qz3'];
$s4 = $_POST['qz4'];
$s5 = $_POST['qz5'];
$s6 = $_POST['qz6'];
$s7 = $_POST['qz7'];
$s8 = $_POST['qz8'];
$s9 = $_POST['qz9'];
$s10 = $_POST['qz10'];


	$conn = new mysqli($servername, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 $sql="INSERT INTO $tbl_name (so1,so2,so3,so4,so5,so6,so7,so8,so9,so10)VALUES('$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s10' )";
if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$result=mysql_query($sql);

if($result){
echo "Successfully";


}


    
   
       
?>
 
 
<?php

die();
?>