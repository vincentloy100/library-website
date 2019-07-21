function startTime() {
	var currentDate = new Date();
	var year = currentDate.getYear();
		if (year < 1000){
			year+=1900;
		}
	var d = currentDate.getDay();
	var M = currentDate.getMonth();
	var D = currentDate.getDate();
	var dayArray = new Array ("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
	var monthArray = new Array ("January","February","March","April","May","June","July","August","September","October","November","December")
	
	var currentTime = new Date();
	var h = currentTime.getHours();
	var m = currentTime.getMinutes();
	var s = currentTime.getSeconds();
	m = checkTime(m);
	s = checkTime(s);
	var myClock = document.getElementById('clock').innerHTML =
	" " + dayArray[d] + ", " + D + " " + monthArray[M] + " " + year + "<br> " + h + ":" + m + ":" + s;
	var t = setTimeout(startTime, 500);
}
function checkTime(i) {
	if (i < 10) {i = "0" + i}; 
	return i;
}