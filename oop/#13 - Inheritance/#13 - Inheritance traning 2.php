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
    public $camera='24MB';
    function changeSpecss($ra,$in,$sp,$col,$ca){
        $this->ram    =$ra;
        $this->inch   =$in;
        $this->space  =$sp;
        $this->color  =$col;
        $this->camera  =$ca;
    }
}

$iphone5plus=new AppleDevices();
$iphone5plus->changeSpec('4GB','5.5 Inch','16GB','Gold');
echo '<pre>';
print_r($iphone5plus);
echo '</pre>';


$sony=new Sony();
$sony->changeSpecss('8GB','6.7 Inch','32GB','white','50MB');
echo '<pre>';
print_r($sony);
echo '</pre>';
?>