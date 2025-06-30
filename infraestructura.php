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
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>


<body>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/popper.min.js"></script>
    <script src="./public/js/jquery.min.js"></script>
    <script src="./public/js/bootstrap.pooper.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

    <style>
        .btn-history {
            background-color: var(--color1);
            color: var(--color3);
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;


        }

        .separador {
            background-color: var(--color4);
            height: 4px;
            width: 50px;
        }

        .ambientes i {
            color: var(--color1);
        }

        /* Estilos de portada interna */
        #portada {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)),
                url('./public/img/portadas/p-infraestructura.png');
            background-size: cover;
            background-position: center;
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

        #parrafo p {
            text-align: center;
            font-size: 20px;
        }

        .swiper {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper-slide {
            width: 300px;
            height: 400px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2);
            filter: blur(1px);
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: end;
            align-items: self-start;
            position: relative;
        }

        .swiper-slide-active {
            filter: blur(0px);
        }

        .swiper-pagination-bullet,
        .swiper-pagination-bullet-active {
            background: #fff;
        }

        .swiper-slide span {
            text-transform: uppercase;
            color: #fff;
            background: #1b7402;
            padding: 7px 18px 7px 25px;
            display: inline-block;
            border-radius: 0 20px 20px 0px;
            letter-spacing: 2px;
            font-size: 0.8rem;
            font-family: "Open Sans", sans-serif;
        }

        .swiper-slide .foto {
            position: absolute;
            right: 0;
            top: 10px;
            background: var(--color2);
            padding: 7px 18px 7px 25px;
            border-radius: 20px 0 0 20px;
            font-size: 0.8rem;
            color: #fff;
        }

        /* .swiper-slide--one span {
            background: var(--color1);
        } */

        /* .swiper-slide--two span {
            background: var(--color1);
        } */

        /* .swiper-slide--three span {
            background: #b45205;
        } */

        /* .swiper-slide--four span {
            background: var(--color1);
        } */

        .swiper-slide h2 {
            color: #fff;
            font-family: "Roboto", sans-serif;
            font-weight: 400;
            font-size: 1.3rem;
            line-height: 1.4;
            margin-bottom: 15px;
            padding: 25px 45px 0 25px;
        }

        .swiper-slide p {
            color: #fff;
            font-family: "Roboto", sans-serif;
            font-weight: 300;
            display: flex;
            align-items: center;
            padding: 0 25px 35px 25px;
        }

        .swiper-slide svg {
            color: #fff;
            width: 22px;
            height: 22px;
            margin-right: 7px;
        }

        .swiper-slide--one {
            background: linear-gradient(to top, #0f2027, #203a4300, #2c536400),
                url("./public/img/web/infraestructura/fachada.png") no-repeat 50% 50% / cover;
        }

        .swiper-slide--two {
            background: linear-gradient(to top, #0f2027, #203a4300, #2c536400),
                url("./public/img/web/infraestructura/primaria.jpg") no-repeat 50% 50% / cover;
        }

        .swiper-slide--three {
            background: linear-gradient(to top, #0f2027, #203a4300, #2c536400),
                url("./public/img/web/infraestructura/secunadria.jpg") no-repeat 50% 50% / cover;
        }

        .swiper-slide--four {
            background: linear-gradient(to top, #0f2027, #203a4300, #2c536400),
                url("./public/img/web/infraestructura/capilla.jpg") no-repeat 50% 50% / cover;
        }

        .swiper-slide--five {
            background: linear-gradient(to top, #0f2027, #203a4300, #2c536400),
                url("./public/img/web/infraestructura/capilla2.jpg") no-repeat 50% 50% / cover;
        }

        /* 
        .swiper-slide--six {
            background: linear-gradient(to top, #0f2027, #203a4300, #2c536400),
                url("./public/img/web/infraestructura/grass_sintetico1.jpg") no-repeat 50% 50% / cover;
        }

        .swiper-slide--seven {
            background: linear-gradient(to top, #0f2027, #203a4300, #2c536400),
                url("./public/img/web/infraestructura/grass_sintetico2.JPG") no-repeat 50% 50% / cover;
        }

        .swiper-slide--eight {
            background: linear-gradient(to top, #0f2027, #203a4300, #2c536400),
                url("./public/img/web/infraestructura/grass_sintetico3.jpg") no-repeat 50% 50% / cover;
        } */

        .swiper-3d .swiper-slide-shadow-left,
        .swiper-3d .swiper-slide-shadow-right {
            background-image: none;
        }

        .swiper-pagination-clickable .swiper-pagination-bullet {
            cursor: pointer;
            width: 10px;
            height: 10px;
        }

        .swiper-pagination-bullet,
        .swiper-pagination-bullet-active {
            background: #000;
        }

        @media only screen and (max-width:750px) {
            h2 {
                font-size: 2rem !important;
            }
        }
    </style>

    <?php include_once './partials/header2.php'; ?>

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

    <section class="container-fluid py-5" id="content-infraestructura">
        <div class="container-fluid">
            <div class="row justify-content-center mt-5" data-aos="zoom-in" data-aos-duration="1500">
                <div class="col-lg-8">
                    <h2 class="text-center" style="color:var(--color1);font-weight:bold;">Infraestructura</h2>
                    <div class="separador mx-auto"></div>
                    <!-- <br>
                    <p style="text-align: center;">
                        Nuestra Institución educativa cuenta con 2,000 m2, con una estructura nueva y amplias aulas para estudios, las mismas que se encuentran equipadas con equipo de cómputo, proyector, para sus clases audio visuales, contamos con cancha de Grass sintético, laboratorio de informática, laboratorio de ciencias, a fin de favorecer la formación de nuestros estudiantes y el desarrollo de su creatividad.
                    </p> -->
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid " id="parrafo">
            <div class="contianer-fluid">
                <div class="row justify-content-center mt-5" data-aos="zoom-in" data-aos-duration="1500">
                    <div class="col-lg-8">
                        <p>
                            La infraestructura de CEPMA Breña, reúne áreas de carácter monumental y espacios modernos, Nuestra Capilla y el pabellón de Primaria resultan siendo el área monumental, y el resto de las instalaciones son espacios más modernos, sin embargo, todas las instalaciones del Colegio están diseñadas exclusivamente para la labor educativa.
                        </p>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a class="btn-history" href="./public/files/inicio_de_capilla_brenia.pdf" target="_blank">Ver historia</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <br>
        <div class="container">
            <div class="swiper" data-aos="zoom-in" data-aos-duration="1500">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide--one">
                        <div class="foto" onclick="openModal(0)"> <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg> VER FOTO
                        </div>
                        <span style="background: var(--color1);">CEPMA - BREÑA</span>
                        <div>
                            <h2>Fachada</h2>
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                Lima
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide--two">
                        <div class="foto" onclick="openModal(1)"> <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg> VER FOTO
                        </div>
                        <span style="background: var(--color1);">CEPMA - BREÑA</span>
                        <div>
                            <h2>Nivel Primaria</h2>
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                Lima
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide--three">
                        <div class="foto" onclick="openModal(2)"> <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg> VER FOTO
                        </div>
                        <span style="background: var(--color1);">CEPMA - BREÑA</span>
                        <div>
                            <h2>Nivel Secundaria</h2>
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                Lima
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide--four">
                        <div class="foto" onclick="openModal(3)"> <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg> VER FOTO
                        </div>
                        <span style="background: var(--color1);">CEPMA - BREÑA</span>
                        <div>
                            <h2>Capilla 1</h2>
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                Lima
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide--five">
                        <div class="foto" onclick="openModal(4)"> <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg> VER FOTO
                        </div>
                        <span style="background: var(--color1);">CEPMA - BREÑA</span>
                        <div>
                            <h2>Capilla 2</h2>
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                Lima
                            </p>
                        </div>
                    </div>
                    <!-- <div class="swiper-slide swiper-slide--six">
                        <div class="foto" onclick="openModal(5)"> <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg> VER FOTO
                        </div>
                        <span style="background: var(--color1);">CEPMA - BREÑA</span>
                        <div>
                            <h2>Campo de Grass Síntetico</h2>
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                Lima
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide--seven">
                        <div class="foto" onclick="openModal(6)"> <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg> VER FOTO
                        </div>
                        <span style="background: var(--color1);">CEPMA - BREÑA</span>
                        <div>
                            <h2>Campo de Grass Síntetico</h2>
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                Lima
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide--eight">
                        <div class="foto" onclick="openModal(7)"> <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg> VER FOTO
                        </div>
                        <span style="background: var(--color1);">CEPMA - BREÑA</span>
                        <div>
                            <h2>Campo de Grass Síntetico</h2>
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                Lima
                            </p>
                        </div>
                    </div> -->
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>

            <!-- <div class="row justify-content-center mt-5" data-aos="zoom-in" data-aos-duration="1500">
                <div class="col-lg-8">
                    <h2 class="text-center" style="color:var(--color3);font-weight:bold;"> Ambientes de la Institución </h2>
                    <div class="separador mx-auto"></div>
                </div>
            </div>
            <br>
            <br>
            <div class="row justify-content-center ambientes" data-aos="zoom-in" data-aos-duration="1500">
                <div class="col-lg-3">
                    <div class="d-flex align-items-center my-3">
                        <i class="fas fa-check-double"></i>
                        <p class="mb-0 ms-2"> Hall.</p>
                    </div>
                    <div class="d-flex align-items-center my-3">
                        <i class="fas fa-check-double"></i>
                        <p class="mb-0 ms-2"> Patio Inicial.</p>
                    </div>
                    <div class="d-flex align-items-center my-3">
                        <i class="fas fa-check-double"></i>
                        <p class="mb-0 ms-2"> Aula de informática de primaria.</p>
                    </div>
                    <div class="d-flex align-items-center my-3">
                        <i class="fas fa-check-double"></i>
                        <p class="mb-0 ms-2"> Aula de Psicomotricidad.</p>
                    </div>
                    <div class="d-flex align-items-center my-3">
                        <i class="fas fa-check-double"></i>
                        <p class="mb-0 ms-2"> Laboratorio de Ciencias de Primaria.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex align-items-center my-3">
                        <i class="fas fa-check-double"></i>
                        <p class="mb-0 ms-2"> Laboratorio de Ciencias de Secundaria.</p>
                    </div>
                    <div class="d-flex align-items-center my-3">
                        <i class="fas fa-check-double"></i>
                        <p class="mb-0 ms-2"> Biblioteca.</p>
                    </div>
                    <div class="d-flex align-items-center my-3">
                        <i class="fas fa-check-double"></i>
                        <p class="mb-0 ms-2"> Tópico de Enfermería.</p>
                    </div>
                    <div class="d-flex align-items-center my-3">
                        <i class="fas fa-check-double"></i>
                        <p class="mb-0 ms-2"> Auditorio.</p>
                    </div>
                    <div class="d-flex align-items-center my-3">
                        <i class="fas fa-check-double"></i>
                        <p class="mb-0 ms-2"> Oratorio.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex align-items-center my-3">
                        <i class="fas fa-check-double"></i>
                        <p class="mb-0 ms-2"> Patio Principal.</p>
                    </div>
                    <div class="d-flex align-items-center my-3">
                        <i class="fas fa-check-double"></i>
                        <p class="mb-0 ms-2"> Coliseo Deportivo.</p>
                    </div>
                    <div class="d-flex align-items-center my-3">
                        <i class="fas fa-check-double"></i>
                        <p class="mb-0 ms-2"> Concesionaria del Kiosko.</p>
                    </div>
                    <div class="d-flex align-items-center my-3">
                        <i class="fas fa-check-double"></i>
                        <p class="mb-0 ms-2"> Comedor de Estudiantes.</p>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <!-- Modal detalle -->
    <div class="modal fade" id="modalDetalle" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <h4 class="modal-title fw-bold" style="color: var(--color5);">DETALLE DEL TALLER</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> -->
                <div class="modal-body px-4" id="detailbody">
                </div>
            </div>
        </div>
    </div>



    <br>
    <br>
    <br>

    <?php include_once './partials/footer.php'; ?>

</body>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".swiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 3,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 2,
            slideShadows: true
        },
        keyboard: {
            enabled: true
        },
        mousewheel: {
            thresholdDelta: 70
        },
        spaceBetween: 60,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        }
    });
</script>

<script>
    // MODAL

    var modal = new bootstrap.Modal(document.getElementById('modalDetalle'));
    const arraybooks = [{
            "portada": `<img src="./public/img/web/infraestructura/fachada.png" alt="img01" width="100%">`,
        },
        {
            "portada": `<video width="100%" controls autoplay muted>
                    <source src="./public/img/web/infraestructura/primaria.mp4" type="video/mp4">
                    Tu navegador no soporta la reproducción de video.
                </video>`,
        },
        {
            "portada": `<video width="100%" controls autoplay muted>
                    <source src="./public/img/web/infraestructura/secundaria.mp4" type="video/mp4">
                    Tu navegador no soporta la reproducción de video.
                </video>`,
        },
        {
            "portada": `<video width="100%" controls autoplay muted>
                    <source src="./public/img/web/infraestructura/capilla-1.mp4" type="video/mp4">
                    Tu navegador no soporta la reproducción de video.
                </video>`,
        },
        {
            "portada": `<img src="./public/img/web/infraestructura/capilla_2.jpg" alt="img01" width="100%">`,
        }
        /* 
        {
            "portada": `<img src="./public/img/web/infraestructura/grass_sintetico1.jpg" alt="img01" width="100%">`,
        },
        {
            "portada": `<img src="./public/img/web/infraestructura/grass_sintetico2.jpg" alt="img01" width="100%">`,
        },
        {
            "portada": `<img src="./public/img/web/infraestructura/grass_sintetico3.jpg" alt="img01" width="100%">`,
        } */
    ]

    function openModal(index) {
        let book = arraybooks[index];
        template(book.portada);
        modal.show();
    }

    function template(portada) {
        let html = `
        ${portada} `;
        document.getElementById("detailbody").innerHTML = html;
    }
</script>

<!-- footer -->
<?php include_once './partials/footer.php'; ?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>



</html>