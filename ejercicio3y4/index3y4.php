<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
    class CabeceraPagina
    {
        // Atributos
        private $titulo;
        private $ubicacion;
        private $fuenteColor;
        private $fondoColor;

        // Metodos
        public function __construct($tit,$ubi="left",$fuenteColor = "black",$fondoColor = "white")
        {
            $this->titulo=$tit;
            $this->ubicacion=$ubi;
            $this->fuenteColor=$fuenteColor;
            $this->fondoColor=$fondoColor;
        }
        public function graficar() 
        {
            echo '<h1 style="text-align:'.$this->ubicacion.';background-color:'.$this->fondoColor.';color:'.$this->fuenteColor.'">';
            echo $this->titulo;
            echo "</h1>";
        }
    }
    
    $cabecera = new CabeceraPagina("El blog de parkour", "center");
    $cabecera->graficar();
    $cabecera2 = new CabeceraPagina("El blog de cocina", "left", "yellow", "green");
    $cabecera2->graficar();


    ?>
</body>
</html>