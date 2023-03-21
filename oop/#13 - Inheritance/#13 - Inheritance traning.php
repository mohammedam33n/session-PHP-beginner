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

}

class Sony extends AppleDevices{
    //properties
    public $camera='25MB';
}

$iphone5plus=new AppleDevices();
$iphone5plus->changeSpec('4GB','5.5 Inch','16GB','Gold');
echo '<pre>';
print_r($iphone5plus);
echo '</pre>';


$sony=new Sony();
$sony->changeSpec('8GB','6.7 Inch','32GB','white');
echo '<pre>';
print_r($sony);
echo '</pre>';
?>