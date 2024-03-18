    <main>
        <?php require 'pankuzudetail.php' ?>
        <?php require 'guestname.php' ?>
        <section>
            <?php
            $sql->execute([$_REQUEST['id']]);
            $row = $_REQUEST['id'];
            foreach ($sql as $row) {
            ?>
                <div class="detailBox">
                    <div class="detailImage">
                        <img src="./images/donuts<?= $row['id'] ?>.png">
                    </div>
                    <div class="detailTextBox">
                        <div class="detailTitle">
                            <p><?= $row['name'] ?></p>
                        </div>
                        <hr class="detailHr">
                        <div class="detailText">
                            <p><?= $row['introduction'] ?></p>
                        </div>
                        <hr class="detailHr">
                        <div class="detailPrice">
                            <p>税込み ￥<?= $row['price'] ?></p>
                        </div>
                        <div class="fromLine">
                            <form class="forCart" action="cart.php" method="post">
                                <div class="fromLine">
                                    <p class="detailEa">
                                        <select name="count">
                                            <?php for ($i = 1; $i <= 10; $i++) : ?>
                                                <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php endfor; ?>
                                        </select>
                                    </p>
                                    <p class="detailEatext">個</p>
                                    <input type="hidden" name="cartid" value="<?= $row['id'] ?>">
                                    <input class="forCartInput1" type="submit" value="カートに入れる">
                                </div>
                            </form>
                            <form class="forFab">
                                <input class="hidden" type="submit" method="post" value="">
                                <div class="fabmark">
                                    <img src="./images/logo-heart.png">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </section>
    </main>