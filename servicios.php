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
    <br>
    <section id="propuesta">
        <div class="container">
            <div class="row py-4">
                <div class="col-lg-6 px-2 my-auto">
                    <h2 class="text-start" style="color:black;">Servicios</h2>
                    <div class="separador mx-start"></div>
                    <br><br>
                    <p style="font-size:1.4rem;text-align:center;font-weight:bold;color:var(--color1);">Departamento. Psicopedagógico: </p>
                    <p>
                        A cargo de tres profesionales en Psicología, cuya función es crear, aplicar e implementar programas socioemocionales, a fin de optimizar el aprendizaje de cada alumno a través del conocimiento de sus capacidades individuales y sus estilos cognitivos.
                    </p>
                    <p>
                        Asimismo, involucrar activamente a los padres de familia en la educación de sus hijos, a través de reuniones informativas de orientación y apoyo.
                    </p>
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="d-flex justify-content-center mx-5 ">
                        <img src="./public/img/galeria/psico-4_ok.jpg"  style="border-radius:8px;width:80%" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row py-4">
                <div class="col-lg-6 my-auto">
                    <div class="d-flex justify-content-center mx-5">
                        <img src="./public/img/galeria/enfermeria_ok.jpg"  style="border-radius:8px;width:80%" alt="">
                    </div>
                </div>
                <div class="col-lg my-auto">
                    <p style="font-size:1.4rem;text-align:center;font-weight:bold;color:var(--color1);">Servicio de Enfermería: </p>
                    <p>
                        Cuya atención es permanente en el caso de necesidad. Comunicando inmediatamente a la familia si fuera necesario.
                    </p>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row py-4">
                <div class="col-lg-6 px-2 my-auto">
                    <p style="font-size:1.4rem;text-align:center;font-weight:bold;color:var(--color1);">Área de Pastoral: </p>
                    <p>
                         A cargo de un equipo multidisciplinario cuya acción organizada (como parte de la iglesia) acompaña a las jóvenes a descubrir, seguir y comprometerse con Jesucristo y su mensaje, para que transformadas en jóvenes nuevas y responsables integren su fe y su vida convirtiéndose en protagonistas de su porvenir, como agentes activos de la construcción de la Civilización del Amor.
                    </p>
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="d-flex justify-content-center mx-5">
                        <img src="./public/img/galeria/servicios-pastoral_ok.jpg" style="border-radius:8px;width:80%" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row py-5">
                <div class="col-lg-6 my-auto">
                    <div class="d-flex justify-content-center mx-5">
                        <img src="./public/img/web/metodologia2.jpeg" style="border-radius:8px;width:80%" alt="">
                    </div>
                </div>
                <div class="col-lg-6 my-auto">
                    <!-- <p><b>Nuestra práctica pedagógica:</b></p> -->
                    <p style="font-size:1.4rem;text-align:center;font-weight:bold;color:var(--color1);">La tutoría se desarrolla en dos modalidades complementarias:</p>

                    <div class="row">
                        <div class="col-lg">
                            <p><i class="fas fa-check" style="color:var(--color4);font-weight:bold;"></i>&nbsp;Tutoría Grupal, donde se promueve la expresión, la reflexión sobre valores, el fortalecimiento del proyecto de vida y la construcción de vínculos entre compañeras.</p>
                            <p><i class="fas fa-check" style="color:var(--color4);font-weight:bold;"></i>&nbsp;Tutoría Individual, un espacio de acompañamiento personal, que permite a cada estudiante ser escuchada y guiada con empatía, discreción y afecto.</p>
                            <!-- <p><i class="fas fa-check" style="color:var(--color4);font-weight:bold;"></i>&nbsp;Apuesta por una enseñanza centrada en la persona, activa, participativa y vinculada a la vida real, con énfasis en el uso significativo de las TIC y metodologías innovadoras.</p> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row pb-5">
                <div class="col-lg my-auto">
                    <p>Además, se impulsa activamente el trabajo conjunto con las familias, reconociendo su rol insustituible en la educación y promoviendo un diálogo continuo que favorezca el desarrollo integral y el aprendizaje de sus hijas.</p>
                    <p>
                        Nuestra orientación tutorial busca que cada estudiante se sienta valorada, comprendida y motivada a crecer como persona libre, responsable y comprometida con una sociedad más humana y solidaria.
                    </p>

                </div>

            </div>
        </div>
    </section>
    <br>
    <br>
    <?php include_once  './partials/footer.php'; ?>
</body>

</html>