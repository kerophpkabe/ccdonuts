    <main>
        <?php require 'pankuzucreditinput.php' ?>
        <?php require 'guestname.php' ?>
        <section class="costm">
            <div class="title2">
                <div class="title2In">
                    <p>ご利用カード情報登録</p>
                </div>
            </div>
            <form action="card.php" method="post">
                <div class="center">
                    <p class="textToType3">カードご名義<span class="hissu">（必須）</span></p>
                    <div class="bottomMargin8"></div>
                    <input class="input2" type="text" name="name">
                    <div class="bottomMargin5"></div>
                    <p class="textToType3">カード番号<span class="hissu">（必須）</span></p>
                    <div class="bottomMargin8"></div>
                    <input class="input2" type="text" name="namekana">
                    <div class="bottomMargin5"></div>
                    <p class="textToType3">カード会社<span class="hissu">（必須）</span></p>
                    <div class="bottomMargin8"></div>
                    <div class="radiobtnArea">
                        <label class="ragioLabel">
                            <p class="radiobtn">
                                <input class="input3" type="radio" name="cardCop" value="visa">
                                VISA
                            </p>
                        </label>
                        <label class="ragioLabel">
                            <p class="radiobtn">
                                <input class="input3" type="radio" name="cardCop" value="JCB">
                                JCB
                            </p>
                        </label>
                        <label class="ragioLabel">
                            <p class="radiobtn">
                                <input class="input3" type="radio" name="cardCop" value="MasterCard">
                                MasterCard
                            </p>
                        </label>
                    </div>
                    <div class="bottomMargin5"></div>
                    <p class="textToType3">有効期限<span class="hissu">（必須）</span></p>
                    <div class="bottomMargin8"></div>
                    <p class="textToType3"><input class="input3" type="text" name="cardYear">年</p>
                    <div class="bottomMargin8"></div>
                    <p class="textToType3"><input class="input3" type="text" name="cardMonth">月</p>
                    <div class="bottomMargin5"></div>
                    <p class="textToType3">セキュリティ番号<span class="hissu">（必須）</span></p>
                    <div class="bottomMargin8"></div>
                    <input class="input2" type="password" name="password"><br>
                    <div class="bottomMargin6"></div>
                    <input class="baseInput bottomMargin8" name="credit-inp" type="submit" value="入力確認をする">
                    <div class="bottomMargin1"></div>
                </div>
            </form>
        </section>
        <div class="bottomMargin1"></div>
    </main>