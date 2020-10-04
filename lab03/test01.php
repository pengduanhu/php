<?php
/**
 * Created by PhpStorm.
 * User: 86155
 * Date: 2020/3/23
 * Time: 19:08
 */

$a = array(
    2,
    array(2, 3, 4)
);

foreach ($a as $v) {
    if (is_array($v)) {
        foreach ($v as $x) {
echo $x."<br>";
        }
    }else{
        echo $v."<br>";
    }
}

?>