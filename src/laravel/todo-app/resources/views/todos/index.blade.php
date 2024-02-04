@extends('layouts.header')

@section('js')
<script src="{{asset('./js/todo.js')}}" defer></script>
@endsection

@section('content')
<div class="container">
  <h1>Todo List</h1>

  <a class="new-task" href="{{route('todos.create')}}">タスクを追加する</a>

  <table>
    <thead>
      <tr>
        <th>タスク</th>
        <th>アクション</th>
      </tr>
    </thead>
    <tbody>
      <!-- ここは後から動的コンテンツに置き換える -->
      @foreach($todos as $todo)
      <tr>
        <td>{{$todo->title}}</td>
        <form class="delete_form" action="{{route('todos.destroy', ['id'=>$todo->id])}}" method="POST">
          @csrf
          <td>
            <a class="edit" href="{{route('todos.edit', ['id'=>$todo->id])}}">編集</a>
            <button class="delete">削除</button>
        </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection