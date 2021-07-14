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
$query ="SELECT * FROM visitor WHERE id LIKE '%$searchTerm%'";

$results = mysqli_query($link, $query);

/* check whethere there were matching records in the table
by counting the number of results returned */
if(mysqli_num_rows($results) >= 1)
{
	$output = "";
	while($row = mysqli_fetch_array($results))
	{
	

		$output .= "National ID: " . $row['id'] . "<br />";
		$output .= "Full Name: " . $row['fullname'] . "<br />";
		$output .= "Address: " . $row['address'] . "<br />";
		$output .= "Date of Visit: " . $row['dateofvisit'] . "<br />";
		$output .= "Time In: " . $row['timein'] . "<br />";
		$output .= "Time Out: " . $row['timeout'] . "<br />";
		$output .= "Relationship: " . $row['relationship'] . "<br />";
		$output .= "Telephone: " . $row['telephone'] . "<br /><br />";
		$output .= "Inmates: " . $row['prisoner'] . "<br />";
	}
	echo $output;
}
else
	echo "There was no matching record for the name " . $searchTerm;
?>
