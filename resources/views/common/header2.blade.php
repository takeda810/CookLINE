<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/header2.css') }}">
</head>
<body>

    <div class="header1">
        <a href="{{ route('index') }}">
            <img class="logo" src="{{ asset('images/CookLINE2.png') }}">
        </a>
        <h1>CookLINE</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="logout" onclick="return confirm('ログアウトしますか？')">log out</button>
        </form>
    </div>


</body>
</html>