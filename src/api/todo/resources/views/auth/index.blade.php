<x-layout>
    <form method="POST" action="{{route('auth.login')}}">
        <label for="email">
            Email
        </label>
        <input id="email" type="email" placeholder="email@example.com">
        <label for="password">
            Password
        </label>
        <input id="email" type="email" placeholder="パスワードを入力してください">
    </form>
</x-layout>