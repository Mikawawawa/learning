<?php
    // 驼峰
    function camelCased($param){
        $param=trim($param);
        $bit=explode(" ",$param);
        for($i=1;$i<count($bit);$i++){
            $bit[$i]=ucwords($bit[$i]);
        }
        return implode('',$bit);
    }
    echo camelCased("learn php class");
?>