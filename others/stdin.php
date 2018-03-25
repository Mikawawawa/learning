<?php
    $fh = fopen('php://stdin','r');

    echo "请输入任意字符\n";

    $str = fread($fh,1000);

    echo "输入的是".$str."\n";

    fclose($fh);

    $cnnn=@mysql_connect("hellor") or die("error");

    echo "请输入任意字符:\n";

    $str = fread(STDIN,1000);

    echo "你输入的是:".$str;
?>