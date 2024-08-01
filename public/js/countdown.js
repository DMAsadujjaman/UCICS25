
let daysItem = document.querySelector("#days");
let hoursItem = document.querySelector("#hours");
let minItem = document.querySelector("#min");
let secItem = document.querySelector("#sec");

let formatNumber = (number) => {
            return number < 10 ? `0${number}` : `${number}`;
        };

let countdown = () => {
    let futureDate = new Date("21 Dec 2024");
    let currentDate = new Date();
    let myDate = futureDate - currentDate;
    //console.log(myDate);

    let days = Math.floor(myDate / 1000 / 60 / 60 / 24);
    //console.log(days);
    let hours = Math.floor(myDate / 1000 / 60 / 60 )%24;
    let min = Math.floor(myDate / 1000 / 60 )%60;
    let sec = Math.floor(myDate / 1000) % 60;

    daysItem.innerHTML = formatNumber(days);
    hoursItem.innerHTML = formatNumber(hours);
    minItem.innerHTML = formatNumber(min);
    secItem.innerHTML = formatNumber(sec);
}

countdown()
setInterval(countdown, 1000);
