<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Arabism</title>
  <link rel='shortcut icon' href='{{ asset('frontend/assets/images/log.png') }}' type='image/x-icon'>

  <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/Swiper-slider/css/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <!-- font css -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <!-- custom css -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

</head>

<body>
  <div class="nav-with-banner">
    <div class="container">
      <!-- navbar -->
      <nav class="navbar navbar-4 navbar-expand-lg bg-body-tertiary">

        <a class="navbar-brand" href="index.html">
          <img src="{{ asset('frontend/assets/images/headerLogo.svg') }}" alt="logo" class="img-fluid brand-logo">
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
          @auth
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <div class="ms-auto">
                <button class="btn btn-primary auth-btn" type="submit">Logout</button>
            </div>
            </form>
          @else
            <div class="ms-auto">
                <button class="btn btn-primary auth-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign
                  in</button>
              </div>
          @endauth

        </div>

      </nav>
