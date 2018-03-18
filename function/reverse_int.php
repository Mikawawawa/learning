<?php
    function reverse($param){ack=$param;

        $deepth=1;
        $backp        while($param/10>=1){
            $param=$param/10;
            $deepth++;
        }

        $bit=[];
        for($i=0;$i<$deepth;$i++){
            array_push($bit,$backpack%10);
            $backpack=$backpack/10;
        }
        print_r($bit);
    }
    reverse(100)
?>