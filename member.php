<?php require 'head.php' ?>
<?php require 'header.php' ?> 
<?php
        if (isset($_POST['member-affe'])) {
            require './api/member-completion.php';
        } else {
            if (isset($_POST['member-inp'])) {
                require './api/member-affection.php';
            } else {
                require './api/member-input.php';
            }
        }
    ?>
<?php require 'footer.php' ?>