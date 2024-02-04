@extends('layouts.header')

@section('content')
<div class="container">
  <h1>タスクの追加</h1>

  <x-todo-form routeName="todos.create" :id="null" value=""/>

@endsection