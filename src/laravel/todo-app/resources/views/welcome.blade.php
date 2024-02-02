<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <Link href="{{asset('css/style.css')}}" rel="stylesheet" />

</head>

<body class="antialiased">
    <div class="container">
        <h1>Todo List</h1>

        <a class="new-task" href="/todos/new">タスクを追加する</a>

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
</body>

</html>