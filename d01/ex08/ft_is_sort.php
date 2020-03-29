#!/usr/bin/php
<?php
function ft_is_sort($tab)
{
   $arr_sorted = $tab;
   sort($arr_sorted);
    if (array_diff_assoc($arr_sorted, $tab) == null)
        return true;
    else
        return false;
}
?>