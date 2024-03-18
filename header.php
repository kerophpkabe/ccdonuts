    <input type="checkbox" id="hbMenu">
    <div class="drowMenu">
        <div class="drowMenuIn">
            <div class="drowIcons">
                <img class="drowIconsMain" src="./images/mainlogo.png">
            </div>
            <ul>
                <li><a href="./">TOP</a></li>
                <li><a href="./list.php">商品一覧</a></li>
                <li>よくある質問</li>
                <li>お問い合わせ</li>
                <li>当サイトのポリシー</li>
            </ul>
        </div>
        <label for="hbMenu" class="menu-button">
            <div class="dorow">
                <div class="close"></div>
            </div>
        </label>
    </div>
    <div class="header01">
        <div class="dorow">
            <label for="hbMenu" class="menu-button">
                <img src="./images/dorw.png">
            </label>
        </div>
        <div class="mainlogo">
            <a href="./">
                <img src="./images/mainlogo.png">
            </a>
        </div>
        <div class="loginbtn">
            <?php
            if (isset($_SESSION['customers'])) {
                echo '<a href="./logout.php">';
                echo '<img src="./images/logo-login.png"><br>';
                echo '<p>ログアウト</p></a>';;
            } else {
                echo '<a href="./login.php">';
                echo '<img src="./images/logo-login.png"><br>';
                echo '<p>ログイン</p></a>';
            }
            ?>
        </div>
        <div class="cartbtn">
            <a href="./cart.php">
                <img src="./images/logo-cart.png"><br>
                <p>カート</p>
            </a>
        </div>
    </div>
    <div class="header02">
        <form action="list.php" method="post">
            <div class="carch">
                <div class="carchIcon">
                    <label>
                    <input type="submit" value="">
                    <img src="./images/logo-sarch.png">
                    </label>
                </div>
                <div class="carchWindow">
                    <input type="text" name="keyword">
                </div>
            </div>
        </form>
    </div>
    <main>
