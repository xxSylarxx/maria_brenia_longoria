<?php
$pagina = basename($_SERVER['PHP_SELF']);
$active1 = 'nav-link';
$active2 = 'nav-link';
$active3 = 'nav-link';
$active4 = 'nav-link';
$active5 = 'nav-link';
$active6 = 'nav-link';
$active7 = 'nav-link';
switch ($pagina) {
    case 'index.php':
        $active1 .= ' activador';
        break;
    case 'somos.php':
    case 'historica.php':
    case 'infraestructura.php':
        $active2 .= ' activador';
        break;
    case 'metodologia.php':
    case 'servicios.php':
    case 'perfiles.php':
        $active3 .= ' activador';
        break;
    case 'inicial.php':
    case 'primaria.php':
    case 'secundaria.php':
        $active4 .= ' activador';
        break;
    case 'pastoral.php':
        $active5 .= ' activador';
        break;
    case 'noticias.php':

        $active6 .= ' activador';
        break;
    case 'matricula.php':
    case 'admision.php':
    case 'contrato.php':
    case 'reglamento.php':
    case 'curricular.php':
    case 'estudio.php':
    case 'sistema.php':
    case 'calendarizacion.php':
    case 'protocolo.php':

        $active7 .= ' activador';
        break;
}
?>
<style>
    /* ============ desktop view ============ */
    @media all and (min-width: 992px) {
        .dropdown-menu li {
            position: relative;
        }

        .nav-item .submenu {
            display: none;
            position: absolute;
            left: 100%;
            top: -7px;
        }

        .nav-item .submenu-left {
            right: 100%;
            left: auto;
        }

        .dropdown-menu>li:hover {
            background-color: #f1f1f1
        }

        .dropdown-menu>li:hover>.submenu {
            display: block;
        }
    }

    /* ============ desktop view .end// ============ */

    /* ============ small devices ============ */
    @media (max-width: 991px) {
        .dropdown-menu .dropdown-menu {
            margin-left: 0.7rem;
            margin-right: 0.7rem;
            margin-bottom: .5rem;
        }
    }

    /* ============ small devices .end// ============ */
</style>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-184071885-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-184071885-1');
</script>
<header id="header" class="fixed-top">
    <!-- <div id="bar-sup">

        <div class="d-flex justify-content-around">
            <a href="" class="mx-3 my-1" style="color:var(--color1);font-size:16px;" target="_blank"><i class="fas fa-envelope"></i><span style="font-weight:bold;"> Correo</span></a>
            <a href="" class="me-3 my-1" style="color:var(--color1);font-size:16px;" target="_blank"><i class="fas fa-file-certificate"></i><span style="font-weight:bold;"> Seesaw</span></a>
            <a href="" class="me-3 my-1" style="color:var(--color1);font-size:16px;" target="_blank"><i class="fas fa-chalkboard-teacher"></i><span style="font-weight:bold;"> Classroom</span></a>
            <a href="" class="me-3 my-1" style="color:var(--color1);font-size:16px;" target="_blank"><i class="fas fa-book-open"></i><span style="font-weight:bold;"> Destiny</span></a>
            <a href="" class="me-3 my-1" style="color:var(--color1);font-size:16px;" target="_blank"><i class="fas fa-laptop"></i><span style="font-weight:bold;"> Davy Online</span></a>

        </div>
    </div> -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container ps-0">
            <a class="navbar-brand fs-4 fw-bold" style="letter-spacing: .08em;position:relative;" href="./">
                <div style="position: absolute;left: 0;top: 2%;bottom: 0;display: flex;align-items: center;">
                    <img id="img-logo" src="./public/img/icons/logo.png" height="74">
                </div>
                <!-- <span>DAVY<br>COLLEGE</span> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="./">Inicio</a>
                    </li>
                    <li id="barra-menu-responsive" class="nav-item" onmouseover="showMenuHover(0)" onmouseout="showMenuHover2(0)">
                        <a class="nav-link" href="#" id="navbarDropdown">
                            Nosotros &nbsp;<i class="fas fa-chevron-down" style="font-size:12px;"></i>
                        </a>
                        <ul id="menu-responsive" class="dropdown-menu animate__animated animate__fadeInUp" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item py-2" href="./somos.php">Quienes Somos</a></li>
                            <li><a class="dropdown-item py-2" href="./testimonios.php">Testimonios</a></li>
                            <li><a class="dropdown-item py-2" href="./comunidad.php">Comunidad Educativa</a></li>
                            <li><a class="dropdown-item py-2" href="./infraestructura.php">Infraestructura</a></li>
                            <!-- <li><a class="dropdown-item py-2" href="">Nuestros Niveles</a></li>
                            <li> <a class="dropdown-item py-2" href="#"> Nuestros Niveles&raquo; </a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="./inicial.php">Nivel Inicial</a></li>
                                    <li><a class="dropdown-item" href="./primaria.php">Nivel Primaria</a></li>
                                    <li><a class="dropdown-item" href="./secundaria.php">Nivel Secundaria</a></li>
                                    <li><a class="dropdown-item" href="./bachillerato.php">Bachillerato</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </li>
                    <li id="barra-menu-responsive" class="nav-item" onmouseover="showMenuHover(1)" onmouseout="showMenuHover2(1)">
                        <a class="nav-link" href="#" id="navbarDropdown">
                            Propuesta Educativa &nbsp;<i class="fas fa-chevron-down" style="font-size:12px;"></i>
                        </a>
                        <ul id="menu-responsive" class="dropdown-menu animate__animated animate__fadeInUp" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item py-2" href="./metodologia.php">Metodología</a></li>
                            <li><a class="dropdown-item py-2" href="./perfiles.php">Perfiles</a></li>
                            <li><a class="dropdown-item py-2" href="./elencos-talleres.php">Elencos y Talleres</a></li>
                            <li><a class="dropdown-item py-2" href="./servicios.php">Servicios</a></li>
                            <!-- <li><a class="dropdown-item py-2" href="./adicionales.php">Actividades Adicionales</a></li>
                            <li><a class="dropdown-item py-2" href="./infraestructura.php">Infraestructura</a></li> -->
                        </ul>
                    </li>
                    <li id="barra-menu-responsive" class="nav-item" onmouseover="showMenuHover(2)" onmouseout="showMenuHover2(2)">
                        <a class="nav-link" href="#" id="navbarDropdown">
                            Niveles &nbsp;<i class="fas fa-chevron-down" style="font-size:12px;"></i>
                        </a>
                        <ul id="menu-responsive" class="dropdown-menu animate__animated animate__fadeInUp" aria-labelledby="navbarDropdown">
                            <!-- <li> <a class="dropdown-item py-2" href="#"> Publicaciones&raquo; </a>
                                <ul class="submenu dropdown-menu">

                                    <li><a class="dropdown-item" href="#">Anuario&raquo; </a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="https://drive.google.com/file/d/1-KcRdeoE9HVzzJAsDLWFMyE27Ov16tgU/view" target="_blank">Anuario 2015</a></li>
                                            <li><a class="dropdown-item" href="https://drive.google.com/file/d/1mJrAmpEMip-Uu1VJctA8VVPsZnvFG13y/view" target="_blank">Anuario 2016 - 2017</a></li>
                                            <li><a class="dropdown-item" href="https://drive.google.com/file/d/1M2nhj7LcIx9QnfZDGXZkeNiK9WmzG3dC/view?usp=sharing" target="_blank">Anuario 2018</a></li>
                                            <li><a class="dropdown-item" href="https://drive.google.com/file/d/1E6dN12IYP7xyRm1ixa_6jBuuW9pDQD4w/view?usp=sharing" target="_blank">Anuario 2019</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li><a class="dropdown-item" href="./davynews.php">Davy News</a></li>
                                    <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=wfGUTivjPIc" target="_blank">Davy Tv</a></li>
                                    <li><a class="dropdown-item" href="./noticias-escolares.php">Noticias Escolares</a></li>
                                </ul>
                            </li> -->

                            <li><a class="dropdown-item py-2" href="./primaria.php">Primaria</a></li>
                            <li><a class="dropdown-item py-2" href="./secundaria.php">Secundaria</a></li>
                        </ul>
                    </li>
                    <li id="barra-menu-responsive" class="nav-item" onmouseover="showMenuHover(3)" onmouseout="showMenuHover2(3)">
                        <a class="nav-link" href="#" id="navbarDropdown">
                            Coordinaciones&nbsp;<i class="fas fa-chevron-down" style="font-size:12px;"></i>
                        </a>
                        <ul id="menu-responsive" class="dropdown-menu animate__animated animate__fadeInUp" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item py-2" href="./pastoral.php">Pastoral</a></li>
                            <li><a class="dropdown-item py-2" href="./tutoria.php">Tutoría</a></li>
                            <!-- <li><a class="dropdown-item py-2" href="#" target="_blank">Coordinación Pegagógica</a></li>
                            <li><a class="dropdown-item py-2" href="#">Ecología Integral</a></li>
                            <li><a class="dropdown-item py-2" href="#">Actividades</a></li>
                            <li><a class="dropdown-item py-2" href="#">Convivencia Ciudadana</a></li> -->
                        </ul>
                    </li>
                    <li id="barra-menu-responsive" class="nav-item" onmouseover="showMenuHover(4)" onmouseout="showMenuHover2(4)">
                        <a class="nav-link" href="#" id="navbarDropdown">
                            Publicaciones &nbsp;<i class="fas fa-chevron-down" style="font-size:12px;"></i>
                        </a>
                        <ul id="menu-responsive" class="dropdown-menu animate__animated animate__fadeInUp" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item py-2" href="./documentos.php">Documentos</a></li>
                            <li><a class="dropdown-item py-2" href="./noticias.php">Noticias</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./admision.php">Admisión</a>
                    </li>
                    <!-- <li id="barra-menu-responsive">
                        <div id="cespanol">
                            <a type="button" href="./en/index.php"><img src="./public/img/icons/brit.jpg" width="30" height='20' alt=""></a>
                        </div>
                    </li> -->

                </ul>
            </div>
        </div>
    </nav>
</header>

<script>
    var height = document.getElementById('header').clientHeight;
    document.querySelector('body').style.paddingTop = height + "px";

    function showMenuHover(index, add = true) {
        const menu = document.querySelectorAll('ul.dropdown-menu')[index];
        menu.classList.add('show');
    }

    function showMenuHover2(index, add = false) {
        const menu = document.querySelectorAll('ul.dropdown-menu')[index];
        menu.classList.remove('show');
    }

    function mostrarresponsive() {
        document.getElementById("ul.dropdown-menu").classList.toggle("show")
    }

    document.getElementById("ul.dropdown-menu").onclick = function() {
        mostrarresponsive();
    }
</script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        // make it as accordion for smaller screens
        if (window.innerWidth < 992) {

            // close all inner dropdowns when parent is closed
            document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown) {
                everydropdown.addEventListener('hidden.bs.dropdown', function() {
                    // after dropdown is hidden, then find all submenus
                    this.querySelectorAll('.submenu').forEach(function(everysubmenu) {
                        // hide every submenu as well
                        everysubmenu.style.display = 'none';
                    });
                })
            });

            document.querySelectorAll('.dropdown-menu a').forEach(function(element) {
                element.addEventListener('click', function(e) {
                    let nextEl = this.nextElementSibling;
                    if (nextEl && nextEl.classList.contains('submenu')) {
                        // prevent opening link if link needs to open dropdown
                        e.preventDefault();
                        if (nextEl.style.display == 'block') {
                            nextEl.style.display = 'none';
                        } else {
                            nextEl.style.display = 'block';
                        }

                    }
                });
            })
        }
        // end if innerWidth
    });
    // DOMContentLoaded  end
</script>