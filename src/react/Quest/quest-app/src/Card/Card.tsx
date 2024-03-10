interface CardProps {
  title: string
  children: React.ReactElement
}

function Card({ children }: CardProps) {
  return (
    <div className="card">
      <h1>Cute Cat</h1>
      {children}
    </div>
  )
}

export default Card;