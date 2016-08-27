<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Shaw Countdown</title>
	<script src ="CountdownClock.js"></script>
</head>
<body>

<p id="hours"></p>
<p id ="minutes"></p>
<p id ="seconds"></p>

<script> 
var postedData = <?php echo json_encode($_POST); ?>;
var myClock = new CountdownClock (postedData);


myClock.updateCountdown("hours","minutes","seconds"); 
setInterval(function(){myClock.updateCountdown("hours","minutes","seconds")},1000); 

/*
function initialize(yearMonthDayHourMin){
	var date = yearMonthDayHourMin.startDate.split("-").map(Number);
	return new Date (date[0], date [1]-1, date[2], parseInt(yearMonthDayHourMin.hour,10),parseInt(yearMonthDayHourMin.minute,10));
	
}
function updateCountdown (hoursId,minutesId,secondsId){
	var count = timeRemaining ();
	document.getElementById(hoursId).innerHTML = count.hours;
	document.getElementById (minutesId).innerHTML = count.minutes;
	document.getElementById (secondsId).innerHTML = count.seconds;
	
}

function timeRemaining (){
	var now = new Date();
	var timeLeft = start.getTime ()- now.getTime();
	var hours = timeLeft /(1000*60*60);
	hours = Math.floor (hours);
	var minutes = timeLeft/(1000*60)- hours*60;
	minutes = Math.floor(minutes)
	var seconds = timeLeft/(1000) - hours*60*60- minutes*60;	
	seconds = Math.floor (seconds)
	return {hours:hours,minutes:minutes, seconds:seconds};
}*/

</script>


</body>
</html> 
