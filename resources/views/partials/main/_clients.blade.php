<!-- ======= Clients Section ======= -->
<section id="clients" class="clients section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Clients</h2>
            <p>They trusted us</p>
        </div>

        <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="/images/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/images/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/images/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/images/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/images/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/images/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/images/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/images/clients/client-8.png" class="img-fluid" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
    <script>
        /**
         * Clients Slider
         */
        new Swiper('.clients-slider', {
            speed: 400,
            loop: true,
            autoplay: {
            delay: 5000,
            disableOnInteraction: false
            },
            slidesPerView: 'auto',
            pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
            },
            breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 40
            },
            480: {
                slidesPerView: 3,
                spaceBetween: 60
            },
            640: {
                slidesPerView: 4,
                spaceBetween: 80
            },
            992: {
                slidesPerView: 6,
                spaceBetween: 120
            }
            }
        });
    </script>
</section><!-- End Clients Section -->