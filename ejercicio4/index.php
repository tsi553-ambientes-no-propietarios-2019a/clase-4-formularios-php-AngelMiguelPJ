<?php

/**
 * Problema Propuesto:
 * Desarrollar un formulario que simule el registro de un usuario (archivo index.php). 
 * El formulario debe solicitar el nombre de usuario y la clave en dos oportunidades. 
 * El formulario debe ser procesado por el archivo validarRegistro.php. Este archivo
 * debe implementar una función que permita validar si las dos contraseñas coinciden. 
 * Si las contraseñas coinciden, se debe redirigir al archivo "registroCorrecto.php"
 * Si las contraseñas no coinciden, se debe redirigir al index.php y mostrar el mensaje
 * "Las contrseñas no coinciden".
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <title>FORMULARIO | Clase 4 | Ejercicio 3 | ANP</title>

    </head>
    <body>
        <h1 style="text-align: center">LOGIN</h1>
        <div class="container">
            <div class="row" >
                <div class="col-sm" >
                </div>
                <div class="col-sm" >
                    <form action="validarRegistro.php" method="POST">
                        
                        <div class="form-group">
                            <label for="txt_usuario">Usuario</label>
                            <input type="text" class="form-control" name="txt_usuario" placeholder="Ingrese su usuario" required>
                        </div>
                        <div class="form-group">
                            <label for="txt_pass">contraseña</label>
                            <input type="password" class="form-control" name="txt_pass" placeholder="Ingrese su contraseña" required>
                        </div>
                        <div class="form-group">
                            <label for="txt_passconf">Confirmar contraseña</label>
                            <input type="password" class="form-control" name="txt_passconf" placeholder="Ingrese su contraseña" required>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">INGRESAR</button>


                        </div>
                    
                    </form>
                </div>
                <div class="col-sm">
                </div>
            </div>
        </div>




        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    </body>
</html>
