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
    <section id="metodologia">
        <div class="container">
            <div class="row">
                <div class="col-lg ">
                    <div style="text-align:center;">
                        <h2>Metodología</h2>
                    </div>
                    <div class="separador mx-auto"></div>
                    <br>
                    <p>En el Colegio María Auxiliadora de Breña, los docentes implementan una propuesta metodológica integral, centrada en el desarrollo académico y socioemocional de las estudiantes, guiándose por principios pedagógicos actuales y los lineamientos del enfoque preventivo salesiano. Esta propuesta se articula en los siguientes enfoques clave:</p>
                </div>

            </div>
        </div>
        <div class="container" style="padding-bottom: 5rem;">
            <div class="row mt-5">
                <div class="col-md mt-4">
                    <div class="card h-100">
                        <figure class="m-0">
                            <img src="./public/img/web/sistema_preventivo.jpg" alt="empresas">
                            <!-- <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                <a href="#" class="btn">Leer más</a>
                            </div> -->
                        </figure>
                        <div class="card-body">
                            <a href="" class="card-title">
                                <h5>Sistema Preventivo de Don Bosco</h5>
                            </a>
                            <div class="line"></div>
                            <br>
                            <p class="">Fundamentado en la razón y el amor, promueve el desarrollo del pensamiento crítico y la inteligencia emocional para una formación integral.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mt-4">
                    <div class="card h-100">
                        <figure class="m-0">
                            <img src="./public/img/web/aprender_haciendo.jpeg" alt="">
                            <!-- <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                <a href="#" class="btn">Leer más</a>
                            </div> -->
                        </figure>
                        <div class="card-body">
                            <a href="" class="card-title">
                                <h5>Aprender haciendo</h5>
                            </a>
                            <div class="line"></div>
                            <br>
                            <p>Favorece el aprendizaje activo, combinando experiencia, percepción, cognición y comportamiento en un enfoque holístico.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mt-4">
                    <div class="card h-100">
                        <figure class="m-0">
                            <img style="object-position: top;" src="./public/img/web/situaciones_significativas.jpeg" alt="">
                            <!-- <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                <a href="turismo.php" class="btn">Leer más</a>
                            </div> -->
                        </figure>
                        <div class="card-body">
                            <a href="" class="card-title">
                                <h5>Situaciones significativas</h5>
                            </a>
                            <div class="line"></div>
                            <br>
                            <p>Se parte de contextos relevantes para las estudiantes, fomentando el trabajo colaborativo y la participación activa.</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row mt-5">
                <div class="col-md mt-4">
                    <div class="card h-100">
                        <figure class="m-0">
                            <img src="./public/img/web/construccion_conocimiento.jpeg" alt="">
                            <!-- <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                <a href="#" class="btn">Leer más</a>
                            </div> -->
                        </figure>
                        <div class="card-body">
                            <a href="" class="card-title">
                                <h5>Construcción del conocimiento</h5>
                            </a>
                            <div class="line"></div>
                            <br>
                            <p>Se estimula la reflexión crítica, la investigación y el análisis, relacionando información con desafíos reales para fortalecer competencias.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mt-4">
                    <div class="card h-100">
                        <figure class="m-0">
                            <img src="./public/img/web/trabajo_cooperativo.jpeg" alt="empresas">
                            <!--<div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                <a href="administracionE.php" class="btn">Leer más</a>
                            </div>-->
                        </figure>
                        <div class="card-body">
                            <a href="" class="card-title">
                                <h5>Trabajo cooperativo</h5>
                            </a>
                            <div class="line"></div>
                            <br>
                            <p class="">Se fomenta el paso del trabajo grupal espontáneo al trabajo en equipo organizado, desarrollando autonomía, responsabilidad y autorregulación.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mt-4">
                    <div class="card h-100">
                        <figure class="m-0">
                            <img src="./public/img/web/trabajo_proyectos.jpg" alt="">
                            <!-- <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                <a href="administracionH.php" class="btn">Leer más</a>
                            </div> -->
                        </figure>
                        <div class="card-body">
                            <a href="" class="card-title">
                                <h5>Aprendizaje basado en proyectos</h5>
                            </a>
                            <div class="line"></div>
                            <br>
                            <p>Las estudiantes resuelven problemas del entorno mediante la investigación, el planteamiento de preguntas y la creación de productos concretos.</p>
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <div class="row mt-5 d-flex justify-content-center">
                <div class="col-md-4 mt-4">
                    <div class="card h-100">
                        <figure class="m-0">
                            <img style="object-position: top;" src="./public/img/web/trabajo_indagacion.jpeg" alt="">
                            <!-- <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                <a href="#" class="btn">Leer más</a>
                            </div> -->
                        </figure>
                        <div class="card-body">
                            <a href="" class="card-title">
                                <h5>Aprendizaje por indagación</h5>
                            </a>
                            <div class="line"></div>
                            <br>
                            <p>A través de la exploración guiada, se incentiva la participación activa y colaborativa en procesos de investigación educativa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card h-100">
                        <figure class="m-0">
                            <img src="./public/img/web/aula_invertida.jpeg" alt="empresas">
                            <!--<div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                <a href="administracionE.php" class="btn">Leer más</a>
                            </div>-->
                        </figure>
                        <div class="card-body">
                            <a href="" class="card-title">
                                <h5>Aula invertida (Flipped Classroom)</h5>
                            </a>
                            <div class="line"></div>
                            <br>
                            <p class="">Las estudiantes acceden previamente al contenido en formatos digitales adecuados a su edad, permitiendo que el aula se convierta en un espacio de análisis, práctica y profundización. Esta metodología se implementa desde la plataforma virtual del CEPMA.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="propuesta">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-6 px-2 my-auto">
                    <h2 class="text-start" style="color:black;">Propuesta pedagógica</h2>
                    <div class="separador mx-start"></div>
                    <br>
                    <p>
                        La propuesta pedagógica del Colegio María Auxiliadora de Breña se inspira en el legado de Don Bosco y Madre Mazzarello, bajo el carisma del Sistema Preventivo, donde educar es un acto de amor, cercanía y acompañamiento. Nuestra misión es educar evangelizando y evangelizar educando, formando niñas y jóvenes que sean buenas cristianas y honradas ciudadanas, capaces de transformar su entorno con fe, liderazgo y responsabilidad.
                    </p>
                    <p>
                        Esta propuesta se basa en una educación que conjuga razón, religión y amabilidad, promoviendo el desarrollo armónico de nuestras estudiantes, fortaleciendo su identidad, su fe y su compromiso social y ambiental como ciudadanas del siglo XXI.
                    </p>


                </div>
                <div class="col-lg-6 my-auto">
                    <div class="d-flex justify-content-center mx-5">
                        <img src="./public/img/web/metodologia.png" class="img-fluid" style="border-radius:8px;width:80%" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row py-5">
                <div class="col-lg-6 my-auto">
                    <div class="d-flex justify-content-center mx-5">
                        <img src="./public/img/web/metodologia2_ok.jpg" style="border-radius:8px;width:100%" alt="">
                    </div>
                </div>
                <div class="col-lg-6 my-auto">
                    <!-- <p><b>Nuestra práctica pedagógica:</b></p> -->
                    <p style="font-size:1.4rem;text-align:center;font-weight:bold;color:var(--color1);">Nuestra práctica pedagógica:</p>

                    <div class="row">
                        <div class="col-lg">
                            <p><i class="fas fa-check" style="color:var(--color4);font-weight:bold;"></i>&nbsp;Se alinea con el Currículo Nacional (CNEB) y se contextualiza a la realidad local y regional, respondiendo a las necesidades específicas de nuestras estudiantes.</p>
                            <p><i class="fas fa-check" style="color:var(--color4);font-weight:bold;"></i>&nbsp;Articula competencias, valores y aprendizajes que promueven el pensamiento crítico, el trabajo colaborativo, la creatividad, la investigación y el sentido de trascendencia.</p>
                            <p><i class="fas fa-check" style="color:var(--color4);font-weight:bold;"></i>&nbsp;Apuesta por una enseñanza centrada en la persona, activa, participativa y vinculada a la vida real, con énfasis en el uso significativo de las TIC y metodologías innovadoras.</p>
                        </div>
                    </div>
                    <p>Entendemos el aula como un espacio de encuentro entre la experiencia cotidiana y la cultura académica, donde el aprendizaje nace del interés, la reflexión y el deseo de crecer.</p>

                </div>

            </div>
        </div>
        <div class="container">
            <div class="row pb-5">
                <div class="col-lg my-auto">
                    <p>En síntesis, nuestra propuesta educativa busca formar mujeres integrales, agradecidas con la vida, comprometidas con su fe y con la transformación de su realidad, animadas siempre por el espíritu alegre, esperanzado y fraterno del carisma salesiano.</p>

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