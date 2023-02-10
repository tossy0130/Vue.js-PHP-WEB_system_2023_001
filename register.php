<?php

ini_set('display_errors', "On");
require(dirname(__FILE__) . '/functions.php');

// リダイレクト用 URL
$redirect_url = 'https://xs810378.xsrv.jp/site_demo04/form.php';

// セッションスタート
session_start();

// 変数初期化
$user_name = ""; // 名前
$user_name_kana = ""; // 名前（カナ）
$company_name = "";
$tel = ""; // 電話
$email_address = ""; // メールアドレス
$Inquiry_type = ""; // 問い合わせ 種別
$toiawase_text = "";  // 問い合わせ内容


// ========= token トークンチェック =========
// トークンがない場合は、リダイレクトさせる
if (empty($_SESSION['token_one'])) {

    header("Location: {$redirect_url}");
} else {
    // トークンがあれば 処理を進める

    $token_two = uniqid('', true);
    // セッション変数へ格納
    $_SESSION['token_two'] = $token_two;

    // === フォームの値取得 POST
    // === 名前
    if (isset($_POST['user_name'])) {
        $user_name = $_POST['user_name'];
        $_SESSION['user_name'] = $user_name;
    }
    // === 名前（カナ）
    if (isset($_POST['user_name_kana'])) {
        $user_name_kana = $_POST['user_name_kana'];
        $_SESSION['user_name_kana'] = $user_name_kana;
    }

     // === 会社名
    if (isset($_POST['company_name'])) {
        $user_name_kana = $_POST['company_name'];
        $_SESSION['company_name'] = $user_name_kana;
    }

    // === 電話番号
    if (isset($_POST['tel'])) {
        $tel = $_POST['tel'];
        $_SESSION['tel'] = $tel;
    }
    // === メールアドレス
    if (isset($_POST['email_address'])) {
        $email_address = $_POST['email_address'];
        $_SESSION['email_address'] = $email_address;
    }
    // === 問い合わせ 種別
    if (isset($_POST['Inquiry_type'])) {
        $Inquiry_type = $_POST['Inquiry_type'];
        $_SESSION['Inquiry_type'] = $Inquiry_type;
    }
    // === 問い合わせ 内容
    if (isset($_POST['toiawase_text'])) {
        $toiawase_text = $_POST['toiawase_text'];
        $_SESSION['toiawase_text'] = $toiawase_text;
    }
} // =========== END if

try {

    //=== DB 接続情報
    $pdo = new PDO(Getdb::DNS, Getdb::USER, Getdb::PASS);

    // ======  （トランザクション） トランザクション開始 ======
    $pdo->beginTransaction();

    // $stmt = $pdo->prepare()

} catch (PDOException $e) {
    $e->getMessage();
} finally {
    $pdo = null;
}


?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/form.css">

    <title>確認画面</title>
</head>

<body>

    <!-- ============ 確認画面 ============ -->
    <div class="Form" id="app">

        <form action="thanks.php" method="POST">

            <!-- 確認 アイテム -->
            <div class="Form-Item02">
                <p class="Form-Item-Label">お名前<span class="Form-Item-Label-Required">必須</span>
                </p>

                <p>
                    <?php if (!empty($user_name)) {
                        echo h($user_name);
                    } ?>
                </p>
            </div>
            <!-- 確認 アイテム END -->

            <!-- 確認 アイテム -->
            <div class="Form-Item02">
                <p class="Form-Item-Label">お名前（フリガナ）<span class="Form-Item-Label-Required">必須</span>
                </p>

                <p>
                    <?php if (!empty($user_name_kana)) {
                        echo h($user_name_kana);
                    } ?>
                </p>
            </div>
            <!-- 確認 アイテム END -->

            <!-- 確認 アイテム -->
            <div class="Form-Item02">
                <p class="Form-Item-Label">会社名<span class="Form-Item-Label-Required">必須</span>
                </p>

                <p>
                    <?php if (!empty($company_name)) {
                        echo h($company_name);
                    } ?>
                </p>
            </div>
            <!-- 確認 アイテム END -->

            <!-- 確認 アイテム -->
            <div class="Form-Item02">
                <p class="Form-Item-Label">電話番号<span class="Form-Item-Label-Required">必須</span>
                </p>

                <p>
                    <?php if (!empty($tel)) {
                        echo h($tel);
                    } ?>
                </p>
            </div>
            <!-- 確認 アイテム END -->

            <!-- 確認 アイテム -->
            <div class="Form-Item02">
                <p class="Form-Item-Label">メールアドレス<span class="Form-Item-Label-Required">必須</span>
                </p>

                <p>
                    <?php if (!empty($email_address)) {
                        echo h($email_address);
                    } ?>
                </p>
            </div>
            <!-- 確認 アイテム END -->

            <!-- 確認 アイテム -->
            <div class="Form-Item02">
                <p class="Form-Item-Label">お問い合わせ 種別<span class="Form-Item-Label-Required">必須</span>
                </p>

                <p>
                    <?php if (!empty($Inquiry_type)) {
                        echo h($Inquiry_type);
                    } ?>
                </p>
            </div>
            <!-- 確認 アイテム END -->

            <!-- 確認 アイテム -->
            <div class="Form-Item02">
                <p class="Form-Item-Label">お問い合わせ 内容<span class="Form-Item-Label-Required">必須</span>
                </p>

                <p>
                    <?php if (!empty($toiawase_text)) {
                        echo h($toiawase_text);
                    } ?>
                </p>
            </div>
            <!-- 確認 アイテム END -->

            <input type="submit" class="Form-Btn" value="上記の内容で送信する">

            <!-- 値を POST する -->
            <input type="hidden" name="h_user_name" value="<?php print h($user_name); ?>">
            <input type="hidden" name="h_user_name_kana" value="<?php print h($user_name_kana); ?>">
            <input type="hidden" name="company_name" value="<?php print h($company_name); ?>">
            <input type="hidden" name="h_email_address" value="<?php print h($email_address); ?>">
            <input type="hidden" name="h_Inquiry_type" value="<?php print h($Inquiry_type); ?>">
            <input type="hidden" name="h_toiawase_text" value="<?php print h($toiawase_text); ?>">


        </form> <!-- END form -->

    </div> <!-- Form END -->

</body>

</html>