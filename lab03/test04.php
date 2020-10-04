<?php
/**
 * Created by PhpStorm.
 * User: 86155
 * Date: 2020/3/23
 * Time: 22:30
 */


$phones=array(
    array("iPhone 6 Plus","6088","i6p.jpg"),
    array("Galaxy S5","3299","galaxys5.jpg"),
    array("Moto X","2999","motox.jpg"),
    array("MX 4 Pro","2199","mx4pro.jpg"),
    array("Mate 7","3299","mate7.jpg"),
);

$html = "<ul>";
foreach($phones as $xx) {
    list($name,$price,$image)=$xx;
    $html .= <<<ABC
        <li style="float: left;">
            <ul>
                <li> <img src="images/$image" />  </li>
                <li><p style="color:red;">$price</p></li>
                <li><p>$name</p></li>
            </ul>
        </li>
ABC;
}
$html .="</ul>";

echo $html;