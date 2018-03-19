<?php
    function check($param){
        for($i=2;$i<$param/2;$i++){
            if(($param%$i)==0){
                return 0;
            }
        }
        return 1;
    }
    echo check(1);
?>