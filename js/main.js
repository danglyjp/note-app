
const dateElement = document.getElementById("date");
let today = new Date();
const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
dateElement.innerHTML=today.toLocaleDateString(undefined, options)