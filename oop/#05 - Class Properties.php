<?php

/*
-[class] = Class Keyword
-[new]   = New Object Keyword
-[public, Private, Protected ] = Visibility Markers
-[->]    = object Operator
*/
class AppleDevices{
    //properties

    public $ram;
    public $inch;
    public $space;
    public $color;

}
$iphon5plus=new AppleDevices();
echo "<pre>";
var_dump($iphon5plus);
echo "</pre>";
 
$iphon6plus=new AppleDevices();
echo "<pre>";
var_dump($iphon6plus);
echo "</pre>";

$iphon7plus=new AppleDevices();
echo "<pre>";
var_dump($iphon7plus);
echo "</pre>";


?>