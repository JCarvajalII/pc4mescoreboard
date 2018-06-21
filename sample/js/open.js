var GOOD_GRADE = 100;
var OPEN_TH = 15;
var PICKUP_TH = 15;
var OVERDUE_TH = 0;
var RMA_TH = 5;
var OP_TH = 5;

function solveOpenTicketScore(noTicket) {
    var value;
    if (noTicket < OPEN_TH) {
        value = getOpenPercentage(noTicket);
    } else
    if (noTicket > OPEN_TH) {
        value = getOpenPercentage(noTicket);
    } else {
        value = "100%";
    }
    return value;
}

/*
FORMULA
GOOD_GRADE + ((15-5) * 5)
*/
function getOpenPercentage(units) {
    var percentage;
    percentage = GOOD_GRADE + ((15 - units) * 5);
    return percentage + "%";
}
window.onload = function () {
    document.getElementById('noTickets').innerHTML = 5;
    document.getElementById('opentthreshold').innerHTML = OPEN_TH;
    document.getElementById('opentscore').innerHTML = solveOpenTicketScore(14);
}
