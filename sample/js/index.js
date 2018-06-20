//var value1 = document.getElementsById('t1').innerHTML;
//function getValue() {
//    var t1 = document.getElementById('t1');
//    var t4 = document.getElementById('t4');
//    t4.innerHTML = t1.innerHTML;
//}
/*
Formula for 
*/

var GOOD_GRADE = 100;
var OPEN_TH = 15;
var PICKUP_TH = 5;
var OVERDUE_TH = 0;
var RMA_TH = 5;
var OP_TH = 5;

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
