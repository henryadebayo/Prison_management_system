<?php
$con=mysqli_connect("localhost","root","","prisonpro");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security


$Nid= mysqli_real_escape_string($con,$_POST['Nid']);
$Filenum=mysqli_real_escape_string($con,$_POST['Filenum']);
$From= mysqli_real_escape_string($con,$_POST['From']);
$To=mysqli_real_escape_string($con,$_POST['To']);
//deal with date and concatenate variables month, day, year
 $month= mysqli_real_escape_string($con,$_POST['month']);
 $day= mysqli_real_escape_string($con,$_POST['day']);
 $year= mysqli_real_escape_string($con,$_POST['year']);

 $dateoftransfer = $month . '/' .$dDay . '/' . $dYear;
        $dateoftransfer = date('Y-m-d',strtotime($dateoftransfer));
 


 $sql = "INSERT INTO transfer (National_id, File_num, From_prison, To_prison, Dateoftransfer) 
VALUES ('$Nid', '$Filenum', '$From', '$To', '$dateoftransfer');";




if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
?>
	<script type="text/javascript">
						alert("you have succefully add the record !thank you");
						window.location = "transfer.php";
					</script>