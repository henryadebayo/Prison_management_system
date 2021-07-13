<html>
<head>
<title> Warder Transfer Form</title>
<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table width="45%" height="81" border="1" align="center" bgcolor="#FFFFFF">
<tr>
<td height="33" align="center" bgcolor="green">
<font size="5">
<a href="adminpanel.php">Home</a> 
</font>
</td>
</tr>
<td border="0" style="margin-top:0px;" align="center" id="container" height="5" bgcolor="#FFFFFF"><tr>
<td>
<form action="processofficer.php" method="post">
<table bgcolor="white" height="431" border="0" align="center" width="50%">
<td width="34%" bgcolor="#FFFFFF"><b>identification Number:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Nid" required placeholder="9666" /></td>
<span class="required_notification"> Required</span></td>
</tr>
<td width="34%" bgcolor="#FFFFFF"><b>Telephone Number:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Phone" size=12 maxlength=12 required placeholder="+234"/></td>
	<span class="required_notification"> Required</span></td>
	
</tr>

<tr><td bgcolor="#FFFFFF"><b>From Prison:</b></td>
        <td> <select name="From">
        <option>LAGOS</option>
		<option>OYO</option>
		<option>BAUCHI</option></td></tr>
	<tr><td bgcolor="#FFFFFF"><b>To Prison:</b></td>
        <td> <select name="To">
		<option>SOKOTO</option>
		<option>KWARA</option>
		<option>KANO</option></td></tr>
        
<tr>
<td bgcolor="#FFFFFF"><b>Date of Transfer:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="dot" size=12 maxlength=12 required placeholder="YYYY-MM-DD" /></td>
</tr>

  <td height="26" bgcolor="#FFFFFF" align="center">
  <input type="submit" value="Add" /></td>
 </tr>
</table>
</form>
</td>
<td bgcolor="#FFFFFF"></tr>
<tr>   <?php
           include("footer.php");
                ?>
          </tr>
</tr>
</table>
</body>
</html>