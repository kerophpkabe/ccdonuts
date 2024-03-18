<?php require 'head.php' ?>
<?php require 'header.php' ?>
    <?php
        if (isset($_POST['output'])) {
            require './api/login-completion.php';
        } else {
            require './api/login-input.php';
        }
    ?>
<?php require 'footer.php' ?>