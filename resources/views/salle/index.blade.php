<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>List des Salles</h1>
        <a href="{{route('salle.create')}}">Ajouter une salle</a>

        @foreach ($salle as $sall)
        <div>
            <strong>{{ $sall->Nom }}</strong>
        </div>
        @endforeach
    </div>
</body>
</html>
