<!DOCTYPE html>
<html lang="ja">
<head>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Todays Recipe</title>
</head>
<body>
    <h1>Hello/Index</h1>
    <p>{{$msg}}</p>

    <div id="app"></div>
    <script src="js/app.js"></script>
</body>
</html>