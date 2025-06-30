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
    <link rel="stylesheet" href="./public/css/venobox.css">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/web.css">
</head>

<body>
    <script src="./public/js/popper.min.js"></script>
    <script src="./public/js/venobox.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/jquery.min.js"></script>
    <script src="./public/js/bootstrap.pooper.js"></script>
    <script src="./public/js/vue.min.js"></script>
    <style>
        #content-grid {
            columns: 2;
            column-gap: 6px;
        }

        #content-grid>div.img-links {
            -webkit-column-break-inside: avoid;
            page-break-inside: avoid;
            break-inside: avoid;
            margin-bottom: 6px;
        }

        #content-grid img {
            height: auto;
            object-fit: cover;
        }

        .breadcrumb {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: 0.75rem 1rem;
            margin-bottom: 1rem;
            list-style: none;
            background-color: #fefefe;
            border-radius: 0.25rem;
        }

        .breadcrumb a {
            color: var(--color1);
        }

        .button {
            display: inline-block;
            padding: .5em;
            background-color: #7b0000;
            text-decoration: none;
            color: white;
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
            background-color: var(--color1);
            color: var(--color2);
        }
    </style>
    <div>
        <h3 class="text-uppercase fw-bold" style="color: var(--color8);">CONFIRMACIÓN</h3>
        <p style="color: var(--color1);"> <span class="mr-3"> <i class="fas fa-calendar-alt" aria-hidden="true"></i></span> 10/01/2025</p>
        <hr style="background-color: var(--color4);">
        <section class="container-fluid lista">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div id="content-grid" class="pt-4">
                        <a class="img-links" data-gall="gallery01" title="CONFIRMACIÓN" href="./public/img/galeria/confirmacion1.jpg"><img src="./public/img/galeria/confirmacion1.jpg" class="mb-2" width="100%"></a>
                        <a class="img-links" data-gall="gallery01" title="CONFIRMACIÓN" href="./public/img/galeria/confirmacion2.jpg"><img src="./public/img/galeria/confirmacion2.jpg" class="mb-2" width="100%"></a>
                        <a class="img-links" data-gall="gallery01" title="CONFIRMACIÓN" href="./public/img/galeria/confirmacion3.jpg"><img src="./public/img/galeria/confirmacion3.jpg" class="mb-2" width="100%"></a>
                        <a class="img-links" data-gall="gallery01" title=" CONFIRMACIÓN" href="./public/img/galeria/confirmacion4.jpg"><img src="./public/img/galeria/confirmacion4.jpg" class="mb-2" width="100%"></a>
                    </div>
                </div>
            </div>

            <!--  <div class="col-md-3">

                <iframe style="border: 6px solid var(--color2); border-radius: 10px;" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FIEPBerkeleySchool&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

        </div> -->
        </section>


    </div>
    <!-- CARROUSEL -->
    <script>
        $(".owl-carousel").owlCarousel({
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
                    items: 1,
                },
                1000: {
                    items: 1,
                },
            },
        });
    </script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <script>
        new VenoBox({
            selector: '.img-links',
            numeration: true,
            infinigall: true,
            navSpeed: 300,
        });
    </script>
</body>