<html>
<body>
<?php
$name=$_GET["name"];
$age=$_GET["age"];
$gender=$_GET["gender"];
$hospital=$_GET["hospital"];
$Specialist=$_GET["Specialist"];
$date=$_GET["date"];
$time=$_GET["time"];
echo"<font color='green' size='5'>".$name." ,Your Appointment is Booked.</font><br/>";
echo"<font color='blue' size='5'> Booking Details</font>";
echo"<table border='3px' width='200'>";
echo"<tr bgcolor='pink'><td><b>Name</b></td><td>".$name."</td></tr>";
echo"<tr bgcolor='pink'><td><b>Age</b></td><td>".$age."</td></tr>";
echo"<tr bgcolor='pink'><td><b>Gender</b></td><td>".$gender."</td></tr>";
echo"<tr bgcolor='pink'><td> <b>Selected Hospital</b></td><td>".$hospital."</td></tr>";
echo"<tr bgcolor='pink'><td> <b>Selected Specialist</b></td><td>".$Specialist."</td></tr>";
echo"<tr bgcolor='pink'><td><b> Selected Date </b></td><td>".$date."</td></tr>";
echo"<tr bgcolor='pink'><td><b>Selected Timeslot</b></td><td>".$time."</td></tr>";
echo"</table>"


?>
</body>
