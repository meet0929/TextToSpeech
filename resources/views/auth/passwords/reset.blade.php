@extends('common')

@section('content')

   <div class="modal fade" id="SetNewPassword" tabindex="-1" aria-labelledby="SetNewPasswordLabel"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div>
                        <button type="button" class="btn-close float-end mt-3 me-3" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="p-4">
                        <p class="f24 mb-2"><b>Set New Password</b></p>
                        <form method="post" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <input id="email" type="hidden" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                <div class="form-floating mb-3">
                                    <input type="password" name="password" class="form-control" id="floatingInput3" placeholder="type here">
                                    <label for="floatingInput3">Set New Password </label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" name="password_confirmation" class="form-control" id="floatingInput4" placeholder="type here">
                                    <label for="floatingInput4">Confirm Password</label>
                                </div>
                                <button type="submit" class="btn btn-secondary me-3 p-2 px-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('load', function() {
             $('#SetNewPassword').modal('show');
            });
       
    </script>
@endsection

