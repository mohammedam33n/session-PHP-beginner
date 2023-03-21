<?php
include "./template/header.php";
?>

<?php


$sql = "SELECT * FROM `notes`";
$result = mysqli_query($conn, $sql);



/*
if (mysqli_num_rows($result)) :
  while($rows = mysqli_fetch_assoc($result)):
    echo "<pre>";
    print_r($rows);
    echo "</pre>";
  endwhile;
  endif;
  die;
  */
?>




<div class="col-sm-12 bg-dark p-3 border">
  <p class="text-white">All Notes</p>
</div>
<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1 ?>
      <?php if (mysqli_num_rows($result)) { ?>
        <?php while ($rows = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <th scope="row"><?= $i++ ?></th>
            <td><?= $rows["name"] ?></td>
            <td><?= $rows["des"] ?></td>
            <td>
              <a href="./update.php?id=<?= $rows['id'] ?> " class="btn btn-success ">Update</a>
              <a href="./handlers/delete.php?id=<?= $rows['id'] ?> " class="btn btn-danger">Delete</a>
            </td>
          </tr>
        <?php } ?>
      <?php } ?>

    </tbody>
  </table>
</div>
</div>

<?php
include "./template/footer.php";
?>