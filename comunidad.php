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
        /* #portada {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)),
                url('./public/img/portadas/portada.png');
            background-size: cover;
            background-position: center 30%;
            height: 100%;
            padding: 550px 0 10px;
        } */

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
            /* height: 210px; */
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


    <!-- <section>
        <div class="container-fluid" id="portada">
            <div class="container">
                <div class="row">
                    <div class="col-12 animate__animated animate__fadeInLeft">
                    <h2 class="page_title">NOSOTROS</h2>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item text-white">Nosotros</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section> -->
    <section id="metodologia">
        <div class="container">
            <div class="row">
                <div class="col-lg ">
                    <div style="text-align:center;">
                        <h2>COMUNIDAD RELIGIOSA</h2>
                    </div>
                    <div class="separador mx-auto"></div>
                </div>

            </div>
        </div>
        <div class="container" style="padding-bottom: 5rem;">
            <div class="row mt-5">
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sor-judith.png" alt="empresas">

                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card ">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sor-maria.png" alt="">

                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sor-nancy.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sor-paola.png" alt="">
                        </figure>
                    </div>
                </div>
            </div>



        </div>
    </section>
    <section id="metodologia">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <div style="text-align:center;">
                        <h2>COORDINACIÓN</h2>
                    </div>
                    <div class="separador mx-auto"></div>
                </div>

            </div>
        </div>
        <div class="container" style="padding-bottom: 5rem;">
            <div class="row mt-5">
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/bety-coord.png" alt="empresas">

                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card ">
                        <figure class="m-0">
                            <img src="./public/img/galeria/ruth-coord.png" alt="">

                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/edith-coord.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/dep-psico.png" alt="">
                        </figure>
                    </div>
                </div>
            </div>



        </div>
    </section>
    <section id="metodologia">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <div style="text-align:center;">
                        <h2>EDUCADORES NIVEL PRIMARIA</h2>
                    </div>
                    <div class="separador mx-auto"></div>
                </div>

            </div>
        </div>
        <div class="container" style="padding-bottom: 5rem;">
            <div class="row mt-5">
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/prim-grecia.png" alt="empresas">

                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card ">
                        <figure class="m-0">
                            <img src="./public/img/galeria/prim-paola.png" alt="">

                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/prim-greis.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/prim-mayka.png" alt="">
                        </figure>
                    </div>
                </div>
                 <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/prim-carola.png" alt="">
                        </figure>
                    </div>
                </div>
                 <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/prim-dora.png" alt="">
                        </figure>
                    </div>
                </div>
                 <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/prim-nayroby.png" alt="">
                        </figure>
                    </div>
                </div>
                 <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/prim-adriana.png" alt="">
                        </figure>
                    </div>
                </div>
                 <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/prim-lourdes.png" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="metodologia">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <div style="text-align:center;">
                        <h2>EDUCADORES NIVEL SECUNDARIA</h2>
                    </div>
                    <div class="separador mx-auto"></div>
                </div>

            </div>
        </div>
        <div class="container" style="padding-bottom: 5rem;">
            <div class="row mt-5">
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/menendez-sec.png" alt="empresas">

                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card ">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sec-alessandra.png" alt="">

                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sec-betty.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sec-candia.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sec-carlos.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sec-chavez.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sec-chira.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sec-consuelo.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sec-delacruz.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sec-edith.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sec-elias.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sec-elida.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sec-erickson.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sec-fiorella.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sec-gian-maria.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sec-limache.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sec-loyo.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sec-marleny.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sec-mercedes.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sec-omar.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sec-paola.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <figure class="m-0">
                            <img src="./public/img/galeria/sec-samaniego.png" alt="">
                        </figure>
                    </div>
                </div>


            </div>



        </div>
    </section>
    <br>
    <br>
    <?php include_once  './partials/footer.php'; ?>
</body>



</html>