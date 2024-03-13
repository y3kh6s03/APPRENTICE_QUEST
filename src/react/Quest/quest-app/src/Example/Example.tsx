import { useState } from "react"
import TodoList from "../Todo/TodoList"

type Todo = {
  id: number,
  title: string,
}

const Example: React.FC = () => {
  const [todos, setTodos] = useState<Todo[]>([
  ])
  const [inputValue, setInputValue] = useState<string>('')
  const changeHandler = (e: React.ChangeEvent<HTMLInputElement>) => {
    setInputValue(e.target.value)
  }
  const addTodo = () => {
    setTodos((todos) => {
      return [...todos, { id: todos.length + 1, title: inputValue }]
    })
    setInputValue('')
  }
  return (
    <>
      <input type="text" value={inputValue} onChange={changeHandler} />
      <button onClick={addTodo}>add todo</button>
      <TodoList todos={todos}/>
    </>
  )
}
export default Example