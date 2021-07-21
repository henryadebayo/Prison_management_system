/
<?php
$con=mysqli_connect("localhost","root","","prisonpro");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//escape variable for security here or problem
        $id =$_POST['id'];
        $fullname = $_POST['fullname'];
        $address = $_POST['address'];    
        $month = $_POST['lMonth'];
        $dDay =  $_POST['txtDay'];
        $dYear = $_POST['txtYear'];
        $gender =$_POST['gender'];
        $telephone =$_POST['telephone'];
        $education =$_POST['education'];
        $exp =$_POST['exp'];
        $dateofbirth = $month . '/' .$dDay . '/' . $dYear;
        $dateofbirth = date('Y-m-d',strtotime($dateofbirth));
        

//we are using mysql_query function. it returns a resource on true else False on error
        $sql="insert into officerdetails set
                    id = '$id',
                    fullname = '$fullname',
                    address = '$address',
                    dateofbirth = '$dateofbirth',
                    gender = '$gender',
                    telephone = '$telephone',
                    education= '$education',  
                    experience = '$exp'
                    ";

 // $sql1 = "INSERT INTO registration (id, Full_Name, DOB, Address, County,Gender, Education, Marital, Offence, Date_in,sentence, File_num)
 // VALUES ('$Nid', '$Fname', '$dob', '$address', '$county', '$Gender', '$education', '$status', '$offence', '$di', '$sentence', '$Filenum');";




if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
?>
	<script type="text/javascript">
						alert("you have succefully add the record !thank you");
						window.location = "officerpanel.php";
					</script>