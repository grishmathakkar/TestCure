<?php

$con = mysql_connect("localhost","root","");
mysql_select_db("testcure",$con);

//First lets get the username and password from the user




$result="SELECT tid,s01,so2,so3,so4,so5,so6,so7,so8,so9,so10 FROM testd";
 while($row = mysqli_fetch_assoc($result)){


$tid=$row['tid'];
$o1=$row["so1"];
$o2=$row["so2"];
$o3=$row["so3"];
$o4=$row["so4"];
$o5=$row["so5"];
$o6=$row["so6"];
$o7=$row["so7"];
$o8=$row["so8"];
$o9=$row["so9"];
$o10=$row["so10"];

}

$id=$_POST["testno"];
$query="SELECT * FROM testd where id=$tid";

while($row=mysqli_fetch_assoc($query)){

		$score = 0;	
		if ($o1 == $row['so1']) {
		
		$score++; 
		
		}
		if ($o2 == $row['so2']) {
		
		$score++; 
		
		}
		if ($o3 == $row['so3']) {
		
		$score++; 
		
		}
		
		if ($o4 == $row['so4']) {
		
		$score++; 
		
		}
		if ($o5 == $row['so5']) {
		
		$score++; 
		
		}
		if ($o6 == $row['so6']) {
		
		$score++; 
		
		}
		if ($o7 == $row['so7']) {
		
		$score++; 
		
		}
		if ($o8 == $row['so8']) {
		
		$score++; 
		
		}
		if ($o9 == $row['so9']) {
		
		$score++; 
		
		}
		if ($o10 == $row['so10']) {
		
		$score++; 
		
		}
		}
	
	echo "<p align=center><b>You scored $score out of 10</b></p>";
	echo "<p>";
	

$query2=mysqli_query($conn,"insert into `tscore` value($sid,$tid,$score)");

?>