import { useState } from "react";

export default function CounterApp() {
  const [count, setCount] = useState<number>(0);

  const countUp = () => {
    setCount(prev => prev + 1);
  }
  const countDown = () => {
    setCount(prev => prev - 1);
  }
  const incrementByTwo = () => {
    setCount(count=>count + 1);
    setCount(prev => prev + 1);
  }
  return (
    <div>
      <h2>カウンターアプリ</h2>
      <h1>カウンター: {count}</h1>
      <button onClick={countUp}>増加</button>
      <button onClick={countDown}>減少</button>
      <button onClick={incrementByTwo}>+2</button>
    </div>
  );
}