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
    <title>KiddLy Actividades - Tu guarderia de confianza</title>
</head>

<body>

    <!--Include del menú-->
    <?php
    include "includes/menu.php";
    ?>
    <!--Include del menú-->

    <section class="container-fluid cardActivitiesFluid" style="padding-top: 50px; padding-bottom:50px;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-12">
                    <h1 class="heroTitle" style="color: white; text-align:center;">Nuestras Actividades</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-xl-10" style="margin-top: 20px;">
                    <div class="cardActivities">
                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-4">
                                <img class="img-fluid" src="img/1.png" alt="">
                            </div>
                            <div class="col-xl-8">
                                <div class="cardTextActivi">
                                    <h2>Aprendizaje Apestoso</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A atque officiis, nobis quasi impedit, ullam fugiat architecto quam officia similique eos reiciendis laudantium amet fugit quas eveniet? Fuga, quam recusandae!</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10" style="margin-top: 20px;">
                    <div class="cardActivities">
                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-8">
                                <div class="cardTextActivi">
                                    <h2>Juegos Destructivos</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A atque officiis, nobis quasi impedit, ullam fugiat architecto quam officia similique eos reiciendis laudantium amet fugit quas eveniet? Fuga, quam recusandae!</p>

                                </div>
                            </div>
                            <div class="col-xl-4">
                                <img class="img-fluid" src="img/2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10" style="margin-top: 20px;">
                    <div class="cardActivities">
                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-4">
                                <img class="img-fluid" src="img/3.png" alt="">
                            </div>
                            <div class="col-xl-8">
                                <div class="cardTextActivi">
                                    <h2>Natación Desincronizada</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A atque officiis, nobis quasi impedit, ullam fugiat architecto quam officia similique eos reiciendis laudantium amet fugit quas eveniet? Fuga, quam recusandae!</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10" style="margin-top: 20px;">
                    <div class="cardActivities">
                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-8">
                                <div class="cardTextActivi">
                                    <h2>Pintura Desastrosa</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A atque officiis, nobis quasi impedit, ullam fugiat architecto quam officia similique eos reiciendis laudantium amet fugit quas eveniet? Fuga, quam recusandae!</p>

                                </div>
                            </div>
                            <div class="col-xl-4">
                                <img class="img-fluid" src="img/4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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