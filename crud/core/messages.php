<?php
session_start();




function message($error)
{
    // Show error message
    if (isset($_SESSION[$error])) : ?>
        <span class="text-danger" style="max-width: 150px;"><?= $_SESSION[$error] ?></span>
    <?php unset($_SESSION[$error]);
    endif;
}


function successMessage()
{
    // Show error message
    if (isset($_SESSION['success'])) : ?>
        <span class="text-success" style="max-width: 150px;"><?= $_SESSION['success'] ?></span>
    <?php unset($_SESSION['success']);
    endif;

}

?>