<?php

class appleDivise{
    public $name;
    public $ram;
    public $color;

    public function divise($n,$r,$c){
        $this->name =$n;
        $this->ram =$r;
        $this->color =$c;
    }
    
}

class sony extends appleDivise{
    public $camera='30MB';
    public $screen='30 INCH';
}

$mobie=new appleDivise();
$mobie->divise('noki5','2Rm','BLACK');
echo '<pre>';
print_r($mobie);
echo '</pre>';

$mobie2=new sony();
$mobie2->divise('noki6','4Rm','WHITE','30MB');
echo '<pre>';
print_r($mobie2);
echo '</pre>';




























?>
<!--
/*
Intheritance
*/

class AppleDevices{
    //properties
    public $ram='5GB';
    public $inch='7 Inch';
    public $space='16 GB';
    public $color='Black';

    //Methods
    function changeSpec($ra,$in,$sp,$col){
        $this->ram    =$ra;
        $this->inch   =$in;
        $this->space  =$sp;
        $this->color  =$col;
    }
}

class Sony{
    //properties
    public $ram='5GB';
    public $inch='7 Inch';
    public $space='16 GB';
    public $color='Black';
    public $camera='25MB';

    //Methods
    function changeSpec($ra,$in,$sp,$col){
        $this->ram    =$ra;
        $this->inch   =$in;
        $this->space  =$sp;
        $this->color  =$col;
    }
}

$iphone5plus=new AppleDevices();
$iphone5plus->changeSpec('3GB','5 Inch','32GB','Gold');
echo '<pre>';
print_r($iphone5plus);
echo '</pre>';


$Sony=new Sony();
$Sony->changeSpec('3GB','5 Inch','32GB','Gold');
echo '<pre>';
print_r($Sony);
echo '</pre>';
?>