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

       /*  #metodologia img {
            width: 100%;
        } */

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
    <br>
    <section id="metodologia">
        <div class="container">
            <div class="row">
                <div class="col-lg ">
                    <div style="text-align:center;">
                        <h2>Pastoral</h2>
                    </div>
                    <div class="separador mx-auto"></div>
                    <br>
                    <p>En el Colegio María Auxiliadora de Breña, la Pastoral Juvenil es una expresión concreta de nuestra misión educativa salesiana. Inspirada en el carisma de Don Bosco y Madre Mazzarello, busca el crecimiento integral de nuestras estudiantes, guiándolas hacia una ciudadanía activa y comprometida con los valores del Evangelio.</p>
                    <p>Nuestra propuesta pone a Cristo en el centro, promoviendo un encuentro personal con Él y fortaleciendo la fe a través del anuncio explícito, el diálogo con la realidad actual y el acompañamiento cercano. Atendemos los desafíos del mundo actual como la familia, la pobreza, la libertad, la paz, el medio ambiente y la espiritualidad juvenil, con una mirada esperanzadora y transformadora.</p>
                </div>

            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container py-1">
            <div class="row ">
                <div class="col-lg-6 ">

                    <div class="mx-5">
                        <!-- <h1 class="text-start" style="color:black;">Nivel Primaria</h1>
                        <div class="separador mx-start"></div>
                        <br>
                        <p>En el nivel Primaria, acompañamos a nuestras estudiantes en el descubrimiento de sus habilidades con un enfoque integral. Nuestro proceso de trabajo se basa en:</p>
                        <br> -->
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg">
                                <p><i class="fas fa-check" style="color:var(--color4);font-weight:bold;"></i>&nbsp;El acompañamiento personalizado, basado en la dulzura, la confianza y la alegría.</p>
                                <p><i class="fas fa-check" style="color:var(--color4);font-weight:bold;"></i>&nbsp;El discernimiento vocacional, ayudando a las jóvenes a descubrir su propósito y misión en la vida.</p>
                                <p><i class="fas fa-check" style="color:var(--color4);font-weight:bold;"></i>&nbsp;La Educación Religiosa Escolar (ERE), que fortalece su dimensión espiritual y su visión crítica del mundo.</p>
                                <p><i class="fas fa-check" style="color:var(--color4);font-weight:bold;"></i>&nbsp;La experiencia grupal, como espacio de crecimiento, protagonismo, compromiso y vida comunitaria.</p>
                            </div>
                            <!-- <div class="col-lg">
                            <p style="font-size:.9rem;text-align:center;"><i class="fas fa-check" style="color:#F15F14;font-weight:bold;"></i>&nbsp;Comunicación</p>
                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center my-auto">
                    <div>
                        <img src="./public/img/web/pastoral.jpg" class="img-fluid" style="border-radius: 10px;" alt="">
                    </div>
                </div>
            </div>
            <br><br>
            <div class="d-flex justify-content-center">
                <p>A través de estas acciones, nuestra pastoral forma jóvenes líderes, libres, solidarias y comprometidas con una sociedad más justa, humana y cristiana.</p>
            </div>
        </div>
    </section>
    <section id="noticias">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div style="text-align:start;">
                            <h2>Galería</h2>
                            <div class="separador mx-start"></div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <style>
                    .card-galeria {
                        background-color: rgba(0, 0, 0, 0.03);
                        border-radius: 10px;
                        box-shadow: 0 0 30px rgba(0, 0, 0, 0.18);
                    }

                    .container-galeria {
                        position: relative;
                        clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
                    }

                    #portada-galeria {
                        width: 100%;
                        display: block;
                        border-radius: 10px 10px 0 0;
                    }

                    .container-galeria:after {
                        content: "";
                        height: 100%;
                        width: 100%;
                        position: absolute;
                        top: 0;
                        left: 0;
                        border-radius: 10px 10px 0 0;
                        opacity: 0.7;
                    }

                    /* .card1>.container-galeria:after {
                        background-image: linear-gradient(135deg, var(--color1), var(--color1));
                    }

                    .card2>.container-galeria:after {
                         background-image: linear-gradient(135deg, var(--color1), var(--color1));
                    }

                    .card3>.container-galeria:after {
                        background-image: linear-gradient(135deg, var(--color1), var(--color1));
                    } */

                    .details {
                        padding: 20px 10px;
                    }

                    .details h3 {
                        color: var(--color1);
                        font-weight: 600;
                        font-size: 18px;
                        margin: 10px 0 15px 0;
                    }

                    .details p {
                        color: #a0a0a0;
                        font-size: 15px;
                        line-height: 30px;
                        font-weight: 400;
                    }
                </style>
                <div class="row cards d-flex justify-content-center align-items-center">
                    <div class="col-lg-4 pt-5">
                        <div class=" card-galeria card1">
                            <div class="container-galeria">
                                <img id="portada-galeria" src="./public/img/galeria/p1_galeria.jpeg" alt="galeria">
                            </div>
                            <div class="details">
                                <div class="row d-flex">
                                    <div class="col-lg-5">
                                        <h3>Comunión</h3>
                                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p> -->
                                        <a class="btn" href="./view.php?id=1">Ver Más</a>
                                    </div>
                                    <div class="col-lg-6 d-flex justify-content-end align-items-center">
                                        <img src="./public/img/icons/pastoral.png" width="35%" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pt-5">
                        <div class="card-galeria card2">
                            <div class="container-galeria">
                                <img id="portada-galeria" src="./public/img/galeria/p2_galeria.jpg" alt="galeria">
                            </div>
                            <div class="details">
                                <div class="row d-flex">
                                    <div class="col-lg-5">
                                        <h3>Confirmación</h3>
                                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p> -->
                                        <a class="btn" href="./view.php?id=2">Ver Más</a>
                                    </div>
                                    <div class="col-lg-6 d-flex justify-content-end align-items-center">
                                        <img src="./public/img/icons/pastoral.png" width="35%" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pt-5">
                        <div class="card-galeria card3">
                            <div class="container-galeria">
                                <img id="portada-galeria" src="./public/img/galeria/p3_galeria.jpg" alt="galeria">
                            </div>
                            <div class="details">
                                <div class="row d-flex">
                                    <div class="col-lg-5">
                                        <h3>Retiro</h3>
                                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p> -->
                                        <a class="btn" href="./view.php?id=3">Ver Más</a>
                                    </div>
                                    <div class="col-lg-6 d-flex justify-content-end align-items-center">
                                        <img src="./public/img/icons/pastoral.png" width="35%" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row" style="padding-left:8%;padding-right:8%;">

                <div class="col-md-4 px-3 my-3">
                    <a href="view2.php?id=12">
                        <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                            <span class="news">Noticias</span>
                            <img src="./public/img/galeria/calendario_octubre.jpg" width="100%" height="300">

                            <div class="card-body">

                                <h5 class="fw-bold text-uppercase text-warning" style="font-size: 18px;">CALENDARIO OCTUBRE 2022</h5>

                                <div class="detalle">

                                    ¡Compartimos nuestro calendario 2022!
                                </div>

                            </div>

                            <div class="card-footer text-info" style="background: transparent; font-size: 16px;">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>

                                <span class="ms-2">11-10-2022</span>

                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-md-4 px-3 my-3">
                    <a href="view2.php?id=11">
                        <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                            <span class="news">Noticias</span>
                            <img src="./public/img/galeria/reconocimiento_carlos.jpg" width="100%" height="300">

                            <div class="card-body">

                                <h5 class="fw-bold text-uppercase text-warning" style="font-size: 18px;">RECONOCIMIENTO</h5>

                                <div class="detalle">

                                    ¡Reconocimiento a nuestro alumno Carlos Santivañez, por su esfuerzo y dedicación. ¡Le deseamos todos los éxitos!
                                </div>

                            </div>

                            <div class="card-footer text-info" style="background: transparent; font-size: 16px;">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>

                                <span class="ms-2">10-10-2022</span>

                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-md-4 px-3 my-3">
                    <a href="view2.php?id=10">
                        <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                            <span class="news">Noticias</span>
                            <img src="./public/img/galeria/calendario_setiembre.jpg" width="100%" height="300">

                            <div class="card-body">

                                <h5 class="fw-bold text-uppercase text-warning" style="font-size: 18px;">CALENDARIO SETIEMBRE 2022</h5>

                                <div class="detalle">

                                    ¡Compartimos nuestro calendario 2022!
                                </div>

                            </div>

                            <div class="card-footer text-info" style="background: transparent; font-size: 16px;">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>

                                <span class="ms-2">02-09-2022</span>

                            </div>

                        </div>
                    </a>
                </div>
            </div> -->
        </div>
    </section>
    <br>
    <br>
    <?php include_once  './partials/footer.php'; ?>
</body>