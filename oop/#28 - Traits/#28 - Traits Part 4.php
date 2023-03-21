<?php

use FeatureTwo as GlobalFeatureTwo;

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
        //[ Trait Name ] [ :: ] [Method Name] [ keyword as ] [New Name]
        FeatureTwo::Feature as Fe2;

        //[ Trait Name ] [ :: ] [ Method Name ] [ keyword insteadOf ] [ Other Method Name ]
        FeatureOne::Feature insteadOf FeatureTwo;
    }

}

$iphone6= new Ihone();
$iphone6->Feature();
$iphone6->Fe2();

echo "<pre>";
print_r($iphone6);
echo "</pre>";


