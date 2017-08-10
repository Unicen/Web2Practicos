<?php
    require_once("Figura.php");

    class Figuras
    {
        public function __construct()
        {
            session_start();
            if(!isset($_SESSION['figuras']))
                $this->clear();
        }

        public function clear()
        {
            $_SESSION['figuras'] = []; 
        }
        

        public function getBy($filter)
        {
            $match = [];
            foreach($_SESSION['figuras'] as $figura)
                if($filter->match($figura))
                    $match[] = $figura;
            return $match;
        }

        public function get($id)
        {
            return $_SESSION['figuras'][$id];
        }

        public function insert($figura)
        {
            $_SESSION['figuras'][] = $figura;
        }
    }

?>