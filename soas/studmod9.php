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
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
</style>
</head>
<body>
<img src="Untitled.png" align="left"><div id="example2"><div class="z">
<ul style="float:right;list-style-type:none;">
  <div class="z"> <a  class="active"<li><a href="../soas/studmod9.php" >Account</a></li>
    <li><a href="http://localhost/soas/start/soas/register.html" >Logout</a></li><li></li>
  </ul></div>
  <br><br><br>
<ul>

<li style="left: " ><a href="http://localhost/soas/start" >Home</a></li>

<li ><a href="../soas/studmod2.php" > Take Test</a></li>

<li><a  <a href="http://localhost/soas/start/soas/viewscore.php" >View Score</a></li>
</ul><br><br><br><br><br><br></div>
<h2>Taker Account Details</h2>
 <table >
          <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Last Name</th>
              <th>Email</th>
          </tr>
          <tr>
            <?php
            session_start();

$sid=$_SESSION['sid'];
$conn = mysqli_connect("localhost","root","","testcure");
$sql = "SELECT tid, firstname, email FROM `takeracc` where firstname='$sid'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)) {

                ?>
                  <td><?php echo $row['tid']; ?></td> 
                  <td><?php echo $row['firstname']; ?></td> 
                <?php

                }
                
                 ?>

              </tr>
       </table> 
<table >
          <tr>
              <th>Test ID</th>
              <th>Name of the test </th>
              <th>Taker ID</th>
              <th>Score</th>
          </tr>
          <tr>
            <?php
$conn = mysqli_connect("localhost","root","","testcure");
$sql = "SELECT testid, testname, takerid, score FROM `scores`";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)) {

                ?>
                  <td><?php echo $row['testid']; ?></td> 
                  <td><?php echo $row['testname']; ?></td> 
                  <td><?php echo $row['takerid']; ?></td> 
                  <td><?php echo $row['score']; ?></td> 
                <?php

                }
                
                 ?>


</body>
</html>