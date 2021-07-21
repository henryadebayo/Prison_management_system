<html>
<head>
<title>registration  form</title>
<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table border="1" bgcolor="WHITE" align="center" width="54%">
<tr bgcolor="#FF0000">
<td align="center">
<font size="5">
<a href="./officerpanel.php">Home</a> 
</font>
</td>
</tr>
<tr>
<td>

<form action="procereg.php" method="post">
<table bgcolor="white" height="450" border="0" align="center" width="50%">
<tr>
<tr>		
<td width="34%" bgcolor="#FFFFFF"><b>Personal Id:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Nid"  size=15 maxlength=15 required placeholder="00001111"/>
<span class="required_notification"> Required</span></td>

</tr>
<tr>
<td bgcolor="#FFFFFF"><b>Full Name:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="Fname"  size=20 maxlength=20 required placeholder="JAMES AMULI" />
<span class="required_notification"> Required</span></td>
</tr>
<tr>
<td bgcolor="#FFFFFF"><b>Date of Birth:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="dob" size=12 maxlength=12 required placeholder="YYYY-MM-DD" />
	<span class="required_notification"> Required</span></td>

</tr>
<tr>
<td bgcolor="#FFFFFF"><b>Address:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="address"  size=12 maxlength=12 required placeholder="NGONG" />
<span class="required_notification"> Required</span></td>
</tr>
<tr><td width="34%" bgcolor="#FFFFFF"><b>State:</b></td>
        <td> <select name="county">
		<option>Kano</option>
		<option>Lagos</option>
		<option>Abuja</option>
        <option>Oyo</option>
		<option>Kwara</option>
		<option>Sokoto/option>
		<option>Bauchi</option></td></tr>
		<tr>
 <td><b>Gender</b></td>
        <td><b><input type="radio" name="Gender" value="Male" checked="checked">
        Male <input type="radio" name="Gender" value="Female"></b>
	   <b>Female</b></td>
	      </tr>
		  
 <tr><td bgcolor="#FFFFFF"><b>Education Level:</b></td>
        <td> <select name="education">
		<option>Never</option>
		<option>O level</option>
		<option>Diploma</option>
        <option>Bachelor Degree</option>
		<option>Above</option></td></tr>
		
<tr><td width="44%" bgcolor="#FFFFFF"><b>Marital Status:</b></td>
        <td> <select name="status">
		<option>Divorced</option>
		<option>Married</option>
		<option>Single</option></td></tr>
		
<tr><td bgcolor="#FFFFFF"><b>Offence:</b></td>
        <td> <select name="offence">
        <option>Murder</option>
		<option>Robbery</option>
		<option>Theft</option>
        <option>Rape</option>
		<option>Other</option></td></tr>
		<tr><td bgcolor="#FFFFFF"><b>Cell-N0:</b> <td bgcolor="#FFFFFF"><input type="text" name="cellno"  size=15 maxlength=15 required placeholder="0000" </td> </td>
		<tr><td bgcolor="#FFFFFF"><b>Health Status:</b><input type="text" name="healthsta"  size=20 maxlength=20 required placeholder="" />
<tr><td bgcolor="#FFFFFF"><b>Date Of Imprisonment:</b></td></tr>
<td bgcolor="#FFFFFF"><input type="text" name="di"  size=12 maxlength=12 required placeholder="YYYY-MM-DD"/>
	<span class="required_notification"> Required</span></td>
</tr>

<tr>
<td bgcolor="#FFFFFF"><b>File Number:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="Filenum"  size=5 maxlength=5 required placeholder="NB-00099" />
	<span class="required_notification"> Required</span></td>
</tr>

   <td height="26" bgcolor="#FFFFFF" align="center"><input type="submit" value="SAVE" /></td>
 </tr>
</table>
</form>
</td>
</tr>
<tr>   <?php
           include("footer.php");
                ?>
          </tr>
</tr>
</table>
</body>
</html>