<?php
if(isset($_POST["g-recaptcha-response"])){
    $secret = "6Lcmq2cqAAAAADm8VuAWNchgkIaPBGw1uncly1M3";
    $response = $_POST['g-recaptcha-response'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $finalResponse = file_get_contents($url."?secret=".$secret."&response=".$response."&remoteip=".$ip);
    $jsonResponse = json_decode($finalResponse);
    if($jsonResponse->success){
        include "includes/conexion.php";
        $usuario = mysqli_real_escape_string($mysqli,$_POST["usuario"]);
        $password = mysqli_real_escape_string($mysqli,$_POST["password"]);
        $query = "SELECT * FROM usuarios WHERE usuario='$usuario'";
        $consulta = mysqli_query($mysqli,$query);
        if($result = mysqli_query($mysqli,$query)){ 
            while($fila = mysqli_fetch_array($result)){
                $hash = $fila['contrasena'];  
            }
        }
        if(password_verify($password, $hash)){ 
            session_start();
            $_SESSION['usuarios'] = $usuario;
            echo '<script type="text/javascript">location.href="dashboard.php"</script>';
        }else{
            echo '<script type="text/javascript">location.href="login.php"</script>';
        }
    }
}


?>