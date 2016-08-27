<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Shaw Countdown</title>
</head>
<body>

<p id="hours"></p>
<p id ="minutes"></p>
<p id ="seconds"></p>

<script> 
var start = new Date (2016,7,20,19); 
var now = new Date();
updateCountdown (); 
function updateCountdown (){
	var count = timeRemaining ();
	document.write("<p>"+count.hours+"</p>"); 
	document.write ("<p>"+count.minutes+"</p>")
	document.write ("<p>"+count.seconds+"</p>") 
}

function timeRemaining (){
	var timeLeft = start.getTime ()- now.getTime();
	var hours = timeLeft /(1000*60*60);
	hours = Math.floor (hours);
	var minutes = timeLeft/(1000*60)- hours*60;
	minutes = Math.floor(minutes)
	var seconds = timeLeft/(1000) - hours*60*60- minutes*60;	
	seconds = Math.floor (seconds)
	return {hours:hours,minutes:minutes, seconds:seconds};
}

</script>


</body>
</html> 
