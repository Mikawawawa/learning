<?php
    function reverse($param){
        $deepth=1;
        $backpack=$param;

        while($param/10>=1){
            $param=$param/10;
            $deepth++;
        }

        $bit=[];
        for($i=0;$i<$deepth;$i++){
            array_push($bit,$backpack%10);
            $backpack=$backpack/10;
        }
        $reverse=0;
        print_r($bit);
        for($i=$deepth;$i>=0;$i--){
            $reverse+=$bit[$i]*pow(10,$deepth-$i-1);
        }
        echo $reverse;
    }
    reverse(102)
?>