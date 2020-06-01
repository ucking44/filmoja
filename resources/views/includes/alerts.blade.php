@section('scripts')

@if(session()->has('success'))

<script>
        swal("One more stop!", "{!! session()->get('success') !!}", "success");
</script>

    @endif

    @if(session()->has('email'))
        {{-- <div class="alert alert-danger">
            {!! session()->get('error') !!}
        </div> --}}
        <script>

swal({
  title: "You are not yet activated",
  text: "click OK to resend code",
  type: "error",
  showCancelButton: true,
  closeOnConfirm: false,
  showLoaderOnConfirm: true
}, function () {
  setTimeout(function () {

      $.get('/resend/code', {email: "{!! session()->get('email') !!}"});

    swal("The email has been sent!");
  }, 2000);
});

        </script>
    @endif

    @stop
