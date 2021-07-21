<?php
//set up for mysql Connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
//test if the connection is established successfully then it will proceed in next process else it will throw an error message
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

//we specify here the Database name we are using
mysql_select_db('prison');
$Nationalid=$_POST['Nationalid'];
$Filenum=$_POST['Filenum'];
$dot=$_POST['dot'];
$sentence=$_POST['sentence'];
$location=$_POST['location'];

//It wiil insert a row to our employee_details`
$sql = "INSERT INTO `prison`.`court` (`National_id`,`File_number`, `Dateoftrial`, `Sentence`, `Location`) 
	VALUES ('{$Nationalid}', '{$Filenum}', '{$dot}', '{$sentence}', '{$location}');";
//we are using mysql_query function. it returns a resource on true else False on error
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
?>
					<script type="text/javascript">
						alert("New Record is Added thank you");
						window.location = "court.php";
					</script>
					<?php
//close of connection
mysql_close($conn);
?>