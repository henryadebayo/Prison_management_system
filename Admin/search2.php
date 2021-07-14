<?php

//capture search term and remove spaces at its both ends if the is any
$searchTerm = trim($_GET["keyname"]);

//check whether the name parsed is empty
if($searchTerm == "")
{
	echo "Enter name  you are searching for.";
	exit();
}

//database connection info
$host = "localhost"; //server
$db = "prisonpro"; //database name
$user = "root"; //dabases user name
$pwd = ""; //password

//connecting to server and creating link to database
$link = mysqli_connect($host, $user, $pwd, $db);

//MYSQL search statement
$query ="SELECT * FROM transfer WHERE National_id LIKE '%$searchTerm%'";

$results = mysqli_query($link, $query);

/* check whethere there were matching records in the table
by counting the number of results returned */
if(mysqli_num_rows($results) >= 1)
{
	$output = "";
	while($row = mysqli_fetch_array($results))
	{
	

		$output .= "National ID: " . $row['National_id'] . "<br />";
		$output .= "File number: " . $row['File_num'] . "<br />";
		$output .= "From prison: " . $row['From_prison'] . "<br />";
		$output .= "To prison: " . $row['To_prison'] . "<br />";
		$output .= "Date of transfer: " . $row['Dateoftransfer'] . "<br /><br />";
	}
	echo $output;
}
else
	echo "There was no matching record for the name " . $searchTerm;
?>
