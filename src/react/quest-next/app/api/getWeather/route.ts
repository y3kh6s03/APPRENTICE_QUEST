import { NextResponse } from "next/server";

export async function GET(request: Request) {
  const {searchParams} = new URL(request.url)
  const city = searchParams.get('city')
  const FETCH_URL = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${process.env.OPENWEATHER_API_KEY}&units=metric`
  const res = await fetch(FETCH_URL)
  const data = await res.json();
  const weather = data.weather[0].main
  const maxTemp = data.main.temp_max
  const minTemp = data.main.temp_min
  const wind = data.wind.speed
  const responseData = {
    weather: weather,
    maxTemp: maxTemp,
    minTemp: minTemp,
    wind: wind
  }
  return NextResponse.json(responseData)
}