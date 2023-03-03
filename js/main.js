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
});

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


//上にスクロールした際にも削除したい場合は↓
// const isUp = (function() {
//   const scrollElement = document.scrollingElement;
//   let flag, prePoint, scrollPoint;
//   return function() {
//     scrollPoint = scrollElement.scrollTop;
//     flag = prePoint > scrollPoint ? true : false;
//     prePoint = scrollPoint;
//     return flag;
//   }
// }());

// function addClassScroll(el, className) {
//   window.addEventListener('scroll', function() {
//     if (this.window.scrollY > 100) {
//       if (isUp()) {
//         el.classList.remove(className);
//       } else {
//         el.classList.add(className);
//       }
//     } else {
//       el.classList.remove(className);
//     }
//   });
// }
// addClassScroll(cta, 'is-scrolled');


// // ターゲットの設定
// const items = document.querySelectorAll('.js-intersection')
// // IEのforEach対策
// const itemsList = Array.prototype.slice.call(items, 0)

// // オプションの設定
// const intersectptions = {
//   root: null,
//   rootMargin: '0px',
//   threshold: 0
// }

// const observer = new IntersectionObserver(itemIntersect, intersectptions)

// // ターゲットを監視する
// itemsList.forEach(item => {
//   observer.observe(item)
// })

// // 交差した時の処理
// function itemIntersect (entries) {
//   entries.forEach((entry) => {
//     if (entry.isIntersecting) {
//       entry.target.classList.add('is-active')
//     } else {
//       entry.target.classList.remove('is-active')
//     }
//   })
// }
