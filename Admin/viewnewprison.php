<html>
<head>
  <title>View new  prison </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='green' width='1300' cellpadding='8' cellspacing='0' height='200'>

          <tr>
            <td bgcolor='#999999' valign='center'>

<?php

$host="localhost";
$username="root";
$password="";
$db_name="prisonpro";
$tbl_name="newprison";

$con = mysqli_connect("$host","$username","$password", "$db_name") or die("cannot connect");
mysqli_select_db($con, "$db_name")or die("cannot connect");

$sel= mysqli_query($con, "select * from $tbl_name ORDER BY pno DESC LIMIT 0,7");
echo"<table align='center' width='100%' bgcolor='GREEN' border='0' bgcolor='green' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h3>NEW PRISON INFORMATION</h3></caption>
<tr bgcolor='#CCCCCC'>
<th width='3%'>Prison Nunber</th>
<th width='3%'>Prison Name</th>
<th width='10%'>Location</th>
<th width='15%'>Open Date</th>
<th width='10%'>Contact</th>
<th width='10%'>Capacity</th>



</tr>";

   while($row=mysqli_fetch_array ($sel))
{
echo "<tr bgcolor='grey'>";

echo  "<td width='3%'>".$row ['pno']."</td>";
echo  "<td width='7%'>".$row ['pname']."</td>";
echo  "<td width='10%'>".$row ['location']."</td>";
echo  "<td width='10%'>".$row ['opendate']. "</td>";
echo  "<td width='10%'>".$row ['contact']. "</td>";
echo  "<td width='3%'>" .$row ['capacity']."</td>";

echo "</tr>";
}
echo"</table>";

?>

<br/>
			</td>
          </tr>
          <tr>
			<td align="center" bgcolor='green'><a href="adminpanel.php" target="_parent">Admin  <b>|</b></a>
      <a href="newprisonrep.php" target="_parent">Report <b>|</b></a>
			<a href="index.php" target="_parent">Log out</a></td>
		
          </tr>
          <tr>
            <td align='center' bgcolor='white' height='1'>
					<?php
           include("footer.php");
                ?>
            </td>
          </tr>
	</table>
</body>
</head>
</html>