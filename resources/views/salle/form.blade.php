<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ajouter une Salle</h1>
    <form action="{{ route('salle.store') }}" method="POST">
        @csrf
        <input type="text" name="Nom" placeholder="Nom">
        @error("Nom")
        <span>{{ $message }}</span>
        @enderror
        <input type="number" name="espace" placeholder="Espace">
        @error("espace")
        <span>{{ $message }}</span>
        @enderror
        <select name="natureId" id="" required>
            @foreach ($nature as $natur)
                <option value="{{$natur->id}}">{{ $natur->Nom }}</option>
            @endforeach
        </select>
        @error("nature_id")
        <span>{{ $message }}</span>
        @enderror
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
