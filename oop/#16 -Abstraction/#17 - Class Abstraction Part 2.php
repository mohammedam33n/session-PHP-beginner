<p>#17 - Class Abstraction Part 2</p>
<?php


/*
Class Abstraction
-cannot Be Instantiated [ Cannot Create Object Form ]
-Made For Other Classes To Inherit Prop & Methods From
-can Have Methods & Properties
-can Have Abtracted [ contains No Body Code ]
* Rules To Go On
* Force Developers To Fllow Your Method

*/
abstract class MakeDevice{

        abstract public function testPerformance();
        abstract public function verifOwner();
        abstract public function sayWelcome($n);

}

class Iphone extends MakeDevice{

    public function testPerformance(){
        echo 'Performance is Good 100%';
    }
    public function verifOwner(){
        echo 'Owner is verfied';
    }
    public function sayWelcome($n){
        $this->Owner=$n;
        echo 'Welcome '.$n;
    }

}

class Ipad extends MakeDevice{

    public function testPerformance(){
        echo 'Performance is Good 100%';
    }
    public function verifOwner(){
        echo 'Owner is verfied';
    }
    public function sayWelcome($n){
        $this->Owner=$n;
        echo 'Welcome '.$n;
    }

}

$Iphone= new Iphone();
$Iphone->sayWelcome('mohammed ameen');
echo '<pre>';
print_r($Iphone);
echo '<pre>';

$Ipad= new Ipad();
$Ipad->sayWelcome('Ahmed mahfouz');
echo '<pre>';
print_r($Ipad);
echo '<pre>';
?>


<!--
abstract class validation{
    abstract public function checkAge($nam);
    abstract public function checkName($nam);
    abstract public function checkPass($nam);

}

class check extends validation{
    public $name;
    public $age;
    private $password;

    public function checkName($nam){
        $this->name=$nam;
        if($nam==null){
            echo 'name is empty';
        }elseif(strlen($nam)<5 ){
            echo 'name is less than 5';
        }
    }

    const AGE=19;
    public function checkAge($ag){
        $this->age=$ag;
        if($ag<self::AGE){
            echo ' You are not allowed to enter, you are under 18';
        }
    }

    const PASS=10;
    public function checkPass($pass){
        $this->password=password_hash($pass,PASSWORD_DEFAULT);
        if($pass==null){
            echo 'password is empty';
        }elseif(strlen($pass)<self::PASS ){
            echo 'password is less than 10';
        }        
    }


    }
    
    // You are not allowed to enter, you are under 18


$name= new check();
$name->checkName('mohammed ameen');
$name->checkAge(20);
$name->checkPass('246824682468');
echo '<pre>';
var_dump($name);
echo '</pre>';

// $name->checkName('mohammed');




?>

