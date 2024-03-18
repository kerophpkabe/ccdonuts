        <?php require 'pankuzulogincompletion.php' ?>
        <?php require 'guestname.php' ?>
        <section>
            <div class="title2">
                <div class="title2In">
                    <p>ログイン完了</p>
                </div>
            </div>
            <div class="subWindow">
                <div class="center">
                    <?php
                    unset($_SESSION['customers']);
                    $pdo = new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 'ccStaff', 'ccDonuts');
                    $sql = $pdo->prepare('select * from customers where mail=? and password=?');
                    $sql->execute([$_REQUEST['mail'], $_REQUEST['password']]);
                    foreach ($sql as $row) {
                        $_SESSION['customers'] = [
                            'id' => $row['id'],'name' => $row['name'],'furigana' => $row['furigana'],'postcode_a' => $row['postcode_a'],'postcode_b' => $row['postcode_b'],'address' => $row['address'],'mail' => $row['mail'],'password' => $row['password']
                        ];
                    }
                    if (isset($_SESSION['customers'])) {
                        echo '<div class="bottomMargin2"></div>';
                        echo '<p class="textToType2">ログインが完了しました。</p>';
                        echo '<div class="bottomMargin3"></div>';
                        echo '<p class="textToType2">引き続きお買い物をお楽しみください。</p>';
                        echo '<div class="bottomMargin2"></div>';
                    } else {
                        echo '<div class="bottomMargin2"></div>';
                        echo '<p class="textToType2">ログイン名またはパスワードが違います。</p>';
                        echo '<div class="bottomMargin2"></div>';
                    }
                    ?>
                </div>
            </div>
            <div class="toMember">
                <a href="member-input.php">
                    <p class="bottomText">購入確認ページに戻る</p>
                </a>
            </div>
            <div class="bottomMargin3"></div>
            <div class="toMember">
                <a href="index.php">
                    <p class="bottomText">トップページに戻る</p>
                </a>
            </div>
        </section>
        <div class="bottomMargin1"></div>