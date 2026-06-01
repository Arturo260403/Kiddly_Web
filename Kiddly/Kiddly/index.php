<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Links de bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Links de CSS-->
    <link rel="shortcut icon" href="img/KIDDLY.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <!--Link iconos de bootstrap 5-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <title>KiddLy - Tu guarderia de confianza</title>
</head>

<body>

    <!--Include del menú-->
    <?php
    include "includes/menu.php";
    ?>
    <!--Include del menú-->

    <!--Sección de hero-->
    <section class="container-fluid containerFluidHero">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-evenly">
                <div class="col-xl-6 col-lg-6 col-md-12" style="margin-right: 50px; margin-top: 50px;" data-aos="fade-down" data-aos-duration="2000">
                    <h1 class="heroTitle">La mejor Guarderia de Todo Madrid!!</h1>
                    <p style="margin-bottom:20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod neque libero dolores inventore recusandae mollitia, in deleniti atque ducimus animi repellat temporibus aliquid ipsum nisi voluptatibus. Non voluptas rerum vel.</p>
                    <div class="row">
                        <div class="col-xl-12">
                            <a href="" class="btnPers"> Sobre Nosotros</a>
                            <a href="" class="btnPers"> Información</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12" data-aos="fade-left" data-aos-duration="2000">
                    <div class="ratio ratio-16x9 video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/aABU_YO1MZo?si=_PtwDwXOP-aWyHGa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Sección de hero-->

    <!--Contenedor de Beneficios -->
    <section class="container-fluid" style="padding-top: 100px; padding-bottom:100px; background-color: #38b6ff;">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-xl-3 col-lg-6 col-md-6" data-aos="zoom-in" data-aos-duration="2000">
                    <div class="venCard">
                        <span><i class="bi bi-person-heart icon1"></i></span>
                        <h3>Atención Personalizada</h3>
                        <p>Cada niño recibe una atención individual y personalizada, adaptada a sus necesidades y ritmo de aprendizaje.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6" data-aos="zoom-in" data-aos-duration="2000">
                    <div class="venCard">
                        <span><i class="bi bi-book icon2"></i></span>
                        <h3>Educación Infantil de Calidad</h3>
                        <p>Programas educativos diseñados para el desarrollo integral de habilidades cognitivas, sociales y emocionales.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6" data-aos="zoom-in" data-aos-duration="2000">
                    <div class="venCard">
                        <span><i class="bi bi-shield-lock icon3"></i></span>
                        <h3>Ambiente Seguro y Acogedor</h3>
                        <p>Instalaciones seguras y espacios acogedores, adaptados para el bienestar y seguridad de los niños de nuestra guarderia.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6" data-aos="zoom-in" data-aos-duration="2000">
                    <div class="venCard">
                        <span><i class="bi bi-people icon4"></i></span>
                        <h3>Profesionales Cualificados</h3>
                        <p>Equipo de educadores capacitados y comprometidos en fomentar el crecimiento y desarrollo de cada niño.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contenedor de Beneficios -->

    <!--Que ofrecemos sección-->
    <section class="container-fluid" id="aboutus" style="padding-top:100px; padding-bottom: 100px;">
        <div class="container aboutKiddly">
            <div class="row d-flex abKiddlyImg" style="margin-top: 50px;">
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12" data-aos="fade-right" data-aos-duration="2000">
                    <img src="img/fondoGuar.jpg" class="img-fluid mx-auto imgPhoto" alt="Bebe en la guardería">
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12" style="margin-top:30px;" data-aos="fade-left" data-aos-duration="2000">
                    <h2>¿Qué Ofrece Kiddly?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, aliquid culpa, libero, impedit minima veniam dignissimos optio ratione unde quidem qui fugit accusantium adipisci tempore! Saepe, praesentium ducimus. Autem accusantium dolorum voluptates, tempora impedit rerum.</p>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <p class="text4About1">Alegría en las Clases</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <p class="text4About2">Acompañamiento</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <p class="text4About3">Una Segunda Casa</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <p class="text4About4">Guardería Bilingüe</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Que ofrecemos sección-->

    <!--Apartado de Blogs-->
    <section class="container-fluid cuadBackBlogs" id="blogs" style="padding-top: 50px; padding-bottom:100px;">
        <div class=" container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-xl-12">
                    <h2 class="blogTitle" style="margin-top: 50px;">Blogs de Kiddly</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center" style="margin-top: 30px;">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12" data-aos="fade-right" data-aos-duration="2000">
                    <div class="cardBlog">
                        <img src="img/fondoGuar.jpg" class="card-img-top img-fluid" alt="...">
                        <div class="cardbody mt-3">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur recusandae molestias mollitia quam dolores autem qui vero repellat dolorem. Porro quia voluptates aliquam quidem dolor, iusto nisi optio nobis quam.</p>
                            <a href="" class="btn btnPers mt-2">Leer el Blog</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-duration="2000">
                    <div class="cardBlog">
                        <img src="img/fondoGuar.jpg" class="card-img-top" alt="...">
                        <div class="cardbody mt-3">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur recusandae molestias mollitia quam dolores autem qui vero repellat dolorem. Porro quia voluptates aliquam quidem dolor, iusto nisi optio nobis quam.</p>
                            <a href="" class="btn btnPers mt-2">Leer el Blog</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12" data-aos="fade-left" data-aos-duration="2000">
                    <div class="cardBlog">
                        <img src="img/fondoGuar.jpg" class="card-img-top" alt="...">
                        <div class="cardbody mt-3">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur recusandae molestias mollitia quam dolores autem qui vero repellat dolorem. Porro quia voluptates aliquam quidem dolor, iusto nisi optio nobis quam.</p>
                            <a href="" class="btn btnPers mt-2">Leer el Blog</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Apartado de Blogs-->

    <!--Apartado de equipo-->
    <section class="container-fluid contEquipoBack" id="team" style="padding-top:100px;padding-bottom:100px;">
        <div class="container teamContainer">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-xl-6 col-lg-6" data-aos="fade-down" data-aos-duration="2000">
                    <div class="backTeamText">
                        <h2 class="teamIntroTitle">El Superequipo kiddly</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem placeat, odio unde illum nisi quidem necessitatibus, totam, reprehenderit provident asperiores error at quibusdam incidunt labore accusantium officia possimus est eligendi!</p>
                        <div class="row">
                            <div class="col-xl-12">
                                <a href="" class="btnPers">¡Contacta Con Nosotros!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12" data-aos="fade-left" data-aos-duration="2000">
                    <img src="img/fondoGuar.jpg" class="img-fluid mx-auto mt-5 imgPhoto imgPhotoTeam" alt="Bebe en la guardería">
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center" style="margin-top:40px;">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center align-items-center" data-aos="flip-left" data-aos-duration="2000">
                    <div class="teamCard">
                        <img src="img/profesora1.jpg" class="img-fluid" alt="">
                        <h3>Marta Sanchez</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat beatae eligendi expedita doloremque eaque earum iusto temporibus labore cum esse?</p>
                        <div class="social-icons">
                            <a href="#" class=" me-3"><i class="bi bi-facebook"></i></a>
                            <a href="#" class=" me-3"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="me-3"><i class="bi bi-instagram"></i></a>
                            <a href="#" class=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center align-items-center" data-aos="flip-left" data-aos-duration="2000">
                    <div class="teamCard">
                        <img src="img/profesora1.jpg" class="img-fluid" alt="">
                        <h3>Marta Sanchez</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat beatae eligendi expedita doloremque eaque earum iusto temporibus labore cum esse?</p>
                        <div class="social-icons">
                            <a href="#" class="me-3"><i class="bi bi-facebook"></i></a>
                            <a href="#" class=" me-3"><i class="bi bi-twitter"></i></a>
                            <a href="#" class=" me-3"><i class="bi bi-instagram"></i></a>
                            <a href="#" class=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center align-items-center" data-aos="flip-left" data-aos-duration="2000">
                    <div class="teamCard">
                        <img src="img/profesora1.jpg" class="img-fluid" alt="">
                        <h3>Marta Sanchez</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat beatae eligendi expedita doloremque eaque earum iusto temporibus labore cum esse?</p>
                        <div class="social-icons">
                            <a href="#" class="me-3"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="me-3"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="me-3"><i class="bi bi-instagram"></i></a>
                            <a href="#" class=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center align-items-center" data-aos="flip-left" data-aos-duration="2000">
                    <div class="teamCard">
                        <img src="img/profesora1.jpg" class="img-fluid" alt="">
                        <h3>Marta Sanchez</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat beatae eligendi expedita doloremque eaque earum iusto temporibus labore cum esse?</p>
                        <div class="social-icons">
                            <a href="#" class=" me-3"><i class="bi bi-facebook"></i></a>
                            <a href="#" class=" me-3"><i class="bi bi-twitter"></i></a>
                            <a href="#" class=" me-3"><i class="bi bi-instagram"></i></a>
                            <a href="#" class=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center align-items-center" data-aos="flip-left" data-aos-duration="2000">
                    <div class="teamCard">
                        <img src="img/profesora1.jpg" class="img-fluid" alt="">
                        <h3>Marta Sanchez</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat beatae eligendi expedita doloremque eaque earum iusto temporibus labore cum esse?</p>
                        <div class="social-icons">
                            <a href="#" class=" me-3"><i class="bi bi-facebook"></i></a>
                            <a href="#" class=" me-3"><i class="bi bi-twitter"></i></a>
                            <a href="#" class=" me-3"><i class="bi bi-instagram"></i></a>
                            <a href="#" class=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center align-items-center" data-aos="flip-left" data-aos-duration="2000">
                    <div class="teamCard">
                        <img src="img/profesora1.jpg" class="img-fluid" alt="">
                        <h3>Marta Sanchez</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat beatae eligendi expedita doloremque eaque earum iusto temporibus labore cum esse?</p>
                        <div class="social-icons">
                            <a href="#" class="me-3"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="me-3"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="me-3"><i class="bi bi-instagram"></i></a>
                            <a href="#" class=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Apartado de equipo-->

    <!--Galeria de la página web-->
    <section class="container-fluid GaleryContainerFluid" id="galery" style="padding-top:50px;padding-bottom:100px;">
        <div class="container GaleryContainer">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-xl-12">
                    <h2 class="GaleryTitle" style="margin-top: 50px;">Nuestras Fotos</h2>
                </div>
            </div>
            <div class="row" style="margin-top:40px;">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6" data-aos="fade-down" data-aos-duration="2000">
                    <div class="card cardImg card-img-top">
                        <img src="img/fondoGuar.jpg" class="img-fluid" alt="">
                        <span>Esto es una Prueba</span>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6" data-aos="fade-down" data-aos-duration="2000">
                    <div class="card cardImg card-img-top">
                        <img src="img/fondoGuar.jpg" class="img-fluid" alt="">
                        <span>Esto es una Prueba</span>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6" data-aos="fade-down" data-aos-duration="2000">
                    <div class="card cardImg card-img-top">
                        <img src="img/fondoGuar.jpg" class="img-fluid" alt="">
                        <span>Esto es una Prueba</span>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="2000">
                    <div class="card cardImg card-img-top">
                        <img src="img/fondoGuar.jpg" class="img-fluid" alt="">
                        <span>Esto es una Prueba</span>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="2000">
                    <div class="card cardImg card-img-top">
                        <img src="img/fondoGuar.jpg" class="img-fluid" alt="">
                        <span>Esto es una Prueba</span>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="2000">
                    <div class="card cardImg card-img-top">
                        <img src="img/fondoGuar.jpg" class="img-fluid" alt="">
                        <span>Esto es una Prueba</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Galeria de la página web-->

    <!--Mapa de la pagina web-->
    <section class="container-fluid p-0">
        <div style="position: relative; width: 100%; height: 350px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d777580.5211916342!2d-4.88678102187496!3d40.4216113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228ae7ff906e5%3A0xd5dd622a76468722!2sEscuela%20Infantil%20Trazos!5e0!3m2!1ses!2ses!4v1732538311397!5m2!1ses!2ses"
                style="border:0; position: absolute; top: 0; left: 0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!--Mapa de la pagina web-->

    <!--Include de footer-->
    <?php
    include "includes/footer.php";
    ?>
    <!--Include de footer-->


    <!--Scripts de bootstrp 5-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!--Scripts propios-->
    <script src="js/main.js"></script>

</body>

</html>