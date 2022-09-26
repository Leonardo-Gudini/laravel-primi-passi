<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - Primi passi</title>
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home')}}">home</a></li>
                <li><a href="{{ route('about')}}">about</a></li>
                <li><a href="{{ route('info')}}">info</a></li>
                <li><a href="{{ route('contact')}}">contact</a></li>
            </ul>
        </nav>
    </header>

    <h1>Hello World!</h1>

    <h2>{{$saluto}}</h2>

    
    
</body>
</html>