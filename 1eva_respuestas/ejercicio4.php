<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
</head>
<body>
<?php


/**
 * Aqui he creado clase Escuela
 */
class Escuela
{
    // He creado atributo protected para favorecer la herencia
    private $name;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __set($property, $value)
    {

        $this->$property = $value;

    }

    public function __get($property)
    {

        return $this->$property;

    }
}

/**
 * creamos clase Profesor que extiende de Escuela y por tanto heredará name
 */
class Profesor extends Escuela
{
    public $nombre;

    /**
     * creamos el constructor y añadimos la propiedad del padre $name
     * @param $nombre
     */
    public function __construct($name, $nombre)
    {
        $this->nombre = $nombre;
        parent::__construct($name);
    }
}

$escuela = new Escuela('BorjaMoll');
$escuela->calle='Aragon 12';

/**
 * imprimimos la propiedad que existe y la que hemos establecido
 */
echo "<h2>Clase Escuela</h2><br>";
echo "Escuela: " . $escuela->name . "<br>"; //obtenemos name
echo "Calle: " . $escuela->calle . "<br>"; //Hemos establecido la calle

$profesor = new Profesor('Informatica', 'Rafa');

$profesor->aula= '2B';

//$profesor->__set('aula', '2B');

echo "<h2>Clase Profesor</h2><br>";
echo "Escuela: " . $profesor->name . "<br>"; //obtenemos name del hijo
echo "Profesor: " . $profesor->nombre . "<br>"; //obtenemos nombre del profesor
echo "Aula: " . $profesor->aula . "<br>"; //obtenemos aula del profesor
?>
</body>
</html>