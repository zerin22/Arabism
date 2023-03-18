<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Arabism | Sign in </title>
  <link rel='shortcut icon' href='{{ asset('frontend') }}/assets/images/log.png' type='image/x-icon'>

  <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendor/Swiper-slider/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <!-- font css -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <!-- custom css -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
</head>

<body>
  <div class="header">
    <img src="{{ asset('frontend') }}/assets/images/arr.png" alt="a" class="img-fluid w-100">
    <div class="container">
      <nav class="navbar navbar-4 navbar-expand-lg bg-body-tertiary">

        <a class="navbar-brand" href="index.html">
          <img src="{{ asset('frontend') }}/assets/images/headerLogo.svg" alt="logo" class="img-fluid brand-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="about-us.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Our Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact-us.html">Contact Us</a>
            </li>
          </ul>
          <div class="ms-auto">
            <button class="btn btn-primary auth-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign
              in</button>
          </div>
        </div>

      </nav>
    </div>
    <img src="{{ asset('frontend') }}/assets/images/arr.png" alt="a" class="img-fluid w-100">
  </div>


  <!-- sign in -->
  <div class="sign-in pt-3 pt-md-5">
    <div class="container">
      <div class="heading text-center pb-5">Sign up</div>

      <div class="form-wrapper">
        <form method="post" action="{{ route('register') }}">
        @csrf

          <div class="mb-3">
            <input type="text" name="name" id="name" class="input-customed-wt" placeholder="Name*" required>
          </div>

          <div class="mb-3">
            <input type="text" name="sur_name" class="input-customed-wt" placeholder="Sure name" required>
          </div>

          <div class="mb-3">
            <select name="gender" class="input-customed-wt">
              <option value="">Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>

          <div class="mb-3">
            <div class="form-floating mb-3">
              <input type="date" name="date_of_birth" class="form-control input-customed-wt" id="floatingInput"
                placeholder="name@example.com">
              <label for="floatingInput">Date of Birth</label>
            </div>
          </div>

          <div class="mb-3">
            <input type="text" name="city" class="input-customed-wt" placeholder="City" required>
          </div>

          <div class="mb-3">
            <div class="row">
              <div class="col-3">
                <input type="number" name="country_code" class="input-customed-wt" placeholder="Country Code" required>
              </div>
              <div class="col-9">
                <input type="number" name="phone" class="input-customed-wt" placeholder="Phone number *" required>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <input type="email" name="email" id="email" class="input-customed-wt" placeholder="Email *" required>
          </div>

          <div class="mb-3">
            <input type="password" name="password" id="password" class="input-customed-wt" placeholder="Password *" required>
          </div>

          <div class="mb-3">
            <input type="password" id="password_confirmation" class="input-customed-wt" name="password_confirmation" placeholder="Confirm password *" required>
          </div>

          <div class="mb-3">
            <div class="row">
              <div class="col-md-6">
                <input type="checkbox" class="" required>
                <span>Agree on privacy of use</span>
              </div>
              <div class="col-md-6">
                <p>You already have account , <a data-bs-toggle="modal" href="#exampleModal">Login</a> </p>
              </div>
            </div>
          </div>

          <div class="my-3 text-center my-lg-5">
            <button type="submit" class="btn px-5 button-black">Sign up</button>
          </div>
        </form>
      </div>
    </div>

    <img src="{{ asset('frontend') }}/assets/images/arr.png" alt="a" class="img-fluid w-100">


    <div class="footer">
      <div class="container">
        <div class="row pb-5">
          <div class="col-lg-6 col-xl-4">
            <img src="{{ asset('frontend') }}/assets/images/bLogo.svg" alt="a" class="img-fluid">
            <ul class="social-link">
              <li><a href="https://www.instagram.com/arabisml/"><img src="assets/images/soc/insta.png" alt="q"
                    class="img-fluid"></a></li>
              <li><a href="https://twitter.com/arabisml"><img src="assets/images/soc/twit.png" alt="q"
                    class="img-fluid"></a></li>
              <li><a href="https://www.facebook.com/arabisml"><img src="assets/images/soc/fb.png" alt="q"
                    class="img-fluid"></a></li>
              <li><a href="https://www.snapchat.com/add/arabisml?share_id=MTREQzUx&locale=en_US"><img
                    src="{{ asset('frontend') }}/assets/images/soc/bell.png" alt="q" class="img-fluid"></a></li>
            </ul>
          </div>
          <div class="col-md-6 col-xl-2 pt-4 mt-2">
            <h5 class="link-header">General</h5>
            <ul class="n-links">
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Our services</a></li>
              <li><a href="#">Contact us</a></li>
            </ul>
          </div>
          <div class="col-md-6 col-xl-3 pt-4 mt-2">
            <h5 class="link-header">Explore</h5>
            <ul class="n-links">
              <li><a href="#">Contact information</a></li>
              <li><a href="#">Newsletter</a></li>
              <li><a href="#">Offers</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="f-bottom">
        <img src="{{ asset('frontend') }}/assets/images/bg3.png" alt="a" class="w-100 img-fluid">
        <div class="fv">
          <p>All rights reserved to <a href="#">www.arabisml.com</a> @ 2023 <strong><a
                href="privacy-policy.html">privacy
                policy</a></strong>
          </p>
        </div>
      </div>
    </div>
  </div>





  <!-- --------------- -->
  <!-- login modal -->
  <div class="modal fade login-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="btn bg-transparent text-black border-0" data-bs-dismiss="modal">X</button>

          <div>
            <h2 class="heading text-center">Login</h2>
            <form action="{{ route('login') }}" method="post">
                @csrf
              <div class="mb-3">
                <input type="email" name="email" class="input-customed-wt" placeholder="Email" id="email">
                @error('email')
                    <span><strong>{{ $message }}</strong></span>
                @enderror
              </div>
              <div class="mb-3">
                <input type="password" id="password" name="password" class="input-customed-wt" placeholder="Password" >
              </div>
              <div class="text-center pt-2">
                <button class="btn button-black" type="submit">Login</button>
              </div>
            </form>
            <div class="text-center pb-5 pt-5 ">
                <p>You don't have account , <a href="{{ route('user.signup') }}">Sign up.</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- all scripts are starts from here -->
<script src="{{ asset('frontend/assets/vendor/Swiper-slider/js/swiper-bundle.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
  <!-- .........script ended............. -->
</body>

</html>
