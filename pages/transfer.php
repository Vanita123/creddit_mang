<html>
<head>
<title>Transfer Credit</title>
<link rel="stylesheet" type="text/css" href="style1.css">

</head>
<body id="grad">

<div class="topnav">
  <a  href="index.html">Home</a>
  <a href="add.html">Visit all Users</a>
  <a class="active" href="transfer.php">Transfer Credit</a>


</div>

<div>
<center>
<table cellspacing="8">
<form id="trans" action="details.php" method="POST" name="transferr">
<H1>TRANSFER DETAILS</H1>
<tr style="color:black"><td><B>Enter your ID:</B><input type="number" name="sid" id="sid" required></td></tr><br><br>
<tr style="color:black"><td><B>Enter the credit to be transferred:</B><input type="number" name="amount" id="amount" required></td></tr><br><br>
<tr style="color:black"><td><B>Enter the id of the user you want to transfer to:</B><input type="number" name="tid" id="tid" required></td></tr><br><br>
<tr><td align="center"><input type="submit"></td></tr>
</form>
</table>
</center>
</div>

<div>
<center><h4 style="color:black">Names of users along with their id's are given as follows:</h4></center>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="test";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error)
{
die("connection failed:".$conn->connect_error);
}

$sql="SELECT * FROM user where 1";
$result=$conn->query($sql);
if($result->num_rows> 0)
{
echo "<table border='0px' cellspacing=5 cellpadding='5' align='center' style='color:black'>
<tr><th>Name</th>
<th>Id</th>
</tr>";
while($row=$result->fetch_assoc())
{
echo "<tr>
<td>".$row["name"]."</td>
<td>".$row["id"]."</td>
</tr>";
}
echo"</table>";
}
else
{
echo "0 results";
}
$conn->close();
?>
</div>
</body>
</html>
