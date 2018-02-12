<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
   background: #333
}

.z{list-style-type: none;
    margin:0;
    padding: 0;
    overflow: hidden;
   background:#333;
   float:right;
   width=60px;}
li {
    float: left;
    border-right:1px solid #bbb;
}

li:last-child {
    border-right: none;
}
li:first-child {
    border-left: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}


li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: rgb(152, 0, 0);
}
.basic-grey {
    margin-left:auto;
    margin-right:auto;
    max-width: 500px;
    background: #F7F7F7;
    padding: 25px 15px 25px 10px;
    font: 12px Georgia, "Times New Roman", Times, serif;
    color: #888;
    text-shadow: 1px 1px 1px #FFF;
    border:1px solid #E4E4E4;
}
.basic-grey h1 {
    font-size: 25px;
    padding: 0px 0px 10px 40px;
    display: block;
    border-bottom:1px solid #E4E4E4;
    margin: -10px -15px 30px -10px;;
    color: #888;
}
.basic-grey h1>span {
    display: block;
    font-size: 11px;
}
.basic-grey label {
    display: block;
    margin: 0px;
}
.basic-grey label>span {
    float: left;
    width: 20%;
    text-align: right;
    padding-right: 10px;
    margin-top: 10px;
    color: #888;
}
.basic-grey input[type="text"], .basic-grey input[type="email"], .basic-grey textarea, .basic-grey select {
    border: 1px solid #DADADA;
    color: #888;
    height: 30px;
    margin-bottom: 16px;
    margin-right: 6px;
    margin-top: 2px;
    outline: 0 none;
    padding: 3px 3px 3px 5px;
    width: 70%;
    font-size: 12px;
    line-height:15px;
    box-shadow: inset 0px 1px 4px #ECECEC;
    -moz-box-shadow: inset 0px 1px 4px #ECECEC;
    -webkit-box-shadow: inset 0px 1px 4px #ECECEC;
}
.basic-grey textarea{
    padding: 5px 3px 3px 5px;
}
.basic-grey select {
    background: #FFF url('down-arrow.png') no-repeat right;
    background: #FFF url('down-arrow.png') no-repeat right);
    appearance:none;
    -webkit-appearance:none; 
    -moz-appearance: none;
    text-indent: 0.01px;
    text-overflow: '';
    width: 70%;
    height: 35px;
    line-height: 25px;
}
.basic-grey textarea{
    height:100px;
}
.basic-grey .button {
    background: #E27575;
    border: none;
    padding: 10px 25px 10px 25px;
    color: #FFF;
    box-shadow: 1px 1px 5px #B6B6B6;
    border-radius: 3px;
    text-shadow: 1px 1px 1px #9E3F3F;
    cursor: pointer;
}
.basic-grey .button:hover {
    background: #CF7A7A
}
table, th, td {
    border: 1px solid red;
}
</style>
</head>
<body>
<img src="Untitled.png" align="left"><div id="example2"><div class="z">
<ul style="float:right;list-style-type:none;">
  <div class="z"> <li><a href="../soas/studmod9.php" >Account</a></li>
    <li><a href="http://localhost/soas/start/soas/register.html" >Logout</a></li><li></li>
  </ul></div>
  <br><br><br>
<ul>

<li style="left: " ><a href="http://localhost/soas/start" >Home</a></li>

<li ><a  class="active"<a href="../soas/studmod2.php" > Take Test</a></li>

<li><a  <a href="http://localhost/soas/start/soas/viewscore.php" >View Score</a></li>
</ul><br><br><br><br><br><br></div>
<div class="basic-grey">
<h1> Test </h1>
<form  method="post" action="studmod4.php">
<?php
$id = $_POST['tid'];
$conn = mysqli_connect("localhost","root","","testcure");

$sql = "SELECT q1,op11,op12,op13,op14,op1,
q2,op21,op22,op23,op24,op2,
q3,op31,op32,op33,op34,op3,
q4,op41,op42,op43,op44,op4,
q5,op51,op52,op53,op54,op5,
q6,op61,op62,op63,op64,op6,
q7,op71,op72,op73,op74,op7,
q8,op81,op82,op83,op84,op8,
q9,op91,op92,op93,op94,op9,
q10,op101,op102,op103,op104,op10 FROM `testd` where id = $id";
$result = mysqli_query($conn,$sql);
 while($row = mysqli_fetch_assoc($result)){
$q1=$row["q1"];
$q2=$row["q2"];
$q3=$row["q3"];
$q4=$row["q4"];
$q5=$row["q5"];
$q6=$row["q6"];
$q7=$row["q7"];
$q8=$row["q8"];
$q9=$row["q9"];
$q10=$row["q10"];
$op11=$row["op11"];
$op12=$row["op12"];
$op13=$row["op13"];
$op14=$row["op14"];

$op21=$row["op21"];
$op22=$row["op22"];
$op23=$row["op23"];
$op24=$row["op24"];

$op33=$row["op33"];
$op34=$row["op34"];

$op41=$row["op41"];
$op42=$row["op42"];
$op31=$row["op31"];
$op32=$row["op32"];
$op43=$row["op43"];
$op44=$row["op44"];

$op51=$row["op51"];
$op52=$row["op52"];
$op53=$row["op53"];
$op54=$row["op54"];

$op61=$row["op61"];
$op62=$row["op62"];
$op63=$row["op63"];
$op64=$row["op64"];

$op71=$row["op71"];
$op72=$row["op72"];
$op73=$row["op73"];
$op74=$row["op74"];

$op81=$row["op81"];
$op82=$row["op82"];
$op83=$row["op83"];
$op84=$row["op84"];

$op91=$row["op91"];
$op92=$row["op92"];
$op93=$row["op93"];
$op94=$row["op94"];

$op101=$row["op101"];
$op102=$row["op102"];
$op103=$row["op103"];
$op104=$row["op104"];

echo $q1 ;
echo"<br>"; 
echo "<input type='radio' value='$op11' name='qz1'> $op11<br />"; 
echo "<input type='radio' value='$op12' name='qz1'> $op12<br />"; 
echo "<input type='radio' value='$op13' name='qz1'> $op13<br />"; 
echo "<input type='radio' value='$op14' name='qz1'> $op14<br />"; 

echo $q2;
echo"<br>";
echo "<input type='radio' value='$op21' name='qz2'> $op21<br />"; 
echo "<input type='radio' value='$op22' name='qz2'> $op22<br />"; 
echo "<input type='radio' value='$op23' name='qz2'> $op23<br />"; 
echo "<input type='radio' value='$op24' name='qz2'> $op24<br />"; 

echo $q3 ;
echo"<br>";
echo "<input type='radio' value='$op31' name='qz3'> $op31<br />"; 
echo "<input type='radio' value='$op32' name='qz3'> $op32<br />"; 
echo "<input type='radio' value='$op33' name='qz3'> $op33<br />"; 
echo "<input type='radio' value='$op34' name='qz3'> $op34<br />"; 

echo $q4 ;
echo"<br>";
echo "<input type='radio' value='$op41' name='qz4'> $op41<br />"; 
echo "<input type='radio' value='$op42' name='qz4'> $op42<br />"; 
echo "<input type='radio' value='$op43' name='qz4'> $op43<br />"; 
echo "<input type='radio' value='$op44' name='qz4'> $op44<br />"; 

echo $q5 ;
echo"<br>";
echo "<input type='radio' value='$op51' name='qz5'> $op51<br />"; 
echo "<input type='radio' value='$op52' name='qz5'> $op52<br />"; 
echo "<input type='radio' value='$op53' name='qz5'> $op53<br />"; 
echo "<input type='radio' value='$op54' name='qz5'> $op54<br />"; 

echo $q6 ;
echo"<br>";
echo "<input type='radio' value='$op61' name='qz6'> $op61<br />"; 
echo "<input type='radio' value='$op62' name='qz6'> $op62<br />"; 
echo "<input type='radio' value='$op63' name='qz6'> $op63<br />"; 
echo "<input type='radio' value='$op64' name='qz6'> $op64<br />"; 

echo $q7 ;
echo"<br>";
echo "<input type='radio' value='$op71' name='qz7'> $op71<br />"; 
echo "<input type='radio' value='$op72' name='qz7'> $op72<br />"; 
echo "<input type='radio' value='$op73' name='qz7'> $op73<br />"; 
echo "<input type='radio' value='$op74' name='qz7'> $op74<br />"; 

echo $q8;
echo"<br>";
echo "<input type='radio' value='$op81' name='qz8'> $op81<br />"; 
echo "<input type='radio' value='$op82' name='qz8'> $op82<br />"; 
echo "<input type='radio' value='$op83' name='qz8'> $op83<br />"; 
echo "<input type='radio' value='$op84' name='qz8'> $op84<br />"; 

echo $q9;
echo"<br>";
echo "<input type='radio' value='$op91' name='qz9'> $op91<br />"; 
echo "<input type='radio' value='$op92' name='qz9'> $op92<br />"; 
echo "<input type='radio' value='$op93' name='qz9'> $op93<br />"; 
echo "<input type='radio' value='$op94' name='qz9'> $op94<br />"; 

echo $q10 ;
echo"<br>";
echo "<input type='radio' value='$op101' name='qz10'> $op101<br />"; 
echo "<input type='radio' value='$op102' name='qz10'> $op102<br />"; 
echo "<input type='radio' value='$op103' name='qz10'> $op103<br />"; 
echo "<input type='radio' value='$op104' name='qz10'> $op104<br />"; 
echo "<input type='submit' value='submit' name='submit'> <br />";

}


?>

</form>
</div>
</body>
</html>
