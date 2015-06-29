<?php
/**
 * Created by PhpStorm.
 * User: Anurag
 * Date: 6/28/2015
 * Time: 5:40 PM
 */
function randStrGen($len)
{
    $result = "";
    $chars = "abcdefghijklmnopqrstuvwxyz0123456789$$$$$$$1111111";
    $charArray = str_split($chars);
    for ($i = 0; $i < $len; $i++) {
        $randItem = array_rand($charArray);
        $result .= "" . $charArray[$randItem];
    }
    return $result;
}

?>