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

        /* Contenedor estilo diploma */
        .elite-container {
            width: 100%;
            max-width: 900px;
            background: white;
            border-radius: 8px;
            box-shadow:
                0 10px 30px rgba(0, 31, 63, 0.08),
                0 6px 12px rgba(0, 31, 63, 0.05);
            overflow: hidden;
            border: 1px solid rgba(0, 31, 63, 0.1);
            position: relative;
        }

        /* Detalle de lujo superior */
        .elite-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(to right, var(--color2), var(--color4));
        }

        /* Encabezado institucional */
        .elite-header {
            padding: 1.8rem 2.5rem;
            background-color: var(--color1);
            color: white;
            text-align: center;
            border-bottom: 1px solid rgba(212, 175, 55, 0.3);
        }

        .elite-header h1 {
            margin: 0;
            font-weight: 500;
            font-size: 1.8rem;
            letter-spacing: 0.5px;
        }

        .elite-header p {
            margin: 0.5rem 0 0;
            opacity: 0.9;
            font-size: 0.9rem;
        }

        /* Tabla de plan de estudios */
        .elite-plan {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        /* Encabezados de columnas */
        .elite-plan thead th {
            padding: 1.2rem 0.5rem;
            text-align: center;
            font-weight: 600;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--slate);
            background-color: var(--pearl);
            border-bottom: 2px solid rgba(112, 128, 144, 0.2);
            position: sticky;
            top: 0;
        }

        /* Celdas de contenido */
        .elite-plan tbody td {
            padding: 0.5rem 0.5rem;
            border-bottom: 1px solid rgba(112, 128, 144, 0.1);
            font-size: 0.85rem;
            vertical-align: middle;
            text-align: center;
            transition: all 0.2s ease;
        }

        /* Columna de áreas curriculares */
        .area-curricular {
            text-align: left;
            padding-left: 1.5rem;
            font-weight: 500;
            color: var(--navy);
            width: 35%;
        }

        /* Estilos para diferentes tipos de áreas */
        .core-subject {
            background-color: rgba(0, 31, 63, 0.03);
            font-weight: 500;
        }

        .important-subject {
            background-color: rgba(65, 105, 225, 0.05);
        }

        .special-subject {
            background-color: rgba(34, 139, 34, 0.05);
        }

        .total-row {
            background-color: rgba(212, 175, 55, 0.08);
            font-weight: 600;
        }

        /* Efectos de interacción */
        .elite-plan tbody tr:hover td {
            background-color: rgba(0, 31, 63, 0.03);
        }

        /* Pie de tabla institucional */
        .elite-footer {
            padding: 1.2rem;
            text-align: center;
            font-size: 0.75rem;
            color: var(--slate);
            border-top: 1px solid rgba(112, 128, 144, 0.1);
            background-color: var(--pearl);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .elite-container {
                border-radius: 0;
            }

            .area-curricular {
                font-size: 0.8rem;
                padding-left: 0.8rem;
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

    <section class="py-5">
        <div class="container py-1">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-6">

                    <div class="mx-5">
                        <h1 class="text-start" style="color:black;">Nivel Primaria</h1>
                        <div class="separador mx-start"></div>
                        <br>
                        <p>En el nivel Primaria, acompañamos a nuestras estudiantes en el descubrimiento de sus habilidades con un enfoque integral. Nuestro proceso de trabajo se basa en:</p>
                        <br>
                        <div class="row">
                            <div class="col-lg">
                                <p><i class="fas fa-check" style="color:var(--color4);font-weight:bold;"></i>&nbsp;Aprendizaje activo y significativo, mediante proyectos, juegos y dinámicas que fortalecen la comprensión.</p>
                                <p><i class="fas fa-check" style="color:var(--color4);font-weight:bold;"></i>&nbsp;Acompañamiento personalizado, promoviendo la autonomía y el desarrollo emocional.</p>
                                <p><i class="fas fa-check" style="color:var(--color4);font-weight:bold;"></i>&nbsp;Formación en valores, inspirada en el carisma salesiano, fomentando la empatía, la solidaridad y el respeto.</p>
                                <p><i class="fas fa-check" style="color:var(--color4);font-weight:bold;"></i>&nbsp;Uso de herramientas digitales, que complementan las clases presenciales y refuerzan la participación.</p>
                            </div>

                            <!-- <div class="col-lg">
                            <p style="font-size:.9rem;text-align:center;"><i class="fas fa-check" style="color:#F15F14;font-weight:bold;"></i>&nbsp;Comunicación</p>
                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center my-auto">
                    <div>
                        <img src="./public/img/web/primaria_ok.jpg" class="w-100" style="border-radius: 10px;" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 d-flex justify-content-center align-items-center mx-auto">
                    <div class="elite-container">
                        <div class="elite-header">
                            <h1>Plan de Estudios</h1>
                           <!--  <p>Educación Primaria • Ciclo Lectivo 2024</p> -->
                        </div>

                        <table class="elite-plan">
                            <thead>
                                <tr>
                                    <th rowspan="2" style="width: 35%; text-align: left; padding-left: 1.5rem; text-align:center;">Áreas Curriculares</th>
                                    <th colspan="6" style="text-align:center;">NÚMERO DE HORAS / GRADO DE ESTUDIO</th>
                                </tr>
                                <tr>
                                    <th>1°</th>
                                    <th>2°</th>
                                    <th>3°</th>
                                    <th>4°</th>
                                    <th>5°</th>
                                    <th>6°</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="area-curricular core-subject">MATEMÁTICA</td>
                                    <td class="core-subject">7</td>
                                    <td class="core-subject">7</td>
                                    <td class="core-subject">7</td>
                                    <td class="core-subject">7</td>
                                    <td class="core-subject">7</td>
                                    <td class="core-subject">7</td>
                                </tr>
                                <tr>
                                    <td class="area-curricular core-subject">COMUNICACIÓN</td>
                                    <td class="core-subject">8</td>
                                    <td class="core-subject">8</td>
                                    <td class="core-subject">8</td>
                                    <td class="core-subject">8</td>
                                    <td class="core-subject">8</td>
                                    <td class="core-subject">8</td>
                                </tr>
                                <tr>
                                    <td class="area-curricular important-subject">CIENCIA Y TECNOLOGÍA</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td class="area-curricular important-subject">PERSONAL SOCIAL</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td class="area-curricular special-subject">ED. RELIGIOSA</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td>2</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td class="area-curricular">EDUCACIÓN FÍSICA</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td class="area-curricular">ARTE Y CULTURA</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td class="area-curricular important-subject">IDEUMAS</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td class="area-curricular">EPT</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td class="area-curricular">GRUPO ESP*</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td class="area-curricular">TOE</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td class="area-curricular total-row">TOTAL</td>
                                    <td class="total-row">40</td>
                                    <td class="total-row">40</td>
                                    <td class="total-row">40</td>
                                    <td class="total-row">40</td>
                                    <td class="total-row">40</td>
                                    <td class="total-row">40</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="elite-footer">
                            <p>(*) EPT. Formación con certificación técnica de acuerdo y en línea al perfil de egreso del MINEDU que le permitirá gestionar proyectos de emprendimiento económico o social.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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