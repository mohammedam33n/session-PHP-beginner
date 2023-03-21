<?php
include "./template/header.php";
include "./core/messages.php";
include "./core/functions.php";

$sql = "SELECT * FROM `notes`";
$result = mysqli_query($conn, $sql);


?>
<!-- mx-auto -->
<div class="col-sm-12 bg-dark p-3 border">
    <p class="text-white">Add Notes</p>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-8 col-xl-6 mx-auto">
            <form action="./handlers/insert.php" method="POST" enctype="multipart/form-data">


                <div class="mb-3">
                    <label for="name">name:</label>
                    <input type="text" name="name" value="" class="form-control">
                    <div class="valid "><?= message("errorName"); ?></div>
                </div>


                <div class="mb-3">
                    <label for="des">Description:</label>
                    <input type="text" name="des" value="" class="form-control">
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