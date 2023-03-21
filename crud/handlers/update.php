
<?php
include "../core/database.php";
include "../core/validation.php";
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {



    //Checking files sent by post
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    //Store the data sent in variables
    $id   = $_GET["id"];
    $name = $_POST["name"];
    $des  = $_POST["des"];




    $err = [];

    //check name
    if (!required($name)) :
        $err[] = "Name";
        $_SESSION['errorName'] = "Name Is empty";
    elseif (!minVal($name, 5)) :
        $_SESSION['errorName'] = "Name must be greater than 5 characters";
        $err[] = "Name";
    elseif (!maxVal($name, 35)) :
        $_SESSION['errorName'] = "Name must be less than 35 characters";
        $err[] = "Name";
    endif;

    if (!required($des)) :
        $err[] = "Des";
        $_SESSION['errorDes'] = "Des Is empty";
    elseif (!minVal($des, 5)) :
        $_SESSION['errorDes'] = "Des must be greater than 5 characters";
        $err[] = "Des";
    elseif (!maxVal($des, 35)) :
        $_SESSION['errorDes'] = "Des must be less than 35 characters";
        $err[] = "Des";
    endif;





    //Check If Has No Errore In All data
    if (count($err) == 0) :

        //Show old file to delete




        $sql = "SELECT * FROM `notes` WHERE id =$id";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);

        echo "<pre>";
        print_r($row);
        echo "</pre>";



        // /*
        $sql = "UPDATE `notes` SET `id`='$id',`name`='$name',`des`='$des' WHERE `id`='$id'";
        $res = mysqli_query($conn, $sql);


        $_SESSION['success'] = 'Updated Successfully';


    endif;




    /*
    echo "<pre>";
    print_r($errors);
    echo"</pre>";
    */

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

    $id = $_GET["id"];
    $_SESSION['se_id'] = $id;

    header("location:../update.php");
}


















?>
    


