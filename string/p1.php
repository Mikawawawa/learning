<?php
    // 获取后缀名
    // explode count substr strlen
    function getFileType($fname){
        if(strpos($fname,'.')){
            $split=explode('.',$fname);
            // print_r($split);
            return $split[count($split)-1];
        }else{
            return "";
        }
    }
    echo(getFileType("abc.exe"));
?>