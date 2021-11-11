<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>contadorvisitas</title>
    </head>
    <body>
    <?php
        $cookie_name = 'visitas';
        if ( isset( $_COOKIE[ $cookie_name ] ) ) {
            setcookie( $cookie_name, $_COOKIE[ $cookie_name ] + 1, time() + 3600 * 24 );
            $mensaje = 'Numero de visitas: '.$_COOKIE[ $cookie_name ];
        }
        else {
            setcookie( $cookie_name, 1, time() + 3600 * 24 );
            $mensaje = 'Bienvenido por primera vez a nuesta web';
        }
        
        echo $mensaje;
    ?>
    </body>
</html>
