//===================
// === 文字アニメーション
//===================

// === 文字を動かす
function Text_move(Tar_elme) {
    Tar_elme.css({ 'opacity': 0, 'margin-top': '10px' });

    var delaySpeed = 200;
    var fadeSpeed = 1000;

    Tar_elme.delay(delaySpeed).animate({opacity:'1',marginTop:'0px'},fadeSpeed);
}

function stop_hoge(){
    clearInterval(setIV);
    console.log("停止しました！");
}

// === 文字アニメーション　テスト用
//$(document).ready(function () {
$(window).on("load", function () {

   
    setTimeout(function () {

         var El_top_01 = $('.h_text_box').offset().top;
        console.log(El_top_01);

        // === 文字　表示アニメーション OK === 
        var delaySpeed = 200;
        var fadeSpeed = 1000;
        $('.h_text_box_min').css({ 'opacity': 0, 'margin-top': '10px' });
      //  setIV = setInterval(Text_move(T_elme_01), 1000);
        $('.h_text_box_min').each(function (i) {
            
	$(this).delay(i*(delaySpeed)).animate({opacity:'1',marginTop:'0px'},fadeSpeed);
});
    }, 3000);
    
 
}); // === function END