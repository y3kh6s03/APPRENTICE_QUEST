import { Metadata } from 'next'
import WeatherIndex from '../features/weather/WeatherIndex'

export const metadata: Metadata = {
  title: 'Weather',
}
export default function Weather() {
  return (
    <>
      <WeatherIndex />
    </>
  )
}