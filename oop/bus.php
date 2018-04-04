<?php
    require_once("./car.php");

    class Bus extends Car{
        private $pessager;
        function __construct($modal,$color){
            parent::__construct($modal,$color);
            $this->pessager=0;
        }
        function __toString(){           
            $props=[];
            $props["modal"]=$this->modal;
            $props["color"]=$this->color;
            $props["pessager"]=$this->pessager;
            return json_encode($props);
        }
    }

    $_101=new Bus("changan","blue");
    echo $_101;
?>