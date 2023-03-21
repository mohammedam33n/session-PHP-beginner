<?php

trait FeatureOne{

    public function fingerOneFeature(){
        echo 'This Is Finger Print One Feature <br>';
    }
}

trait FeatureTwo{

    public function fingerTwoFeature(){
        echo 'This Is Print Two Feature <br>';
    }
}

trait FeatureThree{

    public function fingerThreeFeature(){
        echo 'This Is Print Three Feature <br>';
    }
}

class Ihone{
    use FeatureOne;
    use FeatureTwo;
    use FeatureThree;

    function satHello(){
        echo 'Hello From iphone<br>';
    }
}


class mobile{
    use FeatureOne;
    use FeatureThree;

    function satHello(){
        echo 'Hello From mobile<br>';
    }
}


$iphone6= new Ihone();
$iphone6->satHello();
$iphone6->fingerOneFeature();
$iphone6->fingerTwoFeature();
$iphone6->fingerThreeFeature();
echo "<pre>";
print_r($iphone6);
echo "</pre>";




$sony= new mobile();
$sony->satHello();
$sony->fingerOneFeature();
$sony->fingerThreeFeature();
echo "<pre>";
print_r($sony);
echo "</pre>";




