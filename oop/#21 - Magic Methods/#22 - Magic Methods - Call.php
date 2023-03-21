<?php
/*
Magic Methods
-Method With Special Name Start With Doble Underscore [ __ ]

Call:
-Called When Invoking Function Not Accesible Or Not Found
-Accept Two parameters [ $Methods, $params ]
*/

class Iphone{
    public $name;
    public $ram;


    public function __call($name, $arguments)
    {
        echo 'The Method ['.$name.']NOt Found Or Not Accessible <br>';
        foreach($arguments as $val):
        echo $val."<br>";
        endforeach;
    }
}

$phone= new Iphone('','');
$phone->welcome('osame','2GB');












?>