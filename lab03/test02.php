<?php
/**
 * Created by PhpStorm.
 * User: 86155
 * Date: 2020/3/23
 * Time: 20:07
 */
$scores = array(68, 100, 70, 85, 90, 78, 65, 98, 85);

//$scores_group = array();

/*foreach ($scores as $xx) {
    $temp_key = "group" . floor($xx / 10) * 10;

    if (!array_key_exists($temp_key, $scores_group))
        $scores_group[$temp_key] = array();
    $scores_group[$temp_key][] = $xx;

}

print_r($scores_group);*/


$mb = array();
foreach($scores as $c) {
//    $c = 75;
    $key = "group" . floor($c / 10) . "0";
    $mb[$key][] = $c;
}

var_dump($mb);

?>

