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
    <section id="propuesta">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg px-2 my-auto">
                    <div>
                        <h2 style="text-align: center; color:var(--color4)">Proceso de Admisi&oacute;n Al Colegio<br />Mar&iacute;a Auxiliadora de Bre&ntilde;a</h2>
                        <br>
                        <div style="text-align: justify;">Para acceder a una vacante en el CEP Mar&iacute;a Auxiliadora, lo invitamos a informarse de las caracter&iacute;sticas y el perfil de nuestra Instituci&oacute;n a trav&eacute;s del Bolet&iacute;n Informativo 2025, que ponemos a su disposici&oacute;n.</div>
                        <div style="text-align: justify;">&nbsp;</div>
                        <div style="text-align: justify;">Luego de informarse de nuestro servicio educativo, deber&aacute; registrar su solicitud de postulaci&oacute;n, indicando el nivel y grado, teniendo en cuenta que nuestra instituci&oacute;n ofrece dos niveles: Primaria y Secundaria.</div>
                        <div style="text-align: justify;">&nbsp;</div>
                        <div style="text-align: justify;">Deber&aacute; llenar los datos solicitados en la ficha virtual. (indicar de manera precisa sus datos de contacto como correo y tel&eacute;fonos, para que nos podamos comunicar con Uds.).</div>
                        <div style="text-align: justify;">Luego de revisar su solicitud, se les comunicar&aacute; la disponibilidad de vacantes para que puedan continuar el proceso.</div>
                        <div style="text-align: justify;">&nbsp;</div>
                        <br>
                        <h2 style="text-align: justify; color:var(--color4)">Propuesta Educativa</h2>
                        <br>
                        <div style="text-align: justify;">Nuestra propuesta educativa tiene como centro a la estudiante, porque contribuye a su bienestar reforzando su autoestima, se le acompa&ntilde;a en la consolidaci&oacute;n de su imagen positiva de s&iacute; misma con base en los valores que caracterizan a las salesianas: acogida, cercan&iacute;a, presencia, calidad educativa y desarrollo integral de la persona. Reciben una constante motivaci&oacute;n para seguir aprendiendo a trav&eacute;s de proyectos, desarrollando sus competencias y habilidades en las diferentes &aacute;reas acad&eacute;micas desde el conocimiento cient&iacute;fico y en la implementaci&oacute;n en los entornos virtuales para proyectarse a su comunidad como agentes de cambio.</div>
                        <div style="text-align: justify;">&nbsp;</div>
                        <br>
                        <h2 style="text-align: justify; color:var(--color4)">Pasos para la Admisi&oacute;n</h2>
                        <br>
                        <ol style="text-align: justify;">
                            <li>Informarse a trav&eacute;s de Bolet&iacute;n Informativo.</li>
                            <li>Realizar la inscripci&oacute;n virtual a trav&eacute;s de (https://cepma.cubicol.pe/visitante/registro-interesados).</li>
                            <li>Recibir&aacute; informaci&oacute;n acerca de la disponibilidad de vacantes, para poder continuar su proceso.</li>
                            <li>De existir una vacante, se le enviar&aacute; un correo electr&oacute;nico (mensaje whatsapp) indicando las fechas de presentaci&oacute;n de documentos y los pasos a seguir hasta su proceso</li>
                        </ol>
                        <div style="text-align: justify;">Puede escribir directamente a correo: &nbsp;admision@cepma.edu.pe, para cualquier informaci&oacute;n adicional.</div>
                        <div style="text-align: justify;">&nbsp;</div>
                        <br>
                        <h2 style="text-align: justify; color:var(--color4)">Costo del servicio educativo Estimado del a&ntilde;o 2025</h2>
                        <br>
                        <ul style="text-align: justify;">
                            <li style="text-align: justify;">Postulaci&oacute;n.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;s/.300</li>
                            <li style="text-align: justify;">Cuota de Ingreso.&nbsp; &nbsp; &nbsp; &nbsp;s/.3,000</li>
                            <li style="text-align: justify;">Matr&iacute;cula.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; s/.800</li>
                            <li style="text-align: justify;">Pensi&oacute;n Mensual.&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;s/.800</li>
                        </ul>
                        <div style="text-align: justify;">Los aportes correspondientes a las cuotas de ense&ntilde;anza est&aacute;n divididos en 10 mensualidades que van de marzo a diciembre.</div>
                    </div>
                    <br><br>
                    <div>
                        <div style="color:var(--color4)">
                            <h1><strong>PROCESO DE TRASLADO:</strong></h1>
                        </div>
                        <br>
                        <div>El procedimiento es el siguiente: El padre de familia, tutor legal o apoderado de la estudiante (debidamente acreditado), solicita por escrito a la directora del CEPMA el traslado de matr&iacute;cula y la entrega de los documentos de escolaridad del estudiante, adjuntando el documento de vacante del Colegio donde ser&aacute; trasladada la alumna.</div>
                        <div>La Direcci&oacute;n autoriza, mediante Resoluci&oacute;n Directoral, el traslado de matr&iacute;cula y la entrega de los documentos de escolaridad del estudiante, en un plazo de 72 horas de recibida la solicitud.</div>
                    </div>
                    <!-- <div class="col-lg-6 my-auto">
                    <div class="d-flex justify-content-center mx-5">
                        <img src="./public/img/galeria/psico-4.jpg" class="img-fluid" style="border-radius:8px;width:100%" alt="">
                    </div>
                </div> -->
                </div>
            </div>

    </section>
    <br>
    <br>
    <?php include_once  './partials/footer.php'; ?>
</body>

</html>