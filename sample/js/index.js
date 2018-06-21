var GOOD_GRADE = 100;
var OPEN_TH = 15;
var PICKUP_TH = 15;
var OVERDUE_TH = 0;
var RMA_TH = 5;
var OP_TH = 5;

function setThreshold(value) {
    document.getElementById('opentthreshold').innerHTML = value;
}


function solveOpen() {
    var num = 5;
    var row = document.getElementById('r1');
    var cell = document.getElementsByTagName('td');
    //    alert(cell[1].innerHTML);
    if (num < OPEN_TH) {
        cell[1].innerHTML = getOpenPercentage(num);
    }
}

/*
FORMULA
5
GOOD_GRADE + ((15-5) * 5)
*/
function getOpenPercentage(units) {
    var percentage;
    percentage = GOOD_GRADE + ((15 - 5) * 5);
    return percentage + '%';
}

$(document).ready(function () {
    $('#myTable').DataTable();
});
