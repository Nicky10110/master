
var CountdownClock = function (yearMonthDayHourMin) {
	this.startTime = new function (){
		console.log(yearMonthDayHourMin);
		var date = yearMonthDayHourMin.startDate.split("-").map(Number);
		return new Date (date[0], date [1]-1, date[2], parseInt(yearMonthDayHourMin.hour,10),parseInt		(yearMonthDayHourMin.minute,10));
	}
		
	this.updateCountdown = function (hoursId,minutesId,secondsId){
		var count = this.timeRemaining ();
		document.getElementById(hoursId).innerHTML = count.hours;
		document.getElementById (minutesId).innerHTML = count.minutes;
		document.getElementById (secondsId).innerHTML = count.seconds;
	}
	m
	this.timeRemaining = function(){
		var now = new Date();
		var timeLeft = this.startTime.getTime ()- now.getTime(); 
		var hours = timeLeft /(1000*60*60);
		hours = Math.floor (hours);
		var minutes = timeLeft/(1000*60)- hours*60;
		minutes = Math.floor(minutes)
		var seconds = timeLeft/(1000) - hours*60*60- minutes*60;	
		seconds = Math.floor (seconds)
		return {hours:hours,minutes:minutes, seconds:seconds};
	}
}
