<p>#19 - Polymorphism Part 3</p>
<?php

/*
polymorphism
-Have Method Without Body Code
*/


interface DBConnects{
    public function getUser();
    public function getArtiles();
    public function showStats();
}

class MYSQL implements DBConnects{
    public function getUser(){
        echo 'SELECT * FROM user';
    }
    public function getArtiles(){
        echo 'SELECT * FROM Artiles';
    }
    public function showStats(){
        echo 'SELECT * FROM Stats';
    }
}

class oracle implements DBConnects{
    public function getUser(){
        echo 'SELECT * from user';
    }
    public function getArtiles(){
        echo 'SELECT * from Artiles';
    }
    public function showStats(){
        echo 'SELECT * from Stats';
    }
}

//Using this method from using a database of type MYSQL

$row =new MYSQL();
$row ->getUser();
$row ->getArtiles();
$row ->showStats();
echo '<pre>';
print_r($row);
echo '</pre>';



//Using this method from using a database of type oracle
/*
$row =new oracle();
$row ->getUser();
$row ->getArtiles();
$row ->showStats();
echo '<pre>';
print_r($row);
echo '</pre>';
*/

?>