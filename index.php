<?php

// エラーを出力
ini_set('display_errors', "On");
// 
require(dirname(__FILE__) . '/functions.php');


?>

<!DOCTYPE html>
<html lang="ja">

<head>

    <link rel="stylesheet" href="css/form.css">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3JXGMEX22V"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-3JXGMEX22V');
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <title>Midさん サンプルページ</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- 
        <link href="css/style.css" rel="stylesheet">
        -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        body {
            font-family: "Helvetica Neue", Arial,
                "Hiragino Kaku Gothic ProN", "Hiragino Sans", Meiryo, sans-serif;
        }

        img {
            width: 100%;
            height: auto;
        }

        .s_img {
            width: 132%;
            height: auto;
            position: relative;
            left: -20%;
        }

        .show {
            display: block;
        }

        .img_hide {
            display: none;
        }

        .flex {
            display: flex;
            width: 1200px;
            margin: 0 auto;
        }

        .flex>div:nth-child(1) {
            width: 55%;
        }

        .flex>div:nth-child(2) {
            width: 40%;
        }

        .main_image {
            list-style: none;
        }

        .sub_image {
            list-style: none;
        }


        /*================ 右側コンテンツ ================*/
        /* === ボタン （テーブル用） */
        .btn_table {
            display: flex;
            list-style: none;
            margin: 0 0 0 8px;
            flex-wrap: wrap;
        }

        .btn_table>li {
            margin: 16px 0.4em;
            width: 29%;
        }


        .t_color_img {
            width: 60%;
            height: 115%;
        }

        .t_color_img_02 {
            width: 60%;
            height: 85%;
        }

        h2.t_title {
            background: #4A4E4F;
            margin: 0 0px 35px 50px;
        }

        h2.t_title>p:nth-child(1) {
            font-size: 21px;
            color: #fff;
            border-bottom: dotted 1px #fff;
            padding: 5px 0px;
            margin: 10px 25px;
        }

        h2.t_title>p:nth-child(2) {
            font-size: 18px;
            color: #fff;
            padding: 3px 0;
            margin: 0 0 0px 25px;
        }

        .mini_title {
            margin: 15px 0 15px 50px;
        }

        /* === 脚　カラー === */
        .btn_ashi {
            display: flex;
            list-style: none;
            margin: 0 0 0 8px;
        }

        .btn_ashi>li {
            margin: 0 0.2em
        }

        /* === フレームタイプ === */
        .f_type {
            display: flex;
        }

        .button003 {
            margin: 15px 10px 0px 25px;
        }

        .button003 a {
            background: transparent;
            border-radius: 15px;
            position: relative;
            justify-content: space-around;
            align-items: center;
            padding: 20px 40px;
            color: #313133;
            transition: 0.3s ease-in-out;
            font-weight: 500;
            text-decoration: none;
            border: 2px solid #999;
            margin: 0px 15px;
            font-size: 13px;
        }

        .button003 a:hover {
            background: #313131;
            color: #FFF;
        }

        .button001 {}

        .button001 a {
            text-decoration: none;
            text-align: center;
            display: block;
            color: #333;
            background: transparent;
            border-radius: 15px;
            position: relative;
            justify-content: space-around;
            align-items: center;
            padding: 20px 40px;
            color: #313133;
            transition: 0.3s ease-in-out;
            font-weight: 500;
            text-decoration: none;
            border: 2px solid #999;
            margin: 0px 15px;
            font-size: 13px;
            top: 44px;
            width: 61%;
            left: 5%;
            text-decoration: none;
            text-align: center;
        }

        .button001 a:hover {
            background: #313131;
            color: #FFF;
        }

        /*========= テーブルタイプ ======== */

        .f_type>li {
            list-style: none;
            position: relative;
            top: -35px;
        }

        /*=== シルバー　ボタン ===*/
        .f_type>li:nth-child(1)>a {
            display: inline-block;
            padding: 1em 1.3em;
            text-decoration: none;
            text-align: center;
            display: block;
            color: #333;
            background: transparent;
            border-radius: 15px;
            position: relative;
            justify-content: space-around;
            align-items: center;
            padding: 12px 35px;
            color: #313133;
            transition: 0.3s ease-in-out;
            font-weight: 500;
            text-decoration: none;
            border: 2px solid #999;
            margin: 0px 15px;
            font-size: 13px;
            top: 50px;
            width: 52%;
            left: -10%;
            text-decoration: none;
            text-align: center;
        }

        .f_type>li:nth-child(2)>a {
            display: inline-block;
            padding: 1em 1.3em;
            text-decoration: none;
            text-align: center;
            display: block;
            color: #333;
            background: transparent;
            border-radius: 15px;
            position: relative;
            justify-content: space-around;
            align-items: center;
            padding: 12px 35px;
            color: #313133;
            transition: 0.3s ease-in-out;
            font-weight: 500;
            text-decoration: none;
            border: 2px solid #999;
            margin: 0px 15px;
            font-size: 13px;
            top: 50px;
            width: 52%;
            left: 31%;
            text-decoration: none;
            text-align: center;
        }

        .f_type>li:nth-child(1)>a:hover {
            background: #313131;
            color: #FFF;
        }

        .f_type>li:nth-child(2)>a:hover {
            background: #313131;
            color: #FFF;
        }

        /* ========== タブメニュー ============= */

        /*タブ実装*/
        .tab_box {
            width: 1200px;
            margin: 0 auto;
        }

        .tab_box .btn_area {
            margin: 0 10px;
            display: -webkit-box;
            display: flex;
        }

        .tab_box .tab_btn {
            width: 220px;
            padding: 8px 0;
            color: #333;
            background: #f5f7f8;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s ease 0s;
        }

        .tab_box .tab_btn+.tab_btn {
            margin-left: 8px;
        }

        .tab_box .tab_btn:hover {
            background-color: #dce1e4;
        }

        .tab_box .tab_btn.active {
            background: #277595;
            color: #fff;
        }

        .tab_box .panel_area {
            border: solid 1px #e3ebf3;
            padding: 20px;
            width: 1200px;
            background: #fff;
            box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
            margin: 0 auto;
        }

        .tab_box .tab_panel {
            display: none;
        }

        .tab_box .tab_panel.active {
            display: block;
        }
    </style>

</head>

<body>

    <div class="container">

        <div class="tab_box">

            <!-- タブメニュー -->
            <div class="btn_area">
                <p class="tab_btn active">テーブルタイプ　ホワイト</p>
                <p class="tab_btn">カーボン ブラック</p>
            </div>

            <!-- タブメニュー END -->

            <!-- タブ コンテンツ 01 -->

            <div class="panel_area">

                <div class="tab_panel active">

                    <!-- ＝＝＝ ホワイト　＝＝＝ -->
                    <div class="flex">

                        <!--- 左側　画像コンテンツ --->
                        <div>

                            <ul id="sub_image" class="sub_image">
                                <li style="overflow: hidden;height: 545px;"><img src="./img/g_01.jpg" class="s_img"></li>
                                <li class="img_hide" style="overflow: hidden;height: 545px;"><img src="./img/g_02.jpg" class="s_img"></li>
                                <li class="img_hide" style="overflow: hidden;height: 545px;"><img src="./img/g_03.jpg" class="s_img"></li>
                                <li class="img_hide" style="overflow: hidden;height: 545px;"><img src="./img/g_04.jpg" class="s_img"></li>
                                <li class="img_hide" style="overflow: hidden;height: 545px;"><img src="./img/g_05.jpg" class="s_img"></li>
                                <li class="img_hide" style="overflow: hidden;height: 545px;"><img src="./img/g_06.jpg" class="s_img"></li>
                                <li class="img_hide" style="overflow: hidden;height: 545px;"><img src="./img/g_07.jpg" class="s_img"></li>
                                <li class="img_hide" style="overflow: hidden;height: 545px;"><img src="./img/g_08.jpg" class="s_img"></li>
                                <li class="img_hide" style="overflow: hidden;height: 545px;"><img src="./img/a_white/TAK_3618_green.jpg" class="s_img"></li>
                            </ul>

                        </div>
                        <!--- 左側　画像コンテンツ END --->


                        <!-- 右側コンテンツ  -->
                        <div>

                            <h2 class="t_title">
                                <p>テーブルロータイプ</p>
                                <p>G-Tellus</p>
                            </h2>

                            <!-- テーブルカラー  -->
                            <p class="mini_title">テーブルカラー</p>
                            <ul id="btn_01" class="btn_table">
                                <li><img src="./img/honban/tak_01.jpg" class="t_color_img"></li>
                                <li><img src="./img/honban/tak_02.jpg" class="t_color_img"></li>
                                <li><img src="./img/honban/tak_03.jpg" class="t_color_img"></li>
                                <li><img src="./img/honban/tak_04.jpg" class="t_color_img"></li>
                                <li><img src="./img/honban/tak_05.jpg" class="t_color_img"></li>
                                <li><img src="./img/honban/tak_06.jpg" class="t_color_img"></li>
                                <li><img src="./img/honban/tak_07.jpg" class="t_color_img"></li>
                                <li><img src="./img/honban/tak_08.jpg" class="t_color_img"></li>
                            </ul>



                            <form id="contactForm" name="contactForm" method="post" action="form.php">
                                <input type="hidden" name="path" id="path">
                                <input id="send" class="Form-Btn02" type="submit" value="問い合わせフォームへ進む"></p>
                            </form>

                            <!-- 脚カラー  -->

                            <!--
            <p class="mini_title">脚カラー</p>
            -->

                            <!-- ========= フレームタイプ ========= -->

                            <!-- 
                            <p class="mini_title">フレームタイプ</p>

                            <ul id="btn_ashi" class="btn_ashi">
                                <li><img src="./img/t_ashi/t_ashi_black.jpg" class="t_color_img_02"></li>
                                <li><img src="./img/t_ashi/t_ashi_block.jpg" class="t_color_img_02"></li>

                           
                <li><img src="./img/t_color/t_03.jpg" class="t_color_img"></li>
                
                            </ul>



                            <ul id="f_type" class="f_type" style="display:flex;">
                                <li>
                                    <a href="#" alt="作った人 夏目智徹, 夏目 智徹,toshiyuki natsume">ブラック</a>
                                </li>

                                <li>
                                    <a href="#">ホワイト</a>
                                </li>
                            </ul>

                            -->


                            <!-- 
                <div class="button001">
                    <a href="#">お問い合わせ</a>
                </div>
    -->


                        </div> <!-- 右コンテンツ　END -->

                    </div> <!-- flex END -->


                </div> <!-- タブ コンテンツ END -->

                <!-- タブ コンテンツ 01 -->

                <div class="tab_panel">




                    <!-- ＝＝＝ カーボンブラック　＝＝＝ -->
                    <div class="flex">

                        <!--- 左側　画像コンテンツ --->
                        <div>

                            <!-- １枚目画像 -->
                            <ul id="main_image" class="main_image">
                                <li class="img_hide"><img src="./img/t_bl.jpg"></li>
                            </ul>

                            <!-- 2枚目画像 
                            <ul>
                                <li style="overflow: hidden;height: 545px;"><img src="./img/CarbonF_OVAL.jpg" class="s_img"></li>
                            </ul>
                            -->

                        </div>
                        <!--- 左側　画像コンテンツ END --->


                        <!-- 右側コンテンツ  -->
                        <div>

                            <h2 class="t_title">
                                <p>テーブルロータイプ</p>
                                <p>G-Tellus</p>
                            </h2>

                            <!-- テーブルカラー  -->
                            <p class="mini_title">テーブルカラー</p>
                            <ul id="btn" class="btn_table">
                                <li><img src="./img/mid_001.png" class="t_color_img"></li>

                                <li><img src="./img/mid_002.png" class="t_color_img"></li>
                            </ul>

                            <!-- 画像パス　POST 用フォーム -->
                            <form id="contactForm" name="contactForm" method="post" action="form.php">
                                <input type="hidden" name="path" id="path">
                                <input id="send" class="Form-Btn02" type="submit" value="問い合わせ">
                            </form>

                            <!-- 脚カラー  -->

                            <!--
            <p class="mini_title">脚カラー</p>
            -->

                            <!-- ========= フレームタイプ ========= -->

                            <!-- 
                            <p class="mini_title">フレームタイプ</p>

                            <ul id="btn_ashi" class="btn_ashi">
                                <li><img src="./img/t_ashi/t_ashi_black.jpg" class="t_color_img_02"></li>
                                <li><img src="./img/t_ashi/t_ashi_block.jpg" class="t_color_img_02"></li>

                           
                <li><img src="./img/t_color/t_03.jpg" class="t_color_img"></li>
                
                            </ul>



                            <ul id="f_type" class="f_type" style="display:flex;">
                                <li>
                                    <a href="#" alt="作った人 夏目智徹, 夏目 智徹,toshiyuki natsume">ブラック</a>
                                </li>

                                <li>
                                    <a href="#">ホワイト</a>
                                </li>
                            </ul>

                            -->


                            <!-- 
                <div class="button001">
                    <a href="#">お問い合わせ</a>
                </div>
    -->


                        </div> <!-- 右コンテンツ　END -->

                    </div> <!-- flex END -->

                </div>


            </div>


        </div>


        <!-- タブメニュー END -->
    </div>




    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


    <script>
        //　$(window).load(function () {
        $(function() {

            // === 初期設定
            var num = 0;
            var num_2;
            var num_3; //=== フレームタイプ　の eq 取得

            var targetSrc = $("#sub_image li img").eq(0).attr('src');
            $("input[name=path]").val(targetSrc);

            /*
            $("#main_image li").eq(0).addClass("show"); 
            $("#main_image li").eq(0).removeClass("img_hide");
            */

            // === 最初に表示する要素 
            // $("#main_image li").eq(0).removeClass("img_hide");
            $("#main_image li").eq(0).show();


            // === フレームタイプ
            // $("#sub_image").hide(); // === 「ホワイト」非表示


            // === タブメニュー　クリック
            $('.tab_box .tab_btn').click(function() {
                var index = $('.tab_box .tab_btn').index(this);

                console.log('タブ:index::::' + index);

                $('.tab_box .tab_btn, .tab_box .tab_panel').removeClass('active');
                $(this).addClass('active');
                $('.tab_box .tab_panel').eq(index).addClass('active');

                // === 画像 URL 取得ロジック
                if (index == 0) {
                    // 画像URLを取得
                    var targetSrc = $("#sub_image li img").eq(0).attr('src');
                    $("input[name=path]").val(targetSrc);

                } else {

                    var targetSrc = $("#main_image li img").eq(0).attr('src');
                    $("input[name=path]").val(targetSrc);
                }

            });

            // === テーブルカラー選択
            $("#btn li").click(function() {
                num = $("#btn li").index(this);
                $("#main_image li").hide();
                $("#main_image li").eq(num).show();

                // 画像URLを取得
                targetSrc = $("#main_image li img").eq(num).attr('src');
                $("input[name=path]").val(targetSrc);
                console.log(targetSrc);
            });

            //============== ホワイトテーブル　色変え
            $("#sub_image li").eq(0).show();

            // === テーブルカラー選択
            $("#btn_01 li").click(function() {
                num = $("#btn_01 li").index(this);
                $("#sub_image li").hide();
                $("#sub_image li").eq(num).show();

                // 画像URLを取得
                targetSrc = $("#sub_image li img").eq(num).attr('src');
                $("input[name=path]").val(targetSrc);
                console.log(targetSrc);
            });

            // === 脚カラー
            $("#btn_ashi li").click(function() {
                num_2 = $("#btn_ashi li").index(this);


                //=====================
                // === シルバーだったら
                //=====================
                if (num_2 == 0) {
                    $("#sub_image").hide();
                    $("#main_image").fadeIn('fast');

                    /*
                    $("#main_image li").eq(0).hide();
                    $("#main_image li").eq(0).hide(); 
                    $("#main_image li").eq(0).fadeOut('normal'); 

                    $("#main_image li").eq(10).removeClass("img_hide");
                    $("#main_image li").eq(10).show(); 
                    $("#main_image li").eq(10).fadeIn('normal'); 
                    */
                } else if (num_2 == 1) {
                    //=====================
                    // === ホワイトだったら
                    //=====================

                    $("#main_image").hide();
                    $("#sub_image").show();

                    if (num == -1) {
                        $("#sub_image li").eq(0).fadeIn('fast');
                    } else {
                        $("#sub_image li").eq(num).fadeIn('fast');
                    }


                }

                /*
                if(num == 2 && num_2 == 0 || num == 6 && num_2 == 0) {
                    $("#main_image li").hide();
                    $("#main_image li").eq(8).show();

                    console.log("num:::" + num);
                    console.log("num_2:::" + num_2);

                }else if(num == 0 && num_2 == 0 || num == 4 && num_2 == 0) {
                    $("#main_image li").hide();
                    $("#main_image li").eq(9).show();

                    console.log("num:::" + num);
                    console.log("num_2:::" + num_2);

                } else if (num == 2 && num_2 == 1 || num == 6 && num_2 == 1) {
                    $("#main_image li").hide();
                    $("#main_image li").eq(2).show();

                    console.log("num:::" + num);
                    console.log("num_2:::" + num_2);

                } else if (num == 0 && num_2 == 1 || num == 4 && num_2 == 1) {
                    $("#main_image li").hide();
                    $("#main_image li").eq(0).show();

                    console.log("num:::" + num);
                    console.log("num_2:::" + num_2);
                }
                */

            });

            // === フレームタイプ
            $("#f_type li").click(function() {

                // === 「ホワイト」が押されたら

                num_3 = $("#f_type li").index(this);

                console.log("カラータイプ eq:::" + num);
                console.log("フレームタイプ eq:::" + num_2);
                console.log("メイン画像:::" + num_3); // 押された時の、メイン画像の eq を取得　表示


                //=====================
                // === シルバーだったら
                //=====================
                if (num_3 == 0) {
                    $("#sub_image").hide();
                    $("#main_image").fadeIn('fast');

                    /*
                    $("#main_image li").eq(0).hide();
                    $("#main_image li").eq(0).hide(); 
                    $("#main_image li").eq(0).fadeOut('normal'); 

                    $("#main_image li").eq(10).removeClass("img_hide");
                    $("#main_image li").eq(10).show(); 
                    $("#main_image li").eq(10).fadeIn('normal'); 
                    */
                } else if (num_3 == 1) {
                    //=====================
                    // === ホワイトだったら
                    //=====================

                    $("#main_image").hide();
                    $("#sub_image").show();

                    if (num == -1) {
                        $("#sub_image li").eq(0).fadeIn('fast');
                    } else {
                        $("#sub_image li").eq(num).fadeIn('fast');
                    }


                }

            });

        });
    </script>

    <script>
        $(function() {
            $("#contactForm").submit(function() {
                if (window.confirm('お選び頂きました商品で問い合わせ画面へ進みます。よろしいですか？')) {
                    return true;
                } else {
                    return false;
                }
            });
        });
    </script>

    <!-- Ajax 送信 

    <script>
        $('#send').click(function() {
            // post データで送るデータを定義
            var data = {
                path: $('#path').val()
            };

            $.ajax({
                type: "post",
                url: "form.php",
                data: data,
                // Ajax 成功時
                success: function(data, dataType) {
                    // php から返ってきたデータを表示
                    alert(data);
                },

                // Ajax 通信失敗の場合
                error: function() {
                    alert('Ajax通信が失敗しました。');
                }
            });

            return false;

        });
    </script>
    -->

</body>

</html>