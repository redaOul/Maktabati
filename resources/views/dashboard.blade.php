<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maktabati</title>
    <link rel="icon" type="image/x-icon" href="image/icon.png">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="/css/dashboardStyle.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <div class="header-1">

            <a href="" class="logo"> <i class="fas fa-book"></i> Maktabati - Admin</a>







            <div class="icons">
                {{-- <div id="search-btn" class="fas fa-search"></div> --}}

                <div id="login-btn" class="fas fa-user"></div>
            </div>

        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="#Reservations">Réservation</a>
                <a href="#Livres">Livres</a>
                <a href="#Categories">Catégories</a>
            </nav>
        </div>

    </header>

    <!-- header section ends -->

    <!-- bottom navbar  -->

    <nav class="bottom-navbar">
        <a href="#Reservations" class="fas fa-home"></a>
        <a href="#Livres" class="fas fa-list"></a>
        <a href="#Categories" class="fas fa-tags"></a>
    </nav>

    <!-- Connexion form  -->

    <div class="login-form-container">

        <div id="close-login-btn" class="fas fa-times"></div>
        <form action="/controllers/logout" method="post">
            <h4>voulez-vous se déconnecter {{ Session::get('userName') }} ?</h4>
            @csrf
            <input type="submit" value="Se déconnecter" class="btn">
        </form>


    </div>

    <!-- Acceuil section starts  -->

    {{-- <section class="home" id="home"> --}}
    <section class="Livres" id="Reservations">

        <h1 class="heading"> <span>réservations</span> </h1>

        <div class="row">

            <div class="content">
                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>titre du livre</th>
                            <th>nom d'adherent</th>
                            <th>durée</th>
                            <th>annuler réservation</th>
                            <th>envoyer un e-mail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)

                        <?php
                            $datetime1 = new DateTime();
                            $datetime2 = new DateTime($reservation->returned_at);
                            $interval = date_diff($datetime1, $datetime2);
                            $duree = $interval->format('%R%a jours');
                        ?>

                        <tr>
                            <td>{{$reservation->id}}</td>
                            <td>{{$reservation->bookTitle}}</td>
                            <td>{{$reservation->userName}}</td>
                            <td>{{$duree}}</td>
                            <td><a href="/controllers/Dashboard/cancelBookReservation/{{$reservation->bookFK}}/{{$reservation->id}}">annuler la reserver</a></td>
                            <td><a href="/controllers/Mail/reminderMail/{{$reservation->userEmail}}/{{$reservation->userName}}/{{$reservation->bookTitle}}">envoyer l'email</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>


        </div>

    </section>

    <!-- Acceuil section ends  -->


    <!-- Livres section starts  -->

    <section class="Livres" id="Livres">

        <h1 class="heading"> <span>Livres</span> </h1>
        <div class="content">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Titre</th>
                        <th>Auteur</th>
                        <th>Editeur</th>
                        <th>Description</th>
                        <th>Quantité</th>
                        <th>catégorie</th>
                        <th>ajouté par</th>
                        <th>supprimer un livre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                    <tr>
                        <td>{{$book->id}}</td>
                        <td>{{$book->titre}}</td>
                        <td>{{$book->auteur}}</td>
                        <td>{{$book->editeur}}</td>
                        <td>{{$book->description}}</td>
                        <td>{{$book->quantite}}</td>
                        <td>{{$book->categorieName}}</td>
                        <td>{{$book->userName}}</td>
                        <td>
                            @if ($book->reservedQte == 0)
                                <a href="/controllers/Dashboard/deleteBook/{{$book->id}}">supprimer</a>
                            @else
                                pas possible pour le moment
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <section>

            <form action="/controllers/Dashboard/addBook" method="post" enctype="multipart/form-data">
                @csrf
                <label for="titre"><h3>Titre</h3></label>
                <input id="titre" class="AjoutLivre" name="titre" type="text">
                <label for="auteur"><h3>Auteur</h3></label>
                <input id="auteur" class="AjoutLivre" name="auteur" type="text">
                <label for="editeur"><h3>Editeur</h3></label>
                <input id="editeur" class="AjoutLivre" name="editeur" type="text">
                <label for="quantite"><h3>Quantité</h3></label>
                <input id="quantite" class="AjoutLivre" name="quantite" type="number">
                <label for="categorie"><h3>Catégorie</h3></label>
                <select name="categorie" id="categorie" class="AjoutLivre">
                @foreach ($categories as $categorie)
                    <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                @endforeach
                </select>
                <label for="description"><h3>Description</h3></label>
                <textarea name="description" id="description" class="AjoutLivre" cols="30" rows="10"></textarea><br>
                <label for="image"><h3>Image</h3></label>
                <input id="image" name="image" type="file" class="ajouter" accept=".jpg, .jpeg, .png"><br>
                <input type="submit" value="Ajouter" class="ajouter">
            </form>

        </section>

    </section>

    <!-- Livres section ends -->
    <!-- Maktabati section starts  -->

    <section class="Maktabati" id="Categories">

        <h1 class="heading"> <span>Catégories</span> </h1>
        <div class="content">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>image</th>
                        <th>nom</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $categorie)
                    <tr>
                        <td><img style="width: 50px" src="{{$categorie->image}}"></td>
                        <td>{{$categorie->nom}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br><br><br>
        <div>
            <h3>Ajouter une catégorie</h3>
            <form action="/controllers/Dashboard/addCategorie" method="post" enctype="multipart/form-data">
                @csrf
                <label for="nom"><h3>nom</h3></label>
                <input id="nom" name="nom" type="text" class="AjoutLivre">
                <label for="image"><h3>image</h3></label>
                <input id="image" name="image" type="file" class="ajouter"><br>
                <button type="submit" class="ajouter">ajouter</button>
            </form>
        </div>

    </section>

    <!-- Maktabati section ends -->

    <!-- footer section starts  -->

    <section class="footer">
        <div class="credit">2022 <span></span> |&copy Maktabati</div>

    </section>

    <!-- footer section ends -->

    <!-- loader  -->

    <div class="loader-container">
        <img src="image/loader-img.gif" alt="">
    </div>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="/js/dashboardSrcipt.js"></script>

</body>

</html>
