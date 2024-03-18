<?php require 'head.php' ?>
<?php require 'header.php' ?>
<?php
    if (isset($_POST['credit-affe'])) {
        require './api/credit-completion.php';
    } else {
        if (isset($_POST['credit-inp'])) {
            require './api/credit-affection.php';
        } else {
            require './api/credit-input.php';
        }
    }
?>
<?php require 'footer.php' ?>