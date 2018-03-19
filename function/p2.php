<?php

function foo($param){
    $deepth=1;
    $backpack=$param;

    while($param/10>=1){
        $param=$param/10;
        $deepth++;
    }
    $param=$backpack;
    $bit=[];
    for($i=0;$i<$deepth;$i++){
        array_push($bit,$backpack%10);
        $backpack=$backpack/10;
    }
    $pow=0;
    for($i=0;$i<$deepth;$i++){
        $pow+=pow($bit[$i],2);
    }
    return $pow==$param?TRUE:FALSE;
}
    print_r(foo(1));

?>