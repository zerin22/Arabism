<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Login</title>
  <link rel='shortcut icon' href="{{ asset('backend') }}/assets/images/log.png" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/style.css">
</head>

<body>
  <main>
    <!-- all codes for ===***?***=== starts from here -->
    <section class="login">
      <div class="login-form pb-5">
        <img src="{{ asset('backend') }}/assets/images/login/logo.png" alt="s" class="img-fluid brand-logo">

        <form class="input-form" action="{{ route('admin.login') }}" method="post">
            @csrf
            <div class="input-group mb-35">
            <input type="email" name="email" class="form-control  input-custom" placeholder="Email">
            @error('email')
                <span><strong>{{ $message }}</strong></span>
            @enderror
          </div>

          <div class="input-group mb-65">
            <input type="password" name="password" class="form-control  input-custom" placeholder="Password">
            @error('email')
                <span><strong>{{ $message }}</strong></span>
            @enderror
          </div>

          <input class="black-button" type="submit" value="Login">
        </form>
      </div>
    </section>
    <!-- all codes for ===***?***=== ended -->
  </main>
</body>

</html>
