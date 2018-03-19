<?php
    /*
      *不定参数，输出单行
      */
    function outLine(...$input){
        if(count($input)>0){
            foreach($input as $key){
                print_r($key);
            }
        }
        echo("\n");
    }
    /*
      *判断是否是单数
      */
    function isSingle($i){
        return $i%2==0?0:1;
    }
?>