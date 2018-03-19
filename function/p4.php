<?php
    function order(&$param_a,&$param_b){
        if($param_a<$param_b){
            $param_a=$param_b+$param_a;
            $param_b=$param_a-$param_b;
            $param_a=$param_a-$param_b;
        }
    }

    function get_max($param_a,$param_b){
　　order($param_a,$param_b);
        
        if($param_b!=0){
            return get_max($param_a,$param_b);
        }else{
            return 0;
        }
    }
    $a=4;
    $b=3;
    echo get_max($a,$b);
?>