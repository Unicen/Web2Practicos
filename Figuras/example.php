<?php
    require_once("Figura.php");
    require_once("Cuadrado.php");
    require_once("Triangulo.php");
    require_once("Circulo.php");
    require_once("Figuras.php");
    require_once("AreaFilter.php");

    $figuras = new Figuras();
    
    $figuras->clear();

    $figuras->insert(new Cuadrado(3.0));
    $figuras->insert(new Cuadrado(6.3));
    $figuras->insert(new Cuadrado(8.0));
    $figuras->insert(new Cuadrado(9.0));
    $figuras->insert(new Triangulo(1.1,3.5));
    $figuras->insert(new Triangulo(9.0,0.1));
    $figuras->insert(new Triangulo(4.0,5.0));
    $figuras->insert(new Triangulo(5.0,5.0));
    $figuras->insert(new Circulo(1.5));
    $figuras->insert(new Circulo(2.1));
    $figuras->insert(new Circulo(3.0));
    $figuras->insert(new Circulo(4.4));

    echo "La figura 6 es: " . $figuras->get(6)->ToString() . "<br><br>";
  
    echo "Las figuras con area menor a 20 son:<ul>";
    foreach($figuras->getBy(new AreaFilter(20)) as $figura)
        echo "<li>" . $figura->ToString() . "</li>";
    echo "</ul>";

?>