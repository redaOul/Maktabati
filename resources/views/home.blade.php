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
    <link rel="stylesheet" href="/css/homeCss.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <div class="header-1">

            <a href="/" class="logo"> <i class="fas fa-book"></i> Maktabati</a>

            <form action="/controllers/Accueil/searchBookByName" method="get" class="search-form">
                <input type="search" name="bookName" placeholder="Chercher ici..." id="search-box" required>
                <button type="submit" class="fas fa-search"></button>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>

                <div id="login-btn" class="fas fa-user"></div>
            </div>

        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="#home">Acceuil</a>
                <a href="#Livres">Livres</a>
                <a href="#Maktabati">Catégorie</a>
            </nav>
        </div>

    </header>

    <!-- header section ends -->

    <!-- bottom navbar  -->

    <nav class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#Livres" class="fas fa-list"></a>
        <a href="#Maktabati" class="fas fa-tags"></a>
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

    <section class="home" id="home">

        <div class="row">

            <div class="content">
                <h3> Bienvenue à Maktabati</h3>
                <p> Matabati est en ligne maintenant!!<br>Découvrez notre large bibliothèque de livres en :<br>Chimie,
                    Informatique, Biologie, Mathématiques...</p>

            </div>

            @if (!$books->isEmpty())
                <div class="swiper books-slider">
                    <div class="swiper-wrapper">
                        @foreach ($books as $book)
                            <a href="/controllers/Accueil/searchBookByNameLink/{{ $book->titre }}"
                                class="swiper-slide"><img src="{{ $book->image }}" alt=""></a>
                        @endforeach
                    </div>
                    <img src="/image/stand.png" class="stand" alt="">
                </div>
            @endif

        </div>

    </section>

    <!-- Acceuil section ends  -->


    <!-- Livres section starts  -->

    <section class="Livres" id="Livres">

        <h1 class="heading"> <span>Livres</span> </h1>

        @if (!$books->isEmpty())
            <div class="swiper featured-slider">
                <div class="swiper-wrapper">
                    @foreach ($books as $book)
                        <div class="swiper-slide box">
                            <div class="image">
                                <a href="/controllers/Accueil/searchBookByNameLink/{{ $book->titre }}">
                                    <img src="{{ $book->image }}" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <h3>{{ $book->titre }}</h3>
                                <a href="/controllers/Accueil/reserveBook/{{ $book->id }}"
                                    class="btn">Réserver</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        @else
            <h1 class="heading"> <span>Il n'y a pas de livre à réserver pour le moment</span> </h1>
        @endif

    </section>

    <!-- Livres section ends -->
    <!-- Maktabati section starts  -->

    <section class="Maktabati" id="Maktabati">

        <h1 class="heading"> <span>Catégorie</span> </h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                @foreach ($categories as $categorie)
                    <div class="swiper-slide box">
                        <a href="/controllers/Accueil/searchBookByCategorie/{{ $categorie->id }}">
                            <img src="{{ $categorie->image }}" alt="">
                            <h3>{{ $categorie->nom }}</h3>
                        </a>
                    </div>
                @endforeach

            </div>

        </div>

    </section>

    <!-- Maktabati section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Etablissements</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> ENSA</a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> ENCG</a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> ENSC </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> FS </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> FLSH </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> FEGSJ </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> EST </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> ESEF </a>
            </div>

            <div class="box">
                <h3>Liens</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> Acceuil</a>
                <a href="#"> <i class="fas fa-arrow-right"></i> Livres </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> Catégorie</a>

            </div>

            <div class="box">
                <h3>contactez-nous</h3>
                <a href="#"> <i class="fas fa-phone"></i> +212601020304 </a>
                <a href="#"> <i class="fas fa-phone"></i> 0505050505 </a>
                <a href="#"> <i class="fas fa-envelope"></i> Maktabati@gmail.com </a>
                <img src="/image/worldmap.png" class="map" alt="">
            </div>

        </div>



        <div class="credit">2022 <span></span> |&copy Maktabati</div>

    </section>

    <!-- footer section ends -->

    <!-- loader  -->

    <div class="loader-container">
        <img src="/image/loader-img.gif" alt="">
    </div>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="/js/homeScript.js"></script>

</body>

</html>
