type TodoProps = {
  todos: {title: string,id: number}[]
}
const TodoList: React.FC<TodoProps> = ({ todos }) => {
  return (
    <ul>
      {
        todos.map((todo) => {
          return (
            <li key={todo.id}>
              {todo.title}
            </li>
          )
        })
      }
    </ul>
  )
}

export default TodoList