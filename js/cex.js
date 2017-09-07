

var response = "";
var parseResponse = "";

// work with HTTP 
xhr = new XMLHttpRequest();
//xhr.setRequestHeader('Content-Type', 'application/json');
xhr.open("POST", "https://cex.io/api/currency_limits", false );
xhr.send();

if(xhr.status != 200){
	console.log(xhr.status + ' : ' + xhr.statusText)
} 
else 
	response = xhr.responseText;
	console.log(response);

//Parse JSON
parseResponse = JSON.parse(response);
console.log(parseResponse.data.pairs[0]);

//Write result in HTMl page
// document.getElementById("frame").innerHTML = (parseResponse);

//div.innerHTML("response")