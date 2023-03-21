<?php
/*
Magic Methods
-Methods with special Name Satrt With Double Underscore [ __ ]

Construct:
--Called when Object Created
--Can be Inherited


Distract:
--Called when Object Is Distract
*/



class Ipone{
    public $name;
    public $ram;

    public function __construct($n,$ra)
    {
        $this->name =$n;
        $this->ram =$ra;

        echo ' Hello '.$n.' Your Devise Has '.$ra.' Ram';
    }

}


$phone =new Ipone('mohammed','32');
echo '<pre>';
print_r($phone);
echo '</pre>';


?>