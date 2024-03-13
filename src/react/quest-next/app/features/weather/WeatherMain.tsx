import { NextResponse } from "next/server";

async function getWeatherData() {
  const URL = `https://api.openweathermap.org/data/2.5/weather?lat=33.44&lon=-94.04&appid=${process.env.OPENWEATHER_API_KEY}`
  const res = await fetch(URL)
  const data = await res.json();
  return data
}

export default async function WeatherMain() {
  const data = await getWeatherData();
  console.log(data); // data.json() ではなく data をログに出力する
  return (
    <>
      {
        <h1>{data.main.temp_min}</h1>
      }
    </>
  );
}