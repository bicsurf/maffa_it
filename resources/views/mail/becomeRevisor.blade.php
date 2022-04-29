<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maffa</title>
</head>

<body>

    <h2>l'utente {{ $user->name }} ha richiesto di diventare revisore</h2>
    <p>{{ $user->email }}</p>

    <a href="{{ route('make.revisor',compact('user'))}}">Rendi revisore</a>
    
</body>
</html>