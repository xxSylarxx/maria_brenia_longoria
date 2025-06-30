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
            font-family: 'Roboto Slab', serif;
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

    <section id="p-historia">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-12">
                    <center><img src="./public/img/icons/logo.png" style="height:100px;" alt=""></center>
                    <br>
                    <p style="font-size:3rem;text-align:center;">La voz de nuestra comunidad</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row py-5">
                <div class="col-lg-6 px-2 my-auto">

                    <p style="font-size:1.4rem;text-align:center;font-weight:bold;color:var(--color1);">¡Un placer saludarles! Soy estudiante del 5to año y actual Alcaldesa General.</p>

                    <p>
                        Mi experiencia en el colegio trasciende lo académico. Vivo los principios salesianos día a día que tanto profesores, administrativos y compañeras reflejan. 'Buenas cristianas y honradas ciudadanas' es el lema que rige nuestra institución y que nos guía en la construcción de un futuro basado en principios sólidos y en un compromiso con la comunidad. Personalmente, mi segundo hogar, al que entré de la mano de María ha sido el caldo de cultivo donde he podido desarrollar habilidades blandas, artísticas y cognitivas que valoro profundamente, pues le dan un sentido directo y sempiterno a mi vida. Gracias a mi colegio, me llevo mucho más que conocimientos; llevo el amor que forjé a María y los valores que me acompañarán toda la vida.
                    </p>


                </div>
                <div class="col-lg-6 px-2 my-auto">
                    <div class="d-flex justify-content-center">
                        <img src="./public/img/web/testimonio1_lucina.jpg" class="img-fluid" style="border-radius:8px;" alt="">
                    </div>
                    <div class="pt-3">
                        <p style="font-weight: 600;text-align:center;"><em>Luciana Velásquez estudiante 5to de secundaria</em></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid" style="background-color: var(--color1);">
            <div class="container">
                <div class="row py-5">
                    <div class="col-lg-6 px-5 my-auto">
                        <div class="d-flex justify-content-center">
                        <img src="./public/img/web/testimonio2_marly.jpg" style="border-radius:8px;width:70%;" alt="">
                    </div>
                    <div class="pt-3">
                        <p style="font-weight: 600;text-align:center;color:var(--color5);"><em>Marly Zavaleta estudiante de 5to año de secundaria</em></p>
                    </div>
                    </div>
                    <div class="col-lg-6 px-5 my-auto">
                       <p class="text-white">Con el corazón lleno de gratitud, quiero expresar lo que han significado para mí estos 11 años en la casa de María, nuestra madre. Desde que llegué siendo apenas una niña, hasta convertirme hoy en brigadier general en mi último año de colegio, he vivido un camino lleno de aprendizajes, amistades, valores y experiencias que me han formado no solo como estudiante, sino como persona.</p>
                       <p class="text-white">Ser brigadier general no ha sido solo un honor, sino una gran responsabilidad. Procurando siempre servir con alegría, disciplina y compromiso, sabiendo que este rol no era solo un reconocimiento, sino una oportunidad para aportar al bienestar de toda la comunidad educativa.</p>

                    </div>
                </div>
            </div>
        </div>

      <div class="container">
            <div class="row py-5">
                <div class="col-lg-6 px-2 my-auto">

                    <p>En mi Colegio he aprendido muchas cosas, en mis clases, en las actividades salesianas; buscando ser una mejor persona.</p>
                    <p>Mis educadores y las Hermanas siempre me enseñan con mucho cariño a ser responsable, a no rendirme y a trabajar bien en equipo. Me gusta mucho que aprendemos valores cristianos, como ayudar a los demás, respetar y tener empatía.</p>
                    <p>Gracias a los debates, proyectos y otras actividades, he aprendido a escuchar y a dar mi opinión con confianza. Valoro la amistad y me gusta compartir con alegría.</p>
                    <p>Aún me falta vivir más momentos bonitos, pero sé que cada día en el colegio me ayuda a crecer. ¡Gracias a mi querido Colegio, por todo lo que me da!</p>


                </div>
                <div class="col-lg-6 px-2 my-auto">
                    <div class="d-flex justify-content-center">
                        <img src="./public/img/web/testimonio3_mariana.jpg" style="border-radius:8px;width:40%;" alt="">
                    </div>
                    <div class="pt-3">
                        <p style="font-weight: 600;text-align:center;"><em>Mariana Miranda estudiante de 5to de primaria</em></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <!-- <section class="container-fluid py-5" style="background-color:#F7F7F7;">
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12"><img src="./public/img/img-page/panoramica-historia.jpg" class="img-fluid" alt=""></div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <h4 style="text-align:center;">Hoy en día después de 27 años, la inspiración que nos dio origen, continúa vigente:</h4>
                    </div>
                    <br>
                    <div>
                        <h4 style="text-align:center;font-weight:bold;">“Tener siempre presente que la razón de ser del Davy College es la formación de sus alumnos”.</h4>
                    </div>
                    <br>
                    <br>
                    <div>
                        <center><img src="./public/img/img-page/davy-logo-2Recurso-4.svg" clas="img-fluid" alt="" height="80">
                    </div>
                    </center>
                    <br>
                    <br>
                    <div>
                        <p style="text-align:center;color:var(--color1);font-weight:bold;font-size:2rem;">¡Davy College, formando líderes para el mundo!</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
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