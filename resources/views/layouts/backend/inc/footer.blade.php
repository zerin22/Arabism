 <!-- all scripts are starts from here -->
 <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
 <script src="{{ asset('backend') }}/assets/js/custom.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

 @yield('scripts')

 
<script>

    @if (Session::has('success'))
        <script>
            toastr.success("{!! Session::get('success') !!}")
        </script>
    @endif

    @if (Session::has('fail'))
        <script>
            toastr.error("{!! Session::get('fail') !!}")
        </script>
    @endif

</script>

 <!-- .........script ended............. -->
