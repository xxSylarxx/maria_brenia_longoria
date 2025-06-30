<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Somos el Colegio María Auxiliadora de Breña, una comunidad educativa católica de presencia ininterrumpida en el corazón de Lima Metropolitana">
    <title>Colegio María Auxiliadora - Breña</title>
    <link rel="shortcut icon" href="./public/img/icons/logo.png">
    <link rel="stylesheet" href="./public/fontawesome_6_7_2_web/css/all.min.css">
    <link rel="stylesheet" href="./public/css/animate.min.css">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/web.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- carrousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <script src="./public/js/bootstrap.min.js"></script>
    <script>
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            var btncontact = document.querySelector("btncontact");
            header.classList.toggle("abajo", window.scrollY > 150);
            btncontact.classList.toggle("abajocontact", window.scrollY > 150);
        })
    </script>

    <?php include_once  './partials/header2.php'; ?>

    <style>
        /* Estilo de acordion */
        #accordionPrimaria .accordion-item,
        #accordionSecundaria .accordion-item,
        #accordionPadreFamilia .accordion-item {
            background: transparent;
            border: none;
            border-radius: 0 !important;
            border-bottom: 1px solid #e5e5e5;
        }

        #accordionPrimaria .accordion-button,
        #accordionSecundaria .accordion-button,
        #accordionPadreFamilia .accordion-button {
            /*  transition: background 0.2s, color 0.2s, box-shadow 0.2s; */
            border: none;
            outline: none;
            font-family: 'Roboto', 'Segoe UI', Arial, sans-serif;
            font-weight: 600;
            letter-spacing: .01em;
            /*  box-shadow: 0 2px 8px rgba(157,11,15,0.04); */
            background: #fff !important;
            color: #222 !important;
            border-radius: 0 !important;
        }

        #accordionPrimaria .accordion-button:not(.collapsed),
        #accordionSecundaria .accordion-button:not(.collapsed),
        #accordionPadreFamilia .accordion-button:not(.collapsed) {
            background: #fff !important;
            color: var(--color4) !important;
            /* box-shadow: 0 4px 18px rgba(157, 11, 15, 0.10); */
        }

        #accordionPrimaria .accordion-button:not(.collapsed) .fa-comments,
        #accordionPrimaria .accordion-button:not(.collapsed) .fa-globe-americas,
        #accordionPrimaria .accordion-button:not(.collapsed) .fa-cross,
        #accordionPrimaria .accordion-button:not(.collapsed) .fa-users,
        #accordionSecundaria .accordion-button:not(.collapsed) .fa-comments,
        #accordionSecundaria .accordion-button:not(.collapsed) .fa-globe-americas,
        #accordionSecundaria .accordion-button:not(.collapsed) .fa-cross,
        #accordionSecundaria .accordion-button:not(.collapsed) .fa-users,
        #accordionPadreFamilia .accordion-button:not(.collapsed) .fa-comments,
        #accordionPadreFamilia .accordion-button:not(.collapsed) .fa-globe-americas,
        #accordionPadreFamilia .accordion-button:not(.collapsed) .fa-cross,
        #accordionPadreFamilia .accordion-button:not(.collapsed) .fa-users {
            color: var(--color1);
            /* background: var(--color1); */
            border-radius: 50%;
            padding: 6px;
        }

        /*  #accordionPrimaria .accordion-button:focus {
                box-shadow: 0 0 0 0.2rem rgba(157, 11, 15, 0.13);
            } */

        #accordionPrimaria .accordion-body,
        #accordionSecundaria .accordion-body,
        #accordionPadreFamilia .accordion-body {
            border-top: 1px solid #f2f2f2;
            background: rgba(245, 245, 245, 0.97);
            border-radius: 0 !important;
        }

        #accordionPrimaria .accordion-header,
        #accordionSecundaria .accordion-header,
        #accordionPadreFamilia .accordion-header {
            margin-bottom: 0;
        }

        #accordionPrimaria .accordion-button .rounded-circle,
        #accordionSecundaria .accordion-button .rounded-circle,
        #accordionPadreFamilia .accordion-button .rounded-circle {
            box-shadow: 0 2px 8px rgba(157, 11, 15, 0.08);
            border: 2px solid #fff;
        }

        @media (max-width: 576px) {
            #accordionPrimaria .accordion-button,
            #accordionSecundaria .accordion-button,
            #accordionPadreFamilia .accordion-button {
            font-size: 1rem;
            padding: .75rem 1rem;
            }

            #accordionPrimaria .accordion-body,
            #accordionSecundaria .accordion-body,
            #accordionPadreFamilia .accordion-body {
            font-size: .98rem;
            padding: 1rem;
            }

            #accordionPrimaria .accordion-button .rounded-circle,
            #accordionSecundaria .accordion-button .rounded-circle,
            #accordionPadreFamilia .accordion-button .rounded-circle {
            width: 32px !important;
            height: 32px !important;
            font-size: 1rem !important;
            }
        }

        .abajo {
            background-color: var(--color1);

        }

        .abajocontact {
            background-color: var(--color4);

        }

        /* Estilos de portada interna */
        #portada {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)),
                url('./public/img/portadas/portada_testimonios.jpg');
            background-size: cover;
            background-position: center 30%;
            height: 100%;
            padding: 550px 0 10px;
        }

        #portada {
            height: 80vh;
            padding-top: 25rem;
            padding-bottom: 1rem;
        }

        #portada .page_title {
            font-size: 50px;
            font-weight: bold;
            color: #fff;
        }

        #portada .breadcrumb-item+.breadcrumb-item::before {
            color: white;
        }

        #portada .breadcrumb-item {
            font-size: 22px;
        }

        #portada .breadcrumb-item a {
            color: #fff;
            font-size: 22px;
        }


        #noticias .card .news {
            position: absolute;
            top: 20px;
            left: -16px;
            border-radius: 5px;
            padding: 4px 12px;
            background-color: var(--color3);
            color: white;
            font-size: 14px;
            font-weight: bold;


            transform: translateY(-5%);

        }

        #noticias div.card {
            transition: .3s;


        }

        #noticias div.card:hover {
            transform: scale(1.06);
        }

        #noticias .card .detalle {

            text-overflow: ellipsis;

            display: -webkit-box;

            -webkit-line-clamp: 2;

            -webkit-box-orient: vertical;

            overflow: hidden;

            text-align: justify;

            font-size: 17px;

            color: #747474;

            line-height: 1.6;

        }

        #noticias img {
            object-fit: cover;
        }




        #img-banner {
            object-fit: cover;
            /* filter: brightness(60%); */
        }

        .scroll {
            overflow-y: auto;
            height: 600px;

        }

        .scroll::-webkit-scrollbar {
            background-color: transparent;
            width: 5px;
            border-radius: 6px;
        }

        .scroll::-webkit-scrollbar-thumb {

            background-color: transparent;
        }

        .scroll::-webkit-scrollbar-track {
            width: 5px;
        }

        /* #lema {
            background-image: url(./public/img/img-page/background1.jpg);
            background-color: #881C22;
            background-size: 100%;
        } */

        #lema {
            position: relative;
            background: #9D0B0F;

        }

        #lema h1 {
            padding: 50px;
            position: relative;
            z-index: 2;
        }

        /* You could use :after - it doesn't really matter */
        #lema:before {
            content: ' ';
            display: block;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            opacity: 0.85;
            background-image: url('./public/img/img-page/background1.jpg');
            background-repeat: no-repeat;
            background-position: 50% 0;
            background-size: cover;
            mix-blend-mode: multiply;
        }

        #metodologia {
            padding-top: 5rem;
        }

        #metodologia .card {
            border-radius: 0;
        }

        #metodologia .card img {
            width: 100%;
            height: 210px;
            object-fit: cover;
            transition: all .3s;
        }

        #metodologia .card figure:hover img {
            transform: scale(1.02);
        }

        #metodologia .card a {
            color: var(--color2);
            font-weight: 600;
            font-family: 'Roboto Slab', serif;
        }

        #metodologia .card a:hover {
            color: var(--color1);
        }

        #metodologia figure {
            position: relative;
        }

        #metodologia figure .btn {
            color: var(--color4);
            background: var(--color1);
            font-weight: 600;
            padding: .5rem 1rem;
            border-radius: 10px;
        }

        #metodologia figure .btn:hover {
            color: var(--color4);
            background: var(--color3);
        }

        #metodologia figure .figure-overlay {
            top: 0;
            left: 0;
            z-index: 99;
            opacity: 0;
            visibility: hidden;
            /* background: rgba(0, 0, 0, .7); */
            transition: all .5s;
        }

        #metodologia figure:hover .figure-overlay {
            opacity: 1;
            visibility: visible;
        }

        #metodologia .card .card-body a {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #metodologia .card .card-body p {
            font-size: 16px;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-align: justify;
        }

        .line {
            position: relative;
            height: 1px;
            width: 100%;
            background: #e5e5e5;
        }

        .line::after {
            position: absolute;
            content: '';
            right: 45%;
            left: 45%;
            bottom: -1px;
            height: 3px;
            width: 10%;
            background: var(--color4);
        }

        .div-banner {
            padding-left: 10rem;
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            height: 100%;
            padding-bottom: 15%;
        }

        .tittle-banner1 {

            font-size: 3.5rem;
            color: white;
            position: relative;
            font-weight: bold;
        }

        .tittle-banner2 {
            color: white;

            font-weight: bold;
        }

        #div-portada {
            color: white;
            text-align: center;
            margin-top: -26%;
            font-size: 1.3rem;
        }

        #div-portada p {
            color: white;
            text-align: center;
            font-size: 1.8rem;
        }

        @media screen and (max-width:410px) {

            #div-portada {

                margin-top: -35%;

            }

            #div-portada h1 {
                font-size: .6rem;

            }

            #div-portada p {
                margin-top: -5%;
                font-size: .6rem;

            }
        }

        @media screen and (max-width:1200px) {
            #carouselBanner div.carousel-item img {
                height: 100%;
            }

            div.content-banner .frame-responsive iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            div.content-banner video {
                width: 100%;
                height: 100%;
            }


        }
    </style>


    <section>
        <div class="container-fluid" id="portada">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-12 animate__animated animate__fadeInLeft">
                    <h2 class="page_title">NOSOTROS</h2>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item text-white">Nosotros</li>
                            </ol>
                        </nav>
                    </div>
                </div> -->
                </div>
            </div>
        </div>
    </section>

    <section id="perfiles">
        <div class="container pt-5">
            <div class="row py-5">
                <div class="col-lg-6 px-2 my-auto">
                    <h2 class="text-start" style="color:black;">Perfil Nivel Primaria</h2>
                    <div class="separador mx-start"></div>
                    <br>
                    <p>
                        La estudiante egresada de primaria se caracteriza por un desarrollo integral en los ámbitos comunicativo, cultural, evangelizador y social, en coherencia con los valores cristianos y salesianos:
                    </p>
                    <div class="accordion border-0" id="accordionPrimaria" style="background:rgba(255,255,255,0.97);backdrop-filter:blur(2px);">
                        <div class="accordion-item border-0 overflow-hidden">
                            <h2 class="accordion-header" id="headingComunicativa">
                                <button class="accordion-button fw-semibold text-dark bg-white px-4 py-3 gap-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseComunicativa" aria-expanded="true" aria-controls="collapseComunicativa" style="font-size:1.18rem;">
                                    <span class="d-flex align-items-center justify-content-center rounded-circle me-2" style="background:var(--color4);width:38px;height:38px;">
                                        <i class="fas fa-comments" style="color:#fff;font-size:1.2rem;"></i>
                                    </span>
                                    Comunicativa
                                </button>
                            </h2>
                            <div id="collapseComunicativa" class="accordion-collapse collapse show" aria-labelledby="headingComunicativa" data-bs-parent="#accordionPrimaria">
                                <div class="accordion-body bg-white px-4 py-3" style="font-size:1.08rem;">
                                    Se expresa con respeto, sinceridad y responsabilidad, valorando las diferencias personales.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 overflow-hidden">
                            <h2 class="accordion-header" id="headingCultural">
                                <button class="accordion-button collapsed fw-semibold text-dark bg-white px-4 py-3 gap-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCultural" aria-expanded="false" aria-controls="collapseCultural" style="font-size:1.18rem;">
                                    <span class="d-flex align-items-center justify-content-center rounded-circle me-2" style="background:var(--color4);width:38px;height:38px;">
                                        <i class="fas fa-globe-americas" style="color:#fff;font-size:1.2rem;"></i>
                                    </span>
                                    Cultural
                                </button>
                            </h2>
                            <div id="collapseCultural" class="accordion-collapse collapse" aria-labelledby="headingCultural" data-bs-parent="#accordionPrimaria">
                                <div class="accordion-body bg-white px-4 py-3" style="font-size:1.08rem;">
                                    Reconoce su identidad y compromiso social, ejerce liderazgo positivo, promueve el cambio en su entorno y toma decisiones alineadas con principios cristianos.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 overflow-hidden">
                            <h2 class="accordion-header" id="headingEvangelizadora">
                                <button class="accordion-button collapsed fw-semibold text-dark bg-white px-4 py-3 gap-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEvangelizadora" aria-expanded="false" aria-controls="collapseEvangelizadora" style="font-size:1.18rem;">
                                    <span class="d-flex align-items-center justify-content-center rounded-circle me-2" style="background:var(--color4);width:38px;height:38px;">
                                        <i class="fas fa-cross" style="color:#fff;font-size:1.2rem;"></i>
                                    </span>
                                    Evangelizadora
                                </button>
                            </h2>
                            <div id="collapseEvangelizadora" class="accordion-collapse collapse" aria-labelledby="headingEvangelizadora" data-bs-parent="#accordionPrimaria">
                                <div class="accordion-body bg-white px-4 py-3" style="font-size:1.08rem;">
                                    Vive su fe activamente, participando en grupos salesianos, valorando los sacramentos, la oración familiar y fortaleciendo su vínculo con María Auxiliadora y la Iglesia.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 overflow-hidden">
                            <h2 class="accordion-header" id="headingSocial">
                                <button class="accordion-button collapsed fw-semibold text-dark bg-white px-4 py-3 gap-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSocial" aria-expanded="false" aria-controls="collapseSocial" style="font-size:1.18rem;">
                                    <span class="d-flex align-items-center justify-content-center rounded-circle me-2" style="background:var(--color4);width:38px;height:38px;">
                                        <i class="fas fa-users" style="color:#fff;font-size:1.2rem;"></i>
                                    </span>
                                    Social
                                </button>
                            </h2>
                            <div id="collapseSocial" class="accordion-collapse collapse" aria-labelledby="headingSocial" data-bs-parent="#accordionPrimaria">
                                <div class="accordion-body bg-white px-4 py-3" style="font-size:1.08rem;">
                                    Demuestra empatía, responsabilidad con el ambiente, participación activa en su comunidad y respeto por los demás como hijos de Dios.
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="pt-3">Este perfil busca formar una estudiante alegre, comprometida con su entorno, su fe y su formación como agente de cambio.</p>


                </div>
                <div class="col-lg-6 my-auto">
                    <div class="d-flex justify-content-center mx-5">
                        <img src="./public/img/web/perfil_primaria.jpg" class="img-fluid" style="border-radius:8px;width:80%" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row py-5">
                <div class="col-lg-6 my-auto">
                    <div class="d-flex justify-content-center mx-5">
                        <img src="./public/img/web/perfil_secundaria.jpg" class="img-fluid" style="border-radius:8px;width:80%" alt="">
                    </div>
                </div>
                <div class="col-lg-6 px-2 my-auto">
                    <h2 class="text-start" style="color:black;">Perfil Nivel Secundaria</h2>
                    <div class="separador mx-start"></div>
                    <br>
                    <p>
                        La egresada del nivel secundaria se forma como una joven íntegra, comprometida con su fe, su entorno y su proyecto de vida, desarrollando competencias en las siguientes dimensiones:
                    </p>
                    <div class="row">
                        <div class="accordion border-0" id="accordionSecundaria" style="background:rgba(255,255,255,0.97);backdrop-filter:blur(2px);">
                            <div class="accordion-item border-0 overflow-hidden">
                                <h2 class="accordion-header" id="headingComunicativaSec">
                                    <button class="accordion-button fw-semibold text-dark bg-white px-4 py-3 gap-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseComunicativaSec" aria-expanded="true" aria-controls="collapseComunicativaSec" style="font-size:1.18rem;">
                                        <span class="d-flex align-items-center justify-content-center rounded-circle me-2" style="background:var(--color4);width:38px;height:38px;">
                                            <i class="fas fa-comments" style="color:#fff;font-size:1.2rem;"></i>
                                        </span>
                                        Comunicativa
                                    </button>
                                </h2>
                                <div id="collapseComunicativaSec" class="accordion-collapse collapse" aria-labelledby="headingComunicativaSec" data-bs-parent="#accordionSecundaria">
                                    <div class="accordion-body bg-white px-4 py-3" style="font-size:1.08rem;">
                                        Se comunica con claridad, empatía y verdad; valora la diversidad cultural y participa críticamente en distintos contextos lingüísticos, manteniendo vínculos con su institución educativa.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 overflow-hidden">
                                <h2 class="accordion-header" id="headingCulturalSec">
                                    <button class="accordion-button collapsed fw-semibold text-dark bg-white px-4 py-3 gap-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCulturalSec" aria-expanded="false" aria-controls="collapseCulturalSec" style="font-size:1.18rem;">
                                        <span class="d-flex align-items-center justify-content-center rounded-circle me-2" style="background:var(--color4);width:38px;height:38px;">
                                            <i class="fas fa-globe-americas" style="color:#fff;font-size:1.2rem;"></i>
                                        </span>
                                        Cultural
                                    </button>
                                </h2>
                                <div id="collapseCulturalSec" class="accordion-collapse collapse" aria-labelledby="headingCulturalSec" data-bs-parent="#accordionSecundaria">
                                    <div class="accordion-body bg-white px-4 py-3" style="font-size:1.08rem;">
                                        Afirma su identidad cristiana en un mundo competitivo y tecnológico, ejerce liderazgo social con sentido crítico e histórico, es resiliente, proactiva, optimista y coherente con los valores evangélicos y salesianos. Se proyecta como exalumna comprometida con su comunidad educativa.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 overflow-hidden">
                                <h2 class="accordion-header" id="headingEvangelizadoraSec">
                                    <button class="accordion-button collapsed fw-semibold text-dark bg-white px-4 py-3 gap-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEvangelizadoraSec" aria-expanded="false" aria-controls="collapseEvangelizadoraSec" style="font-size:1.18rem;">
                                        <span class="d-flex align-items-center justify-content-center rounded-circle me-2" style="background:var(--color4);width:38px;height:38px;">
                                            <i class="fas fa-cross" style="color:#fff;font-size:1.2rem;"></i>
                                        </span>
                                        Evangelizadora
                                    </button>
                                </h2>
                                <div id="collapseEvangelizadoraSec" class="accordion-collapse collapse" aria-labelledby="headingEvangelizadoraSec" data-bs-parent="#accordionSecundaria">
                                    <div class="accordion-body bg-white px-4 py-3" style="font-size:1.08rem;">
                                        Participa activamente en el Movimiento Juvenil Salesiano, respeta otras creencias, testimonia su fe y sentido de pertenencia al carisma salesiano, vive la espiritualidad a través de la oración, el discernimiento moral y los sacramentos, manteniendo su compromiso con la Iglesia.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 overflow-hidden">
                                <h2 class="accordion-header" id="headingSocialSec">
                                    <button class="accordion-button collapsed fw-semibold text-dark bg-white px-4 py-3 gap-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSocialSec" aria-expanded="false" aria-controls="collapseSocialSec" style="font-size:1.18rem;">
                                        <span class="d-flex align-items-center justify-content-center rounded-circle me-2" style="background:var(--color4);width:38px;height:38px;">
                                            <i class="fas fa-users" style="color:#fff;font-size:1.2rem;"></i>
                                        </span>
                                        Social
                                    </button>
                                </h2>
                                <div id="collapseSocialSec" class="accordion-collapse collapse" aria-labelledby="headingSocialSec" data-bs-parent="#accordionSecundaria">
                                    <div class="accordion-body bg-white px-4 py-3" style="font-size:1.08rem;">
                                        Asume una responsabilidad ética con el medio ambiente y la sociedad, vive con libertad y justicia, defiende la dignidad humana en todas sus etapas, y demuestra solidaridad y empatía, especialmente con su alma mater.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="pt-3">Este perfil busca formar una joven líder, libre, ética y solidaria, capaz de transformar su entorno desde una espiritualidad vivida con fe, alegría y compromiso.</p>


                </div>

            </div>
        </div>
        <div class="container pt-5">
            <div class="row py-5">
                <div class="col-lg-6 px-2 my-auto">
                    <h2 class="text-start" style="color:black;">Perfil del Padre de Familia</h2>
                    <div class="separador mx-start"></div>
                    <br>
                    <p>
                        El padre de familia en la comunidad educativa salesiana es un acompañante activo, comprometido con la formación integral de sus hijas, guiado por el amor, la fe y los valores cristianos:
                    </p>
                    <div class="row">
                        <div class="accordion border-0" id="accordionPadreFamilia" style="background:rgba(255,255,255,0.97);backdrop-filter:blur(2px);">
                            <div class="accordion-item border-0 overflow-hidden">
                                <h2 class="accordion-header" id="headingComunicativaPadre">
                                    <button class="accordion-button fw-semibold text-dark bg-white px-4 py-3 gap-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseComunicativaPadre" aria-expanded="true" aria-controls="collapseComunicativaPadre" style="font-size:1.18rem;">
                                        <span class="d-flex align-items-center justify-content-center rounded-circle me-2" style="background:var(--color4);width:38px;height:38px;">
                                            <i class="fas fa-comments" style="color:#fff;font-size:1.2rem;"></i>
                                        </span>
                                        Comunicativa
                                    </button>
                                </h2>
                                <div id="collapseComunicativaPadre" class="accordion-collapse collapse" aria-labelledby="headingComunicativaPadre" data-bs-parent="#accordionPadreFamilia">
                                    <div class="accordion-body bg-white px-4 py-3" style="font-size:1.08rem;">
                                        Mantiene un diálogo afectuoso y respetuoso con sus hijas y la comunidad educativa, participa activamente en la Escuela de Padres, se interesa por los lenguajes juveniles y promueve la unidad familiar.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 overflow-hidden">
                                <h2 class="accordion-header" id="headingCulturalPadre">
                                    <button class="accordion-button collapsed fw-semibold text-dark bg-white px-4 py-3 gap-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCulturalPadre" aria-expanded="false" aria-controls="collapseCulturalPadre" style="font-size:1.18rem;">
                                        <span class="d-flex align-items-center justify-content-center rounded-circle me-2" style="background:var(--color4);width:38px;height:38px;">
                                            <i class="fas fa-globe-americas" style="color:#fff;font-size:1.2rem;"></i>
                                        </span>
                                        Cultural
                                    </button>
                                </h2>
                                <div id="collapseCulturalPadre" class="accordion-collapse collapse" aria-labelledby="headingCulturalPadre" data-bs-parent="#accordionPadreFamilia">
                                    <div class="accordion-body bg-white px-4 py-3" style="font-size:1.08rem;">
                                        Apoya el desarrollo vocacional y formativo de sus hijas, respeta y hace cumplir las normas del colegio, y se identifica con los valores institucionales, participando en sus actividades.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 overflow-hidden">
                                <h2 class="accordion-header" id="headingEvangelizadoraPadre">
                                    <button class="accordion-button collapsed fw-semibold text-dark bg-white px-4 py-3 gap-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEvangelizadoraPadre" aria-expanded="false" aria-controls="collapseEvangelizadoraPadre" style="font-size:1.18rem;">
                                        <span class="d-flex align-items-center justify-content-center rounded-circle me-2" style="background:var(--color4);width:38px;height:38px;">
                                            <i class="fas fa-cross" style="color:#fff;font-size:1.2rem;"></i>
                                        </span>
                                        Evangelizadora
                                    </button>
                                </h2>
                                <div id="collapseEvangelizadoraPadre" class="accordion-collapse collapse" aria-labelledby="headingEvangelizadoraPadre" data-bs-parent="#accordionPadreFamilia">
                                    <div class="accordion-body bg-white px-4 py-3" style="font-size:1.08rem;">
                                        Vive y transmite su fe, confiando en la Providencia y en María Auxiliadora, aplicando el Sistema Preventivo en el hogar (razón, fe y amabilidad) y participando corresponsablemente en el Proyecto Educativo del colegio.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 overflow-hidden">
                                <h2 class="accordion-header" id="headingSocialPadre">
                                    <button class="accordion-button collapsed fw-semibold text-dark bg-white px-4 py-3 gap-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSocialPadre" aria-expanded="false" aria-controls="collapseSocialPadre" style="font-size:1.18rem;">
                                        <span class="d-flex align-items-center justify-content-center rounded-circle me-2" style="background:var(--color4);width:38px;height:38px;">
                                            <i class="fas fa-users" style="color:#fff;font-size:1.2rem;"></i>
                                        </span>
                                        Social
                                    </button>
                                </h2>
                                <div id="collapseSocialPadre" class="accordion-collapse collapse" aria-labelledby="headingSocialPadre" data-bs-parent="#accordionPadreFamilia">
                                    <div class="accordion-body bg-white px-4 py-3" style="font-size:1.08rem;">
                                        Promueve la participación activa de sus hijas, defiende la vida y la dignidad humana, y educa en valores como la solidaridad, el respeto ambiental y la autodisciplina.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="pt-3">Este perfil forma a un padre comprometido con la educación cristiana, afectiva y ética de sus hijas, como verdadero aliado de la misión educativa salesiana.</p>


                </div>
                <div class="col-lg-6 my-auto">
                    <div class="d-flex justify-content-center mx-5">
                        <img src="./public/img/web/perfil_familia.jpg" class="img-fluid" style="border-radius:8px;width:80%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <?php include_once  './partials/footer.php'; ?>
</body>



<!-- Script para carousel automatico -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    let owlone = $('#owl-one');
    let owltwo = $('#owl-two');

    owlone.owlCarousel({
        loop: true,
        margin: 50,
        nav: false,
        autoplay: true,
        autoplayTimeout: 2000,
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            800: {
                items: 2,
            },
            1000: {
                items: 5,
            },
        },
    });

    owltwo.owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        autoplay: true,
        autoplayTimeout: 4000,
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            800: {
                items: 2,
            },
            1000: {
                items: 3,
            },
        },
    });
</script>

</html>