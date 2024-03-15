"use client"
import { useEffect, useState } from "react"
interface WeatherData {
  weather: string,
  maxTemp: number,
  minTemp: number,
  wind: number
}
export default function WeatherInfo() {
  const [city, setCity] = useState("nagano");
  const inputCity = (e: React.ChangeEvent<HTMLInputElement>) => {
    setCity(e.target.value)
  }
  const [data, setData] = useState<WeatherData>();
  async function getData() {
    const res = await fetch(`/api/getWeather?city=${city}`)
    const data = await res.json();
    setData(data);
  }

  console.log(city)
  return (
    <>
      <input type="text" value={city} onChange={inputCity} />
      <button onClick={getData}>button</button>
      <h3>天気: {data?.weather}</h3>
      <h3>最高気温: {data?.maxTemp}</h3>
      <h3>最低気温: {data?.minTemp}</h3>
      <h3>風速: {data?.wind}</h3>
    </>
  )
}