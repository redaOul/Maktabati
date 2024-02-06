<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maktabati/Adhérent</title>
    <link rel="icon" type="image/x-icon" href="image/icon.png">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="/css/exploreBooksStyle.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <div class="header-1">

            <a href="/Accueil" class="logo"> <i class="fas fa-book"></i> Maktabati</a>



            <div class="icons">

                <div id="login-btn" class="fas fa-user"></div>
            </div>

        </div>

    </header>

    <!-- header section ends -->

    <!-- bottom navbar  -->

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


    <!-- Acceuil section ends  -->


    <!-- Livres section starts  -->

    
    @foreach ($books as $book)
    <section class="deal" id="Livres">
        <div class="image">
            <img src="{{$book->image}}">
        </div>
        <div class="content">
            <article>
               Titre: {{$book->titre}} <br>
               Auteur: {{$book->auteur}} <br>
               Editeur: {{$book->editeur}} <br>
               Catégorie: {{$book->categorieName}} <br>
               Description: <p id="p">{{$book->description}}</p>
            </article>
            <button class="btn"><a style="color: white; text-decoration: none;" href="/controllers/Accueil/reserveBook/{{$book->id}}">Réserver</a></button>
        </div>
    </section>
    @endforeach


    <!-- Livres section ends -->
    <!-- Maktabati section starts  -->



    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="credit">2022 <span></span> |&copy Maktabati</div>

    </section>

    <!-- footer section ends -->

    <!-- loader  -->

    <div class="loader-container">
        <img src="image/loader-img.gif" alt="">
    </div>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="/js/exploreBooksScript.js"></script>

</body>

</html>
