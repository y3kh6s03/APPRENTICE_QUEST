type HelloProps = {
  texts: {
    title: string,
    id: number
  },
  children: React.ReactNode
}

const Hello: React.FC<HelloProps> = (props) => {
  return (
    <>
      <h1>Hello TypeScript & React{props.texts.title}</h1>
      <span>{props.texts.id}</span>
      <p>{props.children}</p>
    </>
  )
}

export default Hello