<?php
/*
polymorphism
*/


interface Mobile{
    public function pressHome();
}

class Iphone implements Mobile{
    public $name;
    public function pressHome(){
        echo 'you Will See Opened Aplication';
    }
}  

class Sony implements Mobile{
    public $name;
    public function pressHome(){
        echo 'Will Close All Apps';
    }
}

$iphone =new Iphone();
$iphone->pressHome();
echo '<pre>';
print_r($iphone);
echo '</pre>';


$Sony =new Sony();
$Sony->pressHome();
echo '<pre>';
print_r($Sony);
echo '</pre>';


?>