<x-layout>
    @push('style')
    <link rel="stylesheet" href="{{asset('/styles/style.css')}}">
    @endpush

    <h1>TODO</h1>
    <input id="new-todo" type="text" placeholder="新しいTODO">
    <button onclick="addTodo()">追加する</button>
    <ul id="todo-list"></ul>

    @push('js')
    <!-- <script src="{{asset('/js/main.js')}}"></script> -->
    <script src="{{asset('/js/challenge.js')}}"></script>
    @endpush
</x-layout>