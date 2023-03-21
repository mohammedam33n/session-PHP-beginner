<?php
/*
Magic Methods
-Method With Special Name Start With Doble Underscore [ __ ]

Call:
-Called When Invoking Function Not Accesible Or Not Found
-Accept Two parameters [ $Methods, $params ]
*/

class Iphone{
    public $name;
    public $email;

    public function __construct($n,$e){
        $this->name=$n;
        $this->email=$e;
    }
}

$main= new Iphone('mohammed','mo@gmail.com');

$copy=$main; 
$main->name='Ahmed';
$copy->name='Osama';

echo '<pre>';
print_r($main);
echo '</pre>';

echo '<pre>';
print_r($copy);
echo '</pre>';

echo '<br>';
echo '<br>';


$main= new Iphone('mohammed','mo@gmail.com');

$copy=clone $main; 
$main->name='Ahmed';
$copy->name='Osama';

echo '<pre>';
print_r($main);
echo '</pre>';

echo '<pre>';
print_r($copy);
echo '</pre>';












?>