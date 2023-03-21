<?php
/*
Class Abstraction
-cannot Be Instantiated [ Cannot Create Object Form ]
-Made For Other Classes To Inherit Prop & Methods From
-can Have Methods & Properties
-can Have Abtracted [ contains No Body Code ]
*/
abstract class MakeDevce{
    public $ram;

    public function sayHello(){
    echo'Say Hello';
    }

        //-can Have Abtracted [ contains No Body Code ]
        //abstract public function sayBye();
        // abstract public function sayTest();
}

class ApleDevice extends MakeDevce{

}

$iphon6plus= new ApleDevice();
$iphon6plus->sayHello();
$iphon6plus->ram='23 BM';

echo '<pre>';
print_r($iphon6plus);
echo '<pre>';
?>