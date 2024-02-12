<x-layout>
  <div class="container">
    <h1>タスクの編集</h1>

    <x-todo-form routeName="todos.update" :id="$todo->id" :value="$todo->title" />

  </div>
</x-layout>