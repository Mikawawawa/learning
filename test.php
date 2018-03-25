<?php
    // echo addslashes("/")

    $preg="/\bis\b/";
    $test_text="This is a island";

    preg_match_all($preg,$test_text,$re);
    var_dump($re);
?>