<?php

require_once __DIR__ . "/controller.php";


// $saveButton = '';
// 
//function test
// function returnVar(){
// $text = "Return test it's ok";
// 	return $text;
// };

// function showText(){
// 	$text = returnVar();
// 	echo $text;
// }

// showText();
// echo $text;
function showSavedAssets(){ 

 	global $conn;
 	openDatabaseConnection();

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
		}; return $symbol;
	} else {
		echo "No table in this database";
	}
}


// Render Table
function renderTable(){

	global $symbol, $buyedPrice, $buyedVolume, $soldVolume, $soldPrice;
	showSavedAssets();

	$table = '<table>
			<tr>
				<th>Symbol</th>
				<th>Price $</th>
				<th>Buyed Price</th>
				<th>Buyed Volume</th>
				<th>Sold Volume</th>
				<th>Sold Price</th>
			</tr>
			<tr>
				<td class="symbol">'.$symbol.'</td>
				<td class="price"></td>
				<td class="">'.$buyedPrice.'</td>
				<td class="">'.$buyedVolume.'</td>
				<td class="">'.$soldVolume.'</td>
				<td class="">'.$soldPrice.'</td>
			</tr>
		</table>';
		echo $table;
}

?>

