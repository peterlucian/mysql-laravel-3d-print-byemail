<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Title message
    </title>

    <!--
        - favicon
    -->
    <link rel="shortcut icon" href="/assets/images/logo/favicon.ico" type="image/x-icon">

    <!--
        - custom css link
    -->
    {{-- <link rel="stylesheet" href="/assets/css/style-prefix.css"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        .carousel-container { width: 100%; max-width: 600px; margin: auto; overflow: hidden; position: relative; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); }
        .carousel { display: flex; transition: transform 0.5s ease-in-out; }
        .carousel img { width: 100%; flex-shrink: 0; }
        .buttons { position: absolute; top: 50%; width: 100%; display: flex; justify-content: space-between; transform: translateY(-50%); }
        .buttons button { background: rgba(0,0,0,0.5); color: white; border: none; padding: 10px; cursor: pointer; font-size: 18px; }
    </style>

    <!--
        - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    </head>

    <body>

    <!--
        - HEADER
    -->

    <header>

        <div class="header-top">

        <div class="container">

            <ul class="header-social-container">

            <li>
                <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
                </a>
            </li>

            <li>
                <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
                </a>
            </li>

            <li>
                <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
                </a>
            </li>

            <li>
                <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
                </a>
            </li>

            </ul>

            <div class="header-top-actions">
            <select name="language">

                <option value="en-US">English</option>
                <option value="es-ES">Espa&ntilde;ol</option>
                <option value="fr">Fran&ccedil;ais</option>

            </select>

            </div>

        </div>

        </div>

        <div class="header-main">

            <div class="container">

                <a href="#" class="header-logo">
                <img src="/assets/images/logo/logo.png" alt="VenderComail logo" width="200" height="65">
                </a>

                <div class="header-search-container">

                <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

                <button class="search-btn">
                    <ion-icon name="search-outline"></ion-icon>
                </button>

                </div>

                <div class="header-user-actions">

                    <p id="display-name"></p>

                    <button class="logoutBtn action-btn">
                    <ion-icon name="log-out-outline"></ion-icon>
                    </button>

                    <button class="googleLoginBtn action-btn">
                    <ion-icon name="person-outline"></ion-icon>
                    </button>

                    <!-- <a href="/dashboard">
                    <button class="action-btn">
                        <ion-icon name="grid-outline"></ion-icon>
                    </button>
                    </a>

                    <a href="/save">
                    <button class="action-btn">
                        <ion-icon name="add-circle-outline"></ion-icon>
                    </button>
                    </a> -->
                </div>

            </div>

        </div>




        <div class="mobile-bottom-navigation">

        <button class="action-btn" data-mobile-menu-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
        </button>


        <a href="/items">
        <button class="action-btn">
            <ion-icon name="home-outline"></ion-icon>
        </button>
        </a>

        <button class="googleLoginBtn action-btn">
            <ion-icon name="person-outline"></ion-icon>
        </button>

        <button class="logoutBtn action-btn">
            <ion-icon name="log-out-outline"></ion-icon>
        </button>


        <!-- <a href="/save">
        <button class="action-btn">
            <ion-icon name="add-circle-outline"></ion-icon>
        </button>
        </a>

        <a href="/dashboard">
        <button class="action-btn">
            <ion-icon name="grid-outline"></ion-icon>
        </button>
        </a> -->


        <!-- <button class="action-btn" data-mobile-menu-open-btn>
            <ion-icon name="grid-outline"></ion-icon>
        </button> -->

        </div>

        <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

        <div class="menu-top">
            <h2 class="menu-title">Menu</h2>

            <button class="menu-close-btn" data-mobile-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
            </button>
        </div>

        <ul class="mobile-menu-category-list">

            <li class="menu-category">
            <a href="/items" class="menu-title">Home</a>
            </li>


            <li class="menu-category">
                <a href="/dashboard" class="menu-title">Dashboard</a>
                <a href="{{route('items.create')}}" class="menu-title">Publicar item</a>
            </li>



            <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
                <p class="menu-title">Homem</p>

                <div>
                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>
            </button>

            <ul class="submenu-category-list" data-accordion>

                <li class="submenu-category">
                <a href="/camisas/categoria" class="submenu-title">Camisas</a>
                </li>

                <li class="submenu-category">
                <a href="/shortsjeansmen/categoria" class="submenu-title">Shorts & Jeans</a>
                </li>

                <li class="submenu-category">
                <a href="/calcadomen/categoria" class="submenu-title">Calçado</a>
                </li>

                <li class="submenu-category">
                <a href="/carteiras/categoria" class="submenu-title">Carteiras</a>
                </li>

            </ul>

            </li>

            <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
                <p class="menu-title">Mulher</p>

                <div>
                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>
            </button>

            <ul class="submenu-category-list" data-accordion>

                <li class="submenu-category">
                <a href="/vestidos/categoria" class="submenu-title">Vestidos</a>
                </li>

                <li class="submenu-category">
                <a href="/bijuteria/categoria" class="submenu-title">Bijuteria</a>
                </li>

                <li class="submenu-category">
                <a href="/bolsas/categoria" class="submenu-title">Bolsas</a>
                </li>
                <li class="submenu-category">
                <a href="/calcadowoman/categoria" class="submenu-title">Calçado</a>
                </li>
                <li class="submenu-category">
                <a href="/shortsjeanswoman/categoria" class="submenu-title">Shorts & Jeans</a>
                </li>

                <li class="submenu-category">
                <a href="/maquiagem/categoria" class="submenu-title">Maquiagem</a>
                </li>

            </ul>

            </li>

            <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
                <p class="menu-title">Informática</p>

                <div>
                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>
            </button>

            <ul class="submenu-category-list" data-accordion>

                <li class="submenu-category">
                <a href="/componentes/categoria" class="submenu-title">Componentes</a>
                </li>

                <li class="submenu-category">
                <a href="/perifericos/categoria" class="submenu-title">Periféricos</a>
                </li>

                <li class="submenu-category">
                <a href="/desktop/categoria" class="submenu-title">Desktop</a>
                </li>

                <li class="submenu-category">
                <a href="/portateis/categoria" class="submenu-title">Portáteis</a>
                </li>

                <li class="submenu-category">
                <a href="/smartphones/categoria" class="submenu-title">Smartphones</a>
                </li>

            </ul>

            </li>







        </ul>



        <div class="menu-bottom">

            <ul class="menu-category-list">

            <li class="menu-category">

                <button class="accordion-menu" data-accordion-btn>
                <p class="menu-title">Language</p>

                <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                </button>

                <ul class="submenu-category-list" data-accordion>

                <li class="submenu-category">
                    <a href="#" class="submenu-title">English</a>
                </li>

                <li class="submenu-category">
                    <a href="#" class="submenu-title">Espa&ntilde;ol</a>
                </li>

                <li class="submenu-category">
                    <a href="#" class="submenu-title">Fren&ccedil;h</a>
                </li>

                </ul>

            </li>

            <li class="menu-category">
                <button class="accordion-menu" data-accordion-btn>
                <p class="menu-title">Currency</p>
                <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                </button>

                <ul class="submenu-category-list" data-accordion>
                <li class="submenu-category">
                    <a href="#" class="submenu-title">USD &dollar;</a>
                </li>

                <li class="submenu-category">
                    <a href="#" class="submenu-title">EUR &euro;</a>
                </li>
                </ul>
            </li>

            </ul>

            <ul class="menu-social-container">

            <li>
                <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
                </a>
            </li>

            <li>
                <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
                </a>
            </li>

            <li>
                <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
                </a>
            </li>

            <li>
                <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
                </a>
            </li>

            </ul>

        </div>

        </nav>

    </header>

        <!--
        - MAIN
    -->

    <main>

        <!--
        - BANNER
        -->

        <div class="banner">

        <div class="container">

            <div class="slider-container has-scrollbar">

            <div class="slider-item">

                <img src="/assets/images/banner.png" alt="women's latest fashion sale" class="banner-img">

                <div class="banner-content">

                <p class="banner-subtitle">Simples</p>

                <h2 class="banner-title">e talvez eficaz</h2>

                <p class="banner-text">
                    começando por apenas &euro; <b>20</b>.00
                </p>

                <a href="#" class="banner-btn">Manda mail agora!</a>

                </div>

            </div>

            </div>

            </div>

        </div>

        </div>

         <!--
        - PRODUCT
        -->

        <div class="product-container">

            <div class="container">


            <!--
                - SIDEBAR
            -->

            <div class="sidebar  has-scrollbar" data-mobile-menu>

                <div class="sidebar-category">

                <div class="sidebar-top">
                    <h2 class="sidebar-title">Categorias</h2>

                    <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                    <ion-icon name="close-outline"></ion-icon>
                    </button>
                </div>

                <ul class="sidebar-menu-category-list">

                    <li class="sidebar-menu-category">

                    <button class="sidebar-accordion-menu" data-accordion-btn>

                        <div class="menu-title-flex">
                        <img src="/assets/images/icons/dress.svg" alt="clothes" width="20" height="20"
                            class="menu-title-img">

                        <p class="menu-title">Homem</p>
                        </div>

                        <div>
                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>

                    </button>

                    <ul class="sidebar-submenu-category-list" data-accordion>

                        <li class="sidebar-submenu-category">
                        <a href="/camisas/categoria" class="sidebar-submenu-title">
                            <p class="product-name">Camisas</p>
                        </a>
                        </li>

                        <li class="sidebar-submenu-category">
                        <a href="/shortsjeansmen/categoria" class="sidebar-submenu-title">
                            <p class="product-name">shorts & jeans</p>
                        </a>
                        </li>

                        <li class="sidebar-submenu-category">
                        <a href="/calcadomen/categoria" class="sidebar-submenu-title">
                            <p class="product-name">Calçado</p>
                        </a>
                        </li>

                        <li class="sidebar-submenu-category">
                        <a href="/carteiras/categoria" class="sidebar-submenu-title">
                            <p class="product-name">Carteiras</p>
                        </a>
                        </li>

                    </ul>

                    </li>

                    <li class="sidebar-menu-category">

                    <button class="sidebar-accordion-menu" data-accordion-btn>

                        <div class="menu-title-flex">
                        <img src="/assets/images/icons/shoes.svg" alt="footwear" class="menu-title-img" width="20"
                            height="20">

                        <p class="menu-title">Mulher</p>
                        </div>

                        <div>
                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>

                    </button>

                    <ul class="sidebar-submenu-category-list" data-accordion>

                        <li class="sidebar-submenu-category">
                        <a href="/vestidos/categoria" class="sidebar-submenu-title">
                            <p class="product-name">Vestidos</p>
                        </a>
                        </li>
                        <li class="sidebar-submenu-category">
                        <a href="/bolsas/categoria" class="sidebar-submenu-title">
                            <p class="product-name">Bolsas</p>
                        </a>
                        </li>
                        <li class="sidebar-submenu-category">
                        <a href="/bijutaria/categoria" class="sidebar-submenu-title">
                            <p class="product-name">Bijuteria</p>
                        </a>
                        </li>
                        <li class="sidebar-submenu-category">
                        <a href="/shortsjeanswoman/categoria" class="sidebar-submenu-title">
                            <p class="product-name">shorts & jeans</p>
                        </a>
                        </li>

                        <li class="sidebar-submenu-category">
                        <a href="/calcadowoman/categoria" class="sidebar-submenu-title">
                            <p class="product-name">Calçado</p>
                        </a>
                        </li>
                        <li class="sidebar-submenu-category">
                        <a href="/maquiagem/categoria" class="sidebar-submenu-title">
                            <p class="product-name">Maquiagem</p>

                        </a>
                        </li>

                    </ul>

                    </li>

                    <li class="sidebar-menu-category">

                    <button class="sidebar-accordion-menu" data-accordion-btn>

                        <div class="menu-title-flex">
                        <img src="/assets/images/icons/jewelry.svg" alt="clothes" class="menu-title-img" width="20"
                            height="20">

                        <p class="menu-title">Informática</p>
                        </div>

                        <div>
                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>

                    </button>

                    <ul class="sidebar-submenu-category-list" data-accordion>

                        <li class="sidebar-submenu-category">
                        <a href="/componentes/categoria" class="sidebar-submenu-title">
                            <p class="product-name">Componentes</p>
                        </a>
                        </li>

                        <li class="sidebar-submenu-category">
                        <a href="/perifericos/categoria" class="sidebar-submenu-title">
                            <p class="product-name">Periféricos</p>
                        </a>
                        </li>

                        <li class="sidebar-submenu-category">
                        <a href="/desktop/categoria" class="sidebar-submenu-title">
                            <p class="product-name">Desktop</p>
                        </a>
                        </li>

                        <li class="sidebar-submenu-category">
                        <a href="/portateis/categoria" class="sidebar-submenu-title">
                            <p class="product-name">Portáteis</p>
                        </a>
                        </li>
                        <li class="sidebar-submenu-category">
                        <a href="/smartphones/categoria" class="sidebar-submenu-title">
                            <p class="product-name">Smartphones</p>
                        </a>
                        </li>

                    </ul>


                    </li>

                    <li class="sidebar-menu-category">
                    <ul class="sidebar-submenu-category-list active">

                        <li class="sidebar-submenu-category">
                        <a href="/dashboard" class="sidebar-submenu-title">
                            <p class="product-name">Dashboard</p>
                        </a>
                        </li>

                        <li class="sidebar-submenu-category">
                        <a href="{{route('items.create')}}" class="sidebar-submenu-title">
                            <p class="product-name">Publicar item</p>
                        </a>
                        </li>

                    </ul>
                    </li>



                </ul>
                </div>

            </div>

                @if (session('success'))
                    <div class="container alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @yield("content")
            </div>
        </div>
        <!--
        - TESTIMONIALS, CTA & SERVICE
        -->

        <div>

        <div class="container">

            <div class="testimonials-box">

            <!--
                - TESTIMONIALS
            -->

            <div class="testimonial">

                <h2 class="title">testimonial</h2>

                <div class="testimonial-card">

                <img src="/assets/images/avatar.png" alt="alan doe" class="testimonial-banner" width="80" height="80">

                <p class="testimonial-name">Código Raiz</p>

                <p class="testimonial-title">Developer</p>

                <img src="/assets/images/icons/quotes.svg" alt="quotation" class="quotation-img" width="26">

                <p class="testimonial-desc">
                    Desenvolvi este website para que
                    os utilizadores possam vender com mail
                    de forma simples e talvez eficaz...
                </p>

                </div>

            </div>





            </div>

        </div>

        </div>

    </main>


    <!--
        - FOOTER
    -->

    <footer>


        <div class="footer-nav">

        <div class="container">


            <ul class="footer-nav-list">

            <li class="footer-nav-item">
                <h2 class="nav-title">Sobre Nos</h2>
            </li>



            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Legal Notice</a>
            </li>

            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Terms and conditions</a>
            </li>

            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">About us</a>
            </li>


            </ul>

            <ul style="display: block;" class="footer-nav-list">

            <li class="footer-nav-item">
                <h2 class="nav-title">Contact</h2>
            </li>

            <li class="footer-nav-item flex">
                <div class="icon-box">
                <ion-icon name="location-outline"></ion-icon>
                </div>

                <address class="content">
                Região Autonoma da Madeira, Portugal
                </address>
            </li>

            <li class="footer-nav-item flex">
                <div class="icon-box">
                <ion-icon name="call-outline"></ion-icon>
                </div>

                <a href="" class="footer-nav-link">(351) dummyphonenumber</a>
            </li>

            <li class="footer-nav-item flex">
                <div class="icon-box">
                <ion-icon name="mail-outline"></ion-icon>
                </div>

                <a href="mailto:example@gmail.com" class="footer-nav-link">nasgaming92@gmail.com</a>
            </li>

            </ul>


        </div>

        </div>

        <div class="footer-bottom">

        <div class="container">

            <!-- <img src="" alt="payment method" class="payment-img"> -->

            <p class="copyright">
            Copyright &copy; <a href="#">VenderComail</a> todos direitos reservados.
            </p>

        </div>

        </div>

    </footer>

    <!--
        - custom js link
    -->
    {{-- <script src="/assets/js/script.js" type="module"></script> --}}


    <!--
        - ionicon link
    -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        let index = 0;
        const images = document.querySelectorAll(".carousel img");
        const carousel = document.querySelector(".carousel");
        function showSlide(i) {
            index = (i + images.length) % images.length;
            carousel.style.transform = `translateX(-${index * 100}%)`;
        }
        function prevSlide() { showSlide(index - 1); }
        function nextSlide() { showSlide(index + 1); }
    </script>


</body>

</html>

