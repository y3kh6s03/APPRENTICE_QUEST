<div>
    <form method="POST" action="{{isset($id) ? route($routeName, ['id'=>$id]) : route($routeName)}}">
        @csrf
        <input type="text" name="title" placeholder="タスクを入力する" value="{{isset($value) ? $value : ' '}}">
        <input type="submit" value="保存する">
    </form>
</div>