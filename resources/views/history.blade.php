@extends('common')
@section('title','Text to Speech History | Download Your Generated Samples')
@section('description','Access and download all your generated text-to-speech samples. Review status, manage files, and enhance your projects with our sophisticated AI voice generator.')
@section('content')

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-12 mb-3">
                <a class="btn btn-outline-dark p-2 px-3 mb-3" href="{{route('speech-synthesis')}}">← Back to Generator</a>
                <h1 class="heading2">History</h1>
                @if(!empty($histories))
                <p>Full list of all your generated samples, ready for download.</p>
                @endif
            </div>
            <form method="post" action ="{{route('history.action')}} " id="formAction">
                @csrf
                <div class="col-12">
                    @if(!empty($histories))
                    <div class="d-flex mb-3">
                        <button type="submit" name="historydownload" class="btn btn-outline-dark download-btn p-2 me-3"></button>
                        <button type="submit" name="historydelete"  class="btn btn-outline-dark delete-btn p-2"></button>
                    </div>
                    @endif
                    <div class="table-responsive">
                    <table class="table" style="min-width: 500px;">
                        <thead>
                            <tr class="history-table-head">
                                <th class="px-2 history-head-text ps-3" style="border-radius: 10px 0 0 10px;"> <input
                                        class="form-check-input history-check" type="checkbox" value="" id="allcb">
                                </th>
                                <th class="px-2 history-head-text">Voice</th>
                                <th class="px-2 history-head-text">Date</th>
                                <th class="px-2 history-head-text">Status</th>
                                <th class="px-2 history-head-text">Text</th>
                                <th class="px-2 history-head-text" style="border-radius: 0 10px 10px 0;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($histories))
                            @foreach($histories as $history) 
                                <tr class="border-bottom light-bg">
                                <td class="px-2 ps-3"><input class="form-check-input history-check" name="history_item_id[]" type="checkbox" value="{{$history['history_item_id']}}"
                                            id="history-select"></td>
                                    <td class="px-2">{{$history['voice_name']}}</td>
                                    <td class="px-2">{{date('d-m-Y m:i',$history['date_unix'])}}</td>
                                    <td class="px-2"><span class="ptext-pbg px-2">{{$history['state']}}</span></td>
                                    <td class="px-2">{{$history['text']}}.</td>
                                    <td class="px-2"><a class="audio-button" onclick="toggleAudio('{{$history['history_item_id']}}', '{{$history['voice_name']}}')"><span style="cursor:pointer" id="{{$history['history_item_id']}}" class="ytext-ybg px-2 togglebutton">Play</span></a></td>
                                </tr>
                            @endforeach
                            @else
                            <tr class="border-bottom light-bg text-center" ><td colspan="6">No record found</td></tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </form>
            </div>
        </div>
    </div>
        <!-- Player  -->
    <div class="container-fluid position-absolute border-0" id="myplayer" style="visibility:hidden">
        <div class="row justify-content-center m-3 light-bg">
            <div class="col-12 p-3">
                <div class="row justify-content-center px-3">
                    <div class="col-md-2 col-xl-1 col-12 d-flex d-flex justify-content-center align-items-end">
                        <div onclick="rewind()">
                            <div id="btn-faws-rewind">
                                <i class='fas fa-backward'><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18 13.3333H15.3333C15.3333 12.0222 14.8556 10.9164 13.9 10.016C12.9444 9.11556 11.8 8.66578 10.4667 8.66667C9.66667 8.66667 8.92222 8.85022 8.23333 9.21733C7.54444 9.58444 6.97778 10.0676 6.53333 10.6667H8.66667V13.3333H2V6.66667H4.66667V8.73333C5.37778 7.88889 6.22755 7.22222 7.216 6.73333C8.20444 6.24444 9.288 6 10.4667 6C12.5778 6 14.3609 6.71111 15.816 8.13333C17.2711 9.55556 17.9991 11.2889 18 13.3333Z"
                                            fill="var(--bs-body-color)" />
                                    </svg>
                                </i>
                            </div>
                        </div>
                        <div onclick="toggleAudio()" style="width: 68px;">
                            <div id="btn-faws-play-pause">
                                <i class='fas fa-play' id="icon-play"><svg width="58" height="58" viewBox="0 0 58 58"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="29" cy="29" r="29" fill="var(--bs-body-color)" />
                                        <path
                                            d="M38 27.2679C39.3333 28.0378 39.3333 29.9623 38 30.7321L26 37.6603C24.6667 38.4301 23 37.4678 23 35.9282L23 22.0718C23 20.5322 24.6667 19.5699 26 20.3397L38 27.2679Z"
                                            fill="var(--bs-color-light-bg)" />
                                    </svg></i>
                                <i class='fas fa-pause' id="icon-pause" style="display: none"><svg width="58"
                                        height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="29" cy="29" r="29" fill="var(--bs-body-color)" />
                                        <rect x="22" y="20" width="5" height="17" rx="2.5"
                                            fill="var(--bs-color-light-bg)" />
                                        <rect x="31" y="20" width="5" height="17" rx="2.5"
                                            fill="var(--bs-color-light-bg)" />
                                    </svg>
                                </i>
                            </div>
                        </div>
                        <div class="btn-play" onclick="forward()">
                            <div id="btn-faws-forward">
                                <i class='fas fa-forward'><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 13.3333H4.66667C4.66667 12.0222 5.14444 10.9164 6.1 10.016C7.05556 9.11556 8.2 8.66578 9.53333 8.66667C10.3333 8.66667 11.0778 8.85022 11.7667 9.21733C12.4556 9.58444 13.0222 10.0676 13.4667 10.6667H11.3333V13.3333H18V6.66667H15.3333V8.73333C14.6222 7.88889 13.7724 7.22222 12.784 6.73333C11.7956 6.24444 10.712 6 9.53333 6C7.42222 6 5.63911 6.71111 4.184 8.13333C2.72889 9.55556 2.00089 11.2889 2 13.3333Z"
                                            fill="var(--bs-body-color)" />
                                    </svg>
                                </i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-9 col-12">
                        <p class="my-2 title"><b>Voice preview for generated/aaaa</b></p>
                        <div id="myProgress" class="mt-4">
                            <div id="myBar"></div>
                        </div>
                    </div>
                    <div
                        class="col-md-4 col-xl-2 col-12 d-flex align-items-end justify-content-md-center mt-3 mt-md-auto">
                        <p class="mb-0">
                            <span class="timer">00:00</span> / <span class="duration">00:00</span>
                        </p>
                        <form method="post" action ="{{route('history.action')}}" >
                            @csrf
                        <button type="submit" name="historydownload" class="btn p-0 mx-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4 17V19C4 19.5304 4.21071 20.0391 4.58579 20.4142C4.96086 20.7893 5.46957 21 6 21H18C18.5304 21 19.0391 20.7893 19.4142 20.4142C19.7893 20.0391 20 19.5304 20 19V17M7 11L12 16M12 16L17 11M12 16V4"
                                    stroke="var(--bs-body-color)" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                           
                        </button>
                         <input type="hidden" name="history_item_id[]" id="hid">
                         
                        </form>
                        <button onclick="hideshow()" class="btn p-0 mx-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.9999 13.4141L17.6569 19.0711C17.8455 19.2533 18.0982 19.3541 18.3603 19.3518C18.6225 19.3495 18.8734 19.2444 19.0588 19.059C19.2442 18.8736 19.3493 18.6227 19.3516 18.3606C19.3539 18.0984 19.2531 17.8458 19.0709 17.6571L13.4139 12.0001L19.0709 6.34315C19.2531 6.15455 19.3539 5.90194 19.3516 5.63975C19.3493 5.37755 19.2442 5.12674 19.0588 4.94133C18.8734 4.75592 18.6225 4.65075 18.3603 4.64848C18.0982 4.6462 17.8455 4.74699 17.6569 4.92915L11.9999 10.5861L6.34295 4.92915C6.15349 4.75149 5.90236 4.65451 5.64268 4.65873C5.38299 4.66295 5.13514 4.76803 4.95155 4.95174C4.76797 5.13546 4.66307 5.38339 4.65903 5.64307C4.655 5.90276 4.75216 6.15382 4.92995 6.34315L10.5859 12.0001L4.92895 17.6571C4.83343 17.7494 4.75725 17.8597 4.70484 17.9817C4.65244 18.1037 4.62485 18.235 4.62369 18.3677C4.62254 18.5005 4.64784 18.6322 4.69812 18.7551C4.7484 18.878 4.82266 18.9897 4.91655 19.0835C5.01044 19.1774 5.1221 19.2517 5.24499 19.302C5.36789 19.3523 5.49957 19.3776 5.63235 19.3764C5.76513 19.3752 5.89635 19.3477 6.01835 19.2953C6.14035 19.2428 6.2507 19.1667 6.34295 19.0711L11.9999 13.4141Z"
                                    fill="var(--bs-body-color)" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Player Music List  -->
<audio id="myAudio" name="media"  ontimeupdate="onTimeUpdate()" style="visibility:hidden">
    <source src="" id="source-audio" type="audio/mpeg">
</audio>
   
    <div class="playlist-ctn d-none"></div>
       <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
       <script>
    document.getElementById("formAction").addEventListener("submit", function(event) {
        var checkboxes = document.querySelectorAll(".history-check");
        var anyChecked = false;

        checkboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                anyChecked = true;
            }
        });
        if (!anyChecked) {
            alert("Please select at least one history entry.");
            event.preventDefault(); // Prevent form submission
        }
    });
</script>
    <script>
        $("button[id='lightSwitch']").on("click", function () {
            if ($("html").attr("data-bs-theme") == 'light') {
                $("html").attr("data-bs-theme", "dark");
            } else if ($("html").attr("data-bs-theme") == "dark") {
                $("html").attr("data-bs-theme", "light");
            }
        });
            $('#allcb').change(function(){
        if($(this).prop('checked')){
            $('tbody tr td input[type="checkbox"]').each(function(){
                $(this).prop('checked', true);
            });
        }else{
            $('tbody tr td input[type="checkbox"]').each(function(){
                $(this).prop('checked', false);
            });
        }   
    });
    function hideshow() {
        document.getElementById("myplayer").style.visibility = "hidden";
        this.currentAudio.pause();
    }
      
        // player 
        //  Reference : https://codepen.io/vanderzak/pen/BayjVep 

        function createTrackItem(index, name, duration) {
            var trackItem = document.createElement('div');
            trackItem.setAttribute("class", "playlist-track-ctn");
            trackItem.setAttribute("id", "ptc-" + index);
            trackItem.setAttribute("data-index", index);
            document.querySelector(".playlist-ctn").appendChild(trackItem);

            var playBtnItem = document.createElement('div');
            playBtnItem.setAttribute("class", "playlist-btn-play");
            playBtnItem.setAttribute("id", "pbp-" + index);
            document.querySelector("#ptc-" + index).appendChild(playBtnItem);

            var btnImg = document.createElement('i');
            btnImg.setAttribute("class", "fas fa-play");
            btnImg.setAttribute("height", "40");
            btnImg.setAttribute("width", "40");
            btnImg.setAttribute("id", "p-img-" + index);
            document.querySelector("#pbp-" + index).appendChild(btnImg);

            var trackInfoItem = document.createElement('div');
            trackInfoItem.setAttribute("class", "playlist-info-track");
            trackInfoItem.innerHTML = name
            document.querySelector("#ptc-" + index).appendChild(trackInfoItem);

            var trackDurationItem = document.createElement('div');
            trackDurationItem.setAttribute("class", "playlist-duration");
            trackDurationItem.innerHTML = duration
            document.querySelector("#ptc-" + index).appendChild(trackDurationItem);
        }

      

      

        var playListItems = document.querySelectorAll(".playlist-track-ctn");

        for (let i = 0; i < playListItems.length; i++) {
            playListItems[i].addEventListener("click", getClickedElement.bind(this));
        }

        function getClickedElement(event) {
            for (let i = 0; i < playListItems.length; i++) {
                if (playListItems[i] == event.target) {
                    var clickedIndex = event.target.getAttribute("data-index")
                    if (clickedIndex == this.indexAudio) { // alert('Same audio');
                        this.toggleAudio()
                    } else {
                        loadNewTrack(clickedIndex);
                    }
                }
            }
        }
let isplay =false;
let history_id = '';
let oldhistoryid = '';
        function toggleAudio(historyid = '', name='') {
            document.getElementById("myplayer").style.visibility = "visible";
            if(historyid.length> 0) {  console.log('if233');
                    this.oldhistoryid = this.history_id;
                    // Update the history_id with the new one
                    this.history_id = historyid;
                    if(this.history_id !=this.oldhistoryid) {  console.log('if237');
                        var audiourl  ="history/"+historyid+"/audio";
                        var audio = document.getElementById('myAudio');
                        var source = document.getElementById('source-audio');
                        this.currentAudio = audio;
                        this.currentAudio.src= audiourl;
                        this.name = name;
                    }
                
            }
     
            document.querySelector('#hid').value = this.history_id;
            document.querySelector('.title').innerHTML = this.name;
            if (this.currentAudio.paused && !this.isplay) {  console.log('if250');
                document.querySelector('#icon-play').style.display = 'none';
                document.querySelector('#icon-pause').style.display = 'block';
           
                this.currentAudio.play();
                this.isplay = true; 
             
                if(this.history_id!=this.oldhistoryid) { console.log('if257');
                    $('#'+this.history_id).html('Pause'); 
                    $('#'+this.oldhistoryid).html('Play');  
                  }  else { console.log('if260');
                    $('#'+this.oldhistoryid).html('Pause'); 
                  
                  }  
         
            } else { 
                document.querySelector('#icon-play').style.display = 'block';
                document.querySelector('#icon-pause').style.display = 'none';
                this.currentAudio.pause();
                this.isplay = false; 
                  if(this.history_id!=this.oldhistoryid) { console.log('if269');
                    $('#'+this.history_id).html('Pause'); 
                    $('#'+this.oldhistoryid).html('Play'); 
                  }  else { console.log('if272');
                    $('#'+this.oldhistoryid).html('Play'); 
                  } 
                  
            }
        }

        function pauseAudio() {
            this.currentAudio.pause();
            clearInterval(interval1);
        }

        var timer = document.getElementsByClassName('timer')[0];

        var barProgress = document.getElementById("myBar");


        var width = 0;

        function onTimeUpdate() {
            var t = this.currentAudio.currentTime;
            var timer = document.getElementsByClassName('timer')[0];
            timer.innerHTML = this.getMinutes(t);
           
            this.setBarProgress();
            document.getElementsByClassName('duration')[0].innerHTML = this.getMinutes(t);
            if(!isNaN(this.currentAudio.duration)) {
                if(this.currentAudio.duration !== Infinity) {
                     document.getElementsByClassName('duration')[0].innerHTML = this.getMinutes(this.currentAudio.duration);
                }
            }
            if (this.currentAudio.ended) { 
                document.querySelector('#icon-play').style.display = 'block';
                document.querySelector('#icon-pause').style.display = 'none';
                
            }
        }


        function setBarProgress() {
            var progress = (this.currentAudio.currentTime / this.currentAudio.duration) * 100;
            document.getElementById("myBar").style.width = progress + "%";
        }


        function getMinutes(t) {
            var min = parseInt(parseInt(t) / 60);
            var sec = parseInt(t % 60);
            if (sec < 10) {
                sec = "0" + sec
            }
            if (min < 10) {
                min = "0" + min
            }
            return min + ":" + sec
        }

        var progressbar = document.querySelector('#myProgress')
        progressbar.addEventListener("click", seek.bind(this));


        function seek(event) {
            var percent = event.offsetX / progressbar.offsetWidth;
            this.currentAudio.currentTime = percent * this.currentAudio.duration;
            barProgress.style.width = percent * 100 + "%";
        }

        function forward() {
            this.currentAudio.currentTime = this.currentAudio.currentTime + 5
            this.setBarProgress();
        }

        function rewind() {
            this.currentAudio.currentTime = this.currentAudio.currentTime - 5
            this.setBarProgress();
        }


      

  

        function updateStylePlaylist(oldIndex, newIndex) {
            document.querySelector('#ptc-' + oldIndex).classList.remove("active-track");
            this.pauseToPlay(oldIndex);
            document.querySelector('#ptc-' + newIndex).classList.add("active-track");
            this.playToPause(newIndex)
        }

        function playToPause(index) {
            var ele = document.querySelector('#p-img-' + index)
            ele.classList.remove("fa-play");
            ele.classList.add("fa-pause");
        }

        function pauseToPlay(index) {
            var ele = document.querySelector('#p-img-' + index)
            ele.classList.remove("fa-pause");
            ele.classList.add("fa-play");
        }


        function toggleMute() {
            var btnMute = document.querySelector('#toggleMute');
            var volUp = document.querySelector('#icon-vol-up');
            var volMute = document.querySelector('#icon-vol-mute');
            if (this.currentAudio.muted == false) {
                this.currentAudio.muted = true
                volUp.style.display = "none"
                volMute.style.display = "block"
            } else {
                this.currentAudio.muted = false
                volMute.style.display = "none"
                volUp.style.display = "block"
            }
        }
        </script>

@endsection