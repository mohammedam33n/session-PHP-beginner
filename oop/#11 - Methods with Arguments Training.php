<?php

/*
Learn Object Oriented PHP #11 - Methods with Arguments Training

*/

class AppleDevices{
    //properties
    public $ram;
    public $inch;
    public $space;
    public $color;


    function changeSpec($ra,$in,$sp,$col){
        $this->ram    =$ra;
        $this->inch   =$in;
        $this->space  =$sp;
        $this->color  =$col;
    }
}

$iphon5plus=new AppleDevices();
$iphon5plus->changeSpec('5GB','5 Inch','32GB','Gold');

//echo $iphon5plus->color;
echo "<pre>";
var_dump($iphon5plus);
echo "</pre>";



$iphon6plus=new AppleDevices();
$iphon6plus->changeSpec('8GB','5.5 Inch','64GB','Black');

echo "<pre>";
var_dump($iphon6plus);
echo "</pre>";





/*

class input{
    public $name;
    public $age;
    public $faColor;

    public function user($n,$a,$fa){

        $this->name=$n;
        $this->age=$a;
        $this->faColor=$fa;
    }


}



$user= new input();
// opject operator
$user->user('mohammmed','20','blue');
echo '<pre>';
var_dump($user);
echo '</pre>';

//new object keyword
$admin=new input();
$admin->user('mohsen','25','black');
echo '<pre>';
var_dump($admin);
echo '</pre>';


*/
?>











