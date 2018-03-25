<?php
    // 科学技术法，三位一个
    function scienceType($param){
        $param=(string)$param;
        $param=strrev($param);
        $bit=str_split($param,3);
        $param=implode(',',$bit);
        return strrev($param);
    }
    echo scienceType(1233456789);
?>