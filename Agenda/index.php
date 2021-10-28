<!DOCTYPE html>
<?php
/**
* Practica PHP de una Agenda
* para guardar nombre y telefonos.
*/
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agenda</title>
    </head>
    <body>
        <?php
            // Declaramos las variables
            if(isset($_GET["nombre"])){
               $nombre = ($_GET["nombre"]); 
            } else {
                $nombre = "";
            }
            
            $telefono = isset($_GET["telefono"]) ? $_GET["telefono"] : $telefono = "";
            
            if(isset($_GET["agenda"])){
                $agenda = ($_GET["agenda"]);
            } else {
                $agenda = [];
            }
            
            if(isset($_GET["submit"])){
                $newnombre = $_GET["nombre"];
                $newtelefono = $_GET["telefono"];
                if(empty($newtelefono)){
                    unset($agenda["$newnombre"]);
                } else {
                    $agenda[$nombre] = $telefono;
                }
            }
        ?>
        <h1>Agenda</h1>
        <form method="get">
            <?php
                foreach ($agenda as $nombre => $telefono) {
                    echo "<input type='hidden' name='agenda[".$nombre."]' value='".$telefono."'>";
                }
            ?>
            Nombre: <input type="text" name="nombre">
            Telefono: <input type="text" name="telefono">
            <input type="submit" name="submit" value="Guardar">
        </form>
       <?php
            echo "<h1>Mi agenda:</h1>";
            print_r($agenda);
       ?>
    </body>
</html>
