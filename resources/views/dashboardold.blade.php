<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, td { border: 1px solid black; }
        table { border-collapse: collapse; }
    </style>
</head>
<body>
    le nom est : {{Session::get('userName')}}
    le type est : {{Session::get('userType')}}
    <br><hr><br>
    <form action="/controllers/logout" method="post">
        @csrf
        <button type="submit" name='logOut'>Déconnexion</button>
    </form>
    <br><hr><br>
    <table>
        <tr>
            <td>id</td>
            <td>titre</td>
            <td>auteur</td>
            <td>editeur</td>
            <td>image</td>
            <td>description</td>
            <td>quantite</td>
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
            <td>{{$book->quantite}}</td>
            <td>{{$book->categorieName}}</td>
            <td>{{$book->userName}}</td>
            <td>
                @if ($book->reservedQte == 0)
                    <a href="/controllers/Dashboard/deleteBook/{{$book->id}}">supprimer</a>
                @else
                    vous ne pouvez le supprimer
                @endif
            </td>
        </tr>
        @endforeach
    </table>
    <br><hr><br>
    <table>
        <tr>
            <td>id</td>
            <td>nom</td>
        </tr>
        @foreach ($categories as $categorie)
        <tr>
            <td>{{$categorie->id}}</td>
            <td>{{$categorie->nom}}</td>
        </tr>
        @endforeach
    </table>
    <br><hr><br>
    <form action="/controllers/Dashboard/addCategorie" method="post">
        @csrf
        <label for="nom">nom</label>
        <input id="nom" name="nom" type="text">
        <button type="submit">ajouter</button>
    </form>
    <br><hr><br>
    <table>
        <tr>
            <td>id</td>
            <td>userFK</td>
            <td>user name</td>
            <td>bookFK</td>
            <td>book title</td>
            <td>action 1</td>
            <td>action 2</td>
        </tr>
        @foreach ($reservations as $reservation)
        <tr>
            <td>{{$reservation->id}}</td>
            <td>{{$reservation->userFK}}</td>
            <td>{{$reservation->userName}}</td>
            <td>{{$reservation->bookFK}}</td>
            <td>{{$reservation->bookTitle}}</td>
            <td><a href="/controllers/Dashboard/cancelBookReservation/{{$reservation->bookFK}}/{{$reservation->id}}">annuler la reserver</a></td>
            <td><a href="/controllers/Mail/reminderMail/{{$reservation->userEmail}}/{{$reservation->userName}}/{{$reservation->bookTitle}}">envoyer l'email</a></td>
        </tr>
        @endforeach
    </table>
    <br><hr><br>
    <form action="/controllers/Dashboard/addBook" method="post" enctype="multipart/form-data">
        @csrf
        <label for="titre">titre</label>
        <input id="titre" name="titre" type="text"><br>
        <label for="auteur">auteur</label>
        <input id="auteur" name="auteur" type="text"><br>
        <label for="editeur">editeur</label>
        <input id="editeur" name="editeur" type="text"><br>
        <label for="quantite">quantite</label>
        <input id="quantite" name="quantite" type="number"><br>
        <label for="categorie">categorie</label>
        <select name="categorie" id="categorie">
        @foreach ($categories as $categorie)
            <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
        @endforeach
        </select><br>
        <label for="description">description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea><br>
        <label for="image">image</label>
        <input id="image" name="image" type="file" accept=".jpg, .jpeg, .png"><br>
        <button type="submit">ajouter</button>
    </form>
</body>
</html>