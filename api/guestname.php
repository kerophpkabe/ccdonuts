
    <?php
        if (isset($_SESSION['customers'])) {
            echo '<div class="welcome">ようこそ　', $_SESSION['customers']['name'], 'さん。</div>';
        } else {
            echo '<div class="welcome">ようこそ　ゲスト様</div>';
        }
    ?>
    <div class="panHr01"></div>