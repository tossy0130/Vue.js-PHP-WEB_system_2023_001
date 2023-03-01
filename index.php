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

    <link href="css/index.css" rel="stylesheet">

    <!-- 日本語フォント 01 -->
    <link rel="stylesheet" type="text/css" href="http://mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <!-- Vue.js CDN -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vueinview@1.0.5/dist/vue-inview.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>

    <script src="https://unpkg.com/vue@3"></script>

    <style>
        #app {
            border-radius: 4px;
            padding: 20px;
            transition: all 0.8s;
        }

        .container_001 {
            background-color: #fff;
        }

        .head_content {
            width: 1000px;
            margin: 0 auto;
        }

        .first_img_box {
            width: 100%;
            height: 60em;
        }

        .first_img_div {
            width: 15%;
            position: relative;
            left: 40%;
            top: 36%;
        }

        /** === ヘッダーメニュー === */
        .header_menu {
            display: flex;
        }

        .header_left {
            position: relative;
            top: 20px;
            left: 0%;
        }

        #menu_logo_img {
            width: 18%;
            height: auto;
        }

        .header_menu_ul {
            display: flex;
        }

        .header_menu_ul>li {
            padding: 0 50px 0px 0;
            list-style: none;
        }


        .header_menu_ul>li>a {
            text-decoration: none;
            display: inline-block;
        }

        /** === ヘッダーキャッチコピー */

        .h_text_box {
            display: flex;
            position: relative;
            top: 55px;
            font-size: 3.8vw;
        }


        .catch_text_01 {
            background: linear-gradient(114deg, rgba(201, 203, 202, 1) 0%, rgba(160, 142, 130, 1) 35%, rgba(193, 169, 163, 1) 100%);
            color: transparent;
            -webkit-background-clip: text;
        }

        .catch_text_02 {
            background: linear-gradient(114deg, rgba(201, 203, 202, 1) 0%, rgba(160, 142, 130, 1) 35%, rgba(193, 169, 163, 1) 100%);
            color: transparent;
            -webkit-background-clip: text;
        }

        .gt_01 {
            font-size: 4.8vw !important;
        }

        #mozi_01 {
            margin-right: 20px;
        }

        #mozi_02 {
            margin-right: 20px;
        }

        .h_text_02 {
            position: relative;
            top: 230px;
            font-size: 2.2vw;
        }

        .h_text_03 {
            position: relative;
            top: 405px;
            font-size: 2.2vw;
        }

        .h_text_04 {
            position: relative;
            top: 605px;
            font-size: 2.2vw;
        }
    </style>

</head>

<body>

    <!-- =============================== ヘッダーコンテンツ ============================ -->

    <div class="container_001">

        <div id="sh" class="first_img_box">
            <div class="first_img_div">
                <img src="./img/ds/logo.jpg" id="logo_img">
            </div>
        </div>


        <div class="head_content">

            <!-- メニュー -->
            <div class="header_menu">

                <div class="header_left">
                    <img src="./img/ds/logo.jpg" id="menu_logo_img">
                </div>

                <div class="header_right">
                    <ul class="header_menu_ul">
                        <!--
                        <li><a href="#">a</a></li>
                        <li><a href="#">a</a></li>
                        <li><a href="#">a</a></li>
                        <li><a href="#">a</a></li>
                        <li><a href="#">a</a></li>
                        <li><a href="#">a</a></li>
    -->
                    </ul>
                </div>


            </div> <!-- header_menu -->

            <div class="h_text">
                <div class="h_text_box">
                    <div class="h_text_box_min catch_text_01">
                        ノ
                    </div>
                    <div class="h_text_box_min catch_text_02">
                        フ
                    </div>
                    <div class="h_text_box_min catch_text_02">
                        ュ
                    </div>
                    <div class="h_text_box_min catch_text_01" id="mozi_01">
                        レ
                    </div>

                    <div class="h_text_box_min catch_text_01">
                        ガ
                    </div>
                    <div class="h_text_box_min catch_text_02">
                        ラ
                    </div>
                    <div class="h_text_box_min catch_text_02">
                        ス
                    </div>
                    <div class="h_text_box_min catch_text_01">
                        テ
                    </div>
                    <div class="h_text_box_min catch_text_01">
                        ー
                    </div>
                    <div class="h_text_box_min catch_text_01">
                        ブ
                    </div>
                    <div class="h_text_box_min catch_text_01" id="mozi_02">
                        ル
                    </div>

                    <div class="h_text_box_min catch_text_01 gt_01">
                        G
                    </div>
                    <div class="h_text_box_min catch_text_01 gt_01">
                        -
                    </div>
                    <div class="h_text_box_min catch_text_01 gt_01">
                        T
                    </div>
                    <div class="h_text_box_min catch_text_01 gt_01">
                        l
                    </div>
                    <div class="h_text_box_min catch_text_01 gt_01">
                        l
                    </div>
                    <div class="h_text_box_min catch_text_01 gt_01">
                        u
                    </div>
                    <div class="h_text_box_min catch_text_01 gt_01">
                        s
                    </div>

                </div>

            </div> <!-- h_text END -->


            <div class="h_text_02">
                G-Tllus Carbon saitonituite<br />
                カーボン繊維入りガラス
            </div>

            <div class="h_text_03">
                カラーガラス<br />
                NSGインテリア株式会社製<br />
                色名・色番
            </div>

            <div class="h_text_04">
                外寸：W172cm×D86cm×H42cm<br />
                重量：55Kg
            </div>


            <div id="app">
                <div>
                    <div class="box"><img src="./img/ds/01.jpg"></div>
                </div>

            </div>
        </div>
    </div> <!-- container -->

    <!-- ==================================== ヘッダー END ====================================== -->



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
                                <li class="img_hide"><img src="./img/t_bl_001.jpg"></li>
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
                            <ul id="btn" class="btn_table_02">
                                <li><img src="./img/te-bulu_01.jpg" class="t_color_img"></li>
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

    </div><!-- END container -->




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

    <script src="./js/top.js"></script>



</body>

</html>