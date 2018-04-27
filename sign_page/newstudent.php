<?php
    $nick=$_POST[nick];
    $password=$_POST[password];
    $name=$_POST[name];
    $home=$_POST[home];
    $sid=$_POST[id];

    $pdo=new PDO();
    $sql="INSERT INTO `student` (`nick`, `name`, `home`, `password`, `sid`) VALUES ('".$nick."', '".$name."', '".$home."', '".$password."', '".$sid."')";
    echo $pdo->exec($sql);
?>