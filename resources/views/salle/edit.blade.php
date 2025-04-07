
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Modifier las Salle</h1>
    <form action="{{ route('salle.update', $salle->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="Nom" value="{{ $salle->Nom }}" required>
        <input type="number" name="espace" value="{{ $salle->espace }}" required>
        <select name="natureId" id="" required>
            @foreach ($nature as $natur)
                <option value="{{$natur->id}}" {{ $salle->natureId == $natur->id ? 'selected' : '' }}>
                    {{ $natur->Nom }}
                </option>
            @endforeach
        </select>
        <button type="submit">Modifier</button>
    </form>
</body>
</html>
