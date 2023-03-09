<?php

// エラーを出力
ini_set('display_errors', "On");
// 
require(dirname(__FILE__) . '/functions.php');

?>
<!DOCTYPE html>
<html lang="ja">

<head>



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


    <link rel="stylesheet" href="css/form.css">


    <link href="css/index.css" rel="stylesheet">

    <!-- 日本語フォント 01 -->
    <link rel="stylesheet" type="text/css" href="http://mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gloock&display=swap" rel="stylesheet">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Vue.js CDN -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vueinview@1.0.5/dist/vue-inview.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://unpkg.com/vue@3"></script>

    <style>
        /* === 特徴　=== */
        .content_02 {
            width: 1000px;
            margin: 0 auto;
        }

        .cont_02_box {
            display: flex;
        }

        .midasi_01 {
            font-size: 2.6vw;
            text-align: center;
            padding: 25px 0;
            letter-spacing: 0.2em;
        }

        #cont_02_itme_01>img {
            width: 97%;
            height: auto;
        }

        .cont_text_02 {
            font-size: 1.15vw;
            margin: 0px 0 65px 0;
            letter-spacing: 0.2em;
        }

        /* === フッター === */
        #footer_container {
            padding: 0 0 25px 0;
        }

        .mid_footer {
            width: 1000px;
            margin: 0 auto;
        }

        .footer_logo {
            text-align: center;
            padding: 35px 0 0px 0;
        }

        .footer_logo>img {
            width: 20%;
            height: auto;
        }

        .f_text_01 {
            text-align: center;
            color: #fff;
            font-size: 1.35vw;
            letter-spacing: 0.18em;
        }

        .f_text_02 {
            text-align: center;
            font-size: 1.35vw;
            color: #fff;
            letter-spacing: 0.18em;
        }

        .f_text_02>a {
            display: inline-block;
            text-decoration: none;
            color: #fff;
        }

        #design_text {
            position: relative;
            top: 682px;
            left: 63%;
            font-size: 0.7vw;
            font-weight: bold;
        }

        /* === フッター END ===*/

        .color_text {
            display: inline-block;
            font-size: 0.62vw;
        }

        .color_img_box {
            display: inline-block;
        }

        #youbou_box {
            border-top: 6px solid #4A4E4F;
            border-bottom: 6px solid #4A4E4F;
            width: 100%;
        }

        #youbou_box>p:nth-child(1) {
            text-align: center;
            font-size: 2.2vw;
        }

        #carbon_text {
            display: block;
            position: relative;
            top: 80px;
            left: 5%;
            color: #E6000C;
        }

        #nsg {
            display: block;
            text-align: center;
            border-right: 7px solid #4A4E4F;
            border-left: 7px solid #4A4E4F;
            margin: 0 0 0 0;
            padding: 0.5em 1em;
            width: 80%;
            position: relative;
            left: 11%;
        }

        /** ====== 画像　拡大 ====== */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.8);
            display: none;
            z-index: 100;
        }

        .bigimg {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            width: 86%;
            height: auto;
        }

        @media (min-width: 960px) {
            .bigimg {
                width: 80%;
                height: auto;
            }
        }

        .close-btn {
            color: #fff;
            font-size: 40px;
            position: absolute;
            right: 20px;
            top: 0;
        }

        .close-btn a {
            color: #fff;
            text-decoration: none;
        }

        /** ====== 画像　拡大 END ====== */
    </style>

</head>

<body>


    <!-- =============================== ヘッダーコンテンツ ============================ -->

    <div class="container_001" style="background-color:#ffffff;">

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
                        e
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
                G-Tellus Carbon saitonituite<br />
                カーボン繊維入りガラス
            </div>

            <div class="h_text_03">
                スタイリッシュなデザインと職人技が<br />
                融合したインテリア製品
            </div>

            <div class="h_text_04">
                外寸：W172cm×D86cm×H42cm<br />
                重量：55Kg
            </div>


            <div id="app">

                <p id="design_text">Designed by Hiromi Ohashi</p>
                <div>
                    <div class="box"><img src="./img/ds/001.png" id="top_table_img"></div>
                </div>

            </div>
        </div>


    </div> <!-- container -->

    <!-- ==================================== ヘッダー END ====================================== -->

    <!-- ======================== 特徴 開始 ======================= -->

    <div class="container" id="tokutyou_container" style="background-color:#DDDDDD;">

        <div class="content_02">

            <p class="midasi_01">
                特徴
            </p>

            <div class="cont_02_box">

                <div id="cont_02_itme_01">
                    <img src="./img/ds/mid_item_01.png">
                </div>

                <div id="cont_02_item_right">

                    <div class="cont_text_02">
                        ・天板（トップ）は平面曲線を取り入れたデザイン形状とカラー合わせガラスを用いたローテーブル
                    </div>

                    <div class="cont_text_02">
                        ・フレームは類をみない曲線美を追及したデザインと職人の技術の粋を凝縮
                    </div>

                    <div class="cont_text_02">
                        ・合わせガラスは一般ガラスや強化ガラスと違って万が一割れてもガラスが飛散しにくい構造になっています。
                    </div>

                    <div class="cont_text_02">
                        ・水平出しがしっかり出来る構造設計
                    </div>
                </div>

            </div><!-- cont_02_box -->

        </div>

    </div>

    <!-- ======================== 特徴 開始 END ======================= -->

    <!-- ======================== tab 色選択　Start ======================= -->
    <div class="container" id="tab_container" style="background-color:#C2B4AE;">

        <div class="tab_box">

            <!-- タブメニュー -->
            <div class="btn_area">
                <p class="tab_btn active">テーブルタイプ パールホワイト</p>
                <p class="tab_btn">カーボン ブラック</p>
            </div>

            <!-- タブメニュー END -->

            <!-- タブ コンテンツ 01 -->

            <div class="panel_area">

                <div class="tab_panel active">

                    <div id="youbou_box">
                        <p>-オリジナル要望対応-</p>

                        <p>
                            ・ガラストップのカラーリング、アートフィルムによるデザイン
                            ・フレーム、脚体のカラーリングも対応可能です。
                        </p>

                    </div>

                    <!-- ＝＝＝ ホワイト　＝＝＝ -->
                    <div class="flex">

                        <!--- 左側　画像コンテンツ --->
                        <div>

                            <ul id="sub_image" class="sub_image">

                                <li style="overflow: hidden !important;height: 545px;" class="first_img gazou_btn"><img src="./img/g_01.jpg" class="s_img" id="s_img_01"></li>

                                <li class="img_hide gazou_btn" style="overflow: hidden !important;height: 545px;"><img src="./img/g_02.jpg" class="s_img"></li>

                                <li class="img_hide gazou_btn" style="overflow: hidden !important;height: 545px;"><img src="./img/g_03.jpg" class="s_img"></li>

                                <li class="img_hide gazou_btn" style="overflow: hidden !important;height: 545px;"><img src="./img/g_04.jpg" class="s_img"></li>

                                <li class="img_hide gazou_btn" style="overflow: hidden !important;height: 545px;"><img src="./img/g_05.jpg" class="s_img"></li>

                                <li class="img_hide gazou_btn" style="overflow: hidden !important;height: 545px;"><img src="./img/g_06.jpg" class="s_img"></li>

                                <li class="img_hide gazou_btn" style="overflow: hidden !important;height: 545px;"><img src="./img/g_07.jpg" class="s_img"></li>

                                <li class="img_hide gazou_btn" style="overflow: hidden !important;height: 545px;"><img src="./img/g_08.jpg" class="s_img"></li>

                                <!-- 
                                <div id="modal_window_image_09"></div>
                                <li class="img_hide" style="overflow: hidden !important;height: 545px;"><img src="./img/a_white/TAK_3618_green.jpg" class="s_img"></li>
                                -->

                                <div class="modal">
                                    <div class="bigimg"><img src="" alt=""></div>
                                    <p class="close-btn"><a href=""></a></p>
                                </div>
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
                            <p class="mini_title">ガラスはカラータイプがお選びできます。</p>
                            <span id="nsg">NSG インテリア株式会社製 色名・色番</span>
                            <ul id="btn_01" class="btn_table">

                                <!-- カラー　１列目 -->
                                <li>
                                    <sapn class="color_text">ライトブルー<br />（SS5）</sapn>
                                    <span class="color_img_box"><img src="./img/honban/tak_01.jpg" class="t_color_img"></span>
                                </li>
                                <li>
                                    <sapn class="color_text">シャーベットピンク<br />（SBP）</sapn>
                                    <span class="color_img_box"><img src="./img/honban/tak_02.jpg" class="t_color_img"></span>
                                </li>
                                <li>
                                    <sapn class="color_text">シャーベットレッド<br />（SBR）</sapn>
                                    <span class="color_img_box"><img src="./img/honban/tak_03.jpg" class="t_color_img"></span>
                                </li>

                                <!-- カラー　２列目 -->
                                <li>
                                    <sapn class="color_text">アクアグリーン<br />（FG3）</sapn>
                                    <span class="color_img_box"><img src="./img/honban/tak_04.jpg" class="t_color_img"></span>
                                </li>
                                <li>
                                    <sapn class="color_text">ダンディーブルー<br />（SS1）</sapn>
                                    <span class="color_img_box"><img src="./img/honban/tak_05.jpg" class="t_color_img"></span>
                                </li>
                                <li>
                                    <sapn class="color_text">ラベンダー<br />（TP6）</sapn>
                                    <span class="color_img_box"><img src="./img/honban/tak_06.jpg" class="t_color_img"></span>
                                </li>

                                <!-- カラー　３列目 -->
                                <li>
                                    <sapn class="color_text">ペールスカイ<br />（BO3）</sapn>
                                    <span class="color_img_box"><img src="./img/honban/tak_07.jpg" class="t_color_img"></span>
                                </li>
                                <li>
                                    <sapn class="color_text">ピュアパールホワイト<br />（JPW）</sapn>
                                    <span class="color_img_box"><img src="./img/honban/tak_08.jpg" class="t_color_img"></span>
                                </li>
                            </ul>

                            <form id="contactForm" name="contactForm" method="post" action="form.php">
                                <input type="hidden" name="path" id="path">
                                <input id="send" class="Form-Btn02" type="submit" value="問い合わせフォームへ進む"></p>
                            </form>

                        </div> <!-- 右コンテンツ　END -->

                    </div> <!-- flex END -->


                </div> <!-- タブ コンテンツ END -->

                <!-- タブ コンテンツ 01 -->

                <div class="tab_panel">

                    <div id="youbou_box">
                        <p>-カーボンブラック-</p>

                        <p>
                            ・脚体はブラック、フレームはミラー仕上げ。
                        </p>

                    </div>

                    <span id="carbon_text">
                        ※ガラステーブルの右側の斜めに色が変わっている部分は撮影上、<br />
                        光が当たっています。デザインは単色のブラックになっています。
                    </span>

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
                                <li><img src="./img/ds/color_btn_img_01.jpg" class="t_color_img"></li>
                            </ul>

                            <!-- 画像パス　POST 用フォーム -->
                            <form id="contactForm" name="contactForm" method="post" action="form.php">
                                <input type="hidden" name="path" id="path">
                                <input id="send" class="Form-Btn02" type="submit" value="問い合わせフォームへ進む">
                            </form>

                            <!-- 脚カラー  -->

                        </div> <!-- 右コンテンツ　END -->

                    </div> <!-- flex END -->

                </div>


            </div>


        </div>

    </div><!-- END container -->
    <!-- ======================== tab 色選択　END ======================= -->

    <!-- ============ フッター Start ============= -->

    <div class="container" id="footer_container" style="background-color:#161616;">
        <footer class="mid_footer">
            <div class="footer_logo">

                <img src="./img/ds/f_logo_02.png">

                <!--
                <img src="./img/ds/f_logo.png">
    -->
            </div>

            <p class="f_text_01">
                MID LTD.
            </p>

            <p class="f_text_02">〒955-0036 新潟県三条市篭場5-10<br />
                TEL <a href="tel:0256-38-2688">0256-38-2688</a> FAX 0256-38-2689</p>
            </p>

        </footer>
    </div>
    <!-- ============ フッター END ============= -->



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


    <script src="./js/index.js"></script>
    <script src="./js/top.js"></script>

    <script>
        $(document).ready(function() {

            $('.gazou_btn').click(function() {
                var ImgSrc = $(this).children().attr('src');
                console.log("ImgSrc:::" + ImgSrc);
                $('.bigimg').children().attr('src', ImgSrc);
                $('.modal').fadeIn();
                $('body,html').css('overflow-y', 'hidden'); // スクロール禁止
                return false
            });

            $('.close-btn').click(function() {
                $('.modal').fadeOut();
                $('body,html').css('overflow-y', 'visible'); // スクロール禁止　解除
                return false
            });

            $('.modal').click(function() {
                $('.modal').fadeOut();
                $('body,html').css('overflow-y', 'visible'); // スクロール禁止　解除
                return false
            });

        });
    </script>


</body>

</html>