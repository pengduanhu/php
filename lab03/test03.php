<?php
/**
 * Created by PhpStorm.
 * User: 86155
 * Date: 2020/3/23
 * Time: 22:12
 */


$names = array(
    array("Billy", "Peter", "Steven"),
    "Tim",
    "girls" => array("Marry", "Alice", "Jane"),
    array('hello', "world"),
    "Are you OK?"
);

foreach ($names as $v) {
    if (is_array($v)) {
        foreach ($v as $m) {
            echo $m . " ";
        }
    } else {
        echo $v . " ";
    }
    echo "<br>";
}
