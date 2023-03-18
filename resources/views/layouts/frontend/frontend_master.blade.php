@include('layouts.frontend.inc.header')

@yield('content')

   @include('layouts.frontend.inc.footer')
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

  @include('layouts.frontend.inc.footer_js')
