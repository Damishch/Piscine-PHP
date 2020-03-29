#!/usr/bin/php
<?php
if ($argc == 2)
{
    $arr = array_filter(explode(' ', $argv[1]));
    $str = "";
    foreach($arr as $value)
    {
        $str .= $value;
        $str .= " ";
    }
    echo trim($str), "\n";
}
?>