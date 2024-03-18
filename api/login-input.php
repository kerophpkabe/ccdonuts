
        <?php require 'pankuzulogin.php' ?>
        <?php require 'guestname.php' ?>
        <section class="costm">
            <div class="title2">
                <div class="title2In">
                    <p>ログイン</p>
                </div>
            </div>

            <div class="subWindow">
                <form action="login.php" method="post">
                    <div class="center">
                        <p class="textToType">メールアドレス</p>
                        <input type="text" name="mail">
                        <div class="bottomMargin4"></div>
                        <p class="textToType">パスワード</p>
                        <input type="password" name="password"><br>
                        <div class="bottomMargin4"></div>
                        <input type="submit" name="output" value="ログイン">
                    </div>
                </form>


            </div>
            <div class="toMember">
                <a href="./member.php">
                    <p class="bottomText">会員登録はこちら</p>
                </a>
            </div>
        </section>
        <div class="bottomMargin1"></div>