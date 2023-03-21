<?php


trait FeatureOne{
    public function Feature(){
        echo 'the Feature One <br>';
        return $this;
    }
}

trait FeatureTwo{
    public function Feature(){
        echo 'the Feature Two <br>';
        return $this;
    }
}



class Ihone{
    use FeatureOne,FeatureTwo{
        //Trait Name :: Method Name insteadOf Other Method Name
        FeatureOne::Feature insteadOf FeatureTwo;
    }

    function satHello(){
        echo 'Hello From Iphone<br>';
        return $this;
    }
}



$iphone6= new Ihone();
$iphone6->Feature()->satHello();

echo "<pre>";
print_r($iphone6);
echo "</pre>";


