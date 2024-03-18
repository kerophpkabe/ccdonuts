<?php
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
$count = 0;

if(isset ($_REQUEST['cartid'])) {
    $cartid = $_REQUEST['cartid'];
    
if(isset($_SESSION['cart'][$cartid])) {
    $count = $_SESSION['cart'][$cartid]['count'];
}
$_SESSION['cart'][$cartid] = 
['name'=>$name[$cartid],'price'=>$price[$cartid],'count'=>$count+$_REQUEST['count']];
};

$setid = [0,0,0,0,0,0,0,0,0,0,0,0];
$setcount = [0,0,0,0,0,0,0,0,0,0,0,0];
$totalItems = 0;
$totalCost = 0;

foreach ($_SESSION['cart']  as $id => $item) {
    if ($item['count'] > 0) {
        $setid[$id] = $id;
        $setcount[$id] = $item['count'];
        $totalItems += $item['count'];
        $totalCost += $item['count'] * $item['price'];
    }
}

// echo '<pre>';
// print_r($setid);
// echo '</pre>';

// echo '<pre>';
// print_r($setcount);
// echo '</pre>';
?>