<?php

// エラーを出力
ini_set("display_errors", "On");

// functions.php 読み込み
require(dirname(__FILE__) . '/functions.php');

// セッションスタート
session_start();

try {

    //=== DB 接続情報
    $pdo = new PDO(Getdb::DNS, Getdb::USER, Getdb::PASS);

    // ======  （トランザクション） トランザクション開始 ======
    $pdo->beginTransaction();
} catch (PDOException $e) {
    print('Error' . $e->getMessage());
}

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 
        <link href="css/style.css" rel="stylesheet">
        -->

    <link rel="stylesheet" href="css/form.css">

    <!-- Vue CDN -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/vuelidate@0.7.4/dist/validators.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuelidate@0.7.4/dist/vuelidate.min.js"></script>

</head>

<body>

    <!-- 問い合わせ　フォーム開始 -->

    <p class="c-head01 u-en u-uppercase">contact</p>

    <div class="Form" id="app">
        <form action="" method="POST" @submit.prevent="submitForm">

            <!-- 名前　 -->
            <div class="Form-Item">
                <p class="Form-Item-Label">お名前<span class="Form-Item-Label-Required">必須</span>
                    <span class="holder_text" id="pl_01">（例）山田太郎</span>
                </p>

                <p>
                    <!-- Vue.js エラーメッセージ -->

                    <!--
                <p class="error-user_name">入力欄が空欄になっています。お名前をご入力ください。</p>
                -->

                    <input type="text" class="Form-Item-Input" placeholder="例）山田太郎" name="user_name" v-model="user_name" @input="$v.user_name.$touch()">
                    <span v-if="$v.user_name.$error" class="err_span">※入力欄が空欄になっています。お名前をご入力ください。</span>

                </p>
            </div>

            <!-- 名前 フリガナ -->
            <div class="Form-Item">
                <p class="Form-Item-Label">お名前（フリガナ）<span class="Form-Item-Label-Required">必須</span>
                    <span class="holder_text" id="pl_02">（例）ヤマダタロウ</span>
                </p>

                <p>
                    <!-- Vue.js エラーメッセージ -->
                    <input type="text" class="Form-Item-Input" placeholder="（例）ヤマダタロウ" name="user_name_kana" v-model="user_name_kana" @input="$v.user_name_kana.$touch()">
                    <span v-if="$v.user_name_kana.$error" class="err_span">※入力欄が空欄になっています。お名前（カタカナ）でご入力ください。</span>
                </p>
            </div>

            <!-- 電話番号 -->
            <div class="Form-Item">
                <p class="Form-Item-Label">電話番号<span class="Form-Item-Label-Required">必須</span>
                    <span class="holder_text" id="pl_03">（例）000-0000-0000</span>
                </p>

                <p>
                    <input type="text" class="Form-Item-Input" placeholder="例）000-0000-0000" name="tel" v-model="tel" @input="$v.tel.$touch()">
                    <!-- Vue.js エラーメッセージ -->
                    <span v-if="$v.tel.$error" class="err_span">※入力欄が空欄になっています。電話番号をご入力ください。</span>
                </p>
            </div>

            <!-- メールアドレス -->
            <div class="Form-Item">
                <p class="Form-Item-Label">メールアドレス<span class="Form-Item-Label-Required">必須</span>
                    <span class="holder_text" id="pl_04">（例）example@gmail.com</span>
                </p>

                <p>
                    <input type="email" class="Form-Item-Input" placeholder="例）example@gmail.com" name="email_address" v-model="email_address" @blur="$v.email_address.$touch()">

                    <!-- Vue.js エラーメッセージ -->
                <div v-if="$v.email_address.$error">
                    <p v-if="!$v.email_address.required" class="err_span2">※入力欄が空になっています。メールアドレスをご入力ください。</p>
                    <p v-if="!$v.email_address.email" class="err_span">※メールアドレスの形式が正しくありません。</p>
                </div>

                </p>
            </div>

            <!-- お問い合わせ -->
            <div class="Form-Item">
                <p class="Form-Item-Label isMsg" style="margin: 0 0 15px 0;">お問い合わせ内容<span class="Form-Item-Label-Required">必須</span></p>
                <textarea class="Form-Item-Textarea" name="toiawase_text" v-model="toiawase_text"></textarea>
            </div>

            <!-- ボタン -->

            <div v-if="$v.user_name.$error || $v.user_name_kana.$error || $v.tel.$error || $v.email_address.$error">
                <span id="submit_err">※入力不備があります。入力欄をご確認して再度ご入力ください。</span>
            </div>

            <!--
            <input :disabled="$v.$invalid" type="submit" class="Form-Btn" value="確認画面へ進む">
-->
            <input type="submit" class="Form-Btn" value="確認画面へ進む">

        </form>

    </div>


    <!-- 問い合わせ　フォーム END -->

    <script>
        /*
        var submit_err = document.getElementById('submit_err');
        submit_err.style.display = "none";

        var submit_err_Flg = false;
        */

        Vue.use(window.vuelidate.default);
        const {
            required,
            email,
            numeric,
            maxLength,
            minLength
        } = window.validators;

        const app = new Vue({
            el: '#app',
            data: {
                user_name: '',
                user_name_kana: '',
                tel: '',
                email_address: '',
                toiawase_text: ''
            },

            validations: {
                // 名前
                user_name: {
                    required
                },
                // 名前（カタカナ）
                user_name_kana: {
                    required
                },
                // 電話番号
                tel: {
                    required
                },
                // メールアドレス
                email_address: {
                    required,
                    email,
                },
                // 

            },

            methods: {
                submitForm() {
                    //console.log(this.$v.user_name.$invalid)
                    this.$v.$touch();
                    if (this.$v.$invalid) {
                        console.log('バリデーションエラー');

                    } else {
                        // submit_err.style.display = "none";
                        console.log('submit === OK ===');

                    }
                }
            }

        });
    </script>


</body>

</html>