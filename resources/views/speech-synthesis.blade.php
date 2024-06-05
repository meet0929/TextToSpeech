@extends('common')
@section('title','AI Voice Generator | Create Expressive Speech with TTS')
@section('description','Generate lifelike, expressive speech in multiple languages with our advanced text-to-speech engine. Perfect for narratives, stories, and educational content.')
@section('content')
<div id="app">
    <voice-component></voice-component>
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
@endsection
@yield('scripts')

