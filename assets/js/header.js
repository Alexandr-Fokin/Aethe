

$(window).on('load', function () {
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
  if (document.querySelector('.header-main')) {
    scrollingAnimation('.header-main');
  }
});