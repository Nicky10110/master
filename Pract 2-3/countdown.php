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
setInterval(function(){myClock.updateCountdown("hours","minutes","seconds")},500); 

</script>
</body>
</html> 
