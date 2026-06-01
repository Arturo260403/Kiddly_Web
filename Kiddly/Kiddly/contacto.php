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
    <title>KiddLy Contacto - Tu guarderia de confianza</title>
</head>

<body>

    <!--Include del menú-->
    <?php
    include "includes/menu.php";
    ?>
    <!--Include del menú-->

    <section class="container-fluid cardContactFluid" style="padding-top: 60px; padding-bottom:70px;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-12">
                    <h1 class="heroTitle" style="text-align:center;">Contacta con Nosotros!!</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center" style="margin-top:30px">
                <div class="col-lg-12 col-sm-12 p-5 reservCont rounded-3">
                    <form action="contact2.php" method="POST" enctype="multipart/form-data">
                        <!-- 2 column grid layout with text inputs for Nombre and Teléfono -->
                        <div class="row mb-3">
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <div class="form-floating">
                                    <input type="text" id="nombreC" class="form-control" name="nombre" required />
                                    <label for="nombreC">Nombre Completo</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-floating">
                                    <input type="tel" id="telfCont" class="form-control" name="telefono" required />
                                    <label for="telfCont">Teléfono de Contacto</label>
                                </div>
                            </div>
                        </div>

                        <!-- Email y Asunto input -->
                        <div class="row mb-3">
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <div class="form-floating">
                                    <input type="email" id="emailReserva" class="form-control" name="email" required />
                                    <label for="emailReserva">Correo Electrónico</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <div class="form-floating">
                                    <input type="text" id="asunto" class="form-control" name="asunto"/>
                                    <label for="asunto">Asunto</label>
                                </div>
                            </div>
                        </div>

                        <!-- Observaciones input -->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="observaciones" style="height: 130px;" name="observaciones"></textarea>
                            <label for="observaciones">Observaciones</label>
                        </div>

                        <!-- Submit button -->
                        <input class="btnPersContact mb-3" type="submit" value="Enviar Formulario">
                    </form>
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