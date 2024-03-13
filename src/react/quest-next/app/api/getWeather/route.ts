import { NextResponse } from "next/server";

export async function GET() {
  const URL = `https://api.openweathermap.org/data/2.5/weather?lat=33.44&lon=-94.04&appid=${process.env.OPENWEATHER_API_KEY}`
  const res = await fetch(URL)
  const data = await res.json();
  return Response.json(data)
}