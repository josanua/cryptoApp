// --- Clock Functions --- // 
// Start stop feature

function startTime(){
	//la fiecare 60 secunde adugam o cifra in fata, minute
	var date = new Date();
	var secunde = date.getSeconds();

	var minute = 0;

	if(secunde == 59){
		minute += 1;
	}

	document.getElementById("showTime").innerHTML = minute + ':' +secunde;
}