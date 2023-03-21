<?php

/*
-[class] = Class Keyword
-[new] = New Object Keyword
-[public, Private, Protected ] = Visibility Markers
-[->] = object Operator
-[$tihs] = pseuudo Varible [ Refer TO Object Properties ]
-[::] = scope resolution operator [paamayim nekudotayim ]= Double Colon
*/

class AppleDevices{
    //properties
    public $ram;
    public $inch;
    public $space;
    public $color;
    public $ownerName;



    //constant
    const OWNERNAME=10;
    public function setOwnerName($owner){
    //check if name less than 5
    if(strlen($owner)<self::OWNERNAME){
        echo 'Owner Name Cant Be Less Than '.self::OWNERNAME.' Chars';
    }else{
        echo 'Your Name Has Been Set';
    }
    }
}

$iphon5plus=new AppleDevices();
$iphon5plus->ram='2GB';
$iphon5plus->inch='5 Inch';
$iphon5plus->space='32GB';
$iphon5plus->color='Gold';

//Methods of printing the constant 
/*
echo AppleDevices::OWNERNAME;
echo $iphon5plus::OWNERNAME;
*/
$iphon5plus->setOwnerName('osama mohammed');


echo "<pre>";
var_dump($iphon5plus);
echo "</pre>";


$iphon6plus=new AppleDevices();
$iphon6plus->ram='4GB';
$iphon6plus->inch='5.5 Inch';
$iphon6plus->space='32GB';
$iphon6plus->color='black';
$iphon6plus->setOwnerName('osama');

echo "<pre>";
var_dump($iphon6plus);
echo "</pre>";

$iphon7plus=new AppleDevices();
$iphon7plus->ram='12GB';
$iphon7plus->inch='6.5 Inch';
$iphon7plus->space='64GB';
$iphon7plus->color='white';
echo "<pre>";
var_dump($iphon7plus);
echo "</pre>";


?>