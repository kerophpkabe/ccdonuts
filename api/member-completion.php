        <?php require 'pankuzumembercompletion.php' ?>
        <?php require 'guestname.php' ?>
        <section>
            <div class="title2">
                <div class="title2In">
                    <p>会員登録完了</p>
                </div>
            </div>
            <div class="center">

                <div class="subWindow">
                    <div class="center">
                        <?php
                        $postcode_m = $_REQUEST['postcode'];
                        $postcode_a = substr($postcode_m, 0, 3);
                        $postcode_b = substr($postcode_m, -4);
                        $pdo = new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 'ccStaff', 'ccDonuts');
                        if (isset($_SESSION['customers'])) {
                            $id = $_SESSION['customers']['id'];
                            $sql = $pdo->prepare('select * from customers where id!=? and mail=?');
                            $sql->execute([$id, $_REQUEST['mail']]);
                        } else {
                            $sql = $pdo->prepare('select * from customers where mail=?');
                            $sql->execute([$_REQUEST['mail']]);
                        }
                        if (empty($sql->fetchAll())) {
                            if (isset($_SESSION['customers'])) {
                                $sql = $pdo->prepare('update customers set name=?, furigana=?, postcode_a=?, postcode_b=?, address=?, mail=?, password=? where id=?');
                                $sql->execute([
                                    $_REQUEST['name'], $_REQUEST['frigana'], $_REQUEST['postcode_a'], $_REQUEST['postcode_b'], $_REQUEST['address'], $_REQUEST['mail'], $_REQUEST['password'], $id
                                ]);

                                $_SESSION['customers'] = [
                                    'id' => $id, 'name' => $_REQUEST['name'], 'furigana' => $_REQUEST['furigana'], 'postcode_a' => $_REQUEST['postcode_a'], 'postcode_b' => $_REQUEST['postcode_b'], 'address' => $_REQUEST['address'], 'mail' => $_REQUEST['mail'],
                                    'password' => $_REQUEST['password']
                                ];
                                echo 'お客様情報を更新しました。';
                            } else {
                                $sql = $pdo->prepare('insert into customers values(null,:name,:furigana,:postcode_a,:postcode_b,:address,:mail,:password)');
                                $sql->execute([
                                    'name' => $_REQUEST['name'], 'furigana' => $_REQUEST['furigana'], 'postcode_a' => $postcode_a,  'postcode_b' => $postcode_b,  'address' => $_REQUEST['address'], 'mail' => $_REQUEST['mail'],             'password' => $_REQUEST['password']
                                ]);
                                echo 'お客様情報を登録しました。';
                            }
                        } else {
                            echo 'ログイン名がすでに使用されていますので、変更して下さい。';
                        }
                        ?>
                        <div class="bottomMargin2"></div>
                        <p class="textToType2">会員登録が完了しました。</p>
                        <div class="bottomMargin3"></div>
                        <p class="textToType2">ログインボタンからログインをして下さい。</p>
                        <div class="bottomMargin2"></div>
                    </div>
                </div>
                <div class="toMember">
                    <a href="member-input.php">
                        <p class="bottomText">クレジットカード登録に進む</p>
                    </a>
                </div>
                <div class="bottomMargin3"></div>
                <div class="toMember">
                    <a href="./index.php">
                        <p class="bottomText">トップページに戻る</p>
                    </a>
                </div>
                <div class="bottomMargin1"></div>
            </div>
        </section>