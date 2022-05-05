<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maffa</title>
</head>

<body>

    <h2>L'utente {{$info['name']}} ha richiesto di lavorare con noi</h2>
    <p>{{$info['email']}}</p>
    <a href="{{ $info['cv'] }}" attributes-list download>cv</a>
</body>
</html>