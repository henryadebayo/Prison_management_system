<?php
function valid($Nid, $Filenum, $From, $To, $dateoftransfer)
{
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Edit Records</title>
</head>
<body bgcolor="#006600">
<?php

if ($error != '')
{
echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>

<form action="" method="post">
<input type="hidden" name="Nid" value="<?php echo $Nid; ?>"/>

<table border="1" align="center" bgcolor="#CCCCCC">
<tr>
<td colspan="2" align="center"><b><font color='green'>EDIT TRANSFER  RECORDS </font></b></td>
</tr>


<tr>
<td width="179"><b><font color='#663300'>Filenum<em>*</em></font></b></td>
<td><label>
<input type="text" name="Filenum" value="<?php echo $Filenum; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>From<em>*</em></font></b></td>
<td><label>
<input type="text" name="From" value="<?php echo $From; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>To>*</em></font></b></td>
<td><label>
<input type="text" name="To" value="<?php echo $To; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>dateoftransfer>*</em></font></b></td>
<td><label>
<input type="text" name="dateoftransfer" value="<?php echo $dateoftransfer; ?>" />
</label></td>
</tr>

<tr align="center">
<td><label>
<input type="submit" name="submit" value="Update">
</label></td>
<td align="center"><a href='viewtransfer.php'><input type="button" name="" value="Back"></a></td>
</tr>
</table>
</form>
</body>
</html>
<?php
}

include('../db.php');

if (isset($_POST['submit']))
{

if (is_numeric($_POST['Nid']))
{


//use this one from form
$Nid = $_POST['Nid'];
$From = mysql_real_escape_string(htmlspecialchars($_POST['From']));
$To = mysql_real_escape_string(htmlspecialchars($_POST['To']));
$dateoftransfer = mysql_real_escape_string(htmlspecialchars($_POST['dateoftransfer']));



//use this from database 
if ($National_id == '' || $File_Num == '' ||$From_prison == '' || $To_prison == '' ||$Dateoftransfer == '' )	
{

$error = 'ERROR: Please fill in all required fields!';

// use this 2nd from database
valid($National_id, $File_Num, $From_prison, $To_prison, $Dateoftransfer, $error);

}
else
{

// use code update db
mysql_query("UPDATE transfer SET File_Num='$Filenum', From_prison='$From', 
	To_prison='$To' , Dateoftransfer='$dateoftransfer'  WHERE National_id='$Nid'")
or die(mysql_error());

header("Location: viewtransfer1.php");
}
}
else
{

echo 'Error!';
}
}
else

{

	//use this 
	if (isset($_GET['National_id']) && is_numeric($_GET['National_id']) && $_GET['National_id'] > 0)
{

//use the second code 
$Nid = $_GET['National_id'];

//user the second
$result = mysql_query("SELECT * FROM transfer WHERE id=$National_id")
or die(mysql_error());
$row = mysql_fetch_array($result);

if($row)
{
//this data come from database
$National_id=$_POST['National_id'];
$File_Num=$_POST['File_Num'];
$From_prison=$_POST['From_prison'];
$To_prison=$_POST['To_prison'];
$dateoftransfer=$_POST['Dateoftransfer']; 

//use the second code 
valid($National_id, $File_Num, $From_prison, $To_prison, $Dateoftransfer,'');
}
else
{
echo "No results!";
}
}
else

{
echo 'Error!33';
}
}
?>