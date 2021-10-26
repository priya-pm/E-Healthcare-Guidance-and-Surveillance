<!DOCTYPE html>
<html>
<head>
	<title>Drug and Medication</title>
	<link rel="stylesheet" href="searchstyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

<form method="post">
<label>Search the medication</label>
<a class="btn"><i class="fa fa-search"></i></a>
<br><br>
<div class="search-box">
<input type="text" name="search" >
<input type="submit" name="submit">
</div>
	
</form>

</body>
</html>
<?php

$con = new PDO("mysql:host=localhost;dbname=test",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `search5` WHERE Medication = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>Medication</th>
				<th>Drugclass</th>
				<th>Uses</th>
				<th>Sideeffects</th>
				<th>Precautions</th>
				<th>Alternativemedication</th>
			</tr>
			<tr>
				<td><?php echo $row->Medication; ?></td>
				<td><?php echo $row->Drugclass ;?></td>
				<td><?php echo $row->Uses;?></td>
				<td><?php echo $row->Sideeffects;?></td>
				<td><?php echo $row->Precautions;?></td>
				<td><?php echo $row->Alternativemedication;?></td>
			</tr>

		</table>
		<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>