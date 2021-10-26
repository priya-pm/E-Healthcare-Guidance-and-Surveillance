<html>
<head><title>Appointment Form</title>
<link rel="stylesheet" type="text/css" href="phpstyle.css">
</head>
<body>
<center><h2>Appointment Form</h2></center>
<form action="action.php" method="get">
<label for="name">Name:</label>
<input type="text" name="name" placeholder="Type your name" id="n"><br/><br/>
<label for="age">Age:</label>&nbsp;&nbsp;&nbsp;
<input type="number" name="age"value="0" id="a"></br></br>
&nbsp;&nbsp;<label for"gender">Gender:</label>
<input type="radio" id="m" name="gender" value="Male">
<label for="male"> Male</label>
<input type="radio" id="f" name="gender" value="Female">
<label for="female">Female</label>
<input type="radio" id="o" name="gender" value="Other">
<label for="Other">Other</label><br/></br>
<label for="cars">Select Hospital:</label>
  <select name="hospital" id="hospital">
  <option value="Select Hospital"> Select Hospital</option>
    <option value="Lakshmana Multispeciality Hospital">Lakshmana Multispeciality Hospital</option>
    <option value="Shenbagam Hospital">Shenbagam Hospital</option>
    <option value="Apollo Speciality Hospital">Apollo Speciality Hospital</option>
    <option value="Fenn Hospital">Fenn Hospital</option>
	<option value="Meenakshi Mission Hospital">Meenakshi Mission Hospital</option>
	<option value="Preeti Multispeciality Hospital">Preeti Multispeciality Hospital</option>
	<option value="Devadoss Hospital Pvt Ltd">Devadoss Hospital Pvt Ltd</option>
	<option value="Aristo Speciality Hospital">Aristo Speciality Hospital</option>
	<option value="Saravana Multispeciality Hospital">Saravana Multispeciality Hospital</option>
	<option value="Vikram Multispeciality Hospital">Vikram Multispeciality Hospital</option>
	<option value="Vadamalayan Hospital">Vadamalayan Hospital</option>
	<option value="Positive Homeopathy">Positive Homeopathy</option>
	<option value="Raksha Hospital">Raksha Hospital</option>
	<option value="Karunai Multispeciality Hospital">Karunai Multispeciality Hospital</option>
	<option value="Arun Hospital">Arun Hospital</option>
	<option value="Bose Hospital">Bose Hospital</option>
	<option value="Templetown Medical Centre">Templetown Medical Centre</option>
	<option value="J.J Multispeciality Hospital">J.J Multispeciality Hospital</option>
	<option value="Guru Multispeciality Hospital">Guru Multispeciality Hospital</option>
	<option value=" Rr MultispecialityHospital">Rr MultispecialityHospital</option>
  </select>
  <br><br>
  <label for="Specialist"> Select Specialist </label>
  <select name="Specialist" id="Specialist">
  <option value="Choose Specialist">Choose Specialist</option>
  <option value="Cardiologist">Cardiologist</option>
    <option value="Audiologist">Audiologist</option>
    <option value="Dentist">Dentist</option>
    <option value="ENT specialist">ENT specialist</option>
	<option value="Gynaecologist">Gynaecologist</option>
	<option value="Orthopaedic surgeon">Orthopaedic surgeon</option>
	<option value="Paediatrician">Paediatrician</option>
	<option value=" Psychiatrists"> Psychiatrists</option>
	<option value="Veterinarian">Veterinarian</option>
	<option value="Radiologist">Radiologist</option>
	<option value="Pulmonologist">Pulmonologist</option>
	<option value="Endocrinologist">Endocrinologist</option>
	<option value="Oncologist">Oncologist</option>
	<option value="Neurologist">Neurologist</option>
	<option value="Cardiothoracic surgeon">Cardiothoracic surgeon</option>
  </select>
  <br><br>
  <label for="date"> Enter date:</label>
  <input type="text" name="date" placeholder="Type the date" id="d"><br/><br/>
  <label for="time"> Enter Time:</label>
  <input type="text" name="time" placeholder="Type the time" id="t"><br/><br/><br/>
<input type="submit" value="Submit"> &nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="Reset">
</form>


</body>
</html>