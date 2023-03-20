"use strict";
// ボタンクリックで指定した要素までスクロールする関数
if ( window.document.body.id === 'top' ) {
  // トップページのみに適応
  const scrollToElementOnClick = function(button, el) {
      button.addEventListener('click', function() {
        window.scrollTo({
          behavior: 'smooth',
          top: el.offsetTop
        });
      });
    };
    
    const contact = document.querySelector('.contact');
    const achievementBtn = document.querySelector('.js-achievement__btn');
    const exBtn = document.querySelector('.js-ex__btn');
    const freeBtn = document.querySelector('.js-free__btn');
    const estimateBtn = document.querySelector('.js-estimate__btn');
    const contactBtn = document.querySelector('.js-contact__btn');
    const contactBtnSp = document.querySelector('.js-contact__btn--sp');
    const ctaBtn = document.querySelector('.js-cta__btn');
  
    scrollToElementOnClick(achievementBtn, contact);
    scrollToElementOnClick(exBtn, contact);
    scrollToElementOnClick(freeBtn, contact);
    scrollToElementOnClick(estimateBtn, contact);
    scrollToElementOnClick(exBtn, contact);
    scrollToElementOnClick(contactBtn, contact);
    scrollToElementOnClick(contactBtnSp, contact);
    scrollToElementOnClick(ctaBtn, contact);
} 
//スクロールした時にCTA部分をフワッと表示
(function() {
  const cta = document.querySelector('.cta');
  const isUp = (function() {
    const scrollElement = document.scrollingElement;
    let flag, prePoint, scrollPoint;
    return function() {
      scrollPoint = scrollElement.scrollTop;
      flag = prePoint > scrollPoint ? true : false;
      prePoint = scrollPoint;
      return flag;
    }
  }());
  
  window.addEventListener('scroll', () => {
    if (window.pageYOffset > 100) {
      if (isUp()) {
        cta.classList.remove('is-scrolled');
      } else {
        cta.classList.add('is-scrolled')
      }
    } else {
      cta.classList.remove('is-scrolled');
    }
    
    if (window.pageYOffset + window.innerHeight >= document.documentElement.scrollHeight) {
      cta.classList.add('is-scrolled');
    }
  })
}());



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
