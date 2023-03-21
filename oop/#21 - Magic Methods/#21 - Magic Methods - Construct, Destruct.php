<?php
/*
Magic Methods
-Methods with special Name Satrt With Double Underscore [ __ ]

Construct:
--Called when Object Created
--Can be Inherited
*/



class Ipone{
    public $name;
    public $ram;

    public function sayHello($n)
    {
        $this->name =$n;
        echo "Hello "."$n";
    }

    public function __construct()
    {
        // echo 'Object Is Crated';
    }

}

/*
class sony extends Ipone{
}
$phone =new sony();
*/

$phone =new Ipone();
$phone->sayHello('mohammed ameen');
echo '<pre>';
print_r($phone);
echo '</pre>';


?>