<x-layout>
    <h1 class="login">
        Login
    </h1>
    <form id="login-form" name="login" method="POST">
        <label for="email">
            Email
        </label>
        <input id="email" type="email" placeholder="email@example.com">
        <label for="password">
            Password
        </label>
        <input id="password" type="password" placeholder="パスワードを入力してください">
        <button class="login-btn" onclick=postLogin()>
            ログイン
        </button>
    </form>
    <a href="{{route('index.register')}}" class="">
        アカウント作成
    </a>
    @push('js')
    <script src="{{asset('/js/login.js')}}"></script>
    @endpush
</x-layout>