<html>
<head>
<title>registration  form</title>
<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table border="1" bgcolor="#FFFFFF" align="center" width="54%">
<tr bgcolor="#FF0000">

<font size="5">
<a href="userpanel.php">HOME</a> 
</font>
</td>
</tr>
<tr>
<td>
	<h2 class="bg-primary" align="center">NEW PRISON FORM</h2>
<div id="content">
		
		<span class='required'>*</span> This is a required field
		<form action='validatenew.php' method="POST">

		<label for="prisonid">Prison Id:</label>
			<input name="prisonid" class="prisonid" size=4 maxlength=8 required size=30  type="text" required placeholder="NBI-00001"  /> *
		</br></br>
        
        <label for="prisonname">Prison Name:</label>
			<input name="prisonname" class="prisonname" size=4 maxlength=8 required size=30  type="text" required placeholder="KASARANI"  /> *
		</br></br>
		<td>
		<label for="Location">County:</label>
		<select name='location' required>
			<option>Nairobi</option>
			<option>Nakuru</option>
			<option>Mombassa</option>
			<option>Kwale</option>
			<option>Samburu</option>
			<option>Eldoret</option>
			<option>Ongatta</option>
			<option>Bussia</option>
			<option>Homabay</option>
		</seclect> *
		</br></br></td>
		<td>

		<label for="Capacity">Capacity:</label>
		<select name='capacity' required>
			<option>500 Inmates</option>
			<option>750 Inmates</option>
			<option>900 Inmates</option>
			<option>1000 Inmates</option>
			<option>1500 Inmates</option>
			<option>1700 Inmates</option>
			<option>2000 Inmates</option>
			<option>5000 Inmates</option>
			<option>10000 Inmates</option>
		</seclect> *
		</br></br>
		</td>

		<td><label for="population">Current Population:</label>
		<select name='population' required>
			<option>200 Inmates</option>
			<option>450 Inmates</option>
			<option>500 Inmates</option>
			<option>1000 Inmates</option>
			<option>1500 Inmates</option>
			<option>1700 Inmates</option>
			<option>2000 Inmates</option>
			<option>5000 Inmates</option>
			<option>10000 Inmates</option>
		</seclect> *
		</br></br>
		</td>

		<td><label for="on">Date of construction:</label>
		      	<select name="month" required>
				<option selected="selected" value="01">January</option>
				<option value="02">February</option>
				<option value="03">March</option>
				<option value="04">April</option>
				<option value="05">May</option>
				<option value="06">June</option>
				<option value="07">July</option>
				<option value="08">August</option>
				<option value="09">September</option>
				<option value="10">October</option>
				<option value="11">November</option>
				<option value="12">December</option>
				</select>
			
		<input type="text" name="day" size=4 maxlength=2 required placeholder="DD"/><br>
		 <input type="text" name="year" size=4 maxlength=4 required placeholder="YYYY"/></br>
         </br></br>
         </td>

		<td>
         <label for="admin">Administrator:</label>
			<input name="admin" class="admin" required size=30  type="text" maxlength=255 required placeholder="Genaral xxx" /> *
		</br></br></td>

 		<td><input align="center" type="submit" value="Submit" name="submit"/><td>
	 </tr>
</table>
</form>

<tr>
	 <?php
           include("footer.php");
                ?>

</tr>
</body>
</html>