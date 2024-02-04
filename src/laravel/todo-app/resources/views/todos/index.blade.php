@extends('layouts.header')

@section('content')
<div class="container">
  <h1>Todos Todo List</h1>

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
        {{$todo->id}}
        <td>
          <a class="edit" href="{{route('todos.edit',['id'=>$todo->id])}}">編集</a>
          <a class="delete" href="#">削除</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection