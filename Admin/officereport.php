<?php

// Database Connection

$host="localhost";
$uname="root";
$pass="";
$database = "prisonpro";	

$connection=mysqli_connect($host,$uname,$pass); 

echo mysqli_error();

//or die("Database Connection Failed");
$selectdb=mysqli_select_db($connection, $database) or die("Database could not be selected");	
$result=mysqli_select_db($connection, $database)
or die("database cannot be selected <br>");

	
// Fetch Record from Database

$output			= "";
$table 			= "officerdetails"; // Enter Your Table Name
$sql 			= mysqli_query("select * from $table");
$columns_total 	= mysqli_num_fields($sql);

// Get The Field Name

for ($i = 0; $i < $columns_total; $i++) {
	$heading	=	mysqli_num_fields($sql);
	$output		.= '"'.$heading.'",';
}
$output .="\n";

// Get Records from the table

while ($row = mysqli_fetch_array($sql)) {
for ($i = 0; $i < $columns_total; $i++) {
$output .='"'.$row["$i"].'",';
}
$output .="\n";
}

// Download the file

$filename =  "officer_report.csv";
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);

echo $output;
exit;
	
?>