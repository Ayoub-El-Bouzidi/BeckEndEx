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
    <form action="{{route('salle.store')}}">
        @csrf
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="number" name="espace" placeholder="Espace" required>
        <select name="nature_id" id="" required>
            @foreach ($natures as $nature)
                <option value="{{$nature->id}}">{{ $nature->Nom }}</option>
            @endforeach
        </select>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
