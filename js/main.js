"use strict";

// スライドショーの実装
jQuery('.fv-slider').slick({
  arrows: false,          //左右の矢印はなし
  autoplay: true,         //自動再生
  autoplaySpeed: 0,       //自動再生のスピード
  speed: 3000,            //スライドスピード
  slidesToShow: 3,        //スライドの表示枚数
  cssEase: "linear",      //スライドの動きを等速に
  pauseOnHover: false,    //ホバーしても止まらないように
  pauseOnFocus: false,    //フォーカスしても止まらないように
  pauseOnDotsHover: false
});
jQuery('.fv-slider').on('touchmove', function(event, slick, currentSlide, nextSlide){
  jQuery('.fv-slider').slick('slickPlay');
});



// ボタンクリックで指定した要素までスクロールする関数
function scrollToElementOnClick(button, el) {
  button.addEventListener('click', function() {
    window.scrollTo({
      behavior: 'smooth',
      top: el.offsetTop
    });
  });
}


const achievementBtn = document.querySelector('.js-achievement__btn');
const ex = document.querySelector('.ex');
const exBtn = document.querySelector('.js-ex__btn');
const freeBtn = document.querySelector('.js-free__btn');
const estimateBtn = document.querySelector('.js-estimate__btn');
const contact = document.querySelector('.contact');
const contactBtn = document.querySelector('.js-contact__btn');
const contactBtnSp = document.querySelector('.js-contact__btn--sp');
const ctaBtn = document.querySelector('.js-cta__btn');

scrollToElementOnClick(achievementBtn, contact);
scrollToElementOnClick(exBtn, ex);
scrollToElementOnClick(freeBtn, contact);
scrollToElementOnClick(estimateBtn, contact);
scrollToElementOnClick(contactBtn, contact);
scrollToElementOnClick(contactBtnSp, contact);
scrollToElementOnClick(ctaBtn, contact);



//スクロールした時にCTA部分をフワッと表示
const cta = document.querySelector('.cta');

function addClassScroll(el, className) {
  window.addEventListener('scroll', function() {
    if (window.scrollY > 100) {
      el.classList.add(className);
    } else {
      el.classList.remove(className);
    }
  });
}
addClassScroll(cta, 'is-scrolled');


// コンタクトフォーム、全ての必須項目を入力時のみボタンを活性化する
function validateForm() {
  // 必須項目のIDを配列で定義
  const requiredFields = ["your-name", "your-company", "your-email", "your-number", "your-message" ];

  // 必須項目がすべて入力されているかどうかを確認
  let isValid = true;
  requiredFields.forEach((field) => {
    const input = document.getElementById(field);
    if (input.value.trim() === "") {
      isValid = false;
      return;
    }
  });

  // 送信ボタンにクラスを付与または削除
  const submitButton = document.querySelector('#submit-btn');
  if (isValid) {
    submitButton.classList.add("enabled");
  } else {
    submitButton.classList.remove("enabled");
  }
}

// フォームの各入力欄に対して、入力された内容が変更された場合にvalidateFormを呼び出すように設定
const formInputs = document.querySelectorAll("input, textarea");
formInputs.forEach((input) => {
  input.addEventListener("input", validateForm);
});
