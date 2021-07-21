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
        $timein =$_POST['timein'];
        $timeout =$_POST['timeout'];
        $relationship =$_POST['relationship'];
        $telephone =$_POST['telephone'];
        $prisoner =$_POST['prisoner'];
     
        $date = $month . '/' .$dDay . '/' . $dYear;
        $date = date('Y-m-d',strtotime($date));
        

//we are using mysql_query function. it returns a resource on true else False on error
        $sql="insert into visitor set
                    id = '$id',
                    fullname = '$fullname',
                    address = '$address',
                    dateofvisit = '$date',
                    timein = '$timein',
                    timeout = '$timeout',
                    relationship = '$relationship',
                    telephone = '$telephone',
                    prisoner = '$prisoner'
                    ";

 // $sql1 = "INSERT INTO registration (id, Full_Name, DOB, Address, County,Gender, Education, Marital, Offence, Date_in,sentence, File_num)
 // VALUES ('$Nid', '$Fname', '$dob', '$address', '$county', '$Gender', '$education', '$status', '$offence', '$di', '$sentence', '$Filenum');";




if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
?>
	<script type="text/javascript">
						alert("you have succefully add the record !thank you");
						window.location = "userpanel.php";
					</script>