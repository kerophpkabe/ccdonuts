        <?php require 'pankuzumemberaffection.php' ?>
        <?php require 'guestname.php' ?>
        <section>
            <div class="title2">
                <div class="title2In">
                    <p>入力確認</p>
                </div>
            </div>
            <div class="center">
            <?php
            if($_REQUEST['mail']==$_REQUEST['mail2']) {
                if($_REQUEST['password']==$_REQUEST['password2']) {
                    if (isset($_REQUEST['postcode']) && preg_match('/^\d{7}$/', $_REQUEST['postcode'])) {
                    echo '<p class="textToType3">お名前</p>';
                    echo '<div class="bottomMargin8"></div>';
                    echo '<div class="textaffection2">';
                    echo '<p>', $_REQUEST['name'], '</p>';
                    echo '</div>';
                    echo '<p class="textToType3">フリガナ</p>';
                    echo '<div class="bottomMargin8"></div>';
                    echo '<div class="textaffection2">';
                    echo '<p>', $_REQUEST['furigana'], '</p>';
                    echo '</div>';
                    echo '<p class="textToType3">郵便番号</p>';
                    echo '<div class="bottomMargin8"></div>';
                    echo '<div class="textaffection2">';
                    echo '<p>', $_REQUEST['postcode'], '</p>';
                    echo '</div>';
                    echo '<p class="textToType3">メールアドレス</p>';
                    echo '<div class="bottomMargin8"></div>';
                    echo '<div class="textaffection2">';
                    echo '<p>', $_REQUEST['mail'], '</p>';
                    echo '</div>';
                    echo '<div class="bottomMargin4"></div>';
                    echo '<form action="member.php" method="post">';
                    echo '<input class="hidden" type="text" name="name" value="', $_REQUEST['name'], '">';
                    echo '<input class="hidden" type="text" name="furigana" value="', $_REQUEST['furigana'], '">';
                    echo '<input class="hidden" type="text" name="postcode" value="', $_REQUEST['postcode'], '">';
                    echo '<input class="hidden" type="text" name="address" value="', $_REQUEST['address'], '">';
                    echo '<input class="hidden" type="text" name="mail" value="', $_REQUEST['mail'], '">';
                    echo '<input class="hidden" type="text" name="password" value="', $_REQUEST['password'], '">';
                    echo '<input class="baseInput bottomMargin8" name="member-affe" type="submit" value="登録する">';
                    echo '</form>';
                } else { 
                    echo 'ポストコードは7桁の数字で入力してください。';
                }
                } else { 
                    echo '<p class="textToType4">パスワードが同じではありません。</p>';
                    echo '<div class="bottomMargin8"></div>';
                    echo '<p class="textToType44>ブラウザの戻るボタンで入力ページに戻ってください。</p>';
                }
            } else { echo '<p class="textToType4">メールアドレスが同じではありません。</p>';
                echo '<div class="bottomMargin8"></div>';
                     echo '<p class="textToType4">ブラウザの戻るボタンで入力ページに戻ってください。</p>';
            };
            ?>              
                <div class="bottomMargin1"></div>
            </div>
    </main>