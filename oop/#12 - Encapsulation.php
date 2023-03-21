<?php



class AppleDevices{
    //properties
    public $ram;
    public $inch;
    public $space;
    public $color;
    private $lock;



    public function changeSpec($ra,$in,$sp,$col){
        $this->ram    =$ra;
        $this->inch   =$in;
        $this->space  =$sp;
        $this->color  =$col;
    }

    public function changeLock($lo){
        $this->lock=sha1($lo);
    }
}

$iphon5plus=new AppleDevices();
$iphon5plus->changeSpec('5GB','5 Inch','32GB','Gold');
$iphon5plus->changeLock('M24682468');
echo "<pre>";
var_dump($iphon5plus);
echo "</pre>";




/*


class usr{
    //properts
    public $name;
    public $email;
    private $pass;


    public function lockPassword($p){
        $this->pass=sha1($p);
    }

}

$owner=new usr();
$owner->name='mohammed';
$owner->email='mohammed@gmail.com';
$owner->lockPassword('12345');

echo '<pre>';
var_dump($owner);
echo '</pre>';

?>