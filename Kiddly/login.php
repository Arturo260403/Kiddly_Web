<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login-style.css">
    <link rel="shortcut icon" href="img/KIDDLY.png" type="image/x-icon">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <title>Kiddly - Iniciar Sesión</title>
</head>

<body>
    <div class="container-fluid">
        <div class="container containerFromLogin">
            <div class="row">
                <div class="col-xl-12">
                    <div class="formCardLogin">
                        <form method="POST" action="login2.php" onsubmit="return validacionRecaptcha()">
                            <img class="my-5 img-fluid" src="img/KIDDLY.png" style="width:300px;">
                            <div class="inputUser">
                                <input type="text" class="form-control" id="Usuario" name="usuario" placeholder="Usuario">
                            </div>
                            <div class="inputPass">
                                <input type="password" class="form-control mt-3" id="Password" name="password" placeholder="Contraseña">
                            </div>

                            <div class="g-recaptcha my-3 " data-sitekey="6Lcmq2cqAAAAAE7mLpnddDmN4zpazV33vE3bRJ8r"></div>
                            <div style="display:none;" class="capAdvert" id="aviso_captcha">Por favor, verifique el captcha</div>

                            <button class="btnPersLogin w-100 btn btn-lg" type="submit">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function validacionRecaptcha() {
            let response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('aviso_captcha').style.display = "block";
                return false;
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>