        <?php require 'pankuzumemberinput.php' ?>
        <?php require 'guestname.php' ?>
        <section class="costm">
            <div class="title2">
                <div class="title2In">
                    <p>会員登録</p>
                </div>
            </div>
            <?php
            $name=$furigana=$postcode=$address=$mail=$mail2=$password=$password2='';
            if (isset($_SESSION['customers'])) {
                $name=$_SESSION['customers']['name'];
                $furigana=$_SESSION['customers']['furigana'];
                $postcode=$_SESSION['customers']['postcode'];
                $address=$_SESSION['customers']['address'];
                $mail=$_SESSION['customers']['mail'];
                $mail2=$_SESSION['customers']['mail2'];
                $password=$_SESSION['customers']['password'];
                $password2=$_SESSION['customers']['password2'];
            }
            echo '<form action="member.php" method="post">';
            echo '<div class="center">';
            echo '<p class="textToType3">お名前<span class="hissu">（必須）</span></p>';
            echo '<div class="bottomMargin8"></div>';
            echo '<input class="input2" type="text" name="name" value="', $name, '">';
            echo '<div class="bottomMargin5"></div>';
            echo '<p class="textToType3">お名前(フリガナ)<span class="hissu">（必須）</span></p>';
            echo '<div class="bottomMargin8"></div>';
            echo '<input class="input2" type="text" name="furigana" value="', $furigana, '">';
            echo '<div class="bottomMargin5"></div>';
            echo '<p class="textToType3">郵便番号<span class="hissu">（必須）</span></p>';
            echo '<div class="bottomMargin8"></div>';
            echo '<input class="input2" type="text" name="postcode" value="', $postcode, '">';
            echo '<div class="bottomMargin5"></div>';
            echo '<p class="textToType3">住所<span class="hissu">（必須）</span></p>';
            echo '<div class="bottomMargin8"></div>';
            echo '<input class="input2" type="text" name="address" value="', $address, '">';
            echo '<div class="bottomMargin5"></div>';
            echo '<p class="textToType3">メールアドレス<span class="hissu">（必須）</span></p>';
            echo '<div class="bottomMargin8"></div>';
            echo '<input class="input2" type="text" name="mail" value="', $mail, '">';
            echo '<div class="bottomMargin5"></div>';
            echo '<p class="textToType3">メールアドレス（再入力）<span class="hissu">（必須）</span></p>';
            echo '<div class="bottomMargin8"></div>';
            echo '<input class="input2" type="text" name="mail2" value="', $mail2, '">';
            echo '<div class="bottomMargin5"></div>';
            echo '<p class="textToType3">パスワード<span class="hissu">（必須）</span></p>';
            echo '<div class="bottomMargin8"></div>';
            echo '<input class="input2" type="password" name="password" value="', $password, '"><br>';
            echo '<div class="bottomMargin5"></div>';
            echo '<p class="textToType3">パスワード（再入力）<span class="hissu">（必須）</span></p>';
            echo '<div class="bottomMargin8"></div>';
            echo '<p class="passComent">半角英数字8文字以上20文字以内で入力してください。※記号の使用はできません</p>';
            echo '<div class="bottomMargin8"></div>';
            echo '<input class="input2" type="password" name="password2" value="', $password2, '"><br>';
            echo '<div class="bottomMargin6"></div>';
            echo '<input class="baseInput bottomMargin8" name="member-inp" type="submit" value="入力確認をする">';
            echo '<div class="bottomMargin1"></div>';
            echo '</div>';
            echo '</form>';
            ?>
        </section>
        <div class="bottomMargin1"></div>
    </main>