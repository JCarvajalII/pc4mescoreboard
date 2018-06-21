var openT_var = document.getElementById('OPENTicket').innerHTML;
var link = "html/open.html";
window.onload = function () {
    var pickUpTickets = document.getElementById('PICKUPTicket').innerHTML;
    var orderedPartsTickets = document.getElementById('OPicket').innerHTML;
    var overdueTickets = document.getElementById('OVERDUETicket').innerHTML;
    var rmaTickets = document.getElementById('RMATicket').innerHTML;
    document.getElementById('openHref').setAttribute("href", link);

};
