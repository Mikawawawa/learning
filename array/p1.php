
<?php
// 长度为10的递增奇数数组

/*
 * @params int length,int start
 * @params array
 */
function singleArray($length,$value){
    $single=array($length);
    $i=1;

    while($i<$length){
        array_push($single,$value);
        $i++;
        $value+=2;
    }
    return $single;
}
// print_r(singleArray(10,1));
?>