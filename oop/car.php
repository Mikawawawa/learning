<?php
    class Car{
        private $modal;
        private $color;

        function __construct($modal,$color){
            $this->modal=$modal;
            $this->color=$color;
        }

        function __toString(){            
            $props=[];
            $props["modal"]=$this->modal;
            $props["color"]=$this->color;
            return json_encode($props);
        }

        function __set($props,$value){
            $this->$props=$value;
        }

        function __get($props){
            return $this->$props;
        }
    }
?>