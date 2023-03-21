<?php

class Iphon{
    public $name;
    public $email;

    public function presPower()
    {
        echo 'you have pressed The power Button <br>';
        return $this;
    }

    public function bootPhone()
    {
        echo 'The Phone Is Booting Now... <br>';
        return $this;
    }

    public function sayWelcom()
    {
        echo 'Welcome To Phone <br>';
        return $this;
    }
    
}

$pone = new Iphon();
/*
$pone->presPower();
$pone->bootPhone();
$pone->sayWelcom();
*/
$pone->presPower()->bootPhone()->sayWelcom();

echo '<pre>';
print_r($pone);
echo '</pre>';


?>