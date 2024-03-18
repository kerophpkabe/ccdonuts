<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php require 'guestname.php' ?>
    <div class="hiroImage"></div>
    <section class="topIvent">
        <div class="top2ImageBox">
            <div class="top2ImageLeft">
                <div class="newDonuts">
                    <p class="newDonutsP">新商品</p>
                </div>
                <p class="top2ImageLeftText">サマーシトラス</p>
            </div>
            <div class="top2ImageRight">
                <p class="top2ImageRightText">ドーナツのある生活</p>
            </div>
        </div>
        <div class="donutsList">
            <a href="./api/list.php">
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

    <?php require 'ranking.php' ?>

</body>

</html>