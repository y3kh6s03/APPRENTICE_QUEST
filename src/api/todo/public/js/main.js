const URL = 'http://localhost:80/api';

async function fetchTodos() {
    const res = await fetch(`${URL}/`)
    if (res.ok) {
        const json = await res.json()
        return json;
    } else {
        throw new Error('No fetch res')
    }
}

async function init() {
    try {
        const json = await fetchTodos();
        const todoList = document.querySelector('#todo-list')
        todoList.innerHTML = '';
        for (const todo of json.todo) {
            const listItem = document.createElement('li')
            listItem.className = 'todo-item'
            listItem.innerHTML = `
                ${todo.title}
                <button onclick="editTodo(${todo.id})">編集</button>
                <button onclick="deleteTodo(${todo.id})">削除</button>
            `
            todoList.appendChild(listItem)
        }
    } catch (e) {
        const listItem = document.createElement('li')
        listItem.innerHTML = `${e}`
    }
}

async function addTodo() {
    const title = document.querySelector('#new-todo').value
    const res = await fetch(`${URL}/`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({ todo: { title } })
    })
    if (res.ok) {
        document.querySelector('#new-todo').value = ''
        init();
    } else {
        alert('登録に失敗しました。')
    }
}

async function editTodo(id) {
    const editTitle = prompt('修正するタスク名を入力してください')
    console.log(editTitle);
    const res = await fetch(`${URL}/${id}`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({ todo: { title: editTitle } })
    })
    if (res.ok) {
        init();
    } else {
        alert('登録に失敗しました。')
    }
}

async function deleteTodo(id) {
    const res = await fetch(`${URL}/${id}`,{
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        }
    })
    if (res.ok) {
        init();
    } else {
        alert('登録に失敗しました。')
    }
}



init();