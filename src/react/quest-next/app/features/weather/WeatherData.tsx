"use client"
// async function getWeatherData() {
//   const URL = `https://api.openweathermap.org/data/2.5/weather?q=sapporo&appid=${process.env.OPENWEATHER_API_KEY}&units=metric`
//   const res = await fetch(URL)
//   const data = await res.json();
//   return data
// // }

// export default async function WeatherData() {
//   const data = await getWeatherData();

//   return (
//     <>
//       {/* <h1>都:{props.city}</h1> */}
//       <div>天気: {data.weather[0].main}</div>
//       <div>最高気温: {data.main.temp_max}</div>
//       <div>最低気温: {data.main.temp_min}</div>
//       <div>風速: {data.wind.speed}</div>
//     </>
//   );
// }