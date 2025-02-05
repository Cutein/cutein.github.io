<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio - Desarrollador Fullstack</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Joanne David Orozco Ramos</h1>
            <p>Desarrollador Web Fullstack</p>
            <nav>
                <ul>
                    <li><a href="#about">Sobre Mí</a></li>
                    <li><a href="#skills">Habilidades</a></li>
                    <li><a href="#projects">Proyectos</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="about" class="about">
        <div class="container me">
            <h2>Sobre Mí</h2>
            <p>Desarrollador Full Stack con más de 4 años de experiencia en el desarrollo de aplicaciones web, manejo de PHP con el patrón de diseño MVC, integración de APIs, bases de datos MySQL y control de versiones con Git. Poseo un enfoque orientado a resultados, capacidad de adaptación, trabajo en equipo y comunicación efectiva. Me apasionan los desafíos tecnológicos y la mejora continua en mis habilidades.</p>
        </div>
    </section>

    <section id="skills" class="skills">
        <div class="container">
            <h2>Habilidades</h2>
            <div class="skills-container">
                <div class="skill-card">
                    <i class="fab fa-html5"></i>
                    <span>HTML, CSS, JS, jQuery, Bootstrap</span>
                </div>
                <div class="skill-card">
                    <i class="fas fa-code"></i>
                    <span>C#</span>
                </div>
                <div class="skill-card">
                    <i class="fab fa-php"></i>
                    <span>PHP, MVC, Composer, CodeIgniter</span>
                </div>
                <div class="skill-card">
                    <i class="fas fa-plug"></i>
                    <span>APIs: Docusign, Twilio, Slack, Trello</span>
                </div>
                <div class="skill-card">
                    <i class="fas fa-database"></i>
                    <span>Bases de datos MySQL</span>
                </div>
                <div class="skill-card">
                    <i class="fab fa-git-alt"></i>
                    <span>Git, GitHub</span>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="projects">
        <div id="carouselProyects" class="mt-2 carousel slide">
            <div>
                <div class="text-center">
                    <h2 class="h2_proyects">
                        <a class="carousel-control-prev" href="#carouselProyects" role="button" data-slide="prev">
                            <span class="circle_arrow">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </span>
                        </a>
                        <span>Proyectos</span>
                        <a class="carousel-control-next" href="#carouselProyects" role="button" data-slide="next">
                            <span class="circle_arrow">    
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </span>
                        </a>
                    </h2>
                </div>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="col-12">
                            <div><img class="mb-2 img_proy"  src="https://protexiones.local/assets/images/logo.svg"></div>
                            <p>Página web especializada en proporcionar seguros de salud, dental y visión.</p>
                            <p class="technologies">
                                <span><i class="fab fa-html5"></i> HTML</span>
                                <span><i class="fab fa-css3-alt"></i> CSS</span>
                                <span><i class="fab fa-js-square"></i> JavaScript</span>
                                <span><i class="fab fa-php"></i> PHP</span>
                                <span><i class="fab fa-bootstrap"></i> Bootstrap</span>
                            </p>
                            <a class="proyect_link" target="_blank" href="https://www.protexiones.com">Ver Proyecto</a>
                            <div id="carouselFrontProtexiones" class="mt-2 carousel slide">
                                <div class="carousel-inner2">
                                    <div class="carousel-item2 active">
                                        <img class="d-block" src="/images/front_img1.png" alt="img1 slide">
                                    </div>
                                    <div class="carousel-item2">
                                        <img class="d-block" src="/images/front_img2.png" alt="img2 slide">
                                    </div>
                                    <div class="carousel-item2">
                                        <img class="d-block" src="/images/front_img3.png" alt="img3 slide">
                                    </div>
                                    <div class="carousel-item2">
                                        <img class="d-block" src="/images/front_img4.png" alt="img4 slide">
                                    </div>
                                    <div class="carousel-item2">
                                        <img class="d-block" src="/images/front_img5.png" alt="img5 slide">
                                    </div>
                                    <div class="carousel-item2">
                                        <img class="d-block" src="/images/front_img6.png" alt="img6 slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselFrontProtexiones" role="button" data-slide="prev">
                                    <span class="circle_arrow">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </a>
                                <a class="carousel-control-next" href="#carouselFrontProtexiones" role="button" data-slide="next">
                                    <span class="circle_arrow">    
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </a>
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselFrontProtexiones" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselFrontProtexiones" data-slide-to="1"></li>
                                    <li data-target="#carouselFrontProtexiones" data-slide-to="2"></li>
                                    <li data-target="#carouselFrontProtexiones" data-slide-to="3"></li>
                                    <li data-target="#carouselFrontProtexiones" data-slide-to="4"></li>
                                    <li data-target="#carouselFrontProtexiones" data-slide-to="5"></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="col-12">
                            <div><img class="mb-2 img_proy"  src="https://protexiones.local/assets/images/logo.svg"></div>
                            <p>CRM Protexiones para la administración de los clientes.</p>
                            <p class="technologies">
                                <span><i class="fab fa-html5"></i> HTML</span>
                                <span><i class="fab fa-css3-alt"></i> CSS</span>
                                <span><i class="fab fa-js-square"></i> JavaScript</span>
                                <span><i class="fab fa-php"></i> PHP</span>
                                <span><i class="fab fa-bootstrap"></i> Bootstrap</span>
                                <span><img style="width:20px" src="/images/codeiginiter.svg"> CodeIgniter</span>
                            </p>
                            <div id="carouselBackProtexiones" class="mt-2 carousel slide">
                                <div class="carousel-inner3">
                                    <div class="carousel-item3 active">
                                        <img class="d-block" src="/images/back_img1.png" alt="img1 slide">
                                    </div>
                                    <div class="carousel-item3">
                                        <img class="d-block" src="/images/back_img2.png" alt="img2 slide">
                                    </div>
                                    <div class="carousel-item3">
                                        <img class="d-block" src="/images/back_img3.png" alt="img3 slide">
                                    </div>
                                    <div class="carousel-item3">
                                        <img class="d-block" src="/images/back_img4.png" alt="img4 slide">
                                    </div>
                                    <div class="carousel-item3">
                                        <img class="d-block" src="/images/back_img5.png" alt="img5 slide">
                                    </div>
                                    <div class="carousel-item3">
                                        <img class="d-block" src="/images/back_img6.png" alt="img6 slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselBackProtexiones" role="button" data-slide="prev">
                                    <span class="circle_arrow">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </a>
                                <a class="carousel-control-next" href="#carouselBackProtexiones" role="button" data-slide="next">
                                    <span class="circle_arrow">    
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </a>
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselBackProtexiones" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselBackProtexiones" data-slide-to="1"></li>
                                    <li data-target="#carouselBackProtexiones" data-slide-to="2"></li>
                                    <li data-target="#carouselBackProtexiones" data-slide-to="3"></li>
                                    <li data-target="#carouselBackProtexiones" data-slide-to="4"></li>
                                    <li data-target="#carouselBackProtexiones" data-slide-to="5"></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
    <div class="container text-center">
        <h2>Contacto</h2>
        <div class="contact-info">
            <p>
                <i class="fas fa-phone-alt"></i>
                <a href="tel:3006445917">300-644-5917</a>
            </p>
            <p>
                <i class="fas fa-envelope"></i>
                <a href="mailto:joanne_d09@hotmail.com">joanne_d09@hotmail.com</a>
            </p>
        </div>
        <div class="social-links">
            <a target="_blank" href="https://wa.me/3006445917" target="_blank">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a target="_blank" href="https://www.linkedin.com/in/jdoramos/" target="_blank">
                <i class="fab fa-linkedin"></i>
            </a>
            <a target="_blank" href="https://github.com/Cutein/cutein.github.io" target="_blank">
                <i class="fab fa-github"></i>
            </a>
        </div>
    </div>
</section>


    <footer>
        <div class="footer container">
            <p>&copy; <script>document.write(new Date().getFullYear())</script> Joanne David Orozco Ramos. Todos los derechos reservados.</p>
            <ul>
                <li><a target="_blank" href="https://www.linkedin.com/in/jdoramos/">LinkedIn</a></li>
                <li><a target="_blank" href="https://github.com/Cutein/cutein.github.io">GitHub</a></li>
            </ul>
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="script.js"></script>
</html>