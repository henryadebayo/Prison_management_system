<?php
//set up for mysqli Connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);


//test if the connection is established successfully then it will proceed in next process else it will throw an error message
if(! $conn )
{
  die('Could not connect: ' . mysqli_connect_error());
}

//we specify here the Database name we are using
mysqli_select_db($conn,'prisonpro');
$Nid=$_POST['Nid'];
$Fname=$_POST['Fname'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$county=$_POST['county'];
$Gender=$_POST['Gender'];
$education=$_POST['education'];
$status=$_POST['status'];
$offence=$_POST['offence'];
$cellno=$_POST['cellno'];
$healthsta=$_POST['healthsta'];
$datein=$_POST['datein'];
$dateout=$_POST['dateout'];
$sentenceto=$_POST['sentenceto'];
$Filenum=$_POST['Filenum'];

/*/
$data = array(
	'NID: ' . $Nid,
	'First name:' . $Fname, 
    'Date of birth: ' . $dob,
    'Address: ' . $address,
    'Country: ' . $county,
    'Gender: ' . $Gender,
	'Education: ' . $education,
	'Marital Status: ' . $status,
	'Offence: ' . $offence,
	'Cell no.: ' . $cellno,
	'Fitness: ' . $healthsta,
	'Date in: ' . $datein,
	'Date out: ' . $dateout,
	'sentence to: ' . $sentenceto,
	'File Number: ' . $Filenum,
	

);
var_dump($data); //exit('End of data');
/*/
//Protecting form submitting an empty data

if (!$Nid || !$Fname  || !$dob  || !$address || !$county  || !$Gender || !$education || !$status  || !$offence ||  !$cellno || !$healthsta || !$datein || !$dateout || !$sentenceto || !$Filenum)
	{
	echo'<body bgcolor="green">';
	echo'<center>';
	echo "<h2>Please enter the required details</h2>";
	echo "<br/>";
	echo "<br/>";
	echo "<font size='5'>"."Click" . "<a href='registration.php'>"."  ". "here"  . "</a>"  . "  " . "to Prisoners registration"."</font>";
	echo'</center>';
	echo'</body>';

	exit;
	}

//It wiil insert a row to our prisoners`
$sql = "INSERT INTO `registration` (`id`,`Full_Name`, `DOB`, `Address`, `County`,  `Gender`, `Education`, `Marital`, `Offence`,`cellno`,`healthsta`,`date_in`,`date_out`,`sentence_to`,`File_num`) 
	VALUES ('{$Nid}', '{$Fname}', '{$dob}', '{$address}', '{$county}', '{$Gender}', '{$education}', '{$status}', '{$offence}','{$cellno}','{$healthsta}','{$datein}','{$dateout}','{$sentenceto}','{$Filenum}');";
//we are using mysqli_query function. it returns a resource on true else False on error
$retval = mysqli_query( $conn, $sql );
if ($retval > 0) {
	echo "Registration succesfull";
} else {
	echo "Error " . mysqli_error($conn);
}
//close of connection
mysqli_close($conn);
//?

/*
$retval = mysqli_query($conn, $sql);
echo $retval . '<br>';
die('end of $retval');
if(! $retval )
{
  die('The data is already: ' . mysqli_error($conn));
 
}
/*/

?>
					<script type="text/javascript">
						alert("New Record is Added thank you");
						window.location = "viewprisoners.php";
					</script>
					<?php
//close of connection
mysqli_close($conn);
?>