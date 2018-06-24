const date = new Date();
var day = date.getDate();
var year = date.getFullYear();
const months = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];
document.getElementById('date').innerHTML = months[date.getMonth()] + " " + day + "," + " " + year;
