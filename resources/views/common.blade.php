@include('layouts.header')
@yield('content')
@include('layouts.modal')
@if(!Route::is('speech-synthesis') && !Route::is('history') &&  !Route::is('voice-lab') ) 
    @include('layouts.footer')
@endif


