#!/usr/bin/php
<?php
    if ($argc < 2)
        return 0;
    $str = preg_replace("/\t+/", " ", $argc[1]);
    echo trim($str), "\n";
?>