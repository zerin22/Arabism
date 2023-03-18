<!-- all scripts are starts from here -->
<script src="{{ asset('frontend/assets/vendor/Swiper-slider/js/swiper-bundle.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
<script>
  var swiper = new Swiper(".teamSwiper", {
    autoplay: {
      delay: 4000,
    },
    centeredMode: true,
    autoPlay: true,
    loop: true,
    spaceBetween: 30,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 10
      },
      475: {
        slidesPerView: 1,
        spaceBetween: 45
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 45
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 45
      },
    }
  });
</script>
<!-- .........script ended............. -->
</body>

</html>
