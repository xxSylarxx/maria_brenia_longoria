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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <!-- Script para carrousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
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
        /* estilos del banner dinámico */
        /* #carouselBanner div.carousel-item img {
            height: <//?= $dataBanner['opciones']['dimensionar'] ? 'calc(' . $dataBanner['opciones']['height'] . 'vh - 90px)' : '100%' ?>;
        } */

        .abajo {
            background-color: var(--color1);

        }

        .abajocontact {
            background-color: var(--color4);

        }

        /* Estilos de portada interna */
        #portada {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)),
                url('./public/img/portadas/p-somos.jpg');
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


        #section-slider {

            margin-top: -90px;
        }

        #img-banner {
            object-fit: cover;
            /* filter: brightness(60%); */
        }

        .scroll {
            overflow-y: auto;
            height: 500px;

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

        #carreras .card {
            border-radius: 0;
        }

        #carreras .card img {
            width: 100%;
            height: 210px;
            object-fit: cover;
            transition: all .3s;
        }

        #carreras .card figure:hover img {
            transform: scale(1.02);
        }

        #carreras .card a {
            color: var(--color2);
            font-weight: 600;
            font-family: "nimbus", sans-serif;
        }

        #carreras .card a:hover {
            color: var(--color1);
        }

        #carreras figure {
            position: relative;
        }

        #carreras figure .btn {
            color: var(--color4);
            background: var(--color1);
            font-weight: 600;
            padding: .5rem 1rem;
            border-radius: 10px;
        }

        #carreras figure .btn:hover {
            color: var(--color4);
            background: var(--color3);
        }

        #carreras figure .figure-overlay {
            top: 0;
            left: 0;
            z-index: 99;
            opacity: 0;
            visibility: hidden;
            /* background: rgba(0, 0, 0, .7); */
            transition: all .5s;
        }

        #carreras figure:hover .figure-overlay {
            opacity: 1;
            visibility: visible;
        }

        #carreras .card .card-body a {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #carreras .card .card-body p {
            font-size: 18px;
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
            justify-content: start;
            align-items: flex-end;
            height: 100%;
            padding-bottom: 10%;
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

        #pvalores {
            padding-top: 3rem;
            padding-bottom: 6rem;
        }

        #pvalores .flip {
            height: 200px;
            padding: 0.6em;





        }

        #pvalores .card {

            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform .6s;
            transform-style: preserve-3d;
            border-radius: 12px;
            border-color: none;
            background-color: white;
        }

        #pvalores .flip:nth-child(1):hover .card {
            transform: scale(1.1);
        }

        #pvalores .front,
        #pvalores .back {

            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            cursor: default;
        }

        #pvalores .front {

            color: var(--color7);


        }

        #pvalores .back {
            text-align: start;
            border-radius: 12px;
            color: white;
            transform: rotateY(180deg);
            background-color: var(--color4);
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px, rgb(12, 90, 219) 0px 0px 0px 3px;
            padding: 0.5em;


        }

        #pvalores .back h4 {
            text-align: center;


        }

        #pvalores .back span {
            font-size: .6rem;
            margin-left: 1px;
            margin-right: 2px;


        }

        /* para ocultar los iconos por defecto*/

        .accordion-button:not(.collapsed)::after {

            content: "";

            background-image: url("");

        }

        .accordion-button::after {

            width: 0px;

            height: 0px;

            content: "";

            background-image: url("");

            background-size: 0px;
        }

        /* color y tamaño en modo activo */

        .accordion-button:not(.collapsed) div.boton-icono {

            color: var(--color1);

            font-size: 20px;

            -webkit-transform: rotate(90deg);

            transform: rotate(90deg);

        }

        /* color y tamaño */

        .accordion-button div.boton-icono {

            color: var(--color1);

            font-size: 20px;

            transition: -webkit-transform 0.2s ease-in-out;

            transition: transform 0.2s ease-in-out;

            transition: transform 0.2s ease-in-out, -webkit-transform 0.2s ease-in-out;

        }

        .accordion-button {

            font-weight: bold;

            color: var(--color2);

            font-size: 17.5px;

        }

        .accordion-button:hover {

            color: var(--color1);

        }

        .accordion-flush .accordion-item {

            border-bottom: 0;
        }

        .accordion-button:not(.collapsed) {

            color: var(--color1);

        }

        #portada-broch {
            position: relative;
        }

        #portada-broch .btn {
            color: var(--color4);
            background: var(--color1);
            font-weight: 600;
            padding: .5rem 1rem;
            border-radius: 10px;
            opacity: 0;
        }

        #portada-broch:hover .btn {
            color: var(--color4);
            background: var(--color3);
            opacity: 1;
        }

        #portada-broch:hover img {
            background-color: black;
            transform: scale(1.1);
            opacity: .6;
            transition: transform 0.4s ease-in-out;
        }

        #div-portada {
            color: white;
            text-align: center;
            margin-top: -25%;
            font-size: 1.3rem;

        }

        #div-portada p {
            color: white;
            text-align: center;
            font-size: 1.8rem;
        }

        .img-interno {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        /* Estilos de banner de reseña */
        .slider-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .owl-carousel .item {
            height: 80vh;
            padding: 15px;
            /* Espacio para la sombra */
        }

        .owl-carousel .item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
            /* Sombra premium: difuminado justo y profundidad sutil */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .owl-carousel .item:hover img {
            /* Sombra al hover: más intensidad pero sin exceso */

            transform: scale(1.015);
        }

        /* Flechas con sombra coherente */
        .owl-nav button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.95) !important;
            width: 50px;
            height: 50px;
            border-radius: 50% !important;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1) !important;
            font-size: 24px !important;
            color: #333 !important;
            transition: all 0.3s;
        }

        .owl-nav button:hover {
            background: white !important;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15) !important;
        }

        .owl-prev {
            left: 10px !important;
        }

        .owl-next {
            right: 10px !important;
        }

        /* Puntos de navegación minimalistas */
        .owl-dots {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
        }

        .owl-dot span {
            background: rgba(255, 255, 255, 0.6) !important;
            transition: all 0.3s;
        }

        .owl-dot.active span {
            background: white !important;
            transform: scale(1.3);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        /* Estilos de video */
        /* Contenedor principal */
        .video-container {
            width: 90%;
            max-width: 1000px;
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.1);
            transform: translateY(0);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Efecto hover para el contenedor */
        .video-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        /* Estilo del video */
        .video-player {
            width: 100%;
            display: block;
            border-radius: 10px;
            aspect-ratio: 16/9;
            object-fit: cover;
            background: #000;
        }

        /* Controles personalizados (opcional) */
        .video-controls {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
            padding: 20px;
            display: flex;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .video-container:hover .video-controls {
            opacity: 1;
        }

        .control-btn {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin: 0 10px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            backdrop-filter: blur(5px);
            transition: all 0.3s ease;
        }

        .control-btn:hover {
            background: var(--primary);
            transform: scale(1.1);
        }

        /* Badge de "Play" (opcional) */
        .play-badge {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.9);
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .play-badge:hover {
            background: white;
            transform: translate(-50%, -50%) scale(1.05);
        }

        .play-icon {
            color: var(--color1);
            font-size: 30px;
            margin-left: 5px;
            margin-top: 8px;
        }

        /* Efecto de borde animado (opcional) */
        .video-container::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border: 2px solid transparent;
            border-radius: 16px;
            pointer-events: none;
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

        @media screen and (max-width:600px) {

            #div-portada {
                font-size: 1rem;
            }

        }
    </style>
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
    <!--  <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg" style="padding-right: 0px;padding-left: 0px;">
                    <img src="./public/img/portadas/p-somos.jpg"  alt="">
                </div>
            </div>
            <div class="row">
                <div id="div-portada">


                    <br>
                    <h1>Colegio internacional que empodera a los <br>estudiantes con las habilidades académicas.</h1>
                    <div class="separador mx-auto"></div>
                    <br>
                    <p>Los alumnos desarrollan la mejor versión de si mismos en Davy College.</p>
                </div>
            </div>
        </div>
    </section> -->
    <br>
    <section class="py-5">
        <div class="container py-1">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-6">
                    <h1 class="text-start" style="color:black;">Quiénes Somos</h1>
                    <div class="separador mx-start"></div>
                    <br>
                    <p>Somos el Colegio María Auxiliadora de Breña, una comunidad educativa católica de presencia ininterrumpida en el corazón de Lima Metropolitana. Fundado en 1902 por las Hijas de María Auxiliadora, somos parte viva de una gran familia nacida del carisma de San Juan Bosco y Santa María Mazzarello, que este 2025 celebra 153 años de historia educativa y misionera en el mundo y 123 años de entrega amorosa en el distrito de Breña.</p>
                    <p>Nuestra institución lleva adelante una misión evangelizadora y formativa inspirada en el Sistema Preventivo de Don Bosco, basado en la razón, la religión y la amorevolezza (amor expresado en cercanía y bondad). Guiamos a nuestras estudiantes hacia una formación integral en la fe, el estudio, la alegría y la oración, promoviendo así una ciudadanía ética, responsable y comprometida con el cuidado de la creación y el bien común.</p>
                    <p>Contamos con un equipo de educadores católicos y salesianos, comprometidos con la innovación educativa, el uso de herramientas tecnológicas pertinentes y la formación continua, en estrecha colaboración con las familias, para acompañar a nuestras estudiantes en su desarrollo personal, académico y espiritual.</p>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <div>
                        <img src="./public/img/web/directora.png" class="img-fluid" style="border-radius: 10px;" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <br>
    <section class="py-5">
        <div class="container py-1">
            <div class="row">

                <div class="col-lg ">

                    <div style="text-align:center;">
                        <h2>Reseña Histórica</h2>
                    </div>
                    <div class="separador mx-auto"></div>

                </div>

            </div>
            <br>
            <div class="row">
                <div class="col-lg">
                    <p>La Congregación de las Hijas de María Auxiliadora (FMA), fue fundada por San Juan Bosco y Santa María Mazzarello el 5 de agosto de 1872 en Mornese, Italia; como una respuesta educativa y cristiana para niñas y jóvenes en situación de abandono. Inspirada por la devoción mariana de Don Bosco y los esfuerzos de Mazzarello en Mornese, la Congregación se expandió rápidamente a Europa y América, llegando al Perú en 1891 gracias al apoyo de la Beneficencia Pública de Lima. Su primera obra educativa fue el Instituto Sevilla en el Rímac.</p>
                    <p>En 1902 se fundó el Colegio María Auxiliadora de Breña, el más emblemático de la Congregación en Perú, con más de 120 años de labor educativa. Su fundación oficial se fijó el 19 de marzo en honor a San José. Inició con nivel primario, expandiéndose al nivel secundario en 1926 y brevemente a la sección comercial en 1933. En 1934 se inauguró la actual capilla. Entre 1956 y 2000 coexistió con una escuela gratuita en el mismo local. Desde 1983, se reorganizó en dos comunidades: el Colegio y la Casa inspectorial Santa Rosa.</p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg">


                    <body>
                        <div class="slider-container">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <img src="./public/img/web/resenia/resenia1.png" alt="Slide 1">
                                </div>
                                <div class="item">
                                    <img src="./public/img/web/resenia/resenia2.png" alt="Slide 2">
                                </div>
                                <div class="item">
                                    <img src="./public/img/web/resenia/resenia3.png" alt="Slide 3">
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <br>
            <div class="row d-flex justify-content-around align-items-center pt-5">
                <div class="col-lg-5 my-auto">

                    <div>
                        <p>El colegio ha sido dirigido por 26 directoras, destacando su adaptación a la virtualidad durante la pandemia en 2020-2021 bajo Sor Hilda Benavides y su retorno a la presencialidad en 2022 con Sor Paola Bravo. Actualmente es dirigido por Sor Evelyn Díaz Barriga (2025). La Institución continúa su misión salesiana en favor de la juventud peruana.</p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center">

                    <div class="video-container">

                        <video class="video-player" poster="./public/img/web/resenia/portada_resenia.png" loop>
                            <source src="./public/videos/video_historia.mp4" type="video/mp4">
                            Tu navegador no soporta videos HTML5.
                        </video>

                        <div class="play-badge">
                            <span class="play-icon">▶</span>
                        </div>

                        <div class="video-controls">
                            <!-- <button class="control-btn">⏮</button> -->
                            <button class="control-btn">⏯</button>
                            <!--  <button class="control-btn">⏭</button> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <br>
    <section class="py-5">
        <div class="container py-2">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-6 d-flex justify-content-center align-items-center ">
                    <div class="w-100 mx-2">
                        <img class="img-interno" src="./public/img/web/somos/mision.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="mx-2">
                        <div class="row d-flex justify-content-start">
                            <div class="col-lg-2 d-flex justify-content-center align-items-center">
                                <div style="width: 60px;height: 60px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: var(--color1);font-size:29px;"><a href="" style="color:var(--color5);"><i class="fas fa-bullseye" style="margin-top:16px;margin-left:15px;"></i></a></div>
                            </div>
                            <div class="col-lg-9">
                                <h2 class="text-start" style="color:black;">Misión</h2>
                                <div class="separador mx-start"></div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <p>Somos una Comunidad Educativa Católica promovida por la Congregación Hijas de María Auxiliadora en el distrito de Breña de Lima Metropolitana que desarrolla su servicio en los niveles de Primaria y Secundaria con el aporte original del Sistema Preventivo, basado en la religión, la razón y la amorevolezza y los valores institucionales de la alegría, estudio y oración que promueve la formación integral, según los principios del Evangelio y del Magisterio de la Iglesia y los lineamientos del Ministerio de Educación a fin que las estudiantes ejerzan su ciudadanía con ética y coherencia buscando el bien común y el cuidado consciente de una ecología integral. Contamos, para ello, con un sólido equipo de educadores católicos, identificado con la axiología salesiana, que vive en clima de familia y tiene como principio la formación continua, desarrollando proyectos de innovación y utilizando los medios tecnológicos pertinentes a la situación actual y a las necesidades e intereses de las estudiantes. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container py-2">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-6 my-auto">
                    <div class="mx-2">
                        <div class="row d-flex justify-content-start">
                            <div class="col-lg-2 d-flex justify-content-center align-items-center">
                                <div style="width: 60px;height: 60px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: var(--color1);font-size:29px;"><a href="" style="color:var(--color5);"><i class="fas fa-eye" style="margin-top:16px;margin-left:14px;"></i></a></div>
                            </div>
                            <div class="col-lg-9">
                                <h2 class="text-start" style="color:black;">Visión</h2>
                                <div class="separador mx-start"></div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <p>Al año 2025 el CEP María Auxiliadora de Breña, será una comunidad educativa que lidera una educación innovadora y de calidad ante los desafíos de la contemporaneidad, con la fuerza transformadora del Sistema Preventivo y en red con otras instituciones; que forma estudiantes autónomas, críticas y solidarias que ejerzan sus deberes y derechos, para contribuir al desarrollo de la sociedad y del país desde una ecología integral; que cuenta con educadores  proactivos e innovadores que tienen como principio la formación continua y que viven su vocación de servicio, promoviendo el ejercicio de una ciudadanía responsable, crítica, que integre fe, cultura y vida; y que colabora con las familias comprometidas en la educación de sus hijas, que acompañan sus procesos formativos con responsabilidad e identidad salesiana.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center ">
                    <div class="w-100 mx-2">
                        <img class="img-interno" src="./public/img/web/somos/vision.jpg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <?php include_once  './partials/footer.php'; ?>
</body>





<script>
    addEventListener('DOMContentLoaded', () => {
        const contadores = document.querySelectorAll('.contador_cantidad')
        const velocidad = 5000

        const animarContadores = () => {
            for (const contador of contadores) {
                const actualizar_contador = () => {
                    let cantidad_maxima = +contador.dataset.cantidadTotal,
                        valor_actual = +contador.innerText,
                        incremento = cantidad_maxima / velocidad

                    if (valor_actual < cantidad_maxima) {
                        contador.innerText = Math.ceil(valor_actual + incremento)
                        setTimeout(actualizar_contador, 5)
                    } else {
                        contador.innerText = cantidad_maxima
                    }
                }
                actualizar_contador()
            }
        }
        //IntersectionObserver
        const mostrarContadores = elementos => {
            elementos.forEach(elemento => {
                if (elemento.isIntersecting) {
                    elemento.target.classList.add('animar')
                    elemento.target.classList.remove('ocultar')
                    setTimeout(animarContadores, 300)
                }
            });
        }
        const observer = new IntersectionObserver(mostrarContadores, {
            threshold: 0.75 //0-1
        })

        const elementosHTML = document.querySelectorAll('.contador')
        elementosHTML.forEach(elementoHTML => {
            observer.observe(elementoHTML)
        })
    });
</script>
<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });
    });
</script>
<!-- Script para el video -->
<script>
    // JavaScript para controles básicos
    const video = document.querySelector('.video-player');
    const playBtn = document.querySelector('.play-badge');
    const playPauseBtn = document.querySelectorAll('.control-btn')[0];

    playBtn.addEventListener('click', () => {
        video.play();
        playBtn.style.opacity = '0';
    });

    playPauseBtn.addEventListener('click', () => {
        if (video.paused) {
            video.play();
            playPauseBtn.innerHTML = '⏸';
        } else {
            video.pause();
            playPauseBtn.innerHTML = '⏯';
        }
    });
</script>

<script>
    AOS.init();
</script>





</html>