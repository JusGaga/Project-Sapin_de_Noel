let date_final


let date_compteur = ""




function clik() {

    console.log("ok")
    date_compteur = date_final.value
    console.log(date_final.value)
    setInterval(countdown, 1000)

}


function init() {
    console.log("coucou init")
    // daysDiv = document.getElementById("days")
    // hoursDiv = document.getElementById("hours")
    // minutesDiv = document.getElementById("minutes")
    // secondsDiv = document.getElementById("seconds")
    console.log(daysDiv)

    date_final = document.getElementById("date")
    valider = document.getElementById("valider")

    date_compteur = ""
}

function countdown() {
    let date = new Date(String(date_compteur))
    let current_date = new Date()
    console.log(String(date))

    // console.log("date",date,"current_date",current_date)

    total_seconds = (date - current_date) / 1000
    console.log(total_seconds)

    const days = Math.floor(total_seconds / 3600 / 24)
    const hours = Math.floor(total_seconds / 3600) % 24
    const minutes = Math.floor(total_seconds / 60) % 60
    const seconds = Math.floor(total_seconds) % 60

    console.log(days, hours, minutes, seconds)
    daysDiv.innerHTML = String(days)
    hoursDiv.innerHTML = String(formatTime(hours))
    minutesDiv.innerHTML = String(formatTime(minutes))
    secondsDiv.innerHTML = String(formatTime(seconds))
}

function formatTime(time) {
    return time < 10 ? `0${time}` : time;
}

