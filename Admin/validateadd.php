<?php
$con=mysqli_connect("localhost","root","","prisonpro");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$prisonid = mysqli_real_escape_string($con, $_POST['prisonid']);
$prisonname = mysqli_real_escape_string($con, $_POST['prisonname']);
$location = mysqli_real_escape_string($con, $_POST['location']);
$capacity = mysqli_real_escape_string($con, $_POST['capacity']);
$population = mysqli_real_escape_string($con, $_POST['population']);
//deal with date and concatenate variables month, day, year
			$month=mysqli_real_escape_string($con, $_POST['month']);
			$day=mysqli_real_escape_string($con, $_POST['day']);
			$year=mysqli_real_escape_string($con, $_POST['year']);
$dateofconstruction = $month . '/' .$dDay . '/' . $dYear;
        $dateofconstruction = date('Y-m-d',strtotime($dateofconstruction));

$admin = mysqli_real_escape_string($con, $_POST['admin']);

// $sql = "INSERT INTO `prisonpro`.`prison` (`prisonid`,`prisoname`, `location`, `capacity`, `dateofcons`,  `Gender`, `Education`, `Marital`, `Offence`, `Date_in`, `File_num`) 
	// VALUES ('{$Nid}', '{$Fname}', '{$dob}', '{$address}', '{$county}', '{$Gender}', '{$education}', '{$status}', '{$offence}','{$di}', '{$Filenum}');";


$sql="INSERT INTO prison (prisonid, prisoname, location, capacity, population,  dateofcons, administrator)
VALUES ('$prisonid', '$prisonname', '$location','$capacity', '$population', '$dateofconstruction','$admin')";


if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
?>
	<script type="text/javascript">
						alert("you have succefully add the record !thank you");
						window.location = "add.php";
					</script>
