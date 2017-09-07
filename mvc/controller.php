<?php
require_once './config.php';
// Take data from DB


// Create connection (object-oriented)
$conn = new mysqli(DBHOST,DBUSER,DBPASS,DBNAME); 

// Check connection
if(mysqli_connect_error()){
		die("Connection failed:" . mysqli_connect_error());
	}
	echo "Connected successfully";
	

// Show table
$sql = "SELECT * FROM portfolio";
$showTable = $conn->query($sql);

if($showTable->num_rows > 0 ){
	while($row = $showTable->fetch_assoc()){
		$assetName   =  $row["Asset Name"];
		$symbol      =  $row["Symbol"];
		$buyedPrice  =  $row["Buyed Price"];
		$buyedVolume =  $row["Buyed Volume"];
		$soldVolume  =  $row["Sold Volume"];
		$soldPrice   =  $row["Sold Price"];
	}
} else {
	echo "No table in this database";
}

// Close connection
$conn->close();

// Show asset details

?>