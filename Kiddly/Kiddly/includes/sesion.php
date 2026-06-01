<?php
    session_start();
    if(!isset($_SESSION["usuarios"])){
        echo '<script>window.location.href = "index.php"</script>';	
    }
?>