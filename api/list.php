
        <?php require 'pankuzulist.php' ?>
        <?php require 'guestname.php' ?>
        <section>
            <div class="title2">
                <div class="title2In">
                    <p>商品一覧</p>
                </div>
            </div>
            <div class="menuZone">
                <div class="title3">
                    <p>メインメニュー</p>
                </div>
                <div class="baseBlock">
                <?php
                    $pdo = new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 'ccStaff', 'ccDonuts');
                    if (isset($_REQUEST['keyword'])) {
                        $sql=$pdo->prepare('select * from products where name like ?');
                        $sql->execute(['%'.$_REQUEST['keyword'].'%']);
                    } else {
                        $sql=$pdo->query('select * from products');
                    }
                    foreach ($sql as $index => $row) {
                        if ($index >= 0 && $index <= 5) {
                            $id=$row['id'];
                            echo '<div id="list',$row['id'],'" class="list',$row['id'],' listInner">';
                            echo '<div class="listImage" id="listImage',$row['id'],'">';
                            echo '<label>';
                            echo '<a href="detail.php?id=', $row['id'], '">';
                            echo '<img src="./images/donuts',$row['id'],'.png">';
                            echo '</a>';
                            echo '</label>';
                            echo '</div>';
                            echo '<div class="listText" id="listText',$row['id'],'">';
                            echo '<p id="listTextIn',$row['id'],'">',$row['name'],'</p>';
                            echo '</div>';
                            echo '<div class="listPrice" id="listPraice',$row['id'],'">';
                            echo '<p id="listPraiceIIn',$row['id'],'">税込 ￥',$row['price'],'</p>';
                            echo '</div>';
                            echo '<form class="forCart">';
                            echo '<input type="submit" method="post" value="カートに入れる">';
                            echo '</form>';
                            echo '</div>';
                        }
                    }
                ?>
                    </div>
                <div class="title3">
                    <p>バラエティセット</p>
                </div>
            <div class="baseBlock">
            <?php
                    $pdo = new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 'ccStaff', 'ccDonuts');
                    if (isset($_REQUEST['keyword'])) {
                        $sql=$pdo->prepare('select * from products where name like ?');
                        $sql->execute(['%'.$_REQUEST['keyword'].'%']);
                    } else {
                        $sql=$pdo->query('select * from products');
                    }
                    foreach ($sql as $index => $row) {
                        if ($index >= 6 && $index <= 11) {
                        $id=$row['id'];
                        echo '<div id="list',$row['id'],'" class="list',$row['id'],' listInner">';
                        echo '<div class="listImage" id="listImage',$row['id'],'">';
                        echo '<img src="./images/donuts',$row['id'],'.png">';
                        echo '</div>';
                        echo '<div class="listText" id="listText',$row['id'],'">';
                        echo '<p id="listTextIn',$row['id'],'">',$row['name'],'</p>';
                        echo '</div>';
                        echo '<div class="listPrice" id="listPraice',$row['id'],'">';
                        echo '<p id="listPraiceIIn',$row['id'],'">税込 ￥',$row['price'],'</p>';
                        echo '</div>';
                        echo '<form class="forCart">';
                        echo '<input type="submit" method="post" value="カートに入れる">';
                        echo '</form>';
                        echo '</div>';
                    }
                    }
                ?>
            </div>
            </div>
        </section>
    </main>