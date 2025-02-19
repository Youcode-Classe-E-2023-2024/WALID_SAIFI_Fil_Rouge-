<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ShopAbda</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('dashbord/images/shopabda.png')}}" rel="icon">
    <link href="{{asset("dashbord/images/shopabda.png")}}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('frontend/assets/css/main.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Append
    * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
    * Updated: Mar 17 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>ShopAbda</h1>
            <span>.</span>
        </a>

        <!-- Nav Menu -->
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{route('home')}}" class="active">Home</a></li>
                <li><a href="{{ url('/') }}#about">About</a></li>
                <li><a href="{{route('index.produit')}}">Espace-produit</a></li>


                <li><a href="{{ url('/') }}#contact">Contact</a></li>


            </ul>



            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>



        </nav>
        @if(Auth::check())

            @if(auth()->user()->isVendor())
                <a class="btn-getstarted" href="{{ route('vendor.dashboard') }}">Dashboard</a>
            @elseif(auth()->user()->isAdmin())
                <a class="btn-getstarted" href="{{ route('Admin.dashboard') }}">Dashboard</a>
            @elseif(auth()->user()->isUser())
                <form action="{{ route('user.deconnecter') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-getstarted">
                        Déconnexion
                    </button>
                </form>
            @endif

        @else

            <a class="btn-getstarted" href="{{ route('login') }}">Login</a>

        @endif






    </div>
</header><!-- End Header -->

<main id="main">

    <!-- Hero Section - Home Page -->
    <section id="hero" class="hero">

        <img src="frontend/assets/img/safi_test.jpg" alt="" data-aos="fade-in">

        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h2 data-aos="fade-up" data-aos-delay="100">Bienvenue sur notre site web !</h2>
                    <p data-aos="fade-up" data-aos-delay="200"> Nous vous invitons à découvrir notre sélection de produits traditionnels associés à la ville de Safi.</p>
                </div>

            </div>
        </div>

    </section><!-- End Hero Section -->

    <section id="about" class="about">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-xl-center gy-5">

                <div class="col-xl-5 content">
                    <h3>À Propos de Nous</h3>
                    <h2>Découvrez les trésors de Safi</h2>
                    <p>Découvrez la richesse culturelle et artisanale de Safi, une ville chargée d'histoire. Nos produits traditionnels reflètent l'authenticité et le savoir-faire artisanal de notre région. Parcourez notre sélection soigneusement choisie pour trouver des pièces uniques et des souvenirs inoubliables.</p>
                    <a href="#" class="read-more"><span>En savoir plus</span><i class="bi bi-arrow-right"></i></a>
                </div>

                <div class="col-xl-7">
                    <div class="row gy-4 icon-boxes">

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon-box">
                                <i class="bi bi-buildings"></i>
                                <h3>Artisanat Local</h3>
                                <p>Découvrez les œuvres uniques de nos artisans locaux, transmettant des traditions ancestrales à travers chaque pièce.</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box">
                                <i class="bi bi-clipboard-pulse"></i>
                                <h3>Qualité Supérieure</h3>
                                <p>Nos produits sont sélectionnés avec soin pour leur qualité exceptionnelle et leur authenticité, garantissant une expérience unique pour nos clients.</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box">
                                <i class="bi bi-command"></i>
                                <h3>Service Clientèle</h3>
                                <p>Nous nous engageons à fournir un service clientèle exceptionnel pour répondre à tous vos besoins et garantir votre satisfaction.</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon-box">
                                <i class="bi bi-graph-up-arrow"></i>
                                <h3>Évolution Continue</h3>
                                <p>Nous nous efforçons constamment d'innover et d'améliorer nos produits et services pour vous offrir une expérience toujours meilleure.</p>
                            </div>
                        </div> <!-- End Icon Box -->

                    </div>
                </div>

            </div>
        </div>

    </section><!-- End About Section -->

    <!-- Contact Section - Home Page -->
    <section id="contact" class="contact">

        <!--  Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="200">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>Safi</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="300">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>0632055998</p>
                                <p>0632088998</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="400">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>contact@shopabda</p>
                            </div>
                        </div><!-- End Info Item -->


                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="{{ route('send.message') }}" method="post"  >
                        @csrf

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Sujet" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-danger btn-rounded btn-fw">Envoyer le message</button>
                            </div>
                        </div>
                    </form>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div><!-- Fin du formulaire de contact -->


            </div>

        </div>

    </section><!-- Fin de la section de contact -->


</main>

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-about">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span>ShopAbda</span>
                </a>
                <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                <div class="social-links d-flex mt-4">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Product Management</a></li>
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Graphic Design</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contact Us</h4>
                <p>A108 Adam Street</p>
                <p>New York, NY 535022</p>
                <p>United States</p>
                <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                <p><strong>Email:</strong> <span>info@example.com</span></p>
            </div>

        </div>
    </div>


</footer><!-- End Footer -->

<!-- Scroll Top Button -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
</div>

<!-- Vendor JS Files -->
<script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>
