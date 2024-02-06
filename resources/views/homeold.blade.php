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
    le nom est : {{Session::get('userName')}}
    le type est : {{Session::get('userType')}}
    <br><hr><br>
    <form action="/controllers/logout" method="post">
        @csrf
        <button type="submit" >Déconnexion</button>
    </form>
    <br><hr><br>
    <form action="/controllers/Accueil/searchBookByName" method="get">
        <label>chercher par nom</label>
        <input type="text" name="bookName">
        <button type="submit">chercher</button>
    </form>
    <br><hr><br>
    <form action="/controllers/Accueil/searchBookByCategorie/" method="get">
        <label>chercher par categorie</label>
        <input type="text" name="categorieName">
        <button type="submit">chercher</button>
    </form>
    <br><hr><br>
    <span>choisir une categorie</span>
    @foreach ($categories as $categorie)
        <a href="/controllers/Accueil/searchBookByCategorie/{{$categorie->id}}">{{$categorie->nom}}</a>
    @endforeach
    <br><hr><br>
    <table>
        <tr>
            <td>id</td>
            <td>titre</td>
            <td>auteur</td>
            <td>editeur</td>
            <td>image</td>
            <td>description</td>
            <td>quantite restante</td>
            <td>categorieName</td>
            <td>userName</td>
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
            <td>{{$book->quantite - $book->reservedQte}}</td>
            <td>{{$book->categorieName}}</td>
            <td>{{$book->userName}}</td>
            <td><a href="/controllers/Accueil/reserveBook/{{$book->id}}">reserver</a></td>
        </tr>
        @endforeach
    </table>
    <br><hr><br>
    <div>
        end of page
    </div>
</body>
</html>