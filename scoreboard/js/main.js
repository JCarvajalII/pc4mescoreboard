var PERFECT_GRADE = 100;
//get the date today
function getDate() {
    const date = new Date();
    var day = date.getDate();
    var year = date.getFullYear();
    const months = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];
    document.getElementById('date').innerHTML = months[date.getMonth()] + " " + day + "," + " " + year;
}
getDate();

//Get total units for the day
function addUnitsDay() {
    var numofopen = document.getElementById('numofopen').innerHTML;
    var numofpickup = document.getElementById('numofpickup').innerHTML;
    var numoforderedpart = document.getElementById('numoforderedpart').innerHTML;
    var numofoverdue = document.getElementById('numofoverdue').innerHTML;
    var numofrma = document.getElementById('numofrma').innerHTML;
    var totalUnitsDay = parseInt(numofopen, 10) + parseInt(numofpickup, 10) + parseInt(numoforderedpart, 10) + parseInt(numofoverdue, 10) + parseInt(numofrma, 10);
    document.getElementById('totalunitsday').innerHTML = totalUnitsDay;
}
addUnitsDay();

//get the average score for the day
function aveScoreDay() {
    var openScore = document.getElementById('openScore').innerHTML;
    var pickupScore = document.getElementById('pickupScore').innerHTML;
    var orderedpartScore = document.getElementById('orderedpartScore').innerHTML;
    var rmaScore = document.getElementById('rmaScore').innerHTML;
    var overdueScore = document.getElementById('overdueScore').innerHTML;
    var aceScoreDay = (parseFloat(openScore) + parseFloat(pickupScore) + parseFloat(orderedpartScore) + parseFloat(overdueScore) + parseFloat(rmaScore)) / 5;
    document.getElementById('aveScoreDay').innerHTML = aceScoreDay + "%";
}
aveScoreDay();

//Add total number of units
function addUnitsMonth() {
    var sumopentickets = document.getElementById('sumopentickets').innerHTML;
    var sumpickuptickets = document.getElementById('sumpickuptickets').innerHTML;
    var sumrmatickets = document.getElementById('sumrmatickets').innerHTML;
    var sumorderedpartstickets = document.getElementById('sumorderedpartstickets').innerHTML;
    var sumoverduetickets = document.getElementById('sumoverduetickets').innerHTML;
    var totalSumMonth = parseInt(sumopentickets, 10) + parseInt(sumpickuptickets, 10) + parseInt(sumrmatickets, 10) + parseInt(sumorderedpartstickets, 10) + parseInt(sumoverduetickets, 10);
    document.getElementById('totalsummonth').innerHTML = totalSumMonth;

}
addUnitsMonth();

//Get Percentage Month
function getOpenMonthPercentage() {
    var percentage = 0;
    var sumopen = document.getElementById('sumopentickets').innerHTML;
    var openThreshold = document.getElementById('openMonthThre').innerHTML;
    if (sumopen == 0) {
        percentage = PERFECT_GRADE;
        document.getElementById('pickupMonthPer').innerHTML = pickupThreshold;
    } else if (sumopen == openThreshold) {
        percentage = PERFECT_GRADE / 2;
    } else {
        percentage = PERFECT_GRADE - ((sumopen / openThreshold) * 50);
    }
    document.getElementById('openMonthPer').innerHTML = Math.round(percentage) + "%";
}
getOpenMonthPercentage();

function getPickUpMonthPercentage() {
    var percentage = 0;
    var sumpickup = document.getElementById('sumpickuptickets').innerHTML;
    var pickupThreshold = document.getElementById('pickupMonthThres').innerHTML;
    if (sumpickup == 0) {
        percentage = PERFECT_GRADE;
    } else if (sumpickup == pickupThreshold) {
        percentage = PERFECT_GRADE / 2;
    } else {
        percentage = PERFECT_GRADE - ((sumpickup / pickupThreshold) * 50);
    }
    document.getElementById('pickupMonthPer').innerHTML = percentage + "%";
}
getPickUpMonthPercentage();

function getOverdueMonthPercentage() {
    var percentage = 0;
    var sumoverdue = document.getElementById('sumoverduetickets').innerHTML;
    /*var overdueThreshold = document.getElementById('overdueMonthThres').innerHTML;
if (sumpickup == 0) {
    percentage = PERFECT_GRADE;
} else if (sumoverdue == overdueThreshold) {
    percentage = PERFECT_GRADE / 2;
} else {
    percentage = PERFECT_GRADE - ((sumoverdue / overdueThreshold) * 50);
}*/
    document.getElementById('overdueMonthPer').innerHTML = sumoverdue;
}
getOverdueMonthPercentage();

function getOrderedPartMonthPercentage() {
    var percentage = 0;
    var sumorderedpart = document.getElementById('sumorderedpartstickets').innerHTML;
    var orderedpartThreshold = document.getElementById('orderedpartMonthThres').innerHTML;
    if (sumorderedpart == 0) {
        percentage = PERFECT_GRADE;
    } else if (sumorderedpart == orderedpartThreshold) {
        percentage = PERFECT_GRADE / 2;
    } else {
        percentage = PERFECT_GRADE - ((sumorderedpart / orderedpartThreshold) * 50);
    }
    document.getElementById('orderedpartMonthPer').innerHTML = percentage + "%";
}
getOrderedPartMonthPercentage();


function getRMAMonthPercentage($num) {
    var percentage = 0;
    var sumrma = document.getElementById('sumrmatickets').innerHTML;
    var rmaThreshold = document.getElementById('rmaMonthThres').innerHTML;
    if (sumrma == 0) {
        percentage = PERFECT_GRADE;
    } else if (sumrma == rmaThreshold) {
        percentage = PERFECT_GRADE / 2;
    } else {
        percentage = PERFECT_GRADE - ((sumrma / rmaThreshold) * 50);
    }
    document.getElementById('rmaMonthPer').innerHTML = percentage + "%";
}
getRMAMonthPercentage();


function aveScoreMonth() {
    var openMonthPer = document.getElementById('openMonthPer').innerHTML;
    var pickupMonthPer = document.getElementById('pickupMonthPer').innerHTML;
    var overdueMonthPer = document.getElementById('overdueMonthPer').innerHTML;
    var orderedpartMonthPer = document.getElementById('orderedpartMonthPer').innerHTML;
    var rmaMonthPer = document.getElementById('rmaMonthPer').innerHTML;
    var aveScore = (parseFloat(openMonthPer) + parseFloat(pickupMonthPer) + parseFloat(overdueMonthPer) + parseFloat(orderedpartMonthPer) + parseFloat(rmaMonthPer)) / 5;
    document.getElementById('aveScoreMonth').innerHTML = aveScore + "%";
}
aveScoreMonth();
