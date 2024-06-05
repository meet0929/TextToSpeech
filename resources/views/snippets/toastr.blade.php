<script>
    window.addEventListener('load', function() {
        @if (Session::has('toastr-info'))
            @foreach (Session::pull('toastr-info') as $message)
              toastr.info('{{ $message }}');
            @endforeach
        @endif

        @if (Session::has('toastr-warning'))
            @foreach (Session::pull('toastr-warning') as $message)
              toastr.info('{{ $message }}');
            @endforeach
        @endif

        @if (Session::has('toastr-success'))
            @foreach (Session::pull('toastr-success') as $message)
              toastr.info('{{ $message }}');
            @endforeach
        @endif

        @if (Session::has('toastr-error'))
            @foreach (Session::pull('toastr-error') as $message)
              @if($message=='These credentials do not match our records.')
               $message = 'Please sign up first in application';
            @endif
                toastr.error('{{ $message }}');
            @endforeach
        @endif

        @if(count($errors) > 0)
            @foreach($errors->all() as $error)

            @if($error=='These credentials do not match our records.')
               $error = 'Please sign up first in application';
            @endif
                toastr.error("{{ $error }}");
            @endforeach
      @endif
    });
</script>