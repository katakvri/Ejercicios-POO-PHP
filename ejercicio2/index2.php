<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercici 2</title>
</head>
<body>
    <?php
class Menu {
    private $enlaces=array();
    private $titulos=array();
   

    public function cargarOpcion($en,$tit)
    {
      $this->enlaces[]=$en;
      $this->titulos[]=$tit;
    }
   
    public function mostrarHorizontal()
    {
      for($f=0;$f<count($this->enlaces);$f++)
      {
        echo '<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
        echo "-";
      }
    }
   
    public function mostrarVertical()
    {
      for($f=0;$f<count($this->enlaces);$f++)
      {
        echo '<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
        echo "<br>";
      }
    }
  }

  $menu1=new Menu();


  $menu1->cargarOpcion('https://www.google.com','Google');
  $menu1->cargarOpcion('https://www.google.com','Amazon');
  $menu1->cargarOpcion('https://www.youtube.com','Youtube');
   
  $menu1->mostrarHorizontal();

  ?>
</body>
</html> 