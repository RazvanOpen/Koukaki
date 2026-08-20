const swiper = new Swiper('.swiper-container', {
    slidesPerView : 3,
    spaceBetween : 30,
    loop: true,
    /*autoplay: {  
        delay: 2000,
    },*/
    grabCursor: true,
    centeredSlides: true,
    effect: 'coverflow',
    coverflowEffect: {
        depth: 1,
        rotate: 0,
        slideShadows: false,
    },
});
