<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, td {
            border: 1px solid black;
        }
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <a href="/Accueil">logo</a>
    explore Books page
    <table style="border-collapse: collapse">
        <tr>
            <td>id</td>
            <td>titre</td>
            <td>auteur</td>
            <td>editeur</td>
            <td>image</td>
            <td>description</td>
            <td>quantite</td>
            <td>action</td>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->titre}}</td>
            <td>{{$book->auteur}}</td>
            <td>{{$book->editeur}}</td>
            <td>{{$book->image}}</td>
            <td>{{$book->description}}</td>
            <td>{{$book->quantite}}</td>
            <td><a href="/contollers/Accueil/reserveBook/{{$book->id}}">reserver</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>