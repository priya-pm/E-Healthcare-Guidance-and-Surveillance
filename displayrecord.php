<html>
<head><title>Find docters in Madurai</title>
<link rel="stylesheet" type="text/css" href="displaystyle.css">
</head>
<body>
<table border=3px>
<tr>
<th>Doctername</th>
<th>Studies</th>
<th>Department</th>
<th>Availablehospitals</th>
<th>Phoneno</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","test");
if($conn->connect_error)
{
	die("Connection Failed:" . $conn->connect_error);

}
$sql="SELECT Doctername,Studies,Department,Availablehospitals,Phoneno from search8";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		echo"<tr><td>".$row["Doctername"]."</td><td>" .$row["Studies"]."</td><td>".$row["Department"]."</td><td>".$row["Availablehospitals"]."</td><td>".$row["Phoneno"]."</td></tr>";
		
	}
	echo"</table>";
}
$conn->close();
?>
</table><br/><br/>
<marquee>For Emergency Make a phonecall to the docters</marquee>
</body>
</html>