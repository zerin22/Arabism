@extends('layouts.frontend.frontend_master')
@section('content')
      <!-- banner -->
      <div class="home-banner">
        <div class="row">
          <div class="col-md-8">
            <div class="wrapper">
              <h4 class="title">Arabism Land</h4>
              <h6 class="subt">welcomes you to</h6>
              <p class="description">Explore Saudi Arabia like you’ve never seen before.
                Arabism Land offers <span id="bDot">...</span><span id="BT1" class="d-none">you a discovery opportunity
                  in an extraordinary journey.</span>
                <br>
                <span id="moreText" class="d-none">Be part of the valuable journey and enjoy the featured tours and
                  trips. <br>
                  <strong>exclusive offers! For subscribers only
                    enjoy a 30% coupon discount</strong></span>
              </p>
              <div class="buttons">
                <a href="#subscribe" class="btn button-yellow">Subscribe now</a>
                <button id="bannertoggler" class="btn button-transparent">Read More</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- about -->
  <div class="home-about">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('frontend/assets/images/01.png') }}" alt="1" class="w-100 img-fluid">
        </div>
        <div class="col-md-6">
          <div class="about-us-text">
            <div class="numbered-heading-f">
              <div class="number">
                <h2>01</h2>
              </div>
              <div class="text">
                <h5>About Us</h5>
                <h4>Who We Are</h4>
              </div>
            </div>

            <p class="description">
              We are Arabism Land for Touring Co.</p>

            <p class="description">
              Registered <span id="whoDot">...</span> <span id="whoText" class="d-none">in the Kingdom of Saudi Arabia
                and
                licensed
                from the ministry
                of tourism.

                We provide domestic touring services in the Kingdom of Saudi
                Arabia.</span> </p>

            <div class="button pt-5">
              <button id="whoButton" class="button-black btn">Read More</button>
            </div>
          </div>
        </div>
      </div>

      <!-- goal -->
    </div>
    <div class="goal">
      <div class="container">
        <img src="{{ asset('frontend/assets/images/1.png') }}" alt="a" class="line1 img-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="g-text">
              <h6>Our Goals</h6>
              <ul>
                <li>Organize suitable tours and special activities.</li>
                <li>Providing <span id="gDot">...</span><span id="GT2" class="d-none">unforgettable moments and rich
                    experience.</span></li>
                <span id="goalText" class="d-none">
                  <li>Deliver high quality service.</li>
                  <li>Customer’s complete satisfaction.</li>
                </span>
              </ul>
              <div class="button pt-5">
                <div id="goalButton" class="button-black btn">Read More</div>
              </div>
            </div>

          </div>

          <div class="col-md-6">
            <img src="{{ asset('frontend/assets/images/02.png') }}" alt="1" class="w-100 img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- our services -->
  <div class="our-service">
    <img src="{{ asset('frontend/assets/images/2.png') }}" alt="q" class="line2 img-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('frontend/assets/images/03.png') }}" alt="1" class="w-100 img-fluid">
        </div>
        <div class="col-md-6">
          <div class="service-text">
            <div class="numbered-heading">
              <div class="number">
                <h2>02</h2>
              </div>
              <div class="text">
                <h2>Our Services</h2>
              </div>
            </div>

            <p class="description">
              we are offering our services in the kingdom of saudi arabia, which includes the following <span
                id="serDot">...</span>
            </p>

            <div id="serviceText" class="d-none">
              <ul>
                <li class="first">Organize tours and trips.</li>
                <li class="second">Offering full tourist guided services.</li>
                <li class="third">Car rental with driver.</li>
              </ul>
              <ul>
                <li class="fourth">Organize special and business tours.</li>
              </ul>
              <p class="description">Arabism Land handles and takes care of every aspect of all tours and trips from the
                planning through the end of the journey.</p>
            </div>

            <div class="button pt-5">
              <button id="serviceButton" class="button-black btn">Read More</button>
              <a href="#contactUs" class="button-transparent btn">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- our-mission -->
  <div class="our-mission">
    <img src="{{ asset('frontend/assets/images/3.png') }}" alt="s" class="line3 img-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-6 h-100">
          <div class="main-mission-text">
            <div class="numbered-heading">
              <div class="number">
                <h2>03</h2>
              </div>
              <div class="text">
                <h2>Our Mission</h2>
              </div>
            </div>

            <p class="description">
              We transform our passion, discoveries and experiences and deliver<span id="missionD">...</span><span
                id="missionT" class="d-none"> it to you into itineraries that will allow
                you to live delightful moments and enjoy an extraordinary experience.</span>
            </p>
            <div class="button pt-5">
              <button class="button-black btn" id="missionB">Read More</button>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <img src="{{ asset('frontend/assets/images/04.png') }}" alt="1" class="w-100 img-fluid">
        </div>
      </div>
    </div>

    <!-- soudi arabia -->
    <div class="soudi">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
          </div>
          <div class="col-md-6">
            <div id="mission-text">
              <div class="numbered-heading">
                <div class="number">
                  <h2>04</h2>
                </div>
                <div class="text">
                  <h2>Saudi Arabia</h2>
                </div>
              </div>

              <p class="description">
                Discover the beauty of Saudi Arabia <span id="saudiDot">...</span> <span id="sdt1" class="d-none">and
                  with
                  its own of
                  present and inherited
                  heritage.</span>
              </p>

              <p id="saudiT" class="description d-none">Saudi Arabia has so many attractions and sites each different
                and
                unique, for that we
                cover a wide range of the country.
                Everything you need to know about Saudi Arabia is between your hands.
              </p>

              <div class="button pt-5">
                <button id="saudiB" class="button-black btn">Read More</button>
                <button class="button-transparent btn">Find More</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- feed -->
  <div class="feed">
    <img src="{{ asset('frontend/assets/images/arr.png') }}" alt="a" class="img-fluid w-100">
    <div class="container">
      <h2 class="text-center heading">Feeds</h2>
      <div class="left">
        <div class="swiper teamSwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a href="#">
                <div class="image">
                  <img src="{{ asset('frontend/assets/images/22.png') }}" alt="team-member" class="w-100 img-fluid">
                </div>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#">
                <div class="image">
                  <img src="{{ asset('frontend/assets/images/33.png') }}" alt="team-member" class="w-100 img-fluid">
                </div>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#">
                <div class="image">
                  <img src="{{ asset('frontend/assets/images/44.png') }}" alt="team-member" class="w-100 img-fluid">
                </div>
              </a>
            </div>
            <div class="swiper-slide">
              <div class="image">
                <img src="{{ asset('frontend/assets/images/22.png') }}" alt="team-member" class="w-100 img-fluid">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="image">
                <img src="{{ asset('frontend/assets/images/33.png') }}" alt="team-member" class="w-100 img-fluid">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="image">
                <img src="{{ asset('frontend/assets/images/44.png') }}" alt="team-member" class="w-100 img-fluid">
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </div>
    <img src="{{ asset('frontend/assets/images/arr.png') }}" alt="a" class="img-fluid w-100">

  </div>

  <!-- newsletter -->
  <div class="newsletter" id="subscribe">
    <div class="wrapper text-center">
      <h3 class="heading">Newsletter</h3>
      <p>Sign up now for upcoming tours, trips,
        personalized itineraries, and exclusive offers</p>
      <form action="">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" required
            aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="input-group-text btn" id="basic-addon2">Subscribe</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <img src="{{ asset('frontend/assets/images/arr.png') }}" alt="a" class="img-fluid w-100">


  <!-- get in touch -->
  <div class="get-in-touch" id="contactUs">
    <div class="container">
      <div class="numbered-heading-f">
        <div class="number">
          <h2>04</h2>
        </div>
        <div class="text">
          <h5>CONTACT US</h5>
          <h4>Get Touch in</h4>
        </div>
      </div>
      <div class="row  gy-4">
        <div class="col-md-6">
          <div>
            <h3 class="heading">Address</h3>
          </div>
          <div class="d-flex pb-lg-4 pb-3">
            <div class="flex-shrink-0 image">
              <img src="{{ asset('frontend/assets/images/call.png') }}" alt="q" class="img-fluid">
            </div>
            <div class="text">
              <p class="title">PHONE </p>
              <a href="tel:+966112385488" class="info">+966112385488</a>
            </div>
          </div>
          <div class="d-flex pb-lg-4 pb-3">
            <div class="flex-shrink-0 image">
              <img src="assets/images/mob.png" alt="q" class="img-fluid">
            </div>
            <div class="text">
              <p class="title">PHONE </p>
              <a class="info" href="tel:+966112385488">+966112385488</a>
            </div>
          </div>
          <div class="d-flex pb-lg-4 pb-3">
            <div class="flex-shrink-0 image">
              <img src="{{ asset('frontend/assets/images/env.png') }}" alt="q" class="img-fluid">
            </div>
            <div class="text">
              <p class="title">EMAIL
              </p>
              <a href="mailto:info@marcc.com.au" class="info">info@marcc.com.au</a>
            </div>
          </div>
          <div class="d-flex pb-lg-4 pb-3">
            <div class="flex-shrink-0 image">
              <img src="{{ asset('frontend/assets/images/loca.png') }}" alt="q" class="img-fluid">
            </div>
            <div class="text">
              <p class="title">Address
              </p>
              <a href="https://goo.gl/maps/pZ97TtqLfD3cPY7FA" class="info">3610 Prince Mohammed Bin Salman Bin Abdulaziz
                Rd.,Hitteen Dist. <br>
                Riyadh 13516 - 6476 <br>
                Kingdom Of Saudi Arabia</a>
            </div>
          </div>
          <div class="d-flex pb-lg-4 pb-3">
            <div class="flex-shrink-0 image">
              <img src="assets/images/loca.png" alt="q" class="img-fluid">
            </div>
            <div class="text">
              <p class="title">Short Address
              </p>
              <p class="info">RRDH3610</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <h3 class="heading">Contact</h3>
          <form action="">
            <div class="mb-3">
              <input class="custom-input" type="text" placeholder="Name*" required>
            </div>
            <div class="mb-3">
              <input class="custom-input" type="email" placeholder="Email" required>
            </div>
            <div class="mb-3">
              <input class="custom-input" type="number" placeholder="Phone Number*" required>
            </div>
            <div class="mb-3">
              <input class="custom-input" type="text" placeholder="Subject" required>
            </div>
            <div class="form-floating mb-3">
              <textarea class="form-control custom-input" placeholder="Leave a comment here" id="floatingTextarea2"
                style="height: 130px" required></textarea>
              <label for="floatingTextarea2">Your message</label>
            </div>

            <button class="button-transparent btn">SEND</button>
          </form>
        </div>
      </div>


      <div class="time">
        <div class="row gy-3">
          <div class="col-md-6">
            <div class="d-flex">
              <div class="flex-shrink-0 me-3">
                <img src="{{ asset('frontend/assets/images/clock.png') }}" alt="q" class="img-fluid">
              </div>
              <div>
                <h6>work hours</h6>
                <p> 10AM - 19:30PM Sunday to Wednesday </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex">
              <div class="flex-shrink-0 me-3">
                <img src="{{ asset('frontend/assets/images/clock.png') }}" alt="q" class="img-fluid d-block d-md-none">
              </div>
              <div>
                <h6>work hours</h6>
                <p>7AM - 16:30PM Friday and Saturday</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
