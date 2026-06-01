<?php
include "includes/sesion.php";
include "includes/conexion.php";
?>

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
    <link rel="stylesheet" href="css/dashboard.css">
    <!--Link iconos de bootstrap 5-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <title>KiddLy - Admin Dashboard</title>
</head>

<body>

    <!--Include del menú-->
    <?php
    include "includes/dashMenu.php";
    ?>
    <!--Include del menú-->

    <section class="container-fluid containerDashFluid">
        <div class="container" style="padding-top: 30px; padding-bottom:20px;">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="CardDash">
                        <div class="card-body">
                            <h3>Gestionar Usuarios</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt porro consequatur quas, sed mollitia, ipsam sint blanditiis alias, totam quia nihil perferendis magni. Id sapiente laborum itaque numquam nemo ex.</p>
                            <a href="users.php" class="">Gestionar Usuarios</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="CardDash">
                        <div class="card-body">
                            <h3>Gestionar Blogs</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt porro consequatur quas, sed mollitia, ipsam sint blanditiis alias, totam quia nihil perferendis magni. Id sapiente laborum itaque numquam nemo ex.</p>
                            <a href="blogs.php" class="">Gestionar Blogs</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="CardDash">
                        <div class="card-body">
                            <h3>Gestionar Galeria</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt porro consequatur quas, sed mollitia, ipsam sint blanditiis alias, totam quia nihil perferendis magni. Id sapiente laborum itaque numquam nemo ex.</p>
                            <a href="galery.php" class="">Gestionar Galeria</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="CardDash">
                        <div class="card-body">
                            <h3>Gestionar Contacto</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt porro consequatur quas, sed mollitia, ipsam sint blanditiis alias, totam quia nihil perferendis magni. Id sapiente laborum itaque numquam nemo ex.</p>
                            <a href="contactMessage.php" class="">Gestionar Contacto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--Scripts de bootstrp 5-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!--Scripts propios-->
    <script src="js/main.js"></script>

</body>

</html>