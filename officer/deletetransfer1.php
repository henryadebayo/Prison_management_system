<html>
<head>
  <title>Delete prisoners by officier</title>
  <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='green' width='800' cellpadding='8' cellspacing='0' height='200'>
        
          <tr>
            <td colspan="3" bgcolor='#999999' valign='center'>

            <?php
ob_start();
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"prisonpro");
$result=mysqli_query($link,"select * from transfer");
?>


<?php
//To delete:
if(isset($_POST["delete"])){
$id=$_POST["National_id"];
$delete=mysql_query("delete from transfer where National_id='$_POST[National_id]'");
if($delete){
print "<script language=\"javascript\">
	alert(\"Successfully deleted!...\")
	location.href=\"deletetransfer1.php\"
	</script>";
}
else{
print "<script language=\"javascript\">
	alert(\"Not deleted!...\")
	location.href=\"deletetransfer1.php\"
	</script>";
}
}
?>



<?php

print "<table width='100%' bgcolor='GREEN' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><b>DELETE TRANSFER </b></caption>
<tr bgcolor='#green'>

<th width='3%'>National id</th>
<th width='10%'>File Number</th>
<th width='15%'>From Prison</th>
<th width='10%'>To Prison</th>
<th width='10%'>Date of Transfer</th>


</tr>";
$i=1;
while($row=mysqli_fetch_array($result)){
print "<form method=POST>";
print"<tr bgcolor='white'>
<td>$i<input type=\"hidden\" name=\"National_id\" value=\"$row[National_id]\"></td>
<td>$row[File_num]</td>
<td>$row[From_prison]</td>
<td>$row[To_prison]</td>
<td>$row[Dateoftransfer]</td>

<td align='center'><input type=submit name=delete value=delete></td>
</tr>";
/*/
$i=1;
while($row=mysql_fetch_array($result)){
print "<form method=POST>";
print"<tr bgcolor='white'>
<td>$i<input type=\"hidden\" name=\"National_id\" value=\"$row[National_id]\"></td>
<td>$row[File_num]</td>
<td>$row[From_prison]</td>
<td>$row[To_prison]</td>
<td>$row[Dateoftransfer]</td>

<td align='center'><input type=submit name=delete value=delete></td>
</tr>";
/*/
print "</form>";
$i++;
}
print"</table>";
?>

<br/>

			</td>
          </tr>
          <tr>
		  <td align="center" bgcolor='green'><a href="officerpanel.php" target="_parent">Panel panel<b>|</b></a>
			<a href="viewtransfer1.php" target="_parent">View <b>|</b></a>
			<a href="index.php" target="_parent">Log out</a></td>
		
          </tr>
          <tr>
            <td colspan='3' align='center' bgcolor='silver' height='1'><?php
           include("footer.php");
                ?>
            </td>
          </tr>
	</table>
</body>
</head>
</html>

