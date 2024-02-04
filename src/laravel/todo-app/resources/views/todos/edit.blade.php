@extends('layouts.header')

@section('content')
<div class="container">
  <h1>タスクの編集(edit)</h1>

  <x-todo-form routeName="todos.update" :id="$todo->id" :value="$todo->title"/>

</div>
@endsection