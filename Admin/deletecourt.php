<html>
<head>
  <title>Delete Court </title>
  <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='1' bgcolor='green' width='800' cellpadding='8' cellspacing='0' height='200'>
         
         
          <tr>
            <td colspan="3" bgcolor='grey' valign='center'>

<?php
ob_start();
$link=mysqli_connect("localhost","root","");
mysqli_select_db("prisonpro",$link);
$result=mysqli_query("select * from court");
?>


<?php
//To delete:
if(isset($_POST["delete"])){
$id=$_POST["National_id"];
$delete=mysqli_query("delete from court where National_id='$_POST[National_id]'");
if($delete){
print "<script language=\"javascript\">
	alert(\"Successfully deleted!...\")
	location.href=\"deletecourt.php\"
	</script>";
}
else{
print "<script language=\"javascript\">
	alert(\"Not deleted!...\")
	location.href=\"deletecourt.php\"
	</script>";
}
}
?>



<?php

print "<table width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='green'>
<caption><b>DELETE COURT DETAILS</b></caption>
<tr bgcolor='green'>

<th width='3%'>National id</th>
<th width='10%'>File Number</th>
<th width='10%'>Date of Trial</th>
<th width='15%'>Sentence</th>
<th width='10%'>Location</th>

</tr>";
$i=1;
while($row=mysqli_fetch_array($result)){
print "<form method=POST>";
print"<tr bgcolor='white'>
<td>$i<input type=\"hidden\" name=\"National_id\" value=\"$row[National_id]\"></td>
<td>$row[File_number]</td>
<td>$row[Dateoftrial]</td>
<td>$row[Sentence]</td>
<td>$row[Location]</td>
<td width='10%' align='center'><input type=submit name=delete value=delete></td>
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
		  <td align="center"><a href="adminpanel.php" target="_parent">Back to Admin <b>|</b></a>
			<a href="viewcourt.php" target="_parent">View court<b>|</b></a>
			<a href="index.php" target="_parent">Log out</a></td>
		
          </tr>
          <tr>
            <td colspan='3' align='center' bgcolor='green' height='1'>
					&copy; 2014 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					KENYA PRISONS SERVICE
            </td>
          </tr>
	</table>
</body>
</head>
</html>


