<?php
/*
 * input array;
 */
require_once("p1.php");
function simple_array_reverse($array){
    $reverse=[];
    while(count($array)>0){
        array_unshift($reverse,array_shift($array));
    }
    return $reverse;
}
?>