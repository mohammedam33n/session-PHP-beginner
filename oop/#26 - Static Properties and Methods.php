<?php


class IPhoe{
    public static $name='Hamada';
    public static $ram='2GB';

    public static function sayHello(){
        return 'Hello';
    }

}

// $phone=new IPhoe();
// echo $phone->name;
echo Iphone::$name.'<br>';

// echo Iphone::sayHello();