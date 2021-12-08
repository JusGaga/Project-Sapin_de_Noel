let daysDiv = document.querySelector("#days")
let hoursDiv = document.querySelector("#hours")
let minutesDiv = document.querySelector("#minutes")
let secondsDiv = document.querySelector("#seconds")

let date_final = document.getElementById("date")
let valider = document.getElementById("valider")

let date_compteur = ""

valider.addEventListener("click", e => {
    e.preventDefault()
    date_compteur = date_final.value
})

function countdown() {
    let date = new Date(date_compteur)
    let current_date = new Date()

    // console.log("date",date,"current_date",current_date)

    total_seconds = (date - current_date) / 1000

    const days = Math.floor(total_seconds / 3600 / 24)
    const hours = Math.floor(total_seconds / 3600) % 24
    const minutes = Math.floor(total_seconds / 60) % 60
    const seconds = Math.floor(total_seconds) % 60

    daysDiv.innerText = days
    hoursDiv.innerText = formatTime(hours)
    minutesDiv.innerText = formatTime(minutes)
    secondsDiv.innerText = formatTime(seconds)
}

function formatTime(time) {
    return time < 10 ? `0${time}` : time;
}

countdown()

setInterval(countdown, 1000)