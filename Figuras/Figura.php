
<?php
    abstract class Figura
    {
        public abstract function getName();

        public abstract function getArea();

        public abstract function getPerimetro();

        public function ToString()
        {
            return $this->getName() . " Area: " . $this->getArea() . " Perimetro: " . $this->getPerimetro();
        }
    }

?>