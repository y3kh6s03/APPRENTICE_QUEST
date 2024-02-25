<x-layout>
    <h1 class="login">
        register
    </h1>
    <form method="POST" name="register" action="{{route('auth.register')}}">
        @csrf
        <label for="email">
            Email
        </label>
        <input id="email" type="email" autocomplete="email" placeholder="email@example.com" name="email">
        <label for="password">
            Password
        </label>
        <input id="password" type="password" autocomplete="current-password" placeholder="パスワードを入力してください" name="password">
        <button class="register_btn">
            新規登録
        </button>
    </form>
    <!-- @push('js')
    <script src="{{asset('/js/register.js')}}"></script>
    @endpush -->
</x-layout>