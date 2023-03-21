<p>#14 - Inheritance Override Training 3</p>
<?php
/*
Intheritance
*/

class AppleDevices{
    //properties
    public $ram='2GB';
    public $inch='5 Inch';
    public $space='4 GB';
    public $color='Black';
    public $screen='LDC';

    //Methods
    function changeSpec($ra,$in,$sp,$col){
        $this->ram    =$ra;
        $this->inch   =$in;
        $this->space  =$sp;
        $this->color  =$col;
    }
    public function sayHello($n){
        $this->name=$n;
        echo 'Welcome To '.$n;
    }

}

class Sony extends AppleDevices{
    //properties
    public $camera='24MB';
    public function sayHello($n){
        $this->name=$n;
        echo 'Welcome To '.$n.' This Phone Has '.$this->ram.' Ram ';
    }

}

$iphone5plus=new AppleDevices();
$iphone5plus->changeSpec('4GB','5.5 Inch','16GB','Gold');
$iphone5plus->sayHello('iphone 5');
echo '<pre>';
print_r($iphone5plus);
echo '</pre>';


$sony=new Sony();
$sony->changeSpec('8GB','6.7 Inch','32GB','white');
$sony->sayHello('sony x3');

echo '<pre>';
print_r($sony);
echo '</pre>';
?>