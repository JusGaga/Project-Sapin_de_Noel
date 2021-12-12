let daysDiv;
let hoursDiv;
let minutesDiv;
let secondsDiv;
let date_compteur;
let valider;

function init() {
  daysDiv = document.getElementById("days");
  hoursDiv = document.getElementById("hours");
  minutesDiv = document.getElementById("minutes");
  secondsDiv = document.getElementById("seconds");
  
  valider = document.getElementById("valider");
  date_compteur = document.querySelector("#InputDate");
  setInterval(countdown, 1000);
}

function countdown() {
  let date = new Date(String(date_compteur.value));
  let current_date = new Date();

  total_seconds = (date - current_date) / 1000;

  total_seconds = total_seconds-3600; // passage heure française

  const days = Math.floor(total_seconds / 3600 / 24);
  const hours = Math.floor(total_seconds / 3600) % 24;
  const minutes = Math.floor(total_seconds / 60) % 60;
  const seconds = Math.floor(total_seconds) % 60;

  daysDiv.innerHTML = String(days);
  hoursDiv.innerHTML = String(formatTime(hours));
  minutesDiv.innerHTML = String(formatTime(minutes));
  secondsDiv.innerHTML = String(formatTime(seconds));
}

function formatTime(time) {
  return time < 10 ? `0${time}` : time;
}
