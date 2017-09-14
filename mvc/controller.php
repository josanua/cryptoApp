<?php
require_once __DIR__ . "../../config.php";
// Take data from DB

$conn = new mysqli(DBHOST,DBUSER,DBPASS,DBNAME);

//Create connection (object-oriented)
function openDatabaseConnection(){

	global $conn;
	//Check connection
	if(mysqli_connect_error()){
		 die("Connection failed:" . mysqli_connect_error());
	}
	else {
		// echo "Connected successfully <br>";
		return $conn;
	}
}
openDatabaseConnection();



// Close connection
// $conn->close();


// Show asset details

//Save assets to database
// if(empty($_GET["saveButton"])){
// 	echo "Asset is empty";
// }
// 	else {
// 		$saveAsset = $_GET["saveButton"];
// 		$writeDatabase = "INSERT INTO portfolio (Symbol) VALUES ('$saveAsset')";
		
// 		if ($conn->query($saveAsset) === true){
// 			echo "New record created successfully";
// 		}
// 		else{
// 			echo "Error: " . $writeDatabase . "<br>" . $conn->error;
// 		}
// 	}


// INSERT INTO `portfolio`(`Symbol`) VALUES ('eth')

?>