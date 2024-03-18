        <?php require 'pankuzulogincompletion.php' ?>
        <?php require 'guestname.php' ?>
        <section>
            <div class="title2">
                <div class="title2In">
                    <p>ログアウト完了</p>
                </div>
            </div>
            <div class="subWindow">
                <div class="center">
                    <?php
                    if (isset($_SESSION['customers'])) {
                        unset($_SESSION['customers']);
                        echo 'ログアウトしました。';
                    } else {
                        echo 'ログインしていません。';
                    }
                    ?>
                </div>
            </div>
            <div class="bottomMargin3"></div>
            <div class="toMember">
                <a href="index.php">
                    <p class="bottomText">トップページに戻る</p>
                </a>
            </div>
        </section>
        <div class="bottomMargin1"></div>