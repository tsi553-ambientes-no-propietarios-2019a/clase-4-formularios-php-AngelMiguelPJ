<?php

$contraseña_1 = $_POST['txt_pass'];
$contraseña_2 = $_POST['txt_passconf'];

switch (true) {
    case $contraseña_1 == $contraseña_2:
        header('location: RegistroCorrecto.php');
        break;
    
    default:
    echo"<script type=\"text/javascript\">alert('Usted esta siendo redireccionado a la pagina principal, introdujo mal las contraseñas'); window.location='index.php';</script>"; 
        break;
}

?>