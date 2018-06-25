var numofopen = document.getElementById('numofopen').innerHTML;
var numofpickup = document.getElementById('numofpickup').innerHTML;
var numoforderedpart = document.getElementById('numoforderedpart').innerHTML;
var numofoverdue = document.getElementById('numofoverdue').innerHTML;
var numofrma = document.getElementById('numofrma').innerHTML;
var totalUnitsDay = parseInt(numofopen, 10) + parseInt(numofpickup, 10) + parseInt(numoforderedpart, 10) + parseInt(numofoverdue, 10) + parseInt(numofrma, 10);
document.getElementById('totalunitsday').innerHTML = totalUnitsDay;
