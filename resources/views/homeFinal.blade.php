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

        <a href="#" class="logo"> <i class="fas fa-book"></i> Maktabati</a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="Chercher ici..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
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
            <a href="#Maktabati">Maktabati</a>
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

    <form action="">
       
        {{-- @if (Route::has('login'))
                <div class="" >
                    @auth
                        <a  class=""><x-app-layout> </x-app-layout></a>
                    @else
                        <a href="{{ route('login') }}" class="" >Login</a>
                        <br><br>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            vfjsnfjlvdlsfhvdfsv
       
    </form>

</div>

<!-- Acceuil section starts  -->

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3> Bienvenue à Maktabati</h3>
            <p> Matabati en ligne maintenant!!<br>Découvrez notre large bibliothèque de livres:<br>Romans,Informatique,Développement personnel,Mathématiques,Sciences...</p>
            <a href="#" class="btn">Réserver maintenant</a>
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide"><img src="/image/book-1.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="/image/book-2.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="/image/book-3.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="/image/book-4.jpeg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="/image/book-8.jpeg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="/image/book-6.jpg" alt=""></a>
            </div>
            <img src="/image/stand.png" class="stand" alt="">
        </div>

    </div>

</section>

<!-- Acceuil section ends  -->

{{-- @include('user.livre') --}}

{{-- @foreach ($collection as $item)
    
@endforeach --}}

<section class="Livres" id="Livres">

    <h1 class="heading"> <span>Livres</span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Livres</h3>
                    <a href="#" class="btn">Réserver</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Livres</h3>
                    <a href="#" class="btn">Réserver</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Livres</h3>
                    <a href="#" class="btn">Réserver</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-4.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Livres</h3>
                    <a href="#" class="btn">Réserver</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-5.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Livres</h3>
                    <a href="#" class="btn">Réserver</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-6.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Livres</h3>
                    <a href="#" class="btn">Réserver</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-7.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Livres</h3>
                    <a href="#" class="btn">Réserver</a>
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>

                </div>
                <div class="image">
                    <img src="image/book-8.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Livres</h3>
                    <a href="#" class="btn">Réserver</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-9.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Livres</h3>
                    <a href="#" class="btn">Réserver</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-10.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Livres</h3>
                    <a href="#" class="btn">Réserver</a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- Maktabati section starts  -->

<section class="Maktabati" id="Maktabati">

    <h1 class="heading"> <span>Maktabati</span> </h1>

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/pic-1.png" alt="">
                <h3>Modalité de prêt</h3>
                <p>Pour toute opération de prêt, les étudiants de l’Université Ibn Tofail sont tenus de déposer leur carte d’étudiant au guichet de prêt.La carte sera récupérée une fois le livre rendu.</p>
        
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-2.png" alt="">
                <h3>Emprunter un livre</h3>
                <p>Chaque adhérent a le droit d’emprunter un livre de la Bibliothèque , en effectuant une réservation .</p>
               
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-3.png" alt="">
                <h3>Chercher un livre</h3>
                <p>Tout adhérent peut consulter et chercher les livres de la Bibliothèque.</p>
                
            </div>
            <div class="swiper-slide box">
                <img src="image/pic-4.png" alt="">
                <h3>Annuler une réservation</h3>
                <p>L'adhérent peut annuler sa réservation avant la date de récupération .</p>
               
            </div>
            <div class="swiper-slide box">
                <img src="image/pic-5.png" alt="">
                <h3>Sanction</h3>
                <p>Tout document retardé, perdu ou endommagé entraînera une sanction pour l'adhérent.</p>
        
            </div>


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
        </div>

        <div class="box">
            <h3>Liens</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> Acceuil</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Livres </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Maktabati</a>
     
        </div>

        <div class="box">
            <h3>contactez-nous</h3>
            <a href="#"> <i class="fas fa-phone"></i> +212601020304 </a>
            <a href="#"> <i class="fas fa-phone"></i> 0505050505 </a>
            <a href="#"> <i class="fas fa-envelope"></i> Maktabati@gmail.com </a>
            <img src="image/worldmap.png" class="map" alt="">
        </div>
        
    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
    </div>

    <div class="credit">2022 <span></span> |&copy Maktabati</div>

</section>

<!-- footer section ends -->

<!-- loader  -->

<div class="loader-container">
    <img src="image/loader-img.gif" alt="">
</div>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="/js/homeScript.js"></script>

</body>
</html>