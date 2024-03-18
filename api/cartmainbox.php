<?php
if (!empty($_SESSION['cart'])) {
?>
    <div class="cartMainComent">
        <div class="cartInBox">
            <p class="cartInBoxText01">数量　商品 <?php echo $totalItems; ?> 点</p>
            <p class="cartInBoxText02">ご注文小計：
                <span class="spanPrice">税込 ¥ ,<?php echo $totalCost; ?> </span>
            </p>
            <div class="goPay">
                <P class="goPayP">購入確認へ進む</p>
            </div>
        </div>
    </div>
<?php } else { ?>
<div class="cartMainComent">
<div class="cartInBox">
    <p class="cartInBoxText03">カートに商品がありません。</p>
    </div>
</div>
</div>
<?php } ?>