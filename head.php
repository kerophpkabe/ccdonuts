<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="./common/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="icon" href="./images/mainlogo.png">
    <title>C.C.Donuts-shopingsite</title>
</head>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=kabe0701_ccdonuts;charset=utf8', 'kabe0701_ccstaff', 'ccDonuts');
$id = [];$name = [];$price = [];$int = [];$new = [];
foreach ($pdo->query('select * from products') as $row) {
    $id[$row['id']] = $row['id'];
    $name[$row['id']] = $row['name'];
    $price[$row['id']] = $row['price'];
    $int[$row['id']] = $row['introduction'];
    $is_new[$row['id']] = $row['is_new'];
}
$sql = $pdo->prepare('select * from products where id=?');
?>
<body>