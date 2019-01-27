<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2019-01-27
 * Time: 17:55
 */

include_once ('Point.php');
include_once ('Moveable.php');

$P1 = new Point(2,3);
echo $P1 .'<br>';
$MP1 = new Moveable (4,6,5,7);
echo $MP1;
?>