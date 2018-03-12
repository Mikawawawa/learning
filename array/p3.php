<?php
    require_once("p1.php");
    function difference($array){
        rsort($array);
        return ($array[0]-$array[count($array)-1]);
    }
?>