let counter = document.getElementById("countdown");
let date = counter.getAttribute('date');
let countDownDate = new Date(date).getTime();

// Update the count down every 1 second
let x = setInterval(function() {

// Get today's date and time
let now = new Date().getTime();

// Find the distance between now and the count down date
let distance = countDownDate - now;

// Time calculations for days, hours, minutes and seconds
let days = Math.floor(distance / (1000 * 60 * 60 * 24));
let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
let seconds = Math.floor((distance % (1000 * 60)) / 1000);

let days_string = days === 1 ? "Day" : "Days" ;
let hours_string = hours === 1 || hours ? "Hour" : "Hours";
let minutes_string = minutes === 1 ? "Minute" : "Minutes";
let seconds_string = seconds === 1 ? "Second" : "Seconds";



// Display the result in the element with id="demo"
counter.innerHTML = "<div class='il-countdown-item'><h3>" + days + "</h3>" + " <p>" + days_string + "</p></div> " + "<div class='il-countdown-item'><h3>" + hours + "</h3>" + " <p>" + hours_string + "</p></div> "
+ "<div class='il-countdown-item'><h3>"+ minutes + "</h3>" + "<p>" + minutes_string + "</p></div> " + "<div class='il-countdown-item'><h3>" + seconds + "</h3>" + " <p>" + seconds_string + "</p></div> ";

// If the count down is finished, write some text
if (distance < 0) {
    clearInterval(x);
    counter.innerHTML = "EXPIRED";
}
}, 1000);