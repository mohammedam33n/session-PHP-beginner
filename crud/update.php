<?php

include "./template/header.php";
include "./core/messages.php";




if (isset($_GET["id"])) :
    $id = $_GET["id"];
elseif (isset($id)) :
else :
    $id = $_SESSION['se_id'];
endif;

$sql = "SELECT * FROM `notes` WHERE `id`='$id'";
$result = mysqli_query($conn, $sql);
$note = mysqli_fetch_assoc($result);


// /*
// echo "<pre>";
// print_r($note);
// echo "<pre>";
// die;
// */
?>


<!-- mx-auto -->
<div class="col-sm-12 bg-dark p-3 border">
    <p class="text-white">Notes Edit</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-8 col-xl-6 mx-auto">
            <form action="./handlers/update.php?id=<?= $note['id'] ?>" method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="name">name:</label>
                    <input type="text" value="<?= $note['name'] ?>" name="name" class="form-control">
                    <div class="valid "><?= message("errorName"); ?></div>
                </div>

                <div class="mb-3">
                    <label for="des">Description:</label>
                    <input type="text" name="des" value="<?= $note['des'] ?>" class="form-control">
                    <div class="valid "><?= message("errorDes"); ?></div>
                </div>


                <div class="valid "><?= successMessage(); ?></div>

                <div class="mb-3">
                    <input type="submit" name="submit" class="form-control btn btn-primary btn-lg" value="send">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include "./template/footer.php";
?>