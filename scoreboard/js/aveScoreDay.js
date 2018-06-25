var openScore = document.getElementById('openScore').innerHTML;
var pickupScore = document.getElementById('pickupScore').innerHTML;
var orderedpartScore = document.getElementById('orderedpartScore').innerHTML;
var rmaScore = document.getElementById('rmaScore').innerHTML;
var overdueScore = document.getElementById('overdueScore').innerHTML;
var aceScoreDay = (parseFloat(openScore) + parseFloat(pickupScore) + parseFloat(orderedpartScore) + parseFloat(overdueScore) + parseFloat(rmaScore)) / 5;
document.getElementById('aveScore').innerHTML = aceScoreDay + "%";
