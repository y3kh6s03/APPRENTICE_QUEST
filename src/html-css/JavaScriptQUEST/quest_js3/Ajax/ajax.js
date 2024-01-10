const weatherForm = document.querySelector("#weatherForm");
const weatherResult = document.querySelector("#weatherResult");
weatherForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const latitude = e.target.latitude.value;
    const longitude = e.target.longitude.value;

    fetchWeather(latitude, longitude);
})

async function fetchWeather(latitude, longitude) {
    const res = await fetch(`https://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitude}&appid=063f318078e9ee4b246a41e59edcddf3`);
    const json = await res.json();
    const weatherInfo = json.weather[0];

    weatherElm(weatherInfo)
    console.log(weatherInfo);
}

const weatherElm = (weatherInfo) => {
    const pElm = document.createElement("p");
    pElm.innerHTML = `main:${weatherInfo.main}, <br> description: ${weatherInfo.description}`;
    weatherResult.appendChild(pElm);
}