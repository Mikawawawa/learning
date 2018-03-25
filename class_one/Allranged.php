<?php
require_once("util.php");

function doubleRanged($pop,$num,$temp){
    array_push($temp,$pop.$num,$num.$pop);
    return $temp;
}

function limitedRanged($num,$remain){
    if(count($remain)<=0){
        array_push($remain,$num);
    }else{
        $temp=[];
        while(count($remain)>0){
            $pop=array_pop($remain);
            $temp=doubleRanged($pop,$num,$temp);
        }
        outLine($temp);
        outLine($remain);
    }
}

function allRanged(...$input){
    if(count($input)>0){
        $remain=[];
        $ranged=$input;

    }else{
        outLine("输入数字数量为0");
    }
}

limitedRanged(1,[23,32]);
?>