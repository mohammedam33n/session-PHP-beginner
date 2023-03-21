<?php
/*
Intheritance
*/


/*
super class
main class
parent class
*/
class AppleDevices{
    //properties
    public $ram='2GB';
    public $inch='5 Inch';
    public $space='4 GB';
    public $color='Black';
    public $screen='LDC';


    //Methods
    public function changeSpec($ra,$in,$sp,$co){
        $this->ram    =$ra;
        $this->inch   =$in;
        $this->space  =$sp;
        $this->color  =$co;
    }
    public function sayHello($n){
        $this->name=$n;
        echo 'Welcome To '.$n;
    }

}


/*
child class
sup class
*/
class Sony extends AppleDevices{
    //properties
    public $camera='24MB';
    function changeSpecss($ra,$in,$sp,$co,$ca){
        $this->ram    =$ra;
        $this->inch   =$in;
        $this->space  =$sp;
        $this->color  =$co;
        $this->camera  =$ca;
    }
}

$iphone5plus=new AppleDevices();
$iphone5plus->changeSpec('4GB','5.5 Inch','16GB','Gold');
$iphone5plus->sayHello('iphone5');
echo '<pre>';
print_r($iphone5plus);
echo '</pre>';


$sony=new Sony();
$sony->changeSpecss('8GB','6.7 Inch','32GB','white','50MB');
$sony->sayHello('iphone5');

echo '<pre>';
print_r($sony);
echo '</pre>';

?>


<!--


class appleDivies{
    public $name;
    public $ram;
    public $color;
    public $screen;

    public function changSpace($n,$r,$c,$s)
    {
        $this->name=$n;
        $this->ram=$r;
        $this->color=$c;
        $this->screen=$s;
    }






}

class es extends appleDivies{
    public $camera='30GB';
    
    public function sayHello($n)
    {
        $this->name=$n;
        echo 'Type Phone Is '.$n.' '.$this->ram.' GB';;
    }

}



$iphone5=new appleDivies();
$iphone5->changSpace('iphone5','23GB','BLACK','32 Inch');

echo "<pre>";
print_r($iphone5);
echo "</pre>";


$iphone6=new es();
$iphone6->changSpace('iphone6','23GB','BLACK','32 Inch');
$iphone6->sayHello('iphone6');

echo "<pre>";
print_r($iphone6);
echo "</pre>";
?>
?>