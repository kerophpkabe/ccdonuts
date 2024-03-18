
<?php require './api/guestname.php' ?>
    <div class="hiroImage"></div>
    <section class="topIvent">
        <div class="top2ImageBox">
            <?php
                    $pdo = new PDO('mysql:host=localhost;dbname=kabe0701_ccdonuts;charset=utf8', 'kabe0701_ccstaff', 'ccDonuts');
                    $sql=$pdo->query('select * from products');
                    foreach ($sql as $index => $row) {
                        if ($index >= 4 && $index <= 4) {
                            $id=$row['id'];
                            echo '<label>';
                            echo '<a href="detail.php?id=', $row['id'], '">';
                            echo '<div class="top2ImageLeft">';
                            echo '<div class="newDonuts">';
                            echo '<p class="newDonutsP">新商品</p>';
                            echo '</div>';
                            echo '<p class="top2ImageLeftText">サマーシトラス</p>';
                            echo '</div>';
                            echo '</a>';
                            echo '</label>';
                        }
                    }
                    ?>
            <div class="top2ImageRight">
                <p class="top2ImageRightText">ドーナツのある生活</p>
            </div>
        </div>
        <div class="donutsList">
            <a href="./list.php">
                <p class="listBanerText">商品一覧</p>
            </a>
        </div>
    </section>
    <div class="philosophy">
        <p class="philosophyText01">philosophy</p>
        <p class="philosophyText02">私たちの信念</p>
        <p class="philosophyText03">"Creating Connections"</p>
        <p class="philosophyText04">「ドーナツでつながる」</p>
    </div>
<?php require './api/ranking.php' ?>