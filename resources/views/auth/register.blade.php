<!doctype html>
<html lang="en" data-bs-theme=light>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Text To Speech</title>
    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/images/favicon.svg') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gantari:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite(['resources/css/style.css','resources/css/bootstrap5-3-min.css'])

  @include('snippets.toastr')
</head>

<body>

 <div class="container-fluid">
        <div class="row">
               
            <div class="col-md-6 col-12 pb-4 signup-img-h">
                <div>
                    <a href="{{url()->previous()}}" class="btn mb-5" aria-label="back to homepage"><svg width="35" height="35"
                            viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="17.5" cy="17.5" r="17.5" fill="#CF69FF" fill-opacity="0.14" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M18.2287 10.5955C18.6307 10.9975 18.6307 11.6493 18.2287 12.0513L13.8096 16.4704H24.7067C25.2752 16.4704 25.7361 16.9313 25.7361 17.4998C25.7361 18.0684 25.2752 18.5292 24.7067 18.5292H13.8096L18.2287 22.9484C18.6307 23.3504 18.6307 24.0022 18.2287 24.4042C17.8267 24.8062 17.1749 24.8062 16.7729 24.4042L10.5964 18.2277C10.1944 17.8257 10.1944 17.1739 10.5964 16.7719L16.7729 10.5955C17.1749 10.1934 17.8267 10.1934 18.2287 10.5955Z"
                                fill="#8E8FA6" />
                        </svg>
                    </a>
                </div>
                <img src="{{ Vite::asset('resources/images/signup-img.png') }}" width="546" height="500" alt="sign up page image"
                    class="img-fluid d-block mx-auto">
            </div>
            <div class="col-md-6 col-xl-4 col-12 px-3 py-5 p-sm-5 ">
              <!-- <div style="float:right">  <button id="lightSwitch" class="d-none d-lg-block btn mx-3 switch-icon" aria-label="light-dark-button"></button></div> -->

                <p class="mt-md-5"><span class="ytext-ybg p-2 px-3">WELCOME!</span> </p>
                <p class="heading2">SIGN UP</p>
                <form method="post" action="{{ route('register') }}">
                    @csrf
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                  
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                 
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox"  name="product_updates" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        I want to receive product updates.
                    </label>
                  </div>
                <div class="d-flex align-items-center flex-wrap mb-3">
                    <button class="btn btn-secondary me-3 p-2 px-3" type="submit">Sign Up</button>
                    <p class="mb-0">OR</p>
                </div>
</form>
                <div class="d-flex align-items-center flex-wrap mb-3">
                    <a href="{{route('google.redirect')}}" class="btn btn-white me-3 mb-2"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                        <path d="M18.1726 8.368H17.5013V8.33342H10.0013V11.6667H14.7109C14.0238 13.6072 12.1776 15.0001 10.0013 15.0001C7.24005 15.0001 5.0013 12.7613 5.0013 10.0001C5.0013 7.23883 7.24005 5.00008 10.0013 5.00008C11.2759 5.00008 12.4355 5.48091 13.3184 6.26633L15.6755 3.90925C14.1871 2.52216 12.1963 1.66675 10.0013 1.66675C5.39922 1.66675 1.66797 5.398 1.66797 10.0001C1.66797 14.6022 5.39922 18.3334 10.0013 18.3334C14.6034 18.3334 18.3346 14.6022 18.3346 10.0001C18.3346 9.44133 18.2771 8.89592 18.1726 8.368Z" fill="#FFC107"/>
                        <path d="M2.62891 6.12133L5.36682 8.12925C6.10766 6.29508 7.90182 5.00008 10.0014 5.00008C11.276 5.00008 12.4356 5.48091 13.3185 6.26633L15.6756 3.90925C14.1872 2.52216 12.1964 1.66675 10.0014 1.66675C6.80057 1.66675 4.02474 3.47383 2.62891 6.12133Z" fill="#FF3D00"/>
                        <path d="M10.0008 18.3334C12.1533 18.3334 14.1091 17.5096 15.5879 16.17L13.0087 13.9875C12.1439 14.6452 11.0872 15.0009 10.0008 15C7.83328 15 5.99286 13.618 5.29953 11.6892L2.58203 13.783C3.9612 16.4817 6.76203 18.3334 10.0008 18.3334Z" fill="#4CAF50"/>
                        <path d="M18.1713 8.36796H17.5V8.33337H10V11.6667H14.7096C14.3809 12.5902 13.7889 13.3972 13.0067 13.988L13.0079 13.9871L15.5871 16.1696C15.4046 16.3355 18.3333 14.1667 18.3333 10C18.3333 9.44129 18.2758 8.89587 18.1713 8.36796Z" fill="#1976D2"/>
                        </svg>
                        Google</a>
                    <!-- <a href="{{route('auth.facebook')}}" class="btn btn-white me-3 mb-2"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                        <path d="M20 10C20 4.47719 15.5228 0 10 0C4.47719 0 0 4.47719 0 10C0 14.9913 3.65687 19.1284 8.4375 19.8785V12.8906H5.89844V10H8.4375V7.79688C8.4375 5.29063 9.93047 3.90625 12.2147 3.90625C13.3088 3.90625 14.4531 4.10156 14.4531 4.10156V6.5625H13.1922C11.9499 6.5625 11.5625 7.33336 11.5625 8.12422V10H14.3359L13.8926 12.8906H11.5625V19.8785C16.3431 19.1284 20 14.9913 20 10Z" fill="#1877F2"/>
                        <path d="M13.8926 12.8906L14.3359 10H11.5625V8.12422C11.5625 7.33328 11.9499 6.5625 13.1922 6.5625H14.4531V4.10156C14.4531 4.10156 13.3088 3.90625 12.2146 3.90625C9.93047 3.90625 8.4375 5.29063 8.4375 7.79688V10H5.89844V12.8906H8.4375V19.8785C8.95439 19.9595 9.4768 20.0001 10 20C10.5232 20.0002 11.0456 19.9595 11.5625 19.8785V12.8906H13.8926Z" fill="white"/>
                        </svg>
                         Facebook</a> -->
                        
                </div>
                <p>By signing up, you are indicating that you accept our 
                    <a href="{{route('terms')}}">Terms and Conditions</a> and <a href="{{route('policy')}}">Privacy Policy</a>.</p>
                <p>Already Registered? <a href="" aria-label="user-option" data-bs-toggle="modal"
                        data-bs-target="#LoginModal"><b>Login</b></a></p>
            </div>
        </div>

    </div>

<Footer>
        <div class="container mt-footer">
 <div class="row light-bg p-3 my-4 d-flex align-items-center m-1">
    <div class="col-xl-2 col-12 mb-2 mb-xl-0">
                    <a class="navbar-brand mx-auto d-block img-fluid" href="{{route('home')}}" aria-label="text to speech logo"><svg width="210" height="26" viewBox="0 0 210 26" fill="none" xmlns="http://www.w3.org/2000/svg" class="img-fluid">
                            <path d="M14.36 3.7C14.7067 3.7 15 3.82667 15.24 4.08C15.4933 4.33333 15.62 4.63333 15.62 4.98C15.62 5.32667 15.4933 5.62667 15.24 5.88C15 6.12 14.7067 6.24 14.36 6.24H9.38V16.7C9.38 17.06 9.25333 17.3667 9 17.62C8.76 17.86 8.46667 17.98 8.12 17.98C7.77333 17.98 7.47333 17.86 7.22 17.62C6.96667 17.3667 6.84 17.06 6.84 16.7V6.24H1.88C1.53333 6.24 1.23333 6.12 0.98 5.88C0.726667 5.62667 0.6 5.32667 0.6 4.98C0.6 4.63333 0.726667 4.33333 0.98 4.08C1.23333 3.82667 1.53333 3.7 1.88 3.7H14.36ZM31.3509 3.7C31.6976 3.7 31.9976 3.82667 32.2509 4.08C32.5043 4.33333 32.6309 4.63333 32.6309 4.98C32.6309 5.32667 32.5043 5.62667 32.2509 5.88C31.9976 6.12 31.6976 6.24 31.3509 6.24H18.8709C18.5243 6.24 18.2243 6.12 17.9709 5.88C17.7309 5.62667 17.6109 5.32667 17.6109 4.98C17.6109 4.63333 17.7309 4.33333 17.9709 4.08C18.2243 3.82667 18.5243 3.7 18.8709 3.7H31.3509ZM31.3509 15.44C31.6976 15.44 31.9976 15.5667 32.2509 15.82C32.5043 16.06 32.6309 16.3533 32.6309 16.7C32.6309 17.06 32.5043 17.3667 32.2509 17.62C31.9976 17.86 31.6976 17.98 31.3509 17.98H18.8709C18.5243 17.98 18.2243 17.86 17.9709 17.62C17.7309 17.3667 17.6109 17.06 17.6109 16.7C17.6109 16.3533 17.7309 16.06 17.9709 15.82C18.2243 15.5667 18.5243 15.44 18.8709 15.44H31.3509ZM31.3509 9.58C31.6976 9.58 31.9976 9.70667 32.2509 9.96C32.5043 10.2 32.6309 10.4933 32.6309 10.84C32.6309 11.1867 32.5043 11.4867 32.2509 11.74C31.9976 11.9933 31.6976 12.12 31.3509 12.12H18.8709C18.5243 12.12 18.2243 11.9933 17.9709 11.74C17.7309 11.4867 17.6109 11.1867 17.6109 10.84C17.6109 10.4933 17.7309 10.2 17.9709 9.96C18.2243 9.70667 18.5243 9.58 18.8709 9.58H31.3509ZM48.1728 8.76C47.9461 9.18667 47.6795 9.57333 47.3728 9.92C47.0795 10.2667 46.7461 10.5733 46.3728 10.84C47.1195 11.3867 47.7195 12.08 48.1728 12.92L49.9128 16.1C50.0728 16.4067 50.0995 16.7333 49.9928 17.08C49.8995 17.4133 49.6995 17.66 49.3928 17.82C49.2195 17.9267 49.0195 17.98 48.7928 17.98C48.5661 17.98 48.3461 17.9267 48.1328 17.82C47.9328 17.7 47.7795 17.5333 47.6728 17.32L45.9528 14.14C45.6061 13.5133 45.1328 13.02 44.5328 12.66C43.9328 12.3 43.2728 12.12 42.5528 12.12C41.8328 12.12 41.1728 12.3 40.5728 12.66C39.9728 13.02 39.4995 13.5133 39.1528 14.14L37.4328 17.32C37.3128 17.5333 37.1528 17.7 36.9528 17.82C36.7528 17.9267 36.5395 17.98 36.3128 17.98C36.2061 17.98 36.0995 17.9733 35.9928 17.96C35.8995 17.9333 35.8061 17.8867 35.7128 17.82C35.4061 17.66 35.1995 17.4133 35.0928 17.08C34.9861 16.7333 35.0195 16.4067 35.1928 16.1L36.9128 12.92C37.3795 12.08 37.9795 11.3867 38.7128 10.84C37.9661 10.28 37.3661 9.58667 36.9128 8.76L35.1928 5.58C35.0195 5.27333 34.9861 4.95333 35.0928 4.62C35.1995 4.28667 35.4061 4.03333 35.7128 3.86C36.0195 3.68667 36.3395 3.65333 36.6728 3.76C37.0061 3.86667 37.2595 4.07333 37.4328 4.38L39.1528 7.54C39.4995 8.18 39.9728 8.68 40.5728 9.04C41.1728 9.4 41.8328 9.58 42.5528 9.58C43.2728 9.58 43.9328 9.4 44.5328 9.04C45.1328 8.68 45.6061 8.18 45.9528 7.54L47.6728 4.38C47.8461 4.07333 48.0995 3.86667 48.4328 3.76C48.7661 3.65333 49.0861 3.68667 49.3928 3.86C49.6995 4.03333 49.8995 4.28667 49.9928 4.62C50.0995 4.95333 50.0728 5.27333 49.9128 5.58L48.1728 8.76ZM65.8248 3.7C66.1715 3.7 66.4648 3.82667 66.7048 4.08C66.9582 4.33333 67.0848 4.63333 67.0848 4.98C67.0848 5.32667 66.9582 5.62667 66.7048 5.88C66.4648 6.12 66.1715 6.24 65.8248 6.24H60.8448V16.7C60.8448 17.06 60.7182 17.3667 60.4648 17.62C60.2248 17.86 59.9315 17.98 59.5848 17.98C59.2382 17.98 58.9382 17.86 58.6848 17.62C58.4315 17.3667 58.3048 17.06 58.3048 16.7V6.24H53.3448C52.9982 6.24 52.6982 6.12 52.4448 5.88C52.1915 5.62667 52.0648 5.32667 52.0648 4.98C52.0648 4.63333 52.1915 4.33333 52.4448 4.08C52.6982 3.82667 52.9982 3.7 53.3448 3.7H65.8248ZM117.396 9.58C117.969 9.58 118.509 9.69333 119.016 9.92C119.536 10.1333 119.982 10.4333 120.356 10.82C120.742 11.1933 121.042 11.64 121.256 12.16C121.482 12.6667 121.596 13.2067 121.596 13.78C121.596 14.3667 121.482 14.9133 121.256 15.42C121.042 15.9267 120.742 16.3733 120.356 16.76C119.982 17.1333 119.536 17.4333 119.016 17.66C118.509 17.8733 117.969 17.98 117.396 17.98H108.696C108.349 17.98 108.049 17.86 107.796 17.62C107.542 17.3667 107.416 17.06 107.416 16.7C107.416 16.3533 107.542 16.06 107.796 15.82C108.049 15.5667 108.349 15.44 108.696 15.44H117.396C117.862 15.44 118.256 15.28 118.576 14.96C118.896 14.64 119.056 14.2467 119.056 13.78C119.056 13.3133 118.896 12.92 118.576 12.6C118.256 12.28 117.862 12.12 117.396 12.12H110.776C110.189 12.12 109.642 12.0133 109.136 11.8C108.629 11.5733 108.182 11.2733 107.796 10.9C107.422 10.5133 107.122 10.0667 106.896 9.56C106.682 9.04 106.576 8.49333 106.576 7.92C106.576 7.34667 106.682 6.80667 106.896 6.3C107.122 5.78 107.422 5.32667 107.796 4.94C108.182 4.55333 108.629 4.25333 109.136 4.04C109.642 3.81333 110.189 3.7 110.776 3.7H119.476C119.822 3.7 120.122 3.82667 120.376 4.08C120.629 4.33333 120.756 4.63333 120.756 4.98C120.756 5.32667 120.629 5.62667 120.376 5.88C120.122 6.12 119.822 6.24 119.476 6.24H110.776C110.309 6.24 109.916 6.40667 109.596 6.74C109.276 7.06 109.116 7.45333 109.116 7.92C109.116 8.37333 109.276 8.76667 109.596 9.1C109.916 9.42 110.309 9.58 110.776 9.58H117.396ZM137.598 5.12C138.544 6.06667 139.018 7.20667 139.018 8.54C139.018 9.87333 138.544 11.0133 137.598 11.96C137.144 12.4133 136.624 12.7667 136.038 13.02C135.451 13.26 134.831 13.38 134.178 13.38H126.538V16.7C126.538 17.06 126.411 17.3667 126.158 17.62C125.918 17.86 125.624 17.98 125.278 17.98C124.918 17.98 124.611 17.86 124.358 17.62C124.118 17.3667 123.998 17.06 123.998 16.7V12.1C123.998 11.7533 124.118 11.4533 124.358 11.2C124.611 10.9467 124.918 10.82 125.278 10.82H134.178C134.498 10.82 134.791 10.76 135.058 10.64C135.338 10.52 135.584 10.36 135.798 10.16C136.011 9.94667 136.178 9.70667 136.298 9.44C136.418 9.16 136.478 8.86 136.478 8.54C136.478 8.22 136.418 7.92667 136.298 7.66C136.178 7.38 136.011 7.13333 135.798 6.92C135.584 6.70667 135.338 6.54 135.058 6.42C134.791 6.3 134.498 6.24 134.178 6.24H125.278C124.918 6.24 124.611 6.12 124.358 5.88C124.118 5.62667 123.998 5.32667 123.998 4.98C123.998 4.63333 124.118 4.33333 124.358 4.08C124.611 3.82667 124.918 3.7 125.278 3.7H134.178C134.831 3.7 135.451 3.82667 136.038 4.08C136.624 4.32 137.144 4.66667 137.598 5.12ZM154.945 3.7C155.291 3.7 155.591 3.82667 155.845 4.08C156.098 4.33333 156.225 4.63333 156.225 4.98C156.225 5.32667 156.098 5.62667 155.845 5.88C155.591 6.12 155.291 6.24 154.945 6.24H142.465C142.118 6.24 141.818 6.12 141.565 5.88C141.325 5.62667 141.205 5.32667 141.205 4.98C141.205 4.63333 141.325 4.33333 141.565 4.08C141.818 3.82667 142.118 3.7 142.465 3.7H154.945ZM154.945 15.44C155.291 15.44 155.591 15.5667 155.845 15.82C156.098 16.06 156.225 16.3533 156.225 16.7C156.225 17.06 156.098 17.3667 155.845 17.62C155.591 17.86 155.291 17.98 154.945 17.98H142.465C142.118 17.98 141.818 17.86 141.565 17.62C141.325 17.3667 141.205 17.06 141.205 16.7C141.205 16.3533 141.325 16.06 141.565 15.82C141.818 15.5667 142.118 15.44 142.465 15.44H154.945ZM154.945 9.58C155.291 9.58 155.591 9.70667 155.845 9.96C156.098 10.2 156.225 10.4933 156.225 10.84C156.225 11.1867 156.098 11.4867 155.845 11.74C155.591 11.9933 155.291 12.12 154.945 12.12H142.465C142.118 12.12 141.818 11.9933 141.565 11.74C141.325 11.4867 141.205 11.1867 141.205 10.84C141.205 10.4933 141.325 10.2 141.565 9.96C141.818 9.70667 142.118 9.58 142.465 9.58H154.945ZM172.757 3.7C173.104 3.7 173.404 3.82667 173.657 4.08C173.911 4.33333 174.037 4.63333 174.037 4.98C174.037 5.32667 173.911 5.62667 173.657 5.88C173.404 6.12 173.104 6.24 172.757 6.24H160.277C159.931 6.24 159.631 6.12 159.377 5.88C159.137 5.62667 159.017 5.32667 159.017 4.98C159.017 4.63333 159.137 4.33333 159.377 4.08C159.631 3.82667 159.931 3.7 160.277 3.7H172.757ZM172.757 15.44C173.104 15.44 173.404 15.5667 173.657 15.82C173.911 16.06 174.037 16.3533 174.037 16.7C174.037 17.06 173.911 17.3667 173.657 17.62C173.404 17.86 173.104 17.98 172.757 17.98H160.277C159.931 17.98 159.631 17.86 159.377 17.62C159.137 17.3667 159.017 17.06 159.017 16.7C159.017 16.3533 159.137 16.06 159.377 15.82C159.631 15.5667 159.931 15.44 160.277 15.44H172.757ZM172.757 9.58C173.104 9.58 173.404 9.70667 173.657 9.96C173.911 10.2 174.037 10.4933 174.037 10.84C174.037 11.1867 173.911 11.4867 173.657 11.74C173.404 11.9933 173.104 12.12 172.757 12.12H160.277C159.931 12.12 159.631 11.9933 159.377 11.74C159.137 11.4867 159.017 11.1867 159.017 10.84C159.017 10.4933 159.137 10.2 159.377 9.96C159.631 9.70667 159.931 9.58 160.277 9.58H172.757ZM183.809 6.24C183.009 6.24 182.282 6.34667 181.629 6.56C180.989 6.77333 180.442 7.08 179.989 7.48C179.536 7.88 179.182 8.36667 178.929 8.94C178.689 9.5 178.569 10.1333 178.569 10.84C178.569 11.5467 178.689 12.1867 178.929 12.76C179.182 13.32 179.536 13.8 179.989 14.2C180.442 14.6 180.989 14.9067 181.629 15.12C182.282 15.3333 183.009 15.44 183.809 15.44H184.809C186.502 15.44 187.816 14.9933 188.749 14.1C189.016 13.86 189.322 13.74 189.669 13.74C190.016 13.74 190.309 13.8733 190.549 14.14C190.789 14.3933 190.909 14.6933 190.909 15.04C190.909 15.3867 190.776 15.6867 190.509 15.94C189.082 17.3 187.182 17.98 184.809 17.98H183.809C182.622 17.98 181.542 17.8067 180.569 17.46C179.609 17.1 178.776 16.58 178.069 15.9C177.402 15.2467 176.896 14.48 176.549 13.6C176.202 12.72 176.029 11.8 176.029 10.84C176.029 9.86667 176.202 8.95333 176.549 8.1C176.882 7.23333 177.389 6.46 178.069 5.78C178.776 5.1 179.609 4.58667 180.569 4.24C181.542 3.88 182.622 3.7 183.809 3.7H184.809C185.996 3.7 187.069 3.88 188.029 4.24C189.002 4.58667 189.842 5.1 190.549 5.78C190.802 6.03333 190.929 6.33333 190.929 6.68C190.929 7.02667 190.809 7.32667 190.569 7.58C190.329 7.83333 190.029 7.96667 189.669 7.98C189.322 7.98 189.022 7.85333 188.769 7.6C187.822 6.69333 186.502 6.24 184.809 6.24H183.809ZM207.289 3.7C207.636 3.7 207.929 3.82667 208.169 4.08C208.422 4.33333 208.549 4.63333 208.549 4.98V16.7C208.549 17.06 208.422 17.3667 208.169 17.62C207.929 17.86 207.636 17.98 207.289 17.98C206.942 17.98 206.642 17.86 206.389 17.62C206.136 17.3667 206.009 17.06 206.009 16.7V12.28H196.069V16.7C196.069 17.06 195.942 17.3667 195.689 17.62C195.449 17.86 195.156 17.98 194.809 17.98C194.462 17.98 194.162 17.86 193.909 17.62C193.656 17.3667 193.529 17.06 193.529 16.7V4.98C193.529 4.63333 193.656 4.33333 193.909 4.08C194.162 3.82667 194.462 3.7 194.809 3.7C195.156 3.7 195.449 3.82667 195.689 4.08C195.942 4.33333 196.069 4.63333 196.069 4.98V9.74H206.009V4.98C206.009 4.63333 206.136 4.33333 206.389 4.08C206.642 3.82667 206.942 3.7 207.289 3.7Z" fill="var(--bs-body-color)"></path>
                            <path d="M84.6 3.69995C83.1 4.5 83.1 5 83.1 6.23995H80.78V16.7C80.78 17.06 80.6533 17.3666 80.4 17.62C80.16 17.86 79.8667 17.98 79.52 17.98C79.1733 17.98 78.8733 17.86 78.62 17.62C78.3667 17.3666 78.24 17.06 78.24 16.7V6.23995H73.28C72.9333 6.23995 72.6333 6.11995 72.38 5.87995C72.1267 5.62662 72 5.32662 72 4.97995C72 4.63328 72.1267 4.33328 72.38 4.07995C72.6333 3.82662 72.9333 3.69995 73.28 3.69995H84.6Z" fill="#AD12F6"></path>
                            <path d="M101.522 9.11326C102.959 9.95181 102.959 12.0482 101.522 12.8867L89.8342 19.7049C88.3968 20.5434 86.6 19.4952 86.6 17.8181L86.6 4.18187C86.6 2.50477 88.3968 1.45658 89.8342 2.29513L101.522 9.11326Z" fill="#AD12F6"></path>
                            <path d="M91.4769 6.69589C92.9743 7.49772 92.9743 9.50228 91.4769 10.3041L86.9692 12.7178C85.4718 13.5196 83.6 12.5173 83.6 10.9137L83.6 6.08632C83.6 4.48266 85.4718 3.48038 86.9692 4.2822L91.4769 6.69589Z" fill="#FFAB00"></path>
                        </svg>
                    </a>
                </div>
                <div class="col-xl-7 col-12 d-lg-flex align-items-center mb-3 mb-xl-0" style="width:56%">
                    <p class="me-3 mb-0">2024 TexttoSpeech.ai © All rights reserved.</p>
                    <p class="d-flex align-items-center mb-0">
                        &nbsp;<a href="{{route('aboutus')}}" class="nav-link"> About</a>&nbsp; &nbsp; •&nbsp;
                        &nbsp; <a href="{{route('terms')}}" class="nav-link">Terms</a>&nbsp; &nbsp; •&nbsp; &nbsp; <a href="{{route('policy')}}"
                            class="nav-link">Privacy</a></p>
                </div>
                <div class="col-xl-3 col-12">
                    <svg width="167" height="26" viewBox="0 0 167 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="float-md-end">
                        <g id="social-icon">
                            <a href="https://www.facebook.com/texttospeechai" target="_blank">
                            <g id="fb">
                                <path id="Vector"
                                    d="M22.1 1.2998H3.89999C2.46999 1.2998 1.29999 2.4698 1.29999 3.8998V22.0998C1.29999 23.5311 2.46999 24.6998 3.89999 24.6998H13V15.5998H10.4V12.3823H13V9.7173C13 6.9041 14.5756 4.9281 17.8958 4.9281L20.2397 4.9307V8.3172H18.6836C17.3914 8.3172 16.9 9.287 16.9 10.1866V12.3836H20.2384L19.5 15.5998H16.9V24.6998H22.1C23.53 24.6998 24.7 23.5311 24.7 22.0998V3.8998C24.7 2.4698 23.53 1.2998 22.1 1.2998Z"
                                    fill="var(--bs-body-color)" />
                            </g>
                            </a>
                             <a href="https://www.instagram.com/texttospeech.ai/" target="_blank">
                            <g id="insta">
                                <path id="Vector_2"
                                    d="M61.1136 2.1665C62.3324 2.16975 62.951 2.17625 63.4851 2.19142L63.6952 2.199C63.9379 2.20767 64.1773 2.2185 64.4666 2.2315C65.6192 2.28567 66.4057 2.46767 67.0958 2.73525C67.8108 3.01042 68.4131 3.38309 69.0155 3.98434C69.5663 4.52589 69.9926 5.18098 70.2646 5.904C70.5321 6.59409 70.7141 7.38059 70.7683 8.53434C70.7813 8.8225 70.7921 9.06192 70.8008 9.30567L70.8073 9.51584C70.8236 10.0488 70.8301 10.6674 70.8322 11.8862L70.8333 12.6943V14.1135C70.836 14.9037 70.8277 15.6939 70.8084 16.4838L70.8019 16.694C70.7932 16.9378 70.7824 17.1772 70.7694 17.4653C70.7152 18.6191 70.5311 19.4045 70.2646 20.0957C69.9934 20.8191 69.567 21.4743 69.0155 22.0153C68.4738 22.566 67.8187 22.9922 67.0958 23.2644C66.4057 23.532 65.6192 23.714 64.4666 23.7682C64.2095 23.7803 63.9524 23.7911 63.6952 23.8007L63.4851 23.8072C62.951 23.8223 62.3324 23.8299 61.1136 23.8321L60.3055 23.8332H58.8874C58.0968 23.8359 57.3063 23.8276 56.516 23.8083L56.3058 23.8018C56.0486 23.792 55.7915 23.7808 55.5345 23.7682C54.3818 23.714 53.5953 23.532 52.9041 23.2644C52.1812 22.9929 51.5264 22.5666 50.9856 22.0153C50.4342 21.474 50.0076 20.8189 49.7354 20.0957C49.4678 19.4056 49.2858 18.6191 49.2316 17.4653C49.2196 17.2083 49.2087 16.9512 49.1991 16.694L49.1937 16.4838C49.1738 15.6939 49.1647 14.9037 49.1666 14.1135V11.8862C49.1636 11.096 49.1716 10.3058 49.1905 9.51584L49.1981 9.30567C49.2067 9.06192 49.2176 8.8225 49.2306 8.53434C49.2847 7.38059 49.4667 6.59517 49.7343 5.904C50.0063 5.18023 50.4338 4.52495 50.9866 3.98434C51.5273 3.43343 52.1817 3.00716 52.9041 2.73525C53.5953 2.46767 54.3807 2.28567 55.5345 2.2315C55.8226 2.2185 56.0631 2.20767 56.3058 2.199L56.516 2.1925C57.3059 2.17326 58.0961 2.16495 58.8863 2.16759L61.1136 2.1665ZM60 7.58317C58.5634 7.58317 57.1856 8.15385 56.1698 9.16968C55.154 10.1855 54.5833 11.5632 54.5833 12.9998C54.5833 14.4364 55.154 15.8142 56.1698 16.83C57.1856 17.8458 58.5634 18.4165 60 18.4165C61.4366 18.4165 62.8143 17.8458 63.8301 16.83C64.846 15.8142 65.4166 14.4364 65.4166 12.9998C65.4166 11.5632 64.846 10.1855 63.8301 9.16968C62.8143 8.15385 61.4366 7.58317 60 7.58317ZM60 9.74984C60.4268 9.74977 60.8494 9.83376 61.2437 9.99702C61.6381 10.1603 61.9964 10.3996 62.2982 10.7014C62.6001 11.0031 62.8395 11.3613 63.0029 11.7556C63.1663 12.1499 63.2504 12.5725 63.2505 12.9993C63.2506 13.4261 63.1666 13.8487 63.0033 14.2431C62.8401 14.6374 62.6007 14.9957 62.299 15.2976C61.9973 15.5994 61.639 15.8388 61.2447 16.0022C60.8505 16.1656 60.4279 16.2498 60.0011 16.2498C59.1391 16.2498 58.3125 15.9074 57.703 15.2979C57.0935 14.6884 56.7511 13.8618 56.7511 12.9998C56.7511 12.1379 57.0935 11.3112 57.703 10.7017C58.3125 10.0922 59.1391 9.74984 60.0011 9.74984M65.6886 5.95817C65.3294 5.95817 64.985 6.10084 64.731 6.3548C64.4771 6.60875 64.3344 6.95319 64.3344 7.31234C64.3344 7.67149 64.4771 8.01592 64.731 8.26988C64.985 8.52383 65.3294 8.6665 65.6886 8.6665C66.0477 8.6665 66.3921 8.52383 66.6461 8.26988C66.9001 8.01592 67.0427 7.67149 67.0427 7.31234C67.0427 6.95319 66.9001 6.60875 66.6461 6.3548C66.3921 6.10084 66.0477 5.95817 65.6886 5.95817Z"
                                    fill="var(--bs-body-color)" />
                            </g>
                            </a>
                             <a href="https://twitter.com/TexttospeechAi" target="_blank">
                            <g id="twitter">
                                <path id="Vector_3"
                                    d="M112.722 2.4375H116.306L108.476 11.3858L117.687 23.5625H110.474L104.826 16.1774L98.3625 23.5625H94.7766L103.151 13.9913L94.3162 2.4375H101.71L106.816 9.18775L112.722 2.4375ZM111.464 21.4175H113.45L100.632 4.46983H98.5011L111.464 21.4175Z"
                                    fill="var(--bs-body-color)" />
                            </g>
                            </a>
                            <a href="https://www.youtube.com/@TextToSpeech_Ai" target="_blank">
                            <g id="yt" clip-path="url(#clip0_97_6082)">
                                <path id="Vector_4"
                                    d="M154.083 3.24854H154.227C155.563 3.25341 162.331 3.30216 164.156 3.79291C164.708 3.94268 165.211 4.23462 165.614 4.63955C166.018 5.04448 166.308 5.54821 166.456 6.10041C166.62 6.71791 166.735 7.53529 166.813 8.37866L166.829 8.54766L166.865 8.97016L166.878 9.13916C166.984 10.6244 166.997 12.0154 166.998 12.3193V12.4412C166.997 12.7564 166.982 14.2417 166.865 15.7887L166.852 15.9593L166.837 16.1283C166.756 17.0578 166.636 17.9808 166.456 18.66C166.308 19.2125 166.018 19.7164 165.615 20.1214C165.211 20.5264 164.708 20.8182 164.156 20.9675C162.271 21.4745 155.107 21.5103 154.114 21.5119H153.883C153.381 21.5119 151.304 21.5022 149.127 21.4274L148.85 21.4177L148.709 21.4112L148.431 21.3998L148.153 21.3884C146.349 21.3088 144.632 21.1804 143.84 20.9659C143.289 20.8167 142.786 20.5252 142.382 20.1205C141.979 19.7158 141.689 19.2122 141.541 18.66C141.361 17.9824 141.24 17.0578 141.159 16.1283L141.146 15.9577L141.133 15.7887C141.053 14.6876 141.009 13.5841 141 12.4802V12.2803C141.003 11.9309 141.016 10.7235 141.104 9.39104L141.115 9.22366L141.12 9.13916L141.133 8.97016L141.169 8.54766L141.185 8.37866C141.263 7.53529 141.379 6.71629 141.543 6.10041C141.69 5.54799 141.98 5.04402 142.384 4.63902C142.787 4.23402 143.29 3.94224 143.842 3.79291C144.633 3.58166 146.351 3.45166 148.155 3.37041L148.431 3.35904L148.711 3.34929L148.85 3.34441L149.128 3.33304C150.675 3.28327 152.222 3.25564 153.769 3.25016L154.083 3.24854ZM151.4 8.46479V16.294L158.155 12.381L151.4 8.46479Z"
                                    fill="var(--bs-body-color)" />
                            </g>
</a>
                        </g>
                        <defs>
                            <clipPath id="clip0_97_6082">
                                <rect width="26" height="26" fill="white" transform="translate(141)" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
            </div>
</div>
</Footer>
  <!-- forgot Password Modal  -->
    <div class="modal fade" id="forgotpassword" tabindex="-1" aria-labelledby="forgotpasswordLabel" aria-hidden="true">
        <div id="liveAlertPlaceholder" class="mx-2 m-md-5"></div>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div>
                        <button type="button" class="btn-close float-end mt-3 me-3" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="p-4">
                        <button class="btn p-0 mb-2">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg" data-bs-toggle="modal" data-bs-target="#LoginModal">
                                <circle cx="17.5" cy="17.5" r="17.5" fill="#CF69FF" fill-opacity="0.14" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.2287 10.5956C18.6307 10.9976 18.6307 11.6494 18.2287 12.0514L13.8096 16.4705H24.7067C25.2752 16.4705 25.7361 16.9314 25.7361 17.4999C25.7361 18.0685 25.2752 18.5294 24.7067 18.5294H13.8096L18.2287 22.9485C18.6307 23.3505 18.6307 24.0023 18.2287 24.4043C17.8267 24.8063 17.1749 24.8063 16.7729 24.4043L10.5964 18.2279C10.1944 17.8258 10.1944 17.1741 10.5964 16.772L16.7729 10.5956C17.1749 10.1936 17.8267 10.1936 18.2287 10.5956Z"
                                    fill="#8E8FA6" />
                            </svg>
                        </button>
                        <p class="f24 mb-2"><b>Forgot Password</b></p>
                        <form method="post" action="{{route('password.email')}}">
                            @csrf
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingInput2" placeholder="name@example.com">
                            <label for="floatingInput2">Email address</label>
                        </div>
                        <button class="btn btn-secondary me-3 p-2 px-3" type="submit" id="liveAlertBtn">Submit</button>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Set New Password Modal  -->
    <div class="modal fade" id="SetNewPassword" tabindex="-1" aria-labelledby="SetNewPasswordLabel" aria-hidden="true">
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
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
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
                  <!-- Login Modal  -->

    <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div>
                        <button type="button" class="btn-close float-end mt-3 me-3" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="p-md-5 p-4">
                        <p class="heading2">Login</p>
                        <form method = "post" action="{{route('login')}}">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="email" name="email" required class="form-control" id="emailAddress" placeholder="name@example.com">
                                <label for="emailAddress">Email address</label>
                          
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="password"  required class="form-control" id="password" placeholder="Password">
                                <label for="password">Password</label>
                          
                            </div>

                            <p><a href="" data-bs-toggle="modal" data-bs-target="#forgotpassword">Forgot Password?</a></p>
                            <div class="d-flex align-items-center flex-wrap mb-3">
                                <button type = "submit" class="btn btn-secondary me-3 p-2 px-3">Login</button>
                                <p class="mb-0">OR</p>
                            </div>
                        </form>
                        <div class="d-flex align-items-center flex-wrap mb-3">
                            <a  href="{{route('google.redirect')}}" class="btn btn-white me-3 mb-2"><svg width="20" height="20" viewBox="0 0 20 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                    <path
                                        d="M18.1726 8.368H17.5013V8.33342H10.0013V11.6667H14.7109C14.0238 13.6072 12.1776 15.0001 10.0013 15.0001C7.24005 15.0001 5.0013 12.7613 5.0013 10.0001C5.0013 7.23883 7.24005 5.00008 10.0013 5.00008C11.2759 5.00008 12.4355 5.48091 13.3184 6.26633L15.6755 3.90925C14.1871 2.52216 12.1963 1.66675 10.0013 1.66675C5.39922 1.66675 1.66797 5.398 1.66797 10.0001C1.66797 14.6022 5.39922 18.3334 10.0013 18.3334C14.6034 18.3334 18.3346 14.6022 18.3346 10.0001C18.3346 9.44133 18.2771 8.89592 18.1726 8.368Z"
                                        fill="#FFC107" />
                                    <path
                                        d="M2.62891 6.12133L5.36682 8.12925C6.10766 6.29508 7.90182 5.00008 10.0014 5.00008C11.276 5.00008 12.4356 5.48091 13.3185 6.26633L15.6756 3.90925C14.1872 2.52216 12.1964 1.66675 10.0014 1.66675C6.80057 1.66675 4.02474 3.47383 2.62891 6.12133Z"
                                        fill="#FF3D00" />
                                    <path
                                        d="M10.0008 18.3334C12.1533 18.3334 14.1091 17.5096 15.5879 16.17L13.0087 13.9875C12.1439 14.6452 11.0872 15.0009 10.0008 15C7.83328 15 5.99286 13.618 5.29953 11.6892L2.58203 13.783C3.9612 16.4817 6.76203 18.3334 10.0008 18.3334Z"
                                        fill="#4CAF50" />
                                    <path
                                        d="M18.1713 8.36796H17.5V8.33337H10V11.6667H14.7096C14.3809 12.5902 13.7889 13.3972 13.0067 13.988L13.0079 13.9871L15.5871 16.1696C15.4046 16.3355 18.3333 14.1667 18.3333 10C18.3333 9.44129 18.2758 8.89587 18.1713 8.36796Z"
                                        fill="#1976D2" />
                                </svg>
                                Google</a>
                            <a  class="btn btn-white me-3 mb-2"><svg width="20" height="20" viewBox="0 0 20 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                    <path
                                        d="M20 10C20 4.47719 15.5228 0 10 0C4.47719 0 0 4.47719 0 10C0 14.9913 3.65687 19.1284 8.4375 19.8785V12.8906H5.89844V10H8.4375V7.79688C8.4375 5.29063 9.93047 3.90625 12.2147 3.90625C13.3088 3.90625 14.4531 4.10156 14.4531 4.10156V6.5625H13.1922C11.9499 6.5625 11.5625 7.33336 11.5625 8.12422V10H14.3359L13.8926 12.8906H11.5625V19.8785C16.3431 19.1284 20 14.9913 20 10Z"
                                        fill="#1877F2" />
                                    <path
                                        d="M13.8926 12.8906L14.3359 10H11.5625V8.12422C11.5625 7.33328 11.9499 6.5625 13.1922 6.5625H14.4531V4.10156C14.4531 4.10156 13.3088 3.90625 12.2146 3.90625C9.93047 3.90625 8.4375 5.29063 8.4375 7.79688V10H5.89844V12.8906H8.4375V19.8785C8.95439 19.9595 9.4768 20.0001 10 20C10.5232 20.0002 11.0456 19.9595 11.5625 19.8785V12.8906H13.8926Z"
                                        fill="white" />
                                </svg>
                                Facebook</a>
                        </div>
                        <p class="mb-0">Don’t have an account? <a href="{{route('register')}}"><b>Register Now!</b></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script>
     $(document).ready(function() {
    // Check if there's a theme preference stored in local storage
    var theme = localStorage.getItem("theme");

    // If there's a theme preference, set the theme
    if (theme) {
        $("html").attr("data-bs-theme", theme);
    }

    // Attach click event handler to the button
    $("button[id='lightSwitch']").on("click", function () {
        // Toggle between light and dark themes
        if ($("html").attr("data-bs-theme") == 'light') {
            $("html").attr("data-bs-theme", "dark");
            // Store the theme preference in local storage
            localStorage.setItem("theme", "dark");
        } else if ($("html").attr("data-bs-theme") == "dark") {
            $("html").attr("data-bs-theme", "light");
            // Store the theme preference in local storage
            localStorage.setItem("theme", "light");
        }
    });
});
    </script>
</body>

</html>