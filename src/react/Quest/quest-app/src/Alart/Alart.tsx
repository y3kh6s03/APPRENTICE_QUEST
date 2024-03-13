export default function Alart() {
  const handleAlert = () => {
    alert('送信しました！')
  }
  return (
    <button onClick={handleAlert}>送信</button>
  )
}