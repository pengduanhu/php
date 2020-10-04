<?php
/**
 * Created by PhpStorm.
 * User: 86155
 * Date: 2020/3/23
 * Time: 9:05
 */

$arr = array(
    33 => 1,
    "vip" => 2,
    3,
    6,
    20 => 42,
    9
);

$brr = [4, 6, 8];

var_dump($arr);
var_dump($brr);
print_r($arr);

echo $arr[20] = 84;
$arr["hello"] = 21;//新增索引不存在自动添加
$arr[] = 85;//新增索引为空自动添加

unset($arr["vip"]);//删除数组

/*$co=count($brr);
for($i=0;$i<3;$i++){
    echo $brr[$i]."<br>";

}*/

$a2=array(
    2,
    array(2,3,4),
    "hello"=>4,
);
