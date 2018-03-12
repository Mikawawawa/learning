<?php
require_once("p1.php");
error_reporting('Notice');
/*
 * @parms input array
 * @parms output int|string
 */
function getMax($input){
    $maxValue=-PHP_INT_MAX;
    $maxKey='error';
    $i=0;
    if(count($input)>0){
        foreach($input as $key){
            if($input[$key]>$maxValue){
                $maxKey=$key;
            }
        }
    }
    return $maxKey;
}

$array=singleArray(10,1);

var_dump(getMax($array));
?>