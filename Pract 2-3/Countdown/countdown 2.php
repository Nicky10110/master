<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Shaw Countdown</title>
</head>
<body>
	<p id ="hours"></p>
	<p id ="minutes"></p>
	<p id ="seconds"></p>

<script>
var postedData = <?php echo json_encode($_POST); ?>;
var start = new Date (2016,7,4,19);
updateCountDown ("hours","minutes","seconds")
setInterval(function(){updateCountdown("hours", "minutes", "seconds")},500);


function updateCountdown(hoursId, minutesId, secondsId){
	var count = timeRemaining();
	document.getElementById(hoursId).innerHTML= count.hours; 
	document.getElementById(minutesId).innerHTML= count.minutes; 
	document.getElementById(secondsId).innerHTML= count.seconds; 
}


function timeRemaining(){
	var now = new Date ();
	var timeLeft = start.getTime() - now.getTime();
	var hours = timeLeft/(1000*60*60);
	hours = Math.floor (hours);
	var minutes = timeLeft/ (1000*60)-hours*60;
	minutes = Math.floor(minutes);
	var seconds = timeLeft/ (1000)-hours*60*60 -minutes*60;	
	seconds = Math.floor(seconds);
	return {hours:hours, minutes:minutes, seconds:seconds};
}

</script>
	
</body>
</html>