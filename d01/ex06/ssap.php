#!/usr/bin/php
<?php
if ($argc > 1)
{
    $str = "";
    for($i = 1; $i < $argc; $i++)
    {
        $str .= $argv[$i];
        $str .= " ";
    }
    $str2 = ft_split($str);
    foreach($str2 as $value)
        echo $value, "\n";
}

function ft_split($str){
    $str = array_filter(explode(' ', $str));
    sort($str);
    return $str;
}
?>