<?php

$servername="localhost"; 
$username="root";
$password="";
$db_name="testcure";
$tbl_name="testd";

$testname = $_POST['tname'];
$selMin = $_POST ['selMin'];
$question1 = $_POST['question1']; // required
$op11 = $_POST['op11'];
$op12 = $_POST['op12'];
$op13 = $_POST['op13'];
$op14 = $_POST['op14'];
$op1 = $_POST['co1'];
$question2 = $_POST['question2']; // required
$op21 = $_POST['op21'];
$op22 = $_POST['op22'];
$op23 = $_POST['op23'];
$op24 = $_POST['op24'];
$op2 = $_POST['co2'];
$question3 = $_POST['question3']; // required
$op31 = $_POST['op31'];
$op32 = $_POST['op32'];
$op33 = $_POST['op33'];
$op34 = $_POST['op34'];
$op3 = $_POST['co3'];
$question4 = $_POST['question4']; // required
$op41 = $_POST['op41'];
$op42 = $_POST['op42'];
$op43 = $_POST['op43'];
$op44 = $_POST['op44'];
$op4 = $_POST['co4'];
$question5 = $_POST['question5']; // required
$op51 = $_POST['op51'];
$op52 = $_POST['op52'];
$op53 = $_POST['op53'];
$op54 = $_POST['op54'];
$op5 = $_POST['co5'];
$question6 = $_POST['question6']; // required
$op61 = $_POST['op61'];
$op62 = $_POST['op62'];
$op63 = $_POST['op63'];
$op64 = $_POST['op64'];
$op6 = $_POST['co6'];
$question7 = $_POST['question7']; // required
$op71 = $_POST['op71'];
$op72 = $_POST['op72'];
$op73 = $_POST['op73'];
$op74 = $_POST['op74'];
$op7 = $_POST['co7'];
$question8 = $_POST['question8']; // required
$op81 = $_POST['op81'];
$op82 = $_POST['op82'];
$op83 = $_POST['op83'];
$op84 = $_POST['op84'];
$op8 = $_POST['co8'];
$question9 = $_POST['question9']; // required
$op91 = $_POST['op91'];
$op92 = $_POST['op92'];
$op93 = $_POST['op93'];
$op94 = $_POST['op94'];
$op9 = $_POST['co9'];
$question10 = $_POST['question10']; // required
$op101 = $_POST['op101'];
$op102 = $_POST['op102'];
$op103 = $_POST['op103'];
$op104 = $_POST['op104'];
$op10 = $_POST['co10'];
// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="INSERT INTO $tbl_name(tname,selMin,q1,op11,op12,op13,op14,op1,
q2,op21,op22,op23,op24,op2,
q3,op31,op32,op33,op34,op3,
q4,op41,op42,op43,op44,op4,
q5,op51,op52,op53,op54,op5,
q6,op61,op62,op63,op64,op6,
q7,op71,op72,op73,op74,op7,
q8,op81,op82,op83,op84,op8,
q9,op91,op92,op93,op94,op9,
q10,op101,op102,op103,op104,op10)
VALUES('$testname ','$selMin',
'$question1','$op11','$op12','$op13','$op14','$op1',
'$question2','$op21','$op22','$op23','$op24','$op2',
'$question3','$op31','$op32','$op33','$op34','$op3',
'$question4','$op41','$op42','$op43','$op44','$op4',
'$question5','$op51','$op52','$op53','$op54','$op5',
'$question6','$op61','$op62','$op63','$op64','$op6',
'$question7','$op71','$op72','$op73','$op74','$op7',
'$question8','$op81','$op82','$op83','$op84','$op8',
'$question9','$op91','$op92','$op93','$op94','$op9',
'$question10','$op101','$op102','$op103','$op104','$op10'
)";
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