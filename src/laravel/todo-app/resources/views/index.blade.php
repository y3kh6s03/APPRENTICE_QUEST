@extends('layouts.header')

@section('contents')
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
            <tr>
                <td>サンプルタスク</td>
                <td>
                    <a class="edit" href="#">編集</a>
                    <a class="delete" href="#">削除</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection