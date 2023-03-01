//===================
//=== 最初の表示画像を表示して、2.5秒後に非表示にする
//===================
$(document).ready(function () {
 
    //===
    var Top_Flg = false;
    var Top_Flg_01 = false;

    // === テキスト 文言 02
    var text_02_Flg = false;
    var text_item_02 = $('.h_text_02');
    
    // === テキスト 文言 03
    var text_03_Flg = false;
    var text_item_03 = $('.h_text_03');

       // === テキスト 文言 04
    var text_04_Flg = false;
    var text_item_04 = $('.h_text_04');

    $('.head_content').hide();
    $('#logo_img').hide();

    $('.first_img_box').fadeIn(300);

    // スクロール禁止
    
    $(window).on('touchmove.noScroll', function(e) {
    e.preventDefault();
    });
    

     setTimeout(function(){
         $('#logo_img').fadeIn(600);
    }, 500);


    setTimeout(function(){
        $('.first_img_box').fadeOut(600);
        $('#logo_img').fadeOut(800);

        $('.head_content').fadeIn(1600);
        
        // === 非表示
         $('.h_text_box_min').css({ 'opacity': 0, 'margin-top': '10px' });
        text_item_02.css({ 'opacity': 0, 'margin-top': '10px' });
        text_item_03.css({ 'opacity': 0, 'margin-top': '10px' });
        text_item_04.css({ 'opacity': 0, 'margin-top': '10px' });

        Top_Flg_01 = true;

        // === スクロール禁止　解除
         $(window).off('.noScroll');

    }, 2000);

    //=========================== ロゴ終了

    setTimeout(function () {

        if (Top_Flg_01 == true) {
            
            var delaySpeed = 120;
            var fadeSpeed = 400;
            $('.h_text_box_min').css({ 'opacity': 0, 'margin-top': '10px' });
                
            $('.h_text_box_min').each(function (i) {
                $(this).delay(i * (delaySpeed)).animate({ opacity: '1', marginTop: '0px' }, fadeSpeed);
            });

        } else {

            $(window).scroll(function () {
                var scroll = $(this).scrollTop();

                if (scroll > 30) {
                    var delaySpeed = 120;
                    var fadeSpeed = 400;
                    $('.h_text_box_min').css({ 'opacity': 0, 'margin-top': '10px' });
                
                    $('.h_text_box_min').each(function (i) {
                    $(this).delay(i * (delaySpeed)).animate({ opacity: '1', marginTop: '0px' }, fadeSpeed);
                    });
                }

            });

        }
        

    }, 2200);
  

    // === ノフュレ ガラステーブル G-Tellus 文字アニメーション
    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        console.log(scroll);

        /*
        if (scroll < 180) {

            if (!Top_Flg) {
                var delaySpeed = 120;
                var fadeSpeed = 400;
                $('.h_text_box_min').css({ 'opacity': 0, 'margin-top': '10px' });
                
                $('.h_text_box_min').each(function (i) {
                    $(this).delay(i * (delaySpeed)).animate({ opacity: '1', marginTop: '0px' }, fadeSpeed);
                });

               Top_Flg = true;
           }
       
          
                
        } else {
            ;
        }
         */

        //=== テキスト 2 フェード
        if (scroll > 280) {
            // === テキスト 02 フェードイン
            if (!text_02_Flg) {
                FadeIn_Animation_01(text_item_02);
                text_02_Flg = true;
            } else {
                ;
            }
            
        } else {
            ;
        }

         //=== テキスト 2 フェード
        if (scroll > 520) {
            // === テキスト 02 フェードイン
            if (!text_03_Flg) {
                FadeIn_Animation_01(text_item_03);
                text_03_Flg = true;
            } else {
                ;
            }
           
        } else {
            ;
        }


          //=== テキスト 2 フェード
        if (scroll > 800) {
            // === テキスト 02 フェードイン
            if (!text_04_Flg) {
                FadeIn_Animation_01(text_item_04);
                text_04_Flg = true;
            } else {
                ;
            }
           
        } else {
            ;
        }

    }); // === (window).scroll(function () END
    
    
 

});

// === フェードイン
function FadeIn_Go(Item) {
    Item.fadeIn(1200);
}

// === フェードインアニメーション
function FadeIn_Animation_01(Item) {
     Item.css({ 'opacity': 0, 'margin-top': '20px' });
     var delaySpeed = 200;
     var fadeSpeed = 700;
    Item.delay(delaySpeed).animate({ opacity: '1', marginTop: '0px' }, fadeSpeed);
    
    Item.stop();
}



//=== スクロール位置を取得
$(window).on('load', function () {
   
  
});