<?php require 'pankuzucart.php' ?>
<?php require 'guestname.php' ?>
<section class="costm">
    <?php require 'cartmain.php' ?>
    <?php require 'cartmainbox.php' ?>
    <?php
    foreach ($setid as $id => $value) {
        if ($value != 0) {
            $sql = $pdo->prepare('SELECT * FROM products WHERE id=?');
            $sql->execute([$id]);
            $cartditail = $sql->fetch(PDO::FETCH_ASSOC);
            if ($cartditail) {
    ?>
                <div class="cartDetail">
                    <div class="cartImage">
                        <img src="./images/donuts<?= $cartditail['id'] ?>.png">
                    </div>
                    <div class="cartTextZone">
                        <div class="cartDonutsName"><?= $cartditail['name'] ?></div>
                        <hr class="cartHr">
                        <div class="cartPriceZone">
                            <div class="cartPrice">税込 ￥<?= $cartditail['price'] ?></div>
                            <div class="cartEaText">
                                <p>数量 </p>
                                <div class="eaBox"><?= $setcount[$id] ?></div>
                                <p>個</p>
                            </div>
                        </div>
                        <div class="cartForm01 cartForm">
                            <from class="cartReCel">
                                <input type="submit" method="post" value="再計算">
                            </from>
                        </div>
                        <div class="cartForm02 cartForm">
                            <from class="cartDrop">
                                <input type="submit" method="post" value="削除する">
                            </from>
                        </div>
                        <hr class="cartHr">
                    </div>
                </div>
    <?php }
        }
    } ?>
    <?php require 'cartmainbox.php' ?>
    <div class="backListBtn">
        <a href="list.php">
            <div class="inputDiv">買い物を続ける</div>
    </div>
    </div>
</section>
</main>