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

    <style>
        /* Eliminar las flechas en navegadores como Chrome, Safari y Edge */
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        #contact {
            background: #F8F9FA;
            padding-right: 4rem;
            padding-left: 4rem;
            padding-top: 7rem;
            padding-bottom: 7rem;
            font-family: "Raleway", sans-serif;
        }

        .datos {
            padding: 3rem;
            background: #FFFFFF;
        }

        .datos h3 {
            font-size: 32px;
        }

        .datos .datosList .item {
            border-bottom: 2px solid #EEEEEE;
            padding: .6rem .2rem;
            /* align-items: center; */
        }

        .datos .datosList .item span i {
            width: 16px;
            height: 16px;
        }

        .datos .datosList h5 {
            margin-left: 1rem;
            font-size: 16px;
        }

        /*   .form-control {
            background: #FFFEF4;
             color: #CCCCCC;
        } */
        .form-control:focus {
            color: #212529;
            background-color: #fff;
            border-color: #9294bf;
            outline: 0;
            -webkit-box-shadow: 0 0 0 .25rem rgba(0, 79, 174, .25);
            box-shadow: 0 0 0 .25rem rgba(0, 79, 174, .25);
        }

        .form-select:focus {
            color: #212529;
            background-color: #fff;
            border-color: #9294bf;
            outline: 0;
            -webkit-box-shadow: 0 0 0 .25rem rgba(0, 79, 174, .25);
            box-shadow: 0 0 0 .25rem rgba(0, 79, 174, .25);
        }

        .btn {
            color: white;
            background-color: var(--color1);
            border-radius: 10px;
            font-weight: bold;
            padding: .8rem 2rem;
            font-size: 18px;
            min-width: 200px;
            max-width: 400px;
        }

        .btn:hover {
            color: white;
            background-color: var(--color2);
            border-radius: 10px;
            font-weight: bold;
        }

        .separador {
            background-color: var(--color2);
            height: 4px;
            width: 50px;
        }

        @media screen and (max-width:500px) {

            #contact {
                padding: .4rem;
            }

            .datos {
                padding: .4rem;
                background: #FFFFFF;
            }

            .btn {
                color: white;
                background-color: var(--color1);
                border-radius: 10px;
                font-weight: bold;
                padding: .8rem 2rem;
                font-size: 18px;
                min-width: 140px;
                max-width: 140px;
            }


        }
    </style>

    <?php include_once './partials/header2.php'; ?>


    <div class="container-fluid" id="contact">

        <div class="container">
            <div class="row justify-content-around">

                <div class="col-md-4 datos">
                    <h3 class="fw-bolder mt-4">Estamos cerca</h3>
                    <div class="separador"></div>

                    <div class="datosList mt-4">
                        <div class="d-flex item">
                            <span> <i class="fas fa-map-marker-alt"></i> </span>
                            <h5> Avenida Separadora Industrial #3250 <br> La Molina, Lima - Perú</h5>
                        </div>
                        <div class="d-flex item">
                            <span> <i class="far fa-envelope"></i> </span>
                            <h5>colegiocousteau2017@gmail.com</h5>
                        </div>
                        <div class="d-flex item">
                            <span> <i class="fas fa-phone"></i> </span>
                            <h5> (51) 948 886 928 </h5>
                        </div>
                        <div class="d-flex item">
                            <span><i class="fab fa-facebook"></i></i> </span>
                            <h5><a href="https://www.facebook.com/p/Colegio-Jacques-Cousteau-La-Molina" target="_blank">Facebook</a></h5>
                        </div>
                    

                        <div class="mt-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11035.900566198792!2d-76.94568353167335!3d-12.058648155370793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c694e7fbe8f1%3A0x3a08562c20d83bfd!2sAv.%20Separadora%20Industrial%203250%2C%20Lima%2015012!5e0!3m2!1ses!2spe!4v1724953317153!5m2!1ses!2spe" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 datos">
                    <h4>Conversemos</h4>
                    <div class="separador"></div>
                    <h1 class="my-4">¿Cómo podemos ayudarle?</h1>
                    <form id="formContacto" name="formcontacto" onsubmit="enviarCorreo(event)">

                        <div class="row">
                            <div class="col-md mb-3">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="nombres" placeholder="Nombres" required>
                            </div>
                            <div class="col-md mb-3">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="apellidos" placeholder="Apellidos" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md mb-3">
                                <input type="number" class="form-control" id="exampleFormControlInput1" name="dni" placeholder="DNI" required>
                            </div>
                            <div class="col-md mb-3">
                                <input type="number" class="form-control" id="exampleFormControlInput1" name="celular" placeholder="Celular" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <label for="exampleFormControlInput1" class="form-label" style="font-size: 14px;">Correo*</label>
                                <!--  <select id="nivel" name="nivel" onchange="actualizarGrados()"> -->
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="correo" placeholder="Correo" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md">
                                <label for="exampleFormControlInput1" class="form-label" style="font-size: 14px;">Nivel*</label>
                                <!--  <select id="nivel" name="nivel" onchange="actualizarGrados()"> -->
                                <select id="nivel" class="mb-3 form-select" aria-label="Default select example" name="nivel" onchange="actualizarGrados()" required>
                                    <option selected="">Seleccione un Nivel</option>
                                    <!-- <option value="kinder">Kinder</option> -->
                                    <option value="primaria">Primaria</option>
                                    <option value="secundaria">Secundaria</option>
                                </select>

                                <div class="col-md">
                                    <label for="grado">Grado:</label>
                                    <select class="mb-3 form-select" aria-label="Default select example" id="grado" name="grado" required>
                                        <option value="">Seleccione un grado</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3">
                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Escriba su consulta" rows="3" name="consulta" required=""></textarea>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-md-start justify-content-around">
                            <div class="col-lg-4">
                                <button class="btn" type="submit">Enviar</button>
                            </div>
                            <div class="col-lg-8 my-auto">
                                <div class="form-check form-check-inline text-white ms-3" data-bs-toggle="modal" data-bs-target="#terminosModal">
                                    <input type="checkbox" class="form-check-input" id="checkone" value="si" required>
                                    <label class="form-check-label" for="checkone">
                                        <a href="#" target="_blank">
                                            <p id="terminos"> "He leído y acepto las políticas de privacidad"</p>
                                        </a>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div style="border-top: 2px dashed #E3E3E3; margin: 3rem 0"></div>
                    </form>
                </div>
            </div>
        </div>

    </div>




    <?php include_once './partials/footer.php'; ?>
    <script>
        function actualizarGrados() {
            const nivel = document.getElementById('nivel').value;
            const grado = document.getElementById('grado');

            // Limpiar opciones anteriores
            grado.innerHTML = '<option value="">Seleccione un grado</option>';

            if (nivel === 'kinder') {
                const option = document.createElement('option');
                option.value = '5 años';
                option.text = '5 años';
                grado.add(option);
            } else if (nivel === 'primaria') {
                for (let i = 1; i <= 6; i++) {
                    const option = document.createElement('option');
                    option.value = `${i} ° Grado `;
                    option.text = ` ${i} ° Grado`;
                    grado.add(option);
                }
            } else if (nivel === 'secundaria') {
                for (let i = 1; i <= 5; i++) {
                    const option = document.createElement('option');
                    option.value = `${i} Año`;
                    option.text = `${i} Año`;
                    grado.add(option);
                }
            }
        }
    </script>
    <script>
        function enviarCorreo(e) {
            e.preventDefault();
            const data = new FormData(document.getElementById('formContacto'));
            fetch('./lib/correo_mailer.php', {
                method: 'POST',
                body: data
            }).then(function(res) {
                return res.text();
            }).then(function(res) {
                alert(res);
            }).then(function(res) {
                e.target.reset();
            });
        }
    </script>

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

    <script type="text/javascript">
        let modal = new bootstrap.Modal(document.getElementById('myModal'), );
        modal.show();
    </script>
    <script src="./public/js/popper.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/jquery.min.js"></script>
    <script src="./public/js/bootstrap.pooper.js"></script>

    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <script src="./public/js/hubslider.min.js"></script>
    <script>
        $('.hub-slider-slides ul').hubSlider({
            selector: $('li'),
            button: {
                next: $('.hub-slider-arrow_next'),
                prev: $('.hub-slider-arrow_prev')
            },
            transition: '0.9s',
            startOffset: 30,
            auto: true,
            time: 3 // secondly
        });
    </script>


</body>



</html>