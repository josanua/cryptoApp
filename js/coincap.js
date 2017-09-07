// -------------------- API Modul ----------------------- //
// Code for coinmarketcap.com API
function readJSON(){
	var xhr = new XMLHttpRequest();
	xhr.open("GET", "https://api.coinmarketcap.com/v1/ticker/", false);
	xhr.send();

	if(xhr.status != 200){
		console.log(xhr.status + ' : ' + xhr.statusText)
	} 
	else {console.log(xhr.statusText)}

	//Parsing JSON
	var	parsedText = JSON.parse(xhr.responseText);
	return parsedText;
}


// -------------------- Search Modul ----------------------- //
//Take input symbol 
function searchShowAsset(){
	var  symbol = document.getElementById("searchAssetInput").value;
			 symbol = symbol.toUpperCase();
	if (symbol.length == 0){
		document.getElementById("resultShow").innerHTML = "Please input Symbol";
	} 
	else {
		searchReturnAsset(symbol);
	}
};


//Search and return "Symbol" -- Trebuie sa fie independenta de restul
function searchReturnAsset(symbol){
	var parsedText = readJSON(),
			symbol = symbol;
	for ( n = 0; n < 90; n++ ){
		if (parsedText[n].symbol == symbol) {
			var asset = {
				symbol 	  : parsedText[n].symbol,
				price     : parsedText[n].price_usd,
				change1h 	: parsedText[n].percent_change_1h,
				change24h : parsedText[n].percent_change_24h,
				change7d 	: parsedText[n].percent_change_7d
			};
			// console.log(asset);
			showSearchedAsset(asset);
			return asset;
		} else console.log("Not Found");
	}
};


//Generate Searched result
function showSearchedAsset(asset){
	var string = "";
	if (asset != undefined){
		for (var n in asset){
			string += asset[n] + " ";
		};
		console.log(string)
		// document.getElementById("resultShow").innerHTML = "Search result: " + string;
	} else console.log("Not defined");
}


// Work with stored Assets
function showAssetDetails(){

	var symbol = document.getElementsByClassName("symbol")[0].innerHTML;

	searchReturnAsset(parsedText,symbol);
	// var showAsset = document.getElementsByClassName("symbol").innerHTML = asset.price;
	// var asset = searchReturnAsset(parsedText,asset);
	// return document.getElementsByClassName("price").innerHTML = asset.price;
	// return console.log(asset.price);
}
