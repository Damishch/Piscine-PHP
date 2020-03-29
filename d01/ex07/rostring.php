#!/usr/bin/php
<?php
if ($argc > 1)
{
    $str = ft_revstr($argv[1]);
    echo $str, "\n";
}

function ft_revstr($str){
    $str = array_filter(explode(' ', $str));
    $last = count($str);
    $tmp = $str[$last];
    $str[$last] = $str[0];
    $str[0] = $tmp;
    $str2 = "";
    for($i = 0; $i <= $last; $i++)
    {
        $str2 .= $str[$i];
        $str2 .= " ";
    }
    return trim($str2);
}
?>