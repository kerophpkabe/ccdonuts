<?php require 'head.php' ?>
<?php require 'header.php' ?>    
<?php
    if (isset($_POST['payment-affe'])) {
            require './api/payment-completion.php';
        } else {
            require './api/payment-affection.php';
    }
?>
<?php require 'footer.php' ?>