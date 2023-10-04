

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







