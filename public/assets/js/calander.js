// Get current date
var currentDate = new Date();

// Get elements
var dateElement = document.getElementById("date");
var dayElement = document.getElementById("day");
var monthElement = document.getElementById("month");
var yearElement = document.getElementById("year");

// Set date, day, month, and year
dateElement.textContent = currentDate.getDate();
dayElement.textContent = getDayName(currentDate.getDay());
monthElement.textContent = getMonthName(currentDate.getMonth());
yearElement.textContent = currentDate.getFullYear();

// Function to get day name
function getDayName(dayIndex) {
    var days = [
        "Sunday",
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
    ];
    return days[dayIndex];
}

// Function to get month name
function getMonthName(monthIndex) {
    var months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ];
    return months[monthIndex];
}


// ================ digital clock -================

function updateClock() {
  const now = new Date();
  const hours = now.getHours();
  const minutes = now.getMinutes().toString().padStart(2, '0');
  const seconds = now.getSeconds().toString().padStart(2, '0');
  const ampm = hours >= 12 ? 'PM' : 'AM';
  const formattedHours = hours % 12 || 12;

  const timeString = `${formattedHours}:${minutes}:${seconds} ${ampm}`;

  document.querySelector('.digital-clock').textContent = timeString;
}


setInterval(updateClock, 1000);


updateClock();
