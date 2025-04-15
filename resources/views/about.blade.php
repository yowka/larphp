<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/style/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style/swiper.css')}}">
    <link rel="icon" href="{{asset('assets/images/netflix.ico')}}">
    <title>О нас</title>

</head>
<body>
@include('nav-component')
<main>
    <div class="wrapper">
        <div class="back-logo">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                    <div class="swiper-slide">Slide 4</div>
                    <div class="swiper-slide">Slide 5</div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</main>

<script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.swiper', {
            direction: 'horizontal',
            loop: true,
            autoplay:{
                delay: 2400,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },

            // Дополнительные параметры
            slidesPerView: 1,
            spaceBetween: 30,
            keyboard: {
                enabled: true,
            },
        });
    });
</script>
</body>
</html>
