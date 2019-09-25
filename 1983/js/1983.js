 var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      spaceBetween: 30,
      centeredSlides: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
       
    });