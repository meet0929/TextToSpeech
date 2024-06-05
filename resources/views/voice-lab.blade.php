@extends('common')
@section('title','Voice Lab | Design and Customize Synthetic Voices with AI')
@section('description','Create and customize synthetic voices from scratch with our AI Voice Lab. Clone your voice or design new ones, perfect for all your content creation needs.')
@section('content')
    <div class="container mb-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <a href="{{route('speech-synthesis')}}" class="btn btn-outline-dark p-2 px-3 mb-3">← Back to Generator</a>
                <h1 class="heading2">Voice Lab</h1>
                <p>Create or clone unique voices with ease. Your exclusive designs, safeguarded for your use transforming your innovative ideas into private, personalized vocal creations. Your voice, your control.</p>
            </div>
            <div class="col-12 mb-3 mb-lg-auto">
                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4">
                    @foreach($generatedvoices as $generatedvoice)
                    @if($generatedvoice['audio_path']!='')
                    <div class="col">
                        <div class="card p-3 mb-2">
                            <img src="./images/voice-1-img.png" alt="voice-img" width="200" height="200"
                                class="img-fluid mx-auto d-block">
                            <div id="Voice1" onClick="playPause()" aria-label="play-audio" style="margin-top: -55px;">
                                <audio src="{{$generatedvoice['audio_path']}}"></audio>
                                <div class="play-btn-2 minus-margin img-fluid mx-auto d-block">
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <p class="card-title f20"><b><span class="vname">{{$generatedvoice['name']}}</span> </b></p>
                                <p class="card-text mb-2 f14">{{$generatedvoice['age']}} {{$generatedvoice['accent']}} {{$generatedvoice['gender']}}</p>
                                <p class="c-gray f14 mb-0">{{$generatedvoice['description']}}</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-light p2 px-3"><svg width="20" height="20" viewBox="0 0 20 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.4167 5.24917C14.3396 5.17191 14.248 5.11062 14.1472 5.0688C14.0464 5.02699 13.9383 5.00546 13.8292 5.00546C13.72 5.00546 13.6119 5.02699 13.5111 5.0688C13.4103 5.11062 13.3188 5.17191 13.2417 5.24917L8.54166 9.94916L9.71666 11.1242L14.4167 6.41583C14.7333 6.09917 14.7333 5.56583 14.4167 5.24917ZM17.95 5.24083L9.71666 13.4742L6.81666 10.5825C6.66084 10.4267 6.44951 10.3391 6.22916 10.3391C6.0088 10.3391 5.79747 10.4267 5.64166 10.5825C5.48584 10.7383 5.39831 10.9496 5.39831 11.17C5.39831 11.3904 5.48584 11.6017 5.64166 11.7575L9.12499 15.2408C9.44999 15.5658 9.97499 15.5658 10.3 15.2408L19.125 6.42417C19.2022 6.34707 19.2635 6.2555 19.3054 6.15469C19.3472 6.05387 19.3687 5.94581 19.3687 5.83667C19.3687 5.72752 19.3472 5.61946 19.3054 5.51865C19.2635 5.41783 19.2022 5.32626 19.125 5.24917H19.1167C19.0415 5.1705 18.9513 5.10774 18.8514 5.06461C18.7515 5.02147 18.6439 4.99884 18.5351 4.99807C18.4263 4.99729 18.3184 5.01838 18.2179 5.06008C18.1174 5.10178 18.0263 5.16325 17.95 5.24083ZM0.933325 11.7658L4.41666 15.2492C4.74166 15.5742 5.26666 15.5742 5.59166 15.2492L6.17499 14.6658L2.10833 10.5825C2.03123 10.5052 1.93966 10.444 1.83885 10.4021C1.73803 10.3603 1.62997 10.3388 1.52083 10.3388C1.41168 10.3388 1.30362 10.3603 1.2028 10.4021C1.10199 10.444 1.01042 10.5052 0.933325 10.5825C0.608325 10.9075 0.608325 11.4408 0.933325 11.7658Z"
                                        fill="var(--bs-body-color)" />
                                </svg>
                            </button>
                            <button onclick = "getvoice('{{$generatedvoice['voice_id']}}')" class="btn btn-light p2 px-3" data-bs-toggle="modal"
                                data-bs-target="#EditVoice"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.7291 4.50652L15.4933 6.27069M14.8633 2.95236L10.0908 7.72486C9.8442 7.9711 9.67602 8.28484 9.60746 8.62652L9.16663 10.8332L11.3733 10.3915C11.715 10.3232 12.0283 10.1557 12.275 9.90902L17.0475 5.13652C17.1909 4.99311 17.3046 4.82285 17.3823 4.63547C17.4599 4.44809 17.4998 4.24726 17.4998 4.04444C17.4998 3.84162 17.4599 3.64079 17.3823 3.45341C17.3046 3.26603 17.1909 3.09577 17.0475 2.95236C16.904 2.80894 16.7338 2.69518 16.5464 2.61756C16.359 2.53995 16.1582 2.5 15.9554 2.5C15.7526 2.5 15.5517 2.53995 15.3643 2.61756C15.177 2.69518 15.0067 2.80894 14.8633 2.95236Z"
                                        stroke="var(--bs-body-color)" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M15.8333 12.4993V14.9993C15.8333 15.4414 15.6577 15.8653 15.3452 16.1779C15.0326 16.4904 14.6087 16.666 14.1666 16.666H4.99998C4.55795 16.666 4.13403 16.4904 3.82147 16.1779C3.50891 15.8653 3.33331 15.4414 3.33331 14.9993V5.83268C3.33331 5.39065 3.50891 4.96673 3.82147 4.65417C4.13403 4.34161 4.55795 4.16602 4.99998 4.16602H7.49998"
                                        stroke="var(--bs-body-color)" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button onclick="deletevoice('{{$generatedvoice['voice_id']}}')" class="btn btn-light p2 px-3" data-bs-toggle="modal"
                                data-bs-target="#deletevoice"><svg width="20" height="20" viewBox="0 0 20 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.33335 4.99935H11.6667C11.6667 4.55732 11.4911 4.1334 11.1785 3.82084C10.866 3.50828 10.442 3.33268 10 3.33268C9.55799 3.33268 9.13407 3.50828 8.82151 3.82084C8.50895 4.1334 8.33335 4.55732 8.33335 4.99935ZM6.66669 4.99935C6.66669 4.11529 7.01788 3.26745 7.643 2.64233C8.26812 2.01721 9.11597 1.66602 10 1.66602C10.8841 1.66602 11.7319 2.01721 12.357 2.64233C12.9822 3.26745 13.3334 4.11529 13.3334 4.99935H17.5C17.721 4.99935 17.933 5.08715 18.0893 5.24343C18.2456 5.39971 18.3334 5.61167 18.3334 5.83268C18.3334 6.0537 18.2456 6.26566 18.0893 6.42194C17.933 6.57822 17.721 6.66602 17.5 6.66602H16.765L16.0267 15.2827C15.9557 16.1147 15.575 16.8898 14.9599 17.4546C14.3448 18.0194 13.5401 18.3328 12.705 18.3327H7.29502C6.45994 18.3328 5.65525 18.0194 5.04014 17.4546C4.42504 16.8898 4.04434 16.1147 3.97335 15.2827L3.23502 6.66602H2.50002C2.27901 6.66602 2.06704 6.57822 1.91076 6.42194C1.75448 6.26566 1.66669 6.0537 1.66669 5.83268C1.66669 5.61167 1.75448 5.39971 1.91076 5.24343C2.06704 5.08715 2.27901 4.99935 2.50002 4.99935H6.66669ZM12.5 9.99935C12.5 9.77833 12.4122 9.56637 12.2559 9.41009C12.0997 9.25381 11.8877 9.16602 11.6667 9.16602C11.4457 9.16602 11.2337 9.25381 11.0774 9.41009C10.9212 9.56637 10.8334 9.77833 10.8334 9.99935V13.3327C10.8334 13.5537 10.9212 13.7657 11.0774 13.9219C11.2337 14.0782 11.4457 14.166 11.6667 14.166C11.8877 14.166 12.0997 14.0782 12.2559 13.9219C12.4122 13.7657 12.5 13.5537 12.5 13.3327V9.99935ZM8.33335 9.16602C8.55437 9.16602 8.76633 9.25381 8.92261 9.41009C9.07889 9.56637 9.16669 9.77833 9.16669 9.99935V13.3327C9.16669 13.5537 9.07889 13.7657 8.92261 13.9219C8.76633 14.0782 8.55437 14.166 8.33335 14.166C8.11234 14.166 7.90038 14.0782 7.7441 13.9219C7.58782 13.7657 7.50002 13.5537 7.50002 13.3327V9.99935C7.50002 9.77833 7.58782 9.56637 7.7441 9.41009C7.90038 9.25381 8.11234 9.16602 8.33335 9.16602ZM5.63335 15.141C5.66886 15.5572 5.85933 15.9449 6.16706 16.2273C6.47479 16.5097 6.87734 16.6663 7.29502 16.666H12.705C13.1224 16.6659 13.5246 16.5091 13.8319 16.2267C14.1393 15.9443 14.3295 15.5569 14.365 15.141L15.0917 6.66602H4.90835L5.63335 15.141Z"
                                        fill="var(--bs-body-color)" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <div class="col">
                        <div class="card p-3 mb-2 h-75 d-flex justify-content-center btn btn-white">
                            <a href="{{route('speech-synthesis',['customvoice' => 'active'])}}">
                            <figure class="d-flex align-items-center">
                                <svg width="96" height="130" viewBox="0 0 96 130" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="img-fluid d-block mx-auto">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M48 53C48.3819 53 48.7482 53.1517 49.0182 53.4218C49.2883 53.6918 49.44 54.0581 49.44 54.44V63.56H58.56C58.9419 63.56 59.3082 63.7117 59.5782 63.9818C59.8483 64.2518 60 64.6181 60 65C60 65.3819 59.8483 65.7482 59.5782 66.0182C59.3082 66.2883 58.9419 66.44 58.56 66.44H49.44V75.56C49.44 75.9419 49.2883 76.3082 49.0182 76.5782C48.7482 76.8483 48.3819 77 48 77C47.6181 77 47.2518 76.8483 46.9818 76.5782C46.7117 76.3082 46.56 75.9419 46.56 75.56V66.44H37.44C37.0581 66.44 36.6918 66.2883 36.4218 66.0182C36.1517 65.7482 36 65.3819 36 65C36 64.6181 36.1517 64.2518 36.4218 63.9818C36.6918 63.7117 37.0581 63.56 37.44 63.56H46.56V54.44C46.56 54.0581 46.7117 53.6918 46.9818 53.4218C47.2518 53.1517 47.6181 53 48 53Z"
                                        fill="#8E8FA6" />
                                </svg>
                            </figure>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- select type modal  -->
    <div class="modal fade" id="SelectVoiceType" tabindex="-1" aria-labelledby="SelectVoiceTypeLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title f24 mb-2 ms-3">Type of voice to create</h5>
                    <button type="button" class="btn-close float-end me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="px-md-5 p-4">
                        <div class="d-grid">
                            <div class="justify-content-evenly" role="group" aria-label="Basic radio toggle button group">
                                <div>
                                    <input type="radio" name="versionname" class="btn-check" autocomplete="off" checked/>
                                    <label class="btn btn-white p-2 px-3 text-start mb-3 w-100">
                                        <span class="f20">Voice Design</span>
                                        <br />
                                        Design entirely new voices by adjusting their parameters. Every voice you create is randomly generated and is entirely unique even if the same settings are applied. 
                                    </label>
                                </div>
                                <div>
                                    <input type="radio" name="versionname" class="btn-check" autocomplete="off" checked/>
                                    <label class="btn btn-white p-2 px-3 text-start mb-3 w-100">
                                        <span class="f20">Voice Library</span>
                                        <br />
                                        Add a voice from our community.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Voice  -->

    <div class="modal fade" id="EditVoice" tabindex="-1" aria-labelledby="EditVoiceLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div>
                        <button type="button" class="btn-close float-end mt-3 me-3" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="p-md-5 p-4">
                        <form method="post" action="{{route('edit-voice')}}">
                            @csrf
                        <p class="f24 mb-2"><b>Edit Voice</b></p>
                        <div class="mb-2">
                            <label for="nameofuser" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="nameofuser" placeholder="Name">
                            <input type="hidden" class="form-control" id="voiceid" name="voice_id" >    
                        </div>
                        <p class="mb-2">Labels <span class="labellength"></span> / 5</p>
                        <div class="d-sm-flex align-items-center mb-2" >
                            <div class="d-sm-flex align-items-center mb-2" id="labels"></div>
                            <a onclick="addmorelabel()">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="ms-2">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10 2.1875C10.2486 2.1875 10.4871 2.28627 10.6629 2.46209C10.8387 2.6379 10.9375 2.87636 10.9375 3.125V9.0625H16.875C17.1236 9.0625 17.3621 9.16127 17.5379 9.33709C17.7137 9.5129 17.8125 9.75136 17.8125 10C17.8125 10.2486 17.7137 10.4871 17.5379 10.6629C17.3621 10.8387 17.1236 10.9375 16.875 10.9375H10.9375V16.875C10.9375 17.1236 10.8387 17.3621 10.6629 17.5379C10.4871 17.7137 10.2486 17.8125 10 17.8125C9.75136 17.8125 9.5129 17.7137 9.33709 17.5379C9.16127 17.3621 9.0625 17.1236 9.0625 16.875V10.9375H3.125C2.87636 10.9375 2.6379 10.8387 2.46209 10.6629C2.28627 10.4871 2.1875 10.2486 2.1875 10C2.1875 9.75136 2.28627 9.5129 2.46209 9.33709C2.6379 9.16127 2.87636 9.0625 3.125 9.0625H9.0625V3.125C9.0625 2.87636 9.16127 2.6379 9.33709 2.46209C9.5129 2.28627 9.75136 2.1875 10 2.1875Z"
                                        fill="var(--bs-body-color)" />
                                </svg>
                            </a>
                        </div>
                        <div class="d-flex align-items-center mb-3" id="addmoreinput" style="display: none !important">
                            <input type="text" class="form-control w-25 h-25" id="labelkey" >
                            <p class="mb-0 mx-3">:</p>
                            <input type="text" class="form-control w-25 h-25 me-3" id="labelvalue">
                            <a onclick="newlabeladded()" class="btn p-0"> <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 14.3333L9.8 18L20 7" stroke="#2E303F" stroke-width="3"
                                        stroke-linecap="round" />
                                </svg></a>
                        </div>
                        <div class="mb-3">
                            <label for="voicedesciptionedit" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="voicedesciptionedit" rows="5"
                                placeholder="Type here..."></textarea>
                          
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-outline-dark p-2 px-4 mx-1" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-secondary p-2 px-4 mx-1">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete / Remove Voice  -->
    <div class="modal fade" id="deletevoice" tabindex="-1" aria-labelledby="deletevoiceLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div>
                        <button type="button" class="btn-close float-end mt-3 me-3" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="p-md-5 p-4">
                        <p class="f24 mb-2"><b>Remove Voice</b></p>
                        <p class="mb-4">Do you really want to remove the voice <span class="voicename"></span>?</p>
                        <form method="post" action="{{route('remove-voice')}}">
                            @csrf
                            @method('post')
                            <input type="hidden" name="voice_id" id="voice_id">
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-outline-dark p-2 px-4 mx-1" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-danger p-2 px-4 mx-1">Remove</button>
                            </div>
                        </form>
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
    function getvoice(voice_id) {
        $.ajax({
            type: 'GET',
            dataType:"json",
            url: '/get-voice',
            data: { 'voice_id': voice_id },
            success: function (data) {
                $('#nameofuser').val(data.name); 
                $('#voiceid').val(voice_id); 
                $('#inputlabels').val(data.labels);
                const labellength =  Object.keys(data.labels).length;      
                $('.labellength').html(labellength);
                var i = 0;
                for (let x in data.labels) {
            
                    if(i % 2 == 0) {
                        var lclass="ytext-ybg";
                    } else {
                        var lclass="ptext-pbg";
                    }
                    $('#labels').append(`<input type="hidden" class="form-control labelclass" id="inputlabel`+x+`"  value="`+data.labels[x]+`" name="labels[`+x+`]" >
                                <span id="`+x+`key" class="`+lclass+` p-2 px-3 m-1 d-flex align-items-center justify-content-between">
                                        <span class="me-2 f14">`+x+` : `+data.labels[x]+`</span>
                                    <a onclick="deletelabel('`+x+`')"> <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.5 0C3.80481 0 0 3.80587 0 8.5C0 13.1941 3.80481 17 8.5 17C13.1952 17 17 13.1941 17 8.5C17 3.80587 13.1952 0 8.5 0ZM12.4387 10.9363C12.6379 11.1355 12.7498 11.4058 12.7498 11.6875C12.7498 11.9692 12.6379 12.2395 12.4387 12.4387C12.2395 12.6379 11.9692 12.7498 11.6875 12.7498C11.4058 12.7498 11.1355 12.6379 10.9363 12.4387L8.5 10.0024L6.06369 12.4387C5.96524 12.5377 5.8482 12.6163 5.71928 12.6699C5.59036 12.7235 5.45212 12.7511 5.3125 12.7511C5.17288 12.7511 5.03464 12.7235 4.90572 12.6699C4.7768 12.6163 4.65976 12.5377 4.56131 12.4387C4.46256 12.3401 4.38421 12.223 4.33076 12.0941C4.2773 11.9652 4.24979 11.827 4.24979 11.6875C4.24979 11.548 4.2773 11.4098 4.33076 11.2809C4.38421 11.152 4.46256 11.0349 4.56131 10.9363L6.99763 8.5L4.56131 6.06369C4.36209 5.86446 4.25016 5.59425 4.25016 5.3125C4.25016 5.03075 4.36209 4.76054 4.56131 4.56131C4.76054 4.36209 5.03075 4.25016 5.3125 4.25016C5.59425 4.25016 5.86446 4.36209 6.06369 4.56131L8.5 6.99763L10.9363 4.56131C11.1355 4.36209 11.4058 4.25016 11.6875 4.25016C11.9692 4.25016 12.2395 4.36209 12.4387 4.56131C12.6379 4.76054 12.7498 5.03075 12.7498 5.3125C12.7498 5.59425 12.6379 5.86446 12.4387 6.06369L10.0024 8.5L12.4387 10.9363Z"
                                                fill="var(--bs-body-color)" />
                                        </svg></a>
                                    </span>`);
                                    i++;
                }
                $('#voicedesciptionedit').val(data.description);
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
    function deletelabel(labelkey) {
        //console.log(labelkey);
        $('#'+labelkey+'key').remove();
        $('#inputlabel'+labelkey).remove();
    }
 
    function addmorelabel() {
        $('#addmoreinput').show();
    }
    function newlabeladded() {
        var labelkey = $('#labelkey').val();
        var labelvalue = $('#labelvalue').val();
        var labelcount = $('#labels').find(".labelclass").length;
        if(labelcount % 2 == 0) {
            var lclass="ytext-ybg";
        } else {
            var lclass="ptext-pbg";
        }
        const labellength = labelcount + 1;
        $('.labellength').html(labellength);
        if(labellength <  6) {
        $('#labels').append(`<input type="hidden" class="form-control labelclass" id="inputlabel`+labelkey+`"  value="`+labelvalue+`" name="labels[`+labelkey+`]" >
                           <span id="`+labelkey+`key" class="`+lclass+` p-2 px-3 m-1 d-flex align-items-center justify-content-between">
                                <span class="me-2 f14">`+labelkey+` : `+labelvalue+`</span>
                               <a onclick="deletelabel('`+labelkey+`')"> <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.5 0C3.80481 0 0 3.80587 0 8.5C0 13.1941 3.80481 17 8.5 17C13.1952 17 17 13.1941 17 8.5C17 3.80587 13.1952 0 8.5 0ZM12.4387 10.9363C12.6379 11.1355 12.7498 11.4058 12.7498 11.6875C12.7498 11.9692 12.6379 12.2395 12.4387 12.4387C12.2395 12.6379 11.9692 12.7498 11.6875 12.7498C11.4058 12.7498 11.1355 12.6379 10.9363 12.4387L8.5 10.0024L6.06369 12.4387C5.96524 12.5377 5.8482 12.6163 5.71928 12.6699C5.59036 12.7235 5.45212 12.7511 5.3125 12.7511C5.17288 12.7511 5.03464 12.7235 4.90572 12.6699C4.7768 12.6163 4.65976 12.5377 4.56131 12.4387C4.46256 12.3401 4.38421 12.223 4.33076 12.0941C4.2773 11.9652 4.24979 11.827 4.24979 11.6875C4.24979 11.548 4.2773 11.4098 4.33076 11.2809C4.38421 11.152 4.46256 11.0349 4.56131 10.9363L6.99763 8.5L4.56131 6.06369C4.36209 5.86446 4.25016 5.59425 4.25016 5.3125C4.25016 5.03075 4.36209 4.76054 4.56131 4.56131C4.76054 4.36209 5.03075 4.25016 5.3125 4.25016C5.59425 4.25016 5.86446 4.36209 6.06369 4.56131L8.5 6.99763L10.9363 4.56131C11.1355 4.36209 11.4058 4.25016 11.6875 4.25016C11.9692 4.25016 12.2395 4.36209 12.4387 4.56131C12.6379 4.76054 12.7498 5.03075 12.7498 5.3125C12.7498 5.59425 12.6379 5.86446 12.4387 6.06369L10.0024 8.5L12.4387 10.9363Z"
                                        fill="var(--bs-body-color)" />
                                </svg></a>
                            </span>`);
        } else {
            alert('You can add only 5 labels');
        }                   
                           
    }
    function deletevoice(voice_id) {
      $('#voice_id').val(voice_id);      
      $('.voicename').html($('.vname').html())
    }
</script>    
@endsection

