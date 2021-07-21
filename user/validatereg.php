<?php
$con=mysqli_connect("localhost","root","","prisonpro");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security

$Nid= mysqli_real_escape_string($con,$_POST['Nid']);
$Fname= mysqli_real_escape_string($con,$_POST['Fname']);
//deal with date and concatenate variables month, day, year
 $month= mysqli_real_escape_string($con,$_POST['month']);
 $day= mysqli_real_escape_string($con,$_POST['day']);
 $year= mysqli_real_escape_string($con,$_POST['year']);
 $dateofbirth = $month . '/' .$day . '/' . $year;
 $dateofbirth = date('Y-m-d',strtotime($dateofbirth));
 //hereonth date in
 $dmonth = $_POST['dmonth'];
 $dday =  $_POST['dday'];
 $dyear = $_POST['dyear'];
 $datein = $dmonth . '/' .$dday . '/' . $dyear;
 $datein = date('Y-m-d',strtotime($datein));
 
//deal with date and concatenate variables month, day, year
 $month= mysqli_real_escape_string($con,$_POST['month']);
 $day= mysqli_real_escape_string($con,$_POST['day']);
 $year= mysqli_real_escape_string($con,$_POST['year']);
 $dateout = $month . '/' .$day . '/' . $year;
 $dateout = date('Y-m-d',strtotime($dateout));


$address=mysqli_real_escape_string($con,$_POST['address']);
$county=mysqli_real_escape_string($con,$_POST['county']);
$Gender=mysqli_real_escape_string($con,$_POST['Gender']);
$education=mysqli_real_escape_string($con,$_POST['education']);
$status=mysqli_real_escape_string($con,$_POST['status']);
$offence=mysqli_real_escape_string($con,$_POST['offence']);


$sentence=mysqli_real_escape_string($con,$_POST['sentence']);
$Filenum=mysqli_real_escape_string($con,$_POST['Filenum']);


 $sql = "INSERT INTO registration (id, Full_Name, DOB, datein, dateout, Address, County, Gender, Education, Marital, Offence, Sentence,  File_num) 
VALUES ('$Nid', '$Fname', '$dateofbirth', '$datein', '$dateout', '$address', '$county', '$Gender', '$education', '$status', '$offence', '$sentence',  '$Filenum');";




if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
?>
	<script type="text/javascript">
						alert("you have succefully add the record !thank you");
						window.location = "registration.php";
					</script>
