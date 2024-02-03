@extends('layouts.header')

@section('content')
<div class="container">
  <h1>タスクの追加</h1>

  <form method="POST" action="{{route('todos.create')}}">
    @csrf
    <input type="text" name="title" placeholder="タスクを入力する">
    <input type="submit" value="保存する">
  </form>
</div>
@endsection