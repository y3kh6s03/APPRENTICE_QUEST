<x-layout>
  <div class="container">
    <h1>タスクの追加</h1>

    <x-todo-form routeName="todos.create" :id="null" value="" />

    @error('title')
    {{$message}}
    @enderror
  </div>
</x-layout>