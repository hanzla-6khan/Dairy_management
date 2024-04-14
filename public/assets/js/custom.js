
  const secondHand = document.getElementById("second-hand");
  const minuteHand = document.getElementById("minute-hand");
  const hourHand = document.getElementById("hour-hand");

  function clockTick() {
    const date = new Date();
    const seconds = date.getSeconds() / 60;
    const minutes = (seconds + date.getMinutes()) / 60;
    const hours = (minutes + date.getHours()) / 12;

    rotateClockHand(secondHand, seconds);
    rotateClockHand(minuteHand, minutes);
    rotateClockHand(hourHand, hours);
  }

  function rotateClockHand(element, rotation) {
    element.style.setProperty("--rotate", rotation * 360);
  }

  setInterval(clockTick, 1000);

  function changeWatchColor() {
    let myClock = (document.querySelector(".clock").style.backgroundColor =
      "#F138DB");
  }
  setInterval(changeWatchColor, 5000);

  // digital clock

  let digitalClock = document.querySelector(".digital-clock");

  function digiClock() {
    const date = new Date();
    let hours = date.getHours();
    let minutes = date.getMinutes();
    let seconds = date.getSeconds();
    let session = "AM";
    if (hours > 12) {
      session = "PM";
      hours = hours - 12;
    }

    hours = hours < 10 ? "0" + hours : hours;
    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    digitalClock.innerHTML =
      hours + " : " + minutes + " : " + seconds + " " + " " + session;
  }
  setInterval(digiClock, 1000);

  let colors = [
    "#8C0606",
    "#213702",
    "#04562D",
    "#10DEDB",
    "#083E66",
    "#3254F4",
    "#040F43",
    "##7B45EB",
    "#000000",
    "#29096D",
    "#BD0FB7",
    "#FC0920",
  ];
  let index = 0;

  function changeBgColor() {
    digitalClock.style.backgroundColor = colors[index];
    index = (index + 1) % colors.length;
  }
  setInterval(changeBgColor, 5000);





function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            var imagePreview = document.getElementById('imagePreview');
            imagePreview.style.backgroundImage = 'url(' + e.target.result + ')';
            imagePreview.style.display = 'none';
            imagePreview.style.display = 'block';
        }
        reader.readAsDataURL(input.files[0]);
    }
}

document.getElementById('imageUpload').addEventListener('change', function() {
    readURL(this);
});












