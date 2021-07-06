<html>
<head>
  <title>Delete prisoners</title>
  <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='green' width='800' cellpadding='8' cellspacing='0' height='200'>
        
          <tr>
            <td colspan="3" bgcolor='#999999' valign='center'>

<?php
ob_start();
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link, "prisonpro");
$result=mysqli_query($link, "select * from registration");
?>


<?php

//To delete:
if(isset($_POST["delete"])){
$id=$_POST["id"];
$delete=mysqli_query($link, "delete from registration where id='$_POST[id]'");
if($delete){
print "<script language=\"javascript\">
	alert(\"Successfully deleted!...\")
	location.href=\"deleteprisoners.php\"
	</script>";
}
else{
print "<script language=\"javascript\">
	alert(\"Not deleted!...\")
	location.href=\"deleteprisoners.php\"
	</script>";
}
}
?>



<?php

print "<table width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='green'>
<caption><b>DELETE PRISONER RECORD</b></caption>
<tr bgcolor='green'>
<th>National id</th>
<th width='10%'>Full Name</th>
<th width='15%'>Date of Birth</th>
<th width='15%'>Address</th>
<th width='10%'>County</th>
<th width='10%'>Gender</th>
<th width='3%'>Education</th>
<th width='10%'>Status</th>
<th width='15%'>Offence</th>
<th width='15%'>Date In</th>
<th width='15%'>Date Out</th>
<th width='10%'>Sentence To</th>
<th width='10%'>File Number</th>



</tr>";
$i=1;
while($row=mysqli_fetch_array($result)){
print "<form method=POST>";
print"<tr bgcolor='white'>
<td>$i<input type=\"hidden\" name=\"id\" value=\"$row[id]\"></td>
<td>$row[Full_Name]</td>
<td>$row[DOB]</td>
<td>$row[Address]</td>
<td>$row[County]</td>
<td>$row[Gender]</td>
<td>$row[Education]</td>
<td>$row[Marital]</td>
<td>$row[Offence]</td>
<td>$row[date_in]</td>
<td>$row[date_out]</td>
<td>$row[sentence_to]</td>
<td>$row[File_num]</td>


<td width='4%' align='center'><input type=submit name=delete value=delete></td>
</tr>";
print "</form>";
$i++;
}
print"</table>";
?>

<br/>

			</td>
          </tr>
          <tr>
		  <td align="center"><a href="adminpanel.php" target="_parent">Panel Admin <b>|</b></a>
			<a href="viewprisoners.php" target="_parent">View Prisoners<b>|</b></a>
			<a href="index.php" target="_parent">Log out</a></td>
		
          </tr>
          <tr>
            <td colspan='3' align='center' bgcolor='silver' height='1'>

            	<?php
           include("footer.php");
                ?>
					
            </td>
          </tr>
	</table>
</body>
</head>
</html>

