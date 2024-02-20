<!DOCTYPE html>
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TODO</title>
    @stack('style')
</head>

<body>

    {{$slot}}

    @stack('js')
</body>

</html>