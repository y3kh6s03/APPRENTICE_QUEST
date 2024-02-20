const api = 'http://localhost:80/api'; // API の URL に置き換える

function addTodo() {
    const title = document.getElementById('new-todo').value;
    fetch(`${api}/`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({ todo: { title } })
    })
        .then(response => response.json())
        .then(() => {
            document.getElementById('new-todo').value = '';
            fetchTodos();
        });
}

function fetchTodos() {
    fetch(`${api}/`)
        .then(response => response.json())
        .then(data => {
            const todoList = document.getElementById('todo-list');
            todoList.innerHTML = '';
            for (let todo of data.todo) {
                let listItem = document.createElement('li');
                listItem.className = 'todo-item';
                listItem.innerHTML = `
        ${todo.title}
        <button onclick="editTodo(${todo.id})">編集</button>
        <button onclick="deleteTodo(${todo.id})">削除</button>
      `;
                todoList.appendChild(listItem);
            }
        });
}

function editTodo(id) {
    const newTitle = prompt("新しいTODOを入力してください");
    fetch(`${api}/${id}`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({ todo: { title: newTitle } })
    })
        .then(response => response.json())
        .then(() => fetchTodos());
}

function deleteTodo(id) {
    fetch(`${api}/${id}`, {
        method: 'DELETE',
        headers:{
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        }
    })
        .then(() => fetchTodos());
}

fetchTodos();