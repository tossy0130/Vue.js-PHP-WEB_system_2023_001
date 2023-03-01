<?php

// エラーを出力
ini_set('display_errors', "On");

// 
require(dirname(__FILE__) . '/functions.php');

// リダイレクト用 URL
$redirect_url = 'https://xs810378.xsrv.jp/site_demo04/form.php';

// 判定フラグ
$Thanks_Flg = 0;

session_start();

// === 変数初期化
// SESSION 用
$user_name = ""; // 名前
$user_name_kana = ""; // 名前（カナ）
$tel = ""; // 電話
$email_address = ""; // メールアドレス
$Inquiry_type = ""; // 問い合わせ 種別
$toiawase_text = "";  // 問い合わせ内容

// POST 用
$h_user_name = ""; // 名前
$h_user_name_kana = ""; // 名前（カナ）
$h_tel = ""; // 電話
$h_email_address = ""; // メールアドレス
$h_Inquiry_type = ""; // 問い合わせ 種別
$h_toiawase_text = "";  // 問い合わせ内容

$img_number = ""; // メール送信　時　画像判別用

$token_two = "";

if (isset($_POST['token_two'])) {
    // === POST のトークン 2 が空だったら、リダイレクト
    if (empty($_POST['token_two'])) {
        header("Location: {$redirect_url}");
    } else {
        $token_two = $_POST['token_two'];
    }
}

// === トークンチェック
if (empty($_SESSION['token_two'])) {

    header("Location: {$redirect_url}");
} else {
    // === トークンありの場合

    // === session と post のトークンが一致した場合
    if ($_SESSION['token_two'] == $token_two) {

        // ============ フォームの hidden の値を POST で取得
        if (isset($_POST['h_user_name'])) {
            $h_user_name = $_POST['h_user_name'];
        }

        if (isset($_POST['h_user_name_kana'])) {
            $h_user_name_kana = $_POST['h_user_name_kana'];
        }

        if (isset($_POST['h_tel'])) {
            $h_tel = $_POST['h_tel'];
        }

        if (isset($_POST['h_email_address'])) {
            $h_email_address = $_POST['h_email_address'];
        }

        if (isset($_POST['h_Inquiry_type'])) {
            $h_Inquiry_type = $_POST['h_Inquiry_type'];
        }

        if (isset($_POST['h_toiawase_text'])) {
            $h_toiawase_text = $_POST['h_toiawase_text'];
            // === 問い合わせ内容が空の場合は、なしを代入
            if (empty($h_toiawase_text)) {
                $h_toiawase_text = "なし";
            }
        }

        if (isset($_POST['img_number'])) {
            $img_number = $_POST['img_number'];
        }

        // === 送信結果　フラグ 1: 送信完了 2:エラー
        $Thanks_Flg = 1;

        // ============================ メール送信処理 START ==================================

        // === 送信先
        $to = $h_email_address;

        // === メールタイトル
        $subject = "ガラステーブルのお問い合わせを受付致しました。";

        // === Gmail 対策
        $senderName = base64_encode("test_01@xs810378.xsrv.jp");
        $senderName = "=?UTF-8?B?{$senderName}?=";

        // === 選択した画像のパスを取得して、img へセットする。
        $img_path = "";

        switch ($img_number) {
            case "1":
                $img_path = "g_01.jpg";
                break;
            case "2":
                $img_path = "g_02.jpg";
                break;
            case "3":
                $img_path = "g_03.jpg";
                break;
            case "4":
                $img_path = "g_04.jpg";
                break;
            case "5":
                $img_path = "g_05.jpg";
                break;
            case "6":
                $img_path = "g_06.jpg";
                break;
            case "7":
                $img_path = "g_07.jpg";
                break;
            case "8":
                $img_path = "g_08.jpg";
                break;
            case "20":
                $img_path = "t_bl.jpg"; // === カーボンブラックテーブル
                break;
        }



        $message = <<< EOS
<html>
<head>
<meta http-equiv="Content-Type" Content="text/html;charset=UTF-8">
</head>
<body>
<h1>有限会社 Mid</h1>
<h2>
お問い合わせありがとうございます。
</h2>

<p>
お問い合わせ種別：{$h_Inquiry_type}
</p>

<p>
お問い合わせ内容：{$h_toiawase_text}
</p>

<p>
・お問い合わせ対象テーブル<br />
※画像が表示されない場合は、メールソフトの設定を変更してください。<br />
<img src="https://xs810378.xsrv.jp/site_demo04/img/$img_path">
</p>

</body>
</html>
EOS;

        $mailHeaders = <<< EOF
From:  {$senderName} <test_01@xs810378.xsrv.jp>
Reply-To: test_01@xs810378.xsrv.jp
Return-Path: test_01@xs810378.xsrv.jp
Content-type: text/html; charset=UTF-8
EOF;

        $result = mail($to, $subject, $message, $mailHeaders);

        if ($result) {
            echo "送信成功";
        } else {
            echo "送信失敗";
        }



        // ============================ メール送信処理 END ==================================


    }
}

/*
if (!empty($_SESSION['user_name'])) {
    $user_name = $_SESSION['usre_name'];
    echo $user_name;
}


if (!empty($_SESSION['user_name_kana'])) {
    $user_name_kana = $_SESSION['user_name_kana'];
    echo $user_name;
}

if (!empty($_SESSION['tel'])) {
    $tel = $_SESSION['tel'];
    echo $user_name;
}

if (!empty($_SESSION['email_address'])) {
    $email_address = $_SESSION['email_address'];
    echo $user_name;
}

if (!empty($_SESSION['Inquiry_type'])) {
    $Inquiry_type = $_SESSION['Inquiry_type'];
    echo $user_name;
}

if (!empty($_SESSION['toiawase_text'])) {
    $toiawase_text = $_SESSION['toiawase_text'];
    echo $user_name;
}
*/


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS 読み込み -->
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/form.css">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- font awsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">



    <title>問い合わせ 完了</title>


    <style>
        #thank_p {
            font-size: 20px;
            margin: 30px 0px;
            letter-spacing: 0.14em;
            font-weight: 600;
        }
    </style>

</head>

<body>


    <div class="container">

        <?php if (strcmp($Thanks_Flg, 1) == 0) : ?>
            <div class="col-lg-10 col-sm-10 col-10" style="border-top: 0.5px solid #666;border-bottom: 0.5px solid #666;margin: 40px 0;">
                <p style="text-align: center;" id="thank_p">
                    お問い合わせありがとうございました。<br />
                    フォームよりご入力頂きました、<br />
                    下記メールアドレスまでご連絡させて頂きます。<br />
                    よろしくお願い致します。
                </p>

                <h2 class="my-4 sank_h2" style="text-align: center;" id="Thanks_text_h2">
                    メールアドレス：<?php print h($h_email_address); ?>
                </h2>

            </div>

        <?php elseif (strcmp($jim_token_FLG, 2) == 0) : ?>

            <div class="col-lg-10 col-sm-10 col-10">
                <h2 class="my-4 sank_h2" style="text-align: center;">
                    登録エラーが発生しました。
                </h2>

                <p style="text-align: center;">登録処理が完了しませんでした。</p>

                <?php header("Location: register.php"); ?>
            </div>

        <?php else : ?>

            <div class="col-lg-10 col-sm-10 col-10">
                <h2 class="my-4 sank_h2" style="text-align: center;">

                </h2>

                <p style="text-align: center;"></p>

                <?php header("Location: register.php"); ?>
            </div>

        <?php endif; ?>


    </div>

</body>

</html>