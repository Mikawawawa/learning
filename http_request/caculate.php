<?php
    $signal=["","+","-","*","%"];
    $_POST[signal]=$signal[$_POST[signal]];
    echo $_POST[first_value].$_POST[signal].$_POST[second_value];
?>
