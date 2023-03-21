<?php
/*
Magic Methods
-Method With Special Name Start With Doble Underscore [ __ ]

Call:
-Called When Invoking Function Not Accesible Or Not Found
-Accept Two parameters [ $Methods, $params ]
*/

class Ie{
    public $name;
    public $ram;

    
    public function __set($name, $value)
    {
        die;
        // $this->name=$value;
        echo 'The Method ['.$name.']NOt Found Or Not Accessible <br>';
        echo 'And you Cannot Assign This Value['.$value.'] To it <br>';
    }


}

$phone1= new Ie();
$phone1->name = "ameen";
$phone1->name = "ameen";
// $phone1->welcome('osame','2GB');

echo '<pre>';
print_r($phone1);
echo '</pre>';












?>