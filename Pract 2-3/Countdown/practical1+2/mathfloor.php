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

var timeLeft = start.getTime ()- now.getTime();
var hours = timeLeft /(1000*60*60);
var minutes = timeLeft/(1000*60)- Math.floor(hours)*60; 
var seconds = timeLeft/(1000) - Math.floor(hours)*60*60- Math.floor(minutes)*60;

document.write("<p>"+hours+"</p>"); 
document.write ("<p>"+minutes+"</p>")
document.write ("<p>"+seconds+"</p>") 

</script>


</body>
</html> 
