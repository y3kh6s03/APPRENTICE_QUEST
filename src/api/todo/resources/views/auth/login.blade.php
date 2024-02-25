<x-layout>
    <h1 class="login">
        Login
    </h1>
    <form method="POST" action="{{route('auth.login')}}">
        <label for="email">
            Email
        </label>
        <input id="email" type="email" placeholder="email@example.com">
        <label for="password">
            Password
        </label>
        <input id="email" type="email" placeholder="パスワードを入力してください">
        <button class="register_btn">
            ログイン
        </button>
    </form>
    <a href="{{route('todo.register')}}" class="">
        アカウント作成
    </a>
</x-layout>