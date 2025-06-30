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

<body id='cuerpo'>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script>
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle("abajo", window.scrollY > 150);

        });
    </script>


    <?php include_once  './partials/header.php'; ?>

    <style>
        /* estilos del banner dinámico */
        /* #carouselBanner div.carousel-item img {
            height: <//?= $dataBanner['opciones']['dimensionar'] ? 'calc(' . $dataBanner['opciones']['height'] . 'vh - 90px)' : '100%' ?>;
        } */


        .abajo {
            background-color: var(--color3);
            box-shadow: 0 0 10px #505050;

        }

        .abajo a.nav-link {
            color: var(--color1) !important;

        }

        .abajocontact {
            background-color: var(--color4);

        }

        div.content-banner .frame-responsive {
            position: relative;
            height: 0;
            overflow: hidden;
            padding-bottom: 56.2%;
            margin-bottom: 20px;
        }

        div.content-banner .frame-responsive iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: <?= $dataBanner['opciones']['dimensionar'] ? 'calc(100vh - 90px)' : '100%' ?>;
        }

        div.content-banner video {
            width: 100%;
            height: <?= $dataBanner['opciones']['dimensionar'] ? 'calc(100vh - 90px)' : '100%' ?>;
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
            /*  display: flex;
            justify-content: start;
            align-items: flex-end; */
            top: 50%;
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

        @media screen and (max-width:410px) {
            .div-banner {
                padding-left: 3rem;
                position: absolute;
                display: flex;
                justify-content: start;
                align-items: flex-end;
                height: 100%;
                padding-bottom: 38%;
            }

            .tittle-banner1 {
                font-size: 1rem;
            }

            .tittle-banner2 {
                font-size: 1rem;
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
    <!-- admin - ventana emergente -->
    <style>
        #modalAdmin div.responsive {
            position: relative;
            height: 0;
            overflow: hidden;
            padding-bottom: 56%;
            margin-bottom: 20px;
        }

        #modalAdmin div.responsive iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

    </style>
    <!-- <div class="modal" id="modalAdmin" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-fullscreen-lg-down modal-dialog-centered">
            <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered"> 
            <div class="modal-content animate__animated animate__zoomIn">
                <div class="modal-body ">
                    <img src="./public/img/galeria/modal1.jpg" width="100%">
                </div>
            </div>
        </div>
    </div> -->
    <script>
        // instancia y muestra la ventana
        let modalAdmin = new bootstrap.Modal(document.getElementById('modalAdmin'));
        modalAdmin.show();
        // al cierre de la ventana eliminamos el contenido
        let modalAdmin2 = document.getElementById('modalAdmin');
        modalAdmin2.addEventListener('hide.bs.modal', function(event) {
            document.querySelector('.modal-body').remove();
        });
    </script>

    <section id="section-slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container div-banner">
                        <div class="row">
                            <h2 class="tittle-banner1">Admisión<br>y Traslados 2026</h2>
                            <br>
                        </div>
                        <div class="row d-flex justify-content-start pt-4">
                            <div class="col-lg-3 py-2">
                                <a href="https://wa.me/+51976225985"> <button href="#" class="button">
                                        <span class="button__icon-wrapper">
                                            <svg viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg" width="10">
                                                <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                                            </svg>
                                            <svg viewBox="0 0 14 15" fill="none" width="10" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg button__icon-svg--copy">
                                                <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        Agenda tu Visita
                                    </button></a>
                            </div>
                            <div class="col-lg-5 p-2">
                                <a href="./somos.php">
                                    <!-- From Uiverse.io by Creatlydev -->
                                    <button href="#" class="button2">
                                        <span class="button2__icon-wrapper">
                                            <svg viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="button2__icon-svg" width="10">
                                                <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                                            </svg>
                                            <svg viewBox="0 0 14 15" fill="none" width="10" xmlns="http://www.w3.org/2000/svg" class="button2__icon-svg button2__icon-svg--copy">
                                                <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        Conócenos
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img src="./public/img/banner/slider4.jpg" class="d-block crop w-100" style="height:100vh;" id="img-banner">
                </div>
                <div class="carousel-item">
                    <div class="container div-banner">
                        <div class="row">
                            <h2 class="tittle-banner1">Bienvenidos al <br>Colegio María Auxiliadora</h2>
                            <br>
                        </div>
                        <div class="row d-flex justify-content-start pt-4">
                            <div class="col-lg-3 py-2">
                                <a href="https://wa.me/+51976225985"> <button href="#" class="button">
                                        <span class="button__icon-wrapper">
                                            <svg viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg" width="10">
                                                <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                                            </svg>
                                            <svg viewBox="0 0 14 15" fill="none" width="10" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg button__icon-svg--copy">
                                                <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        Agenda tu Visita
                                    </button></a>
                            </div>
                            <div class="col-lg-5 p-2">
                                <a href="./somos.php">
                                    <!-- From Uiverse.io by Creatlydev -->
                                    <button onclick="window.location.href='./somos.php'"  class="button2">
                                        <span class="button2__icon-wrapper">
                                            <svg viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="button2__icon-svg" width="10">
                                                <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                                            </svg>
                                            <svg viewBox="0 0 14 15" fill="none" width="10" xmlns="http://www.w3.org/2000/svg" class="button2__icon-svg button2__icon-svg--copy">
                                                <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        Conócenos
                                    </button>

                                </a>
                            </div>
                        </div>
                    </div>
                    <img src="./public/img/banner/slider1.jpeg" class="d-block crop w-100" style="height:100vh;" id="img-banner">
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!--  <video src="./public/videos/video_prueba.mp4" controls height="100%" width="100%"></video> -->

    </section>

    <!-- <section id="section-plataform" data-aos="fade-up">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-2 p-0">
                    <a href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&hd=davycollege.edu.pe&sacu=1&flowName=GlifWebSignIn&flowEntry=AddSession" target="_blank">
                        <div id="card-valor" style="background-color: var(--color4);box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                            <center><img src="./public/img/icons/email.png" alt="" width="50" height="50"></center>
                            <h3 style="text-align:center;color:white;font-size:20px;">Correo</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 p-0">
                    <a href="https://app.seesaw.me/#/login" target="_blank">
                        <div id="card-valor" style="background-color: var(--color1);box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                            <center><img src="./public/img/icons/seesaw.png" alt="" width="50" height="50"></center>
                            <h3 style="text-align:center;color:white;font-size:20px;">Seesaw</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 p-0">
                    <a href="https://classroom.google.com/" target="_blank">
                        <div id="card-valor" style="background-color: var(--color3);box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                            <center><img src="./public/img/icons/classroom.png" alt="" width="50" height="50"></center>
                            <h3 style="text-align:center;color:white;font-size:20px;">Classroom</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 p-0">
                    <a href="https://drive.google.com/drive/folders/13BiG0Ons3MKRIHZDTmuKRnI_b5f6LHGQ?usp=sharing" target="_blank">
                        <div id="card-valor" style="background-color: #F0DFBC;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                            <center><img src="./public/img/icons/calendario.png" alt="" width="50" height="50"></center>
                            <h3 style="text-align:center;color:white;font-size:20px;">Calendario</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 p-0">
                    <a href="https://davycollege.follettdestiny.com/common/welcome.jsp?context=saas803_8509416" target="_blank">
                        <div id="card-valor" style="background-color: #D0693A;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                            <center><img src="./public/img/icons/book.png" alt="" width="50" height="50"></center>
                            <h3 style="text-align:center;color:white;font-size:20px;">Destiny</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 p-0">
                    <a href="https://davyonline.cubicol.pe/principal/login" target="_blank">
                        <div id="card-valor" style="background-color: #888887;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                            <center><img src="./public/img/icons/online.png" alt="" width="50" height="50"></center>
                            <h3 style="text-align:center;color:white;font-size:20px;">DavyOnline</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section> -->

    <section id="section-bienvenidos">
        <div class="container py-5">
            <div class="row ">
                <div class="col-lg-6 px-5">
                    <div style="text-align:center;"><img src="./public/img/icons/logo.png" style="height:100px;" alt=""></div>
                    <br>
                    <div style="text-align:center;">
                        <h2>Nosotros</h2>
                    </div>
                    <div class="separador mx-auto"></div>
                    <br>
                    <div>
                        <p>
                            Somos el Colegio María Auxiliadora de Breña, una comunidad educativa católica de presencia ininterrumpida en el corazón de Lima Metropolitana. Fundado en 1902 por las Hijas de María Auxiliadora, somos parte viva de una gran familia nacida del carisma de San Juan Bosco y Santa María Mazzarello, que este 2025 celebra 153 años de historia educativa y misionera en el mundo y 123 años de entrega amorosa en el distrito de Breña.
                        </p>

                        <br>
                        <button onclick="window.location.href='./somos.php'" class="button">
                            <span class="button__icon-wrapper">
                                <svg viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg" width="10">
                                    <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                                </svg>
                                <svg viewBox="0 0 14 15" fill="none" width="10" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg button__icon-svg--copy">
                                    <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                                </svg>
                            </span>
                            Conócenos
                        </button>
                        <br>
                        <!-- <div class="col-lg-12">
                            <div style="border-style:dashed;width:100%;"></div>
                        </div> -->
                        <!--  <em style="text-align:justify;">“Nuestra innovadora propuesta busca proporcionar a los alumnos un óptimo
                            desarrollo de sus habilidades y talentos, mientras se desenvuelve en un
                            ambiente saludable y familiar”</em> -->
                    </div>
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="d-flex justify-content-center">
                        <img src="./public/img/web/bg_inicio.png" width="45%" alt=""></center>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="container-fluid" id="pilares">

        <div class="container">

            <div class="row">

                <div class="col-lg ">

                    <div style="text-align:center;">
                        <h2>Nuestros Valores</h2>
                    </div>
                    <div class="separador mx-auto"></div>

                </div>

            </div>

            <br><br>

            <div id="carousel-noticias" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">

                <div class="carousel-inner">

                    <div class="carousel-item active">

                        <div class="row bg-white row-pad shadow">

                            <div class="col-md-5 p-0">

                                <img src="./public/img/web/valores/espiritualidad.jpg" style="object-fit:cover;vertical-align:middle;" width="100%" height="500">

                            </div>

                            <div class="col-md my-auto text-justify p-4">
                                <div class="card border-0 px-3">
                                    <h3 style="color: var(--color1);" class="mb-3">Espiritualidad</h3>
                                    <p>
                                        Vivir la apertura a Dios desde los valores evangélicos y salesianos.
                                    </p>

                                    <div class="row pt-3">
                                        <div class="col-lg-3">
                                            <button href="#" class="button">
                                                <span class="button__icon-wrapper">
                                                    <svg viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg" width="10">
                                                        <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                                                    </svg>
                                                    <svg viewBox="0 0 14 15" fill="none" width="10" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg button__icon-svg--copy">
                                                        <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                Conócenos
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="carousel-item">
                        <div class="row bg-white row-pad shadow">
                            <div class="col-md-5 p-0">

                                <img src="./public/img/web/valores/preventivo.jpg" style="object-fit:cover;vertical-align:middle;" width="100%" height="500">

                            </div>

                            <div class="col-md my-auto text-justify p-4">

                                <div class="card border-0 px-3">

                                    <h3 style="color: var(--color1);" class="mb-3">Sistema Preventivo</h3>

                                    <p>
                                        Educar en positivo desde la razón, la religión y el amor.
                                    </p>
                                    <div class="row pt-3">
                                        <div class="col-lg-3">
                                            <button href="#" class="button">
                                                <span class="button__icon-wrapper">
                                                    <svg viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg" width="10">
                                                        <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                                                    </svg>
                                                    <svg viewBox="0 0 14 15" fill="none" width="10" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg button__icon-svg--copy">
                                                        <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                Conócenos
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="carousel-item">
                        <div class="row bg-white row-pad shadow">
                            <div class="col-md-5 p-0 my-auto">
                                <img src="./public/img/web/valores/espiritu-familia.jpg" style="object-fit:cover;vertical-align:middle;" width="100%" height="500">
                            </div>
                            <div class="col-md-7 my-auto text-justify p-4">
                                <div class="card border-0 px-3">
                                    <h3 style="color: var(--color1);" class="mb-3">Espíritu de familia</h3>
                                    <p>
                                        Lograr que las niñas, adolescentes y familias se encuentren en su propia casa, desde el buen trato humano y cordial.
                                    </p>
                                    <div class="row pt-3">
                                        <div class="col-lg-3">
                                            <button href="#" class="button">
                                                <span class="button__icon-wrapper">
                                                    <svg viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg" width="10">
                                                        <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                                                    </svg>
                                                    <svg viewBox="0 0 14 15" fill="none" width="10" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg button__icon-svg--copy">
                                                        <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                Conócenos
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="carousel-item">

                        <div class="row bg-white row-pad shadow">

                            <div class="col-md-6 p-0">
                                <img src="./public/img/web/valores/presencia-activa.jpg" style="object-fit:cover;vertical-align:middle;" width="100%" height="500">
                            </div>

                            <div class="col-md-6 my-auto text-justify p-4">

                                <div class="card border-0 px-3">

                                    <h3 style="color: var(--color1);" class="mb-3">Presencia activa</h3>
                                    <p>
                                        Estar entre las niñas y adolescentes, acompañándolas en los diferentes momentos de la vida.
                                    </p>
                                    <div class="row pt-3">
                                        <div class="col-lg-3">
                                            <button href="#" class="button">
                                                <span class="button__icon-wrapper">
                                                    <svg viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg" width="10">
                                                        <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                                                    </svg>
                                                    <svg viewBox="0 0 14 15" fill="none" width="10" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg button__icon-svg--copy">
                                                        <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                Conócenos
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="carousel-item">
                        <div class="row bg-white row-pad shadow">
                            <div class="col-md-5 p-0">
                                <img src="./public/img/web/valores/acompaniamiento.jpeg" style="object-fit:cover;vertical-align:middle;" width="100%" height="500">
                            </div>
                            <div class="col-md-7 my-auto text-justify p-4">
                                <div class="card border-0 px-3">
                                    <h3 style="color: var(--color1);" class="mb-3">Acompañamiento</h3>
                                    <p>
                                        Implicar a la Comunidad Educativa en el proceso de crecimiento y aprendizaje.
                                    </p>
                                    <div class="row pt-3">
                                        <div class="col-lg-3">
                                            <button href="#" class="button">
                                                <span class="button__icon-wrapper">
                                                    <svg viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg" width="10">
                                                        <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                                                    </svg>
                                                    <svg viewBox="0 0 14 15" fill="none" width="10" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg button__icon-svg--copy">
                                                        <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                Conócenos
                                            </button>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
 
                        <br>

                    </div>
                    <div class="carousel-item">
                        <div class="row bg-white row-pad shadow">
                            <div class="col-md-5 p-0">
                                <img src="./public/img/web/valores/ecologia.jpg" style="object-fit:cover;vertical-align:middle;" width="100%" height="500">
                            </div>
                            <div class="col-md-7 my-auto text-justify p-4">
                                <div class="card border-0 px-3">
                                    <h3 style="color: var(--color1);" class="mb-3">Ecología Integral</h3>
                                    <p>
                                        Respetar y cuidar la casa común.
                                    </p>
                                    <div class="row pt-3">
                                        <div class="col-lg-3">
                                            <button href="#" class="button">
                                                <span class="button__icon-wrapper">
                                                    <svg viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg" width="10">
                                                        <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                                                    </svg>
                                                    <svg viewBox="0 0 14 15" fill="none" width="10" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg button__icon-svg--copy">
                                                        <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                Conócenos
                                            </button>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <br>

                    </div>

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-noticias" data-bs-slide="prev" style="margin-left: -40px;">

                    <span style="color: var(--color4); font-size: 2em;">

                        <i class="fas fa-chevron-left"></i>

                    </span>

                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carousel-noticias" data-bs-slide="next" style="margin-right: -40px;">

                    <span style="color: var(--color4); font-size: 2em;">

                        <i class="fas fa-chevron-right"></i>

                    </span>

                </button>

            </div>

        </div>

        <!--  <p style="text-align:center;font-size:35px;font-weight:bold;color:white;">¿Por qué confiar en Davy College?</p> -->

    </section>
    <br>
    <br>
    <br>
    <br>
    <section id="cards-parallax">
        <div style="text-align:center;">
            <h2>Propuesta Educativa</h2>
        </div>
        <div class="separador mx-auto"></div>

        <div class="container">
            <div class="row pt-5">
                <div class="col-lg">
                    <?php include_once  './cards-360.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>

    <!-- <section id="lema">

        <div style="text-align:center;position:relative;z-index:5;padding-top:4rem;"><img src="./public/img/icons/logo.png" style="height:100px;" alt=""></div>
        <div style="text-align:center;color:white">
            <h1>Great things happen<br>
                at Davy College!</h1>
        </div>
        <br>

        <center> <button class="button-86" role="button">¿Por qué confiar en el Davy College?</button></center>
        <br>
        <br>
        <br>
    </section> -->

    <!--  <section id="carreras">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md mt-4">
                    <div class="card h-100">
                        <figure class="m-0">
                            <img src="./public/img/img-page/instalaciones-verdes.jpg" alt="empresas">
                        </figure>
                        <div class="card-body">
                            <a href="" class="card-title">
                                <h5>Instalaciones Verdes</h5>
                            </a>
                            <div class="line"></div>
                            <br>
                            <p class="">Rodeada de áreas verdes, la infraestructura permite a los
                                alumnos estar en contacto con la naturaleza y alejados del ruido de
                                la ciudad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mt-4">
                    <div class="card h-100">
                        <figure class="m-0">
                            <img src="./public/img/img-page/aulas-tecnologicas.jpg" alt="">
                        </figure>
                        <div class="card-body">
                            <a href="" class="card-title">
                                <h5>Aulas tecnológicas</h5>
                            </a>
                            <div class="line"></div>
                            <br>
                            <p>Aulas inteligentes equipadas con tecnología de punta que brindan una
                                educación vanguardista de primer nivel.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mt-4">
                    <div class="card h-100">
                        <figure class="m-0">
                            <img src="./public/img/img-page/deporte.jpg" alt="">
                        </figure>
                        <div class="card-body">
                            <a href="" class="card-title">
                                <h5>Impulsamos el deporte</h5>
                            </a>
                            <div class="line"></div>
                            <br>
                            <p>Estar en forma es fundamental para crecer sanamente. Desde la educación física y selecciones deportivas y participación en torneos escolares.</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row mt-5">
                <div class="col-md mt-4">
                    <div class="card h-100">
                        <figure class="m-0">
                            <img src="./public/img/img-page/artes-visuales-davy-college.jpg" alt="">
                        </figure>
                        <div class="card-body">
                            <a href="" class="card-title">
                                <h5>Fomentamos las Artes Visuales</h5>
                            </a>
                            <div class="line"></div>
                            <br>
                            <p>Los estudiantes tienen la oportunidad de ser parte de un aprendizaje permanente,
                                practicando el trabajo colaborativo, experimentando los diversos medios y
                                materiales de las artes visuales.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mt-4">
                    <div class="card h-100">
                        <figure class="m-0">
                            <img src="./public/img/img-page/arte-y-musica.jpg" alt="empresas">
                        </figure>
                        <div class="card-body">
                            <a href="" class="card-title">
                                <h5>Fomentamos la Música</h5>
                            </a>
                            <div class="line"></div>
                            <br>
                            <p class="">El Davy College, ofrece un programa de música desde los primeros
                                años (Inicial) hasta la escuela secundaria</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mt-4">
                    <div class="card h-100">
                        <figure class="m-0">
                            <img src="./public/img/img-page/teatro-en-davy-college.jpg" alt="">
                        </figure>
                        <div class="card-body">
                            <a href="" class="card-title">
                                <h5>Artes Escénicas</h5>
                            </a>
                            <div class="line"></div>
                            <br>
                            <p>Las artes escénicas cumplen un rol de suma importancia en el desarrollo
                                personal y emocional de los alumnos.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <br>
    <br>
    <br> -->
    <section id="membresias">
        <div class="container  ">
            <div class="row d-flex justify-content-center" style="text-align:center;">

                <div style="text-align:center;">
                    <h2>Convenios</h2>
                </div>
                <div class="separador mx-auto"></div>


            </div>
            <br>
            <div class="row owl-carousel mx-0" id="owl-one">
                <div class="col  justify-content-center align-content-center">
                    <img src="./public/img/web/convenios/cetpro_ma.png" alt="CETPRO María Auxiliadora">
                </div>
                <div class="col justify-content-center align-content-center">
                    <img src="./public/img/web/convenios/compartir.png" alt="Compartir">
                </div>
                <div class="col justify-content-center align-content-center">
                    <img src="./public/img/web/convenios/lucani.png" alt="Lucani">
                </div>

            </div>
        </div>

    </section>
    <br>
    <br>
    <br>
    
    <div class="modal fade" id="modalaviso1" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body">
                    <img src="./public/img/galeria/noticia1.jpg" class="rounded" width="100%">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalaviso2" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body">
                    <img src="./public/img/galeria/noticia2.jpg" class="rounded" width="100%">

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalaviso3" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body">
                    <img src="./public/img/galeria/noticia3.jpg" class="rounded" width="100%">

                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <!-- <section id="importantes" class="py-5">
        <div class="container">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-3 d-flex contador">
                    <div class="row">
                        <div class="col-lg-4">
                            <div><img style="align-items:center;display:flex;content:center;margin:auto;" src="./public/img/icons/liderazgo.png" alt="" height="100"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contador_cantidad text-center" data-cantidad-total="27">0</div>
                            <div>
                                <p id="contadorparrafo">años dedicados a la formación líderes para el mundo.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 d-flex contador">
                    <div class="row">
                        <div class="col-lg-4">
                            <div><img style="align-items:center;display:flex;content:center;margin:auto;" src="./public/img/icons/familia.png" alt="" height="100"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contador_cantidad text-center" data-cantidad-total="515">0</div>
                            <div>
                                <p id="contadorparrafo">Familias en la comunidad Davy.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-flex contador">
                    <div class="row">
                        <div class="col-lg-4">
                            <div><img style="align-items:center;display:flex;content:center;margin:auto;" src="./public/img/icons/hectareas.png" alt="" height="80"></div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="d-flex justify-content-center">
                                <div class="contador_cantidad " data-cantidad-total="6">0</div>
                                <div class="my-auto" style="font-size:60px;">.</div>
                                <div class="contador_cantidad r" data-cantidad-total="9">0</div>
                            </div>


                            <p id="contadorparrafo">hectáreas del predio destinados exclusivamente a la formación de nuestros estudiantes.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 d-flex contador">
                    <div class="row">
                        <div class="col-lg-4">
                            <div><img style="align-items:center;display:flex;content:center;margin:auto;" src="./public/img/icons/universidad.png" alt="" height="80"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center">
                                <div class="contador_cantidad" data-cantidad-total="99">0</div>
                                <div class="my-auto" style="font-size:60px;">%</div>
                            </div>
                            <div>
                                <p id="contadorparrafo">de los alumnos van a la universidad luego de graduarse.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> -->
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
                items: 3,
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
<script>
    addEventListener('DOMContentLoaded', () => {
        const contadores = document.querySelectorAll('.contador_cantidad')
        const velocidad = 10000000000

        const animarContadores = () => {
            for (const contador of contadores) {
                const actualizar_contador = () => {
                    let cantidad_maxima = +contador.dataset.cantidadTotal,
                        valor_actual = +contador.innerText,
                        incremento = cantidad_maxima / velocidad

                    if (valor_actual < cantidad_maxima) {
                        contador.innerText = Math.ceil(valor_actual + incremento)
                        setTimeout(actualizar_contador, 70)
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
                    setTimeout(animarContadores, 600)
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
    AOS.init();
</script>





</html>