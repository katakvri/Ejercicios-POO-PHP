<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
    class Empleado {
        // Atributos
        private $nombre;
        private $sueldo;

        // Metodos de Clase 
        public function __construct($nom, $sue) {
            $this->nombre=$nom;
            $this->sueldo=$sue;
        }
        public function imprimir() {
            echo "el empleado ".$this->nombre." tiene un sueldo de ".$this->sueldo;
            echo "<br>";
        }
        public function impuestos() {
            if ($this->sueldo > 2000) {
                echo $this->nombre." debera pagar impuestos";
                echo "<br>";
            } else {
                echo $this->nombre." no debera pagar impuestos";
                echo "<br>";
            }
        }
    };

    // Creando los objetos

    $empleado1 = new Empleado("Lucas", 1500);
    $empleado2 = new Empleado("Maria", 2300);
    $empleado3 = new Empleado("Roger", 3999);

    $empleado1->imprimir();
    $empleado1->impuestos();

    $empleado2->imprimir();
    $empleado2->impuestos();

    $empleado3->imprimir();
    $empleado3->impuestos();

    ?>
</body>
</html>