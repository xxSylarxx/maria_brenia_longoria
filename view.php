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

        .button5 {
            background-color: var(--color1);
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition: transform .3s ease-in-out;
        }

        .button5:hover {
            background-color: var(--color1);
            transform: scale(1.06);
        }

        .lista {
            margin-top: 8rem;
            margin-bottom: 5rem;
        }

        .lista .card {
            transition: transform .3s ease-in-out;
        }

        .lista .card:hover {
            transform: scale(1.06);
        }

        .list-group .list-group-item:hover {
            background: var(--color2);
            /* color: #fff; */
        }

        .text {
            margin-top: 1rem;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-align: justify;
            color: #555;
            font-size: 17px;
            line-height: 1.6;
        }

        .btn1 {
            background-color: var(--color1);
            padding: .8rem 1rem;
            font-weight: 600;
            border-radius: 0;
            width: 200px;
            text-align: center;
        }

        .btn1 a {
            color: #FFF;
        }

        .btn1:hover {
            background-color: var(--color2);
            color: var(--color2);
        }

        .btn1:hover a {
            color: #000;
        }

        .btn {
            background-color: var(--color1);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            transition: .3s;
        }

        .btn:hover {
            color: var(--color5);
        }

        strong {
            font-weight: bold;
        }

        @media (max-width: 750px) {
            .redes iframe {
                display: none;
            }
        }
    </style>
    <section class="container lista">
        <!-- <div>
            <ol class="breadcrumb bg-white pl-0">
                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Entrevista</a></li>
            </ol>
        </div> -->
        <div class="row justify-content-between mt-4">
            <div class="col-lg">
                <?php include_once 'pastoral/pastoral' . $_GET['id'] . '.php' ?>
                <div class="col-md text-center">
                    <button class="btn" onclick="window.history.back()">Ver Más</button>
                </div>
            </div>

        </div>

    </section>


    <!-- footer -->
    <?php include_once './partials/footer.php'; ?>
</body>