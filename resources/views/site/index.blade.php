@extends('layouts.main')

@section('content')

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img src="PZS.gif" alt="" data-aos="fade-in" class="img-fluid">

        <div class="container">

            <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-xl-6 col-lg-8">
                    <h2>Aquele cuidado para deixar sua nave um brinco<span>.</span></h2>
                    <p>Confie sem pensar, confie na Aprimocar</p>
                </div>
            </div>

            <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                        <i class="bi bi-lightbulb"></i>
                        <h3>Polimentos de faróis</h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon-box">
                        <i class="bi bi-brush"></i>
                        <h3>Limpeza básica e detalhada</h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon-box">
                        <i class="bi bi-shield-plus"></i>
                        <h3>PPF e Insulfilm</h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon-box">
                        <i class="bi bi-search"></i>
                        <h3>Higienização</h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="700">
                    <div class="icon-box">
                        <i class="bi bi-gem"></i>
                        <h3>Polimento e vitrificação de pintura</h3>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="assets/img/6lt.gif" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 order-2 order-lg-1 content">
                    <h3>Olá, somos a Aprimocar</h3>
                    <p class="fst-italic">
                        Nascido de um sonho de dois amigos, a Aprimocar é uma empresa que vem para revolucionar o mercado de serviços automotivos,
                        com um serviço de qualidade e um preço justo.
                    </p>
                    <!-- <ul>
          <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
          <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
          <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
        </ul> -->
                    <p>
                        Trabalhando com as melhores marcas do mercado, a Aprimocar garante sua satifação em qualquer serviço, seja ele uma simples limpeza
                        ou entrega de um serviço completo.
                    </p>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                        "loop": true,
                        "speed": 600,
                        "autoplay": {
                            "delay": 5000
                        },
                        "slidesPerView": "auto",
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        },
                        "breakpoints": {
                            "320": {
                                "slidesPerView": 2,
                                "spaceBetween": 40
                            },
                            "480": {
                                "slidesPerView": 3,
                                "spaceBetween": 60
                            },
                            "640": {
                                "slidesPerView": 4,
                                "spaceBetween": 80
                            },
                            "992": {
                                "slidesPerView": 6,
                                "spaceBetween": 120
                            }
                        }
                    }
                </script>
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="assets/img/clients/vonixx-logo.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/carpro-logo.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/zacs-logo.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/nacao-detail.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/logo-sigma.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/dub-boyz-logo.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/gyeon-logo.png" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Clients Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Serviços</h2>
            <p>Confira nossos serviços</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-activity"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Limpeza nível 1</h3>
                        </a>
                        <p>Detalhamento externo, limpeza interna simples com aspiracao.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-broadcast"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Limpeza nível 2</h3>
                        </a>
                        <p>Detalhamento externo com revitalizacao dos plasticos, detalhamento interno com revitalizacao e protecao dos plasticos.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-easel"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Limpeza nível 3</h3>
                        </a>
                        <p>Detalhamento externo completo com caixa de rodas, cera protetiva ou selante, remocao de chuva acida, detalhamento interno com protecao dos plasticos e tecidos.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-bounding-box-circles"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Higienização interna</h3>
                        </a>
                        <p>Serviço oferecido separadamente. Consulte-nos para mais informações.</p>
                        <a href="service-details.html" class="stretched-link"></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-calendar4-week"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Limpeza de chassi</h3>
                        </a>
                        <p>Serviço oferecido separadamente. Consulte-nos para mais informações.</p>
                        <a href="service-details.html" class="stretched-link"></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-chat-square-text"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Limpeza de motor</h3>
                        </a>
                        <p>Serviço oferecido separadamente. Consulte-nos para mais informações.</p>
                        <a href="service-details.html" class="stretched-link"></a>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <!-- <section id="call-to-action" class="call-to-action section dark-background">

  <img src="assets/img/cta-bg.jpg" alt="">

  <div class="container">
    <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-xl-10">
        <div class="text-center">
          <h3>Call To Action</h3>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>
      </div>
    </div>
  </div>

</section>/Call To Action Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Equipe</h2>
            <p>Conheça nossa equipe</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="assets/img/team/jack.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Jackson Ferreira</h4>
                            <span>Sócio Fundador</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="assets/img/team/luis.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Luis de Bortoli</h4>
                            <span>Socio Fundador</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>

    </section><!-- /Team Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Entre em contato</h2>
        <p>Como nos encontrar?</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
            <div class="col-md-4">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                        <h3>Endereço</h3>
                        <p>Av. José Scotti, 106, Francisco Beltrão - PR</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3>Fale conosco <p>Jackson Ferreira</p></h3>
                        <p>(46) 99977-8728</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3>Fale conosco <p>Luis de Bortoli</p></h3>
                        <p>(46) 99927-4917</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</main>
@endsection