     window.addEventListener('DOMContentLoaded', function() {
            var swiper03 = new Swiper('.works-contents .swiper-container', {

                autoplay: {
                    delay: 3000,
                    stopOnLastSlide: false,
                    disableOnInteraction: false,
                    reverseDirection: false
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },

                pagination: '.swiper-pagination',
                paginationClickable: true,
                loop: true,
                slidesPerView: 1,
                loopedSlides: 3,
                centeredSlides: true,
                slideToClickedSlide: true,
                spaceBetween: 60,
                breakpoints: {
                    767: {
                        slidesPerView: 3,
                    }
                }
            });
        }, false);
