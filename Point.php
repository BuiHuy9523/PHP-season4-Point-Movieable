<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2019-01-26
 * Time: 18:12
 */

class Point
{
public $x;
public $y;
public function __construct($x,$y)
{
    $this->x=$x;
    $this->y=$y;
}
function setx($x)
{
    $this->x=$x;
}
function sety($y)
{
    $this->y=$y;
}
function getx()
{
    return $this->x;
}
function gety()
{
    return $this->y;
}
function setxy($x,$y)
{
    $this->x=$x;
    $this->y=$y;
}
function getxy()
{
    $arr[]=$this->x;
    $arr[]=$this->y;
    return json_encode($arr);

}
public function __toString()
{
    return 'Point:'.$this->getxy();
    // TODO: Implement __toString() method.
}
}