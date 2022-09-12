<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Poesias</title>
</head>
<body>
    <h1>Poesias</h1>
    <ul>
        @foreach ($poesias as $poesia)
        <li>{{$poesia}}</li>
        @endforeach
    </ul>
</body>
</html>
