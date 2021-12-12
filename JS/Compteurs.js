let daysDiv = document.querySelector("#days")
let hoursDiv = document.querySelector("#hours")
let minutesDiv = document.querySelector("#minutes")
let secondsDiv = document.querySelector("#seconds")

let date_final = "24 Dec 2021"


function countdown(){
    let date = new Date(date_final)
    let current_date = new Date()

    // console.log("date",date,"current_date",current_date)

    total_seconds = (date-current_date)/1000

    const days = Math.floor(total_seconds/ 3600 / 24)
    const hours = Math.floor(total_seconds/ 3600) % 24
    const minutes = Math.floor(total_seconds/ 60) % 60
    const seconds = Math.floor(total_seconds) % 60

    daysDiv.innerHTML = formatTime(days)
    hoursDiv.innerHTML = formatTime(hours)
    minutesDiv.innerHTML = formatTime(minutes)
    secondsDiv.innerHTML = formatTime(seconds)
}

function formatTime(time){
    return time < 10 ? `0${time}` : time; 
}

countdown()

setInterval(countdown, 1000)