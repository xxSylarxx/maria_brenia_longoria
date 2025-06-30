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

        /* Header escolar */
        .school-header {
            background-color: var(--color1);
            color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Hero section */
        .hero {
            background: linear-gradient(rgba(26, 82, 118, 0.85), rgba(26, 82, 118, 0.8)),
                url('https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-4.0.3&auto=format&fit=crop&w=1472&q=80') center/cover;
            color: white;
            padding: 5rem 0;
        }

        /* Tarjetas de elencos */
        .ensemble-card {
            transition: transform 0.3s ease;
            border-top: 4px solid var(--color2);
            height: 100%;
            /*  border-radius: 10px; */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .ensemble-card:hover {
            transform: translateY(-5px);
        }

        .ensemble-img {
            height: 200px;
            overflow: hidden;

        }

        .ensemble-img img {
            object-fit: cover;
            width: 100%;
            height: 100%;
            transition: transform 0.5s ease;
            /* border-top-left-radius: 10px;
            border-top-right-radius: 10px; */
        }

        .ensemble-card:hover .ensemble-img img {
            transform: scale(1.05);
        }

        /* Talleres */
        .workshop-category {
            border-bottom: 4px solid var(--color1);
            height: 100%;
        }

        .workshop-category h4 i {
            color: var(--color2);
        }

        .workshop-list li {
            border-bottom: 1px solid #f0f0f0;
            padding: 12px 0;
        }

        .workshop-list li:last-child {
            border-bottom: none;
        }

        .workshop-list li i {
            color: var(--color3);
        }

        /* Beneficios */
        .benefit-icon {
            background-color: rgba(39, 174, 96, 0.1);
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            color: var(--accent);
            font-size: 1.8rem;
        }

        /* CTA */
        /* .school-cta {
            background: linear-gradient(135deg, var(--color1), #2980b9);
            color: white;
        }

        .btn-school {
            background-color: var(--color2);
            color: white;
            font-weight: 600;
            padding: 10px 25px;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-school:hover {
            background-color: #e67e22;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(243, 156, 18, 0.4);
        } */

        /* Footer */
        .school-footer {
            background-color: red;
            color: white;
        }

        /* Títulos de sección */
        .section-title {
            position: relative;
            margin-bottom: 3rem;
            text-align: center;
        }

        .section-title h3 {
            display: inline-block;
            background-color: #f5f7fa;
            padding: 0 20px;
            position: relative;
            z-index: 1;
        }

        .section-title::after {
            content: "";
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(to right, var(--color1), var(--color2));
            z-index: 0;
        }

        .cta-banner {
            background: linear-gradient(rgba(0, 86, 179, 0.9), rgba(0, 86, 179, 0.7)),
                url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') center/cover;
            color: white;
            text-align: center;
            padding: 4rem 1rem;
            margin-top: 4rem;
            border-radius: 10px;
        }

        .cta-banner h2 {
            font-size: 2.2rem;
            margin-bottom: 1.5rem;
        }

        .cta-banner p {
            max-width: 700px;
            margin: 0 auto 2rem;
            font-size: 1.1rem;
        }

        .btn {
            display: inline-block;
            background: var(--color4);
            color: var(--color5);
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }

        .btn:hover {
            background: #e0a800;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .titulo-adaptado {
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>

    <div class="container-fluid" id="portada">
            <div class="container">
                <div class="row">
                </div>
            </div>
    </div>
    <div class="container " style="padding-top:5rem;">
        <!-- Elencos Estudiantiles -->
        <section class="mb-5">
            <div class="row">
                <div class="col-lg ">
                    <div style="text-align:center;">
                        <h2>Elencos Estudiantiles</h2>
                    </div>
                    <div class="separador mx-auto"></div>
                </div>
            </div>
            <br>
            <br>
            <div class="row g-4 d-flex justify-content-center">
                <!-- Orquesta -->
                <div class="col-md-4">
                    <div class="card ensemble-card h-100">
                        <div class="ensemble-img">
                            <img src="./public/img/img-page/taller-voley.jpg" class="card-img-top" alt="Orquesta escolar">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-primary fw-bold">Vóley (varones y damas)</h4>
                            <p class="card-text">Programa musical que desarrolla talentos y disciplina a través de la práctica orquestal.</p>
                        </div>
                    </div>
                </div>

                <!-- Banda -->
                <div class="col-md-4">
                    <div class="card ensemble-card h-100">
                        <div class="ensemble-img">
                            <img src="./public/img/img-page/taller-basket2.jpg" class="card-img-top" alt="">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-primary fw-bold">Básquet inter-escolar</h4>
                            <p class="card-text">Formación en instrumentos de viento y percusión. </p>
                        </div>
                    </div>
                </div>

                <!-- Coro -->
                <div class="col-md-4">
                    <div class="card ensemble-card h-100">
                        <div class="ensemble-img">
                            <img src="./public/img/img-page/taller-ajedrez.jpeg" class="card-img-top" alt="">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-primary fw-bold">Ajedrez competitivo</h4>
                            <p class="card-text">Desarrollo vocal y auditivo para estudiantes de todos los niveles. </p>
                        </div>
                    </div>
                </div>

                <!-- Teatro -->
                <div class="col-md-4">
                    <div class="card ensemble-card h-100">
                        <div class="ensemble-img">
                            <img src="./public/img/img-page/taller-tennis-mesa.jpg" class="card-img-top" alt="">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-primary fw-bold">Tenis de Mesa</h4>
                            <p class="card-text">Taller de expresión dramática que culmina con producciones anuales abiertas a la comunidad educativa.</p>
                        </div>
                    </div>
                </div>

                <!-- Danzas -->
                <div class="col-md-4">
                    <div class="card ensemble-card h-100">
                        <div class="ensemble-img">
                            <img src="https://cdn.www.gob.pe/uploads/document/file/6288087/948733-324324.jpeg" class="card-img-top" alt="">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-primary fw-bold">Atletismo</h4>
                            <p class="card-text">Desde folclore hasta danza contemporánea. Nuestros estudiantes representan al colegio en festivales.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Talleres Educativos -->
        <section class="mb-5" style="padding-top: 4rem;">
            <div class="container">
                <div class="row">
                    <div class="col-lg ">
                        <div style="text-align:center;">
                            <h2>Elencos Estudiantiles</h2>
                        </div>
                        <div class="separador mx-auto"></div>
                    </div>
                </div>
            </div>
            <br>
            <br>

            <div class="row g-4">
                <!-- Arte y Expresión -->
                <div class="col-md-6 col-lg-3">
                    <div class="card workshop-category h-100">
                        <div class="card-body">
                            <h4 class="card-title fw-bold"><i class="fas fa-child me-2"></i>Arte y Expresión</h4>
                            <ul class="list-unstyled workshop-list">
                                <li class="py-2"><i class="fas fa-check-circle me-2"></i>Danza y Ballet (desde inicial)</li>
                                <li class="py-2"><i class="fas fa-check-circle me-2"></i>Danza contemporánea (secundaria)</li>
                                <li class="py-2"><i class="fas fa-check-circle me-2"></i>Artes plásticas y pintura</li>
                                <li class="py-2"><i class="fas fa-check-circle me-2"></i>Teatro escolar</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Desarrollo Creativo -->
                <div class="col-md-6 col-lg-3">
                    <div class="card workshop-category h-100">
                        <div class="card-body">
                            <h4 class="card-title fw-bold"><i class="fas fa-hands me-2"></i>Desarrollo Creativo</h4>
                            <ul class="list-unstyled workshop-list">
                                <li class="py-2"><i class="fas fa-check-circle me-2"></i>Tejido y manualidades</li>
                                <li class="py-2"><i class="fas fa-check-circle me-2"></i>Arte terapia emocional</li>
                                <li class="py-2"><i class="fas fa-check-circle me-2"></i>Dibujo y cómic</li>
                                <li class="py-2"><i class="fas fa-check-circle me-2"></i>Fotografía creativa</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Deportes -->
                <!-- <div class="col-md-6 col-lg-3">
                    <div class="card workshop-category h-100">
                        <div class="card-body">
                            <h4 class="card-title fw-bold"><i class="fas fa-running me-2"></i>Deportes</h4>
                            <ul class="list-unstyled workshop-list">
                                <li class="py-2"><i class="fas fa-check-circle me-2"></i>Vóley (varones y damas)</li>
                                <li class="py-2"><i class="fas fa-check-circle me-2"></i>Básquet inter-escolar</li>
                                <li class="py-2"><i class="fas fa-check-circle me-2"></i>Ajedrez competitivo</li>
                                <li class="py-2"><i class="fas fa-check-circle me-2"></i>Tenis de Mesa</li>
                                <li class="py-2"><i class="fas fa-check-circle me-2"></i>Atletismo</li>
                            </ul>
                        </div>
                    </div>
                </div> -->

                <!-- Refuerzo Académico -->
                <div class="col-md-6 col-lg-3">
                    <div class="card workshop-category h-100">
                        <div class="card-body">
                            <h4 class="card-title fw-bold"><i class="fas fa-graduation-cap me-2"></i>Refuerzo Académico</h4>
                            <ul class="list-unstyled workshop-list">
                                <li class="py-2 "><i class="fas fa-check-circle me-2"></i><span class="titulo-adaptado">MateMax: Matemáticas divertidas</span></li>
                                <li class="py-2"><i class="fas fa-check-circle me-2"></i>Club de ciencias</li>
                                <li class="py-2"><i class="fas fa-check-circle me-2"></i>Taller de lectura comprensiva</li>
                                <li class="py-2"><i class="fas fa-check-circle me-2"></i>Técnicas de estudio</li>
                                <li class="py-2"><i class="fas fa-check-circle me-2"></i>Ortografía y redacción</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card workshop-category h-100">
                        <div class="card-body">
                            <h4 class="card-title fw-bold"><i class="fas fa-running me-2"></i>Espacios de Creatividad</h4>
                            <ul class="list-unstyled workshop-list">
                                <li class="py-2"><i class="fas fa-check-circle me-2"></i>Orquesta Estudiantil</li>
                                <li class="py-2"><i class="fas fa-check-circle me-2"></i>Banda Musical</li>
                                <li class="py-2"><i class="fas fa-check-circle me-2"></i>Coro Polifónico</li>
                                <li class="py-2"><i class="fas fa-check-circle me-2"></i>Grupo de Teatro</li>
                                <li class="py-2"><i class="fas fa-check-circle me-2"></i>Taller de Danzas</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cta-banner">
            <h2>¡Inscríbete hoy y sé parte de nuestra comunidad!</h2>
            <p>Descubre tus talentos, haz nuevos amigos y desarrolla habilidades que te acompañarán toda la vida.</p>
            <a href="#" class="btn">Más información</a>
        </section>
    </div>
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