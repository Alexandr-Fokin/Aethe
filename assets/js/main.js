

// Подгрузка и установка слайдеров по CSS-селектору
$(window).on('load', function () {

  AOS.init({
    duration: 600,
    once: true,
  });

  $('.partners__list').slick({
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    nextArrow: '<button type="button" class="slick-btn slick-next"></button>',
    prevArrow: '<button type="button" class="slick-btn slick-prev"></button>',
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 0,
    speed: 9000,
    variableWidth: true,
    pauseOnFocus: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 1050,
        settings: {
          slidesToShow: 1,

        }
      },
    ]
  });


  AOS.refresh();


  // Wrap every letter in a span
var textWrapper = document.querySelector('.ml6 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline()
  .add({
    targets: '.ml6 .letter',
    translateY: ["1.1em", 0],
    translateZ: 0,
    duration: 1150,
    delay: (el, i) => 50 * i
  }).add({
    targets: '.ml6',
    opacity: 1,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
});



// Установка персонализированных полей ввода
// $(' input').styler();
// $(' input[type="radio"]').styler();



// Иконка вк становится цветной при наведении на ее блок
// $(".socialmedia__block-vk").on("mouseover", function () {
//   $('.socialmedia__block-vk').addClass('active')
// });
// $(".socialmedia__block-vk").on("mouseout", function () {
//   $('.socialmedia__block-vk').removeClass('active')

// });




// Плавная прокрутка на ссылках по якорям
const anchors = document.querySelectorAll('a[href*="#"]')
for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()

    const blockID = anchor.getAttribute('href').substr(1)

    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  })
}



// // "Показать еще" функция
// window.onload = function () {
//   var box = document.getElementsByClassName('works__line-blocks');
//   var btn = document.querySelector('.btn__block-more a');
//   for (let i = 2; i < box.length; i++) {
//     box[i].style.display = "none";
//   }

//   var countD = 2;
//   btn.addEventListener("click", function () {
//     var box = document.getElementsByClassName('works__line-blocks');
//     countD += 1;
//     if (countD <= box.length) {
//       for (let i = 0; i < countD; i++) {
//         $(box[i]).slideDown("slow");
//       }
//     }
//     if (countD == box.length) {
//       btn.style.display = "none";
//     }

//   })
// }




// Функция "Открыть фото в модальном окне" на весь экран
Fancybox.bind(".fancybox-open-img", {
  // Your options
});


// Открытие страницы "Спасибо" при отправке контактной формы
document.addEventListener('wpcf7mailsent', function (event) {
  location = 'https://example.com/thanks/';
}, false);








function scrollingAnimation(section) {

  let options = {
      root: null,
      rootMargin: "0px",
      threshold: 0.5,
  };

  let callback = (entries, observer) => {
      entries.forEach((entry) => {
          if (entry.isIntersecting) {
              // Элемент виден внутри области наблюдения.
              // Выполните необходимые действия.
              document.querySelector(`${section}`).classList.add('scrolled');
          } else {
              // Элемент скрыт вне области наблюдения.
              // Выполните необходимые действия.
          }

      });
  };
  let observer = new IntersectionObserver(callback, options);

  let target = document.querySelector(`${section}`);
  observer.observe(target);
}
if (document.querySelector('.homepage')) {
  scrollingAnimation('.header__slider');
  scrollingAnimation('.catalogue__section');
  scrollingAnimation('.banner-conf__section');
  scrollingAnimation('.furniture__section');
  scrollingAnimation('.banner-part__section');
  scrollingAnimation('.exclusive__section');
  scrollingAnimation('.collection__section');
  scrollingAnimation('.trust__section');
}