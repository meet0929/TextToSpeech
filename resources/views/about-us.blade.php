@extends('common')
@section('title','About Us - TextToSpeech.ai')
@section('description','Learn about TextToSpeech.ai, our mission, and how our advanced text-to-speech technology is helping creators worldwide. Meet the team behind the innovation.')
@section('content')
 <div class="container pt-3">
    
        <div class="row justify-content-center px-2">
            <div class="col-md-10 col-12">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <figure>
                            <svg width="410" height="448" viewBox="0 0 410 448" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="img-fluid mx-auto d-block">
                                <circle cx="213" cy="202" r="197" fill="#CF69FF" fill-opacity="0.14" />
                                <path
                                    d="M124.859 52.2632C133.047 56.9903 133.047 68.8079 124.859 73.535L38.8906 123.169C30.7031 127.896 20.4687 121.987 20.4688 112.533L20.4688 13.265C20.4688 3.81092 30.7031 -2.0979 38.8906 2.62915L124.859 52.2632Z"
                                    fill="#AD12F6" />
                                <path
                                    d="M55.2656 35.8883C63.4531 40.6154 63.4531 52.433 55.2656 57.1601L18.4219 78.4318C10.2344 83.1589 -4.13252e-07 77.2501 0 67.796L1.85963e-06 25.2525C2.27289e-06 15.7983 10.2344 9.88952 18.4219 14.6166L55.2656 35.8883Z"
                                    fill="#FFAB00" />
                                <path
                                    d="M58.5556 406.989C63.1481 409.661 63.1482 416.339 58.5556 419.011L10.3333 447.06C5.74074 449.731 -2.31805e-07 446.392 0 441.049L2.43395e-06 384.951C2.66575e-06 379.608 5.74074 376.269 10.3333 378.94L58.5556 406.989Z"
                                    fill="#FFD37A" fill-opacity="0.16" />
                            </svg>
                        </figure>
                    </div>
                    <div class="col-12 about-cover-h1">
                        <h1 class="cover-text-line mb-0 text-md-center">WHO WE ARE?</h1>
                        <p class="text-md-center"><b>Crafting Tomorrow's Voice: Pioneering the Future of Vocal
                                Innovation</b></p>
                        <div class="row">
                            <div class="col-md-5 col-12 order-1 order-md-0">
                            </div>
                            <div class="col-md-6 col-12 order-0 about-cover-p">
                                <p>Founded in [Year] by [Founders' Names], Text-to-Speech (TTS) began as a small team
                                    with a big
                                    vision: to revolutionize the way we interact with digital content. From our early
                                    days in a
                                    tiny office to becoming a leader in voice technology, our journey has been fueled by
                                    passion, creativity, and a relentless pursuit of excellence. Today, we're proud to
                                    serve
                                    millions of users worldwide and to continue pushing the boundaries of what's
                                    possible.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-5 py-5 px-2">
            <div class="col-md-11 col-12">
                <div class="row justify-content-evenly mb-4">
                    <div class="col-lg-6 col-12">
                        <div class="d-flex align-items-center">
                            <img src="{{ Vite::asset('resources/images/flash.png') }}" alt="flash emoji" width="43" height="75"
                                class="img-fluid me-2">
                            <h2 class="heading2">Speak the Language of <span class="c-purple">Innovation</span></h2>
                        </div>
                        <img src="{{ Vite::asset('resources/images/characters-img1.png') }}" alt="characters-img1" width="467" height="108"
                            class="img-fluid my-2">
                        <p>Detail the key features such as multiple languages, various voices, speech modulation, and
                            integration capabilities. Explain how each feature contributes to creating a realistic voice
                            experience.</p>
                    </div>
                    <div class="col-lg-5 col-12 video-bg p-2">
                        <video class="video-home mx-auto d-block img-fluid" controls>
                            <source src="{{ Vite::asset('resources/images/sample-video.mp4') }}" type="video/mp4" kind="captions" srclang="en"
                                label="english_captions">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="row justify-content-evenly">
                    <div class="col-md-3 col-6">
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <p class="f24 text-center">Trusted by <b>00+</b> users and <b>00+</b> high-end companies</p>
                    </div>
                    <div class="col-md-3 col-6">
                        <hr>
                    </div>
                    <div class="d-flex justify-content-around flex-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="59" height="69" viewBox="0 0 59 69" fill="none"
                            class="img-fluid m-3">
                            <path
                                d="M11.9068 8.84759C15.6225 3.53155 21.4509 -0.00287645 29.4638 1.75655e-06C37.4825 1.75655e-06 43.308 3.53443 47.0266 8.84759C50.656 14.0399 52.1757 20.7576 52.1757 27.2249C52.1757 27.6192 52.1642 28.1776 52.1555 28.6266L52.1498 28.9029L54.7805 35.4825L54.7891 35.5026C55.5748 37.5519 56.3721 39.7336 56.9621 41.6389C58.361 46.1376 58.8877 49.4763 58.9308 51.8134C58.951 52.9675 58.8589 53.9893 58.6315 54.824C58.5052 55.3116 58.3022 55.776 58.03 56.1998C57.7761 56.5972 57.4385 56.9345 57.0408 57.1881C56.6431 57.4416 56.1949 57.6053 55.7274 57.6676C54.4725 57.8173 53.5054 57.2186 53.137 56.9711C52.6724 56.6498 52.2422 56.2814 51.8533 55.8717C51.6384 55.6486 51.4301 55.4192 51.2288 55.1838C50.5285 56.8227 49.6233 58.3662 48.5348 59.7774C49.0989 60.0738 49.6371 60.3991 50.1178 60.756C51.1194 61.5043 51.8476 62.4829 52.1095 63.6572C52.3599 64.7797 52.1181 65.8245 51.6691 66.5843C51.308 67.1743 50.7857 67.6486 50.1638 67.9515C49.7885 68.1358 49.3949 68.2805 48.9895 68.3832C48.2062 68.5732 47.4095 68.7031 46.6064 68.7718C44.9025 68.9416 42.7496 69.002 40.5708 68.9963C36.4118 68.9905 31.8355 68.7545 29.4753 68.5127C27.1152 68.7545 22.5389 68.9905 18.3799 68.9963C16.3656 69.0183 14.3514 68.9434 12.3443 68.7718C11.5411 68.7032 10.7444 68.5733 9.96113 68.3832C9.55576 68.2804 9.1622 68.1358 8.78682 67.9515C8.16547 67.6503 7.64391 67.1767 7.2844 66.5872L7.29016 66.5987C6.77008 65.7106 6.60846 64.6575 6.83828 63.6543C7.09732 62.4742 7.83413 61.4957 8.83863 60.7531L8.84151 60.7502C9.31929 60.3962 9.85463 60.0738 10.413 59.7803C9.3243 58.3681 8.41908 56.8237 7.71901 55.1838C7.51652 55.419 7.30728 55.6484 7.09156 55.8717C6.70353 56.2812 6.27433 56.6496 5.81076 56.9711C5.44235 57.2158 4.47527 57.8202 3.2175 57.6676H3.20887C2.74462 57.6043 2.29955 57.4413 1.90412 57.1899C1.5087 56.9386 1.17225 56.6047 0.917819 56.2113C0.64405 55.7859 0.440004 55.3195 0.313396 54.8297C0.0713083 53.8435 -0.0313864 52.8282 0.00830713 51.8134C0.0486019 49.4734 0.572434 46.1376 1.96836 41.6418C2.55839 39.7393 3.35565 37.5548 4.14428 35.4997L4.15867 35.4623L6.78071 28.9029C6.7693 28.3436 6.76066 27.7843 6.75481 27.2249C6.75481 20.7576 8.2745 14.0399 11.9068 8.84759ZM6.65407 46.7823L11.9816 38.1362V48.2962C11.9816 51.2953 13.5848 55.5522 17.2689 58.6721L21.2811 62.0684L17.4847 63.2398H18.3712C22.5935 63.2341 27.1843 62.9808 29.153 62.7592L29.4753 62.7218L29.7977 62.7592C31.7664 62.9808 36.36 63.2341 40.5794 63.2398H41.463L37.6638 62.0655L41.6789 58.6693C45.363 55.5522 46.9633 51.2953 46.9633 48.2933V38.1333L52.2937 46.7852L52.3023 46.7967L52.3311 46.8456L52.4549 47.0442L52.4837 47.0903C52.192 45.8305 51.8522 44.5823 51.4648 43.3486C50.8427 41.4055 50.1612 39.482 49.4213 37.5807L46.379 29.9822V29.4267C46.3822 29.1197 46.389 28.8126 46.3991 28.5057C46.4078 28.0538 46.4193 27.5501 46.4193 27.2249C46.4193 21.5462 45.0665 16.0949 42.3092 12.146C39.6354 8.32376 35.5455 5.7564 29.4667 5.7564C23.3851 5.7564 19.2951 8.32376 16.6213 12.146C13.8611 16.092 12.5112 21.5491 12.5112 27.2249C12.5112 27.8006 12.5371 28.8281 12.5457 29.2224L12.5486 29.3692L12.5601 29.9534L9.50925 37.5807C8.7687 39.4808 8.0872 41.4034 7.46573 43.3457M6.65407 46.7823L6.64544 46.7967L6.61666 46.8456L6.49289 47.0442L6.44396 47.119C6.69437 46.0167 7.02824 44.7589 7.46573 43.3486"
                                fill="#858585" fill-opacity="0.5" />
                        </svg>
                        <svg width="71" height="51" viewBox="0 0 71 51" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="img-fluid m-3">
                            <path
                                d="M70.6191 31.6881C70.6191 36.7553 69.605 41.1154 67.6853 44.299C65.2209 48.3882 61.3904 50.5517 56.609 50.5517C47.4826 50.5517 41.3472 39.1024 34.8537 26.982C30.1356 18.1776 24.28 7.22167 19.4656 7.22167C17.1456 7.22167 14.3021 10.0411 12.0453 14.5788C9.46389 19.9168 8.09324 25.759 8.03124 31.6881C8.03124 35.3892 8.70527 38.5427 9.92693 40.5708C11.0613 42.4544 12.617 43.33 14.8196 43.33C18.957 43.33 24.0363 34.6039 25.7063 31.7483C26.1887 30.9207 26.9801 30.3187 27.9064 30.0746C28.8327 29.8306 29.818 29.9645 30.6456 30.4469C31.4732 30.9293 32.0752 31.7207 32.3193 32.647C32.5633 33.5733 32.4294 34.5586 31.947 35.3862C29.266 39.984 26.9731 43.2097 24.7253 45.5507C21.4967 48.9148 18.2619 50.5517 14.8196 50.5517C10.0383 50.5517 6.20777 48.3882 3.74338 44.299C1.82361 41.1154 0.80957 36.7553 0.80957 31.6881C0.80957 18.4574 7.90487 0 19.4656 0C28.592 0 34.7274 11.4494 41.2209 23.5697C45.945 32.3742 51.8036 43.33 56.609 43.33C58.8116 43.33 60.3673 42.4544 61.5017 40.5708C62.7234 38.5427 63.3974 35.3892 63.3974 31.6881C63.3364 25.7592 61.9667 19.917 59.3864 14.5788C57.1296 10.0411 54.2861 7.22167 51.9631 7.22167C50.2419 7.22167 48.1687 8.72619 45.7976 11.6841C45.1991 12.4318 44.328 12.9112 43.376 13.0167C42.424 13.1223 41.4691 12.8453 40.7214 12.2468C39.9736 11.6482 39.4942 10.7772 39.3887 9.82517C39.2832 8.8732 39.5601 7.91829 40.1587 7.17052C44.0253 2.34704 47.8859 0 51.9631 0C57.274 0 62.1938 4.03511 65.8498 11.3621C68.9165 17.7037 70.545 24.6443 70.6191 31.6881Z"
                                fill="#858585" fill-opacity="0.5" />
                        </svg>
                        <svg width="71" height="51" viewBox="0 0 71 51" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="img-fluid m-3">
                            <path
                                d="M13.2203 22.4096H7.07013V22.4042C6.92722 22.3988 6.79163 22.3396 6.69049 22.2385C6.58936 22.1373 6.53018 22.0017 6.52478 21.8588V16.3454C6.52478 16.2007 6.58225 16.062 6.68451 15.9598C6.78678 15.8575 6.92551 15.8 7.07013 15.8H13.2203C13.3649 15.8 13.5036 15.8575 13.6059 15.9598C13.7082 16.062 13.7656 16.2007 13.7656 16.3454V21.8643C13.7656 22.0089 13.7082 22.1476 13.6059 22.2499C13.5036 22.3522 13.3649 22.4096 13.2203 22.4096Z"
                                fill="#858585" fill-opacity="0.5" />
                            <path
                                d="M21.7031 22.4096H15.5516V22.4042C15.4087 22.3988 15.2731 22.3396 15.172 22.2385C15.0709 22.1373 15.0117 22.0017 15.0063 21.8588V16.3454C15.0063 16.2007 15.0637 16.062 15.166 15.9598C15.2683 15.8575 15.407 15.8 15.5516 15.8H21.7031C21.8478 15.8 21.9865 15.8575 22.0887 15.9598C22.191 16.062 22.2485 16.2007 22.2485 16.3454V21.8643C22.2485 22.0089 22.191 22.1476 22.0887 22.2499C21.9865 22.3522 21.8478 22.4096 21.7031 22.4096Z"
                                fill="#858585" fill-opacity="0.5" />
                            <path
                                d="M30.3441 22.4096H24.1954V22.4042C24.1231 22.4066 24.0511 22.3942 23.9838 22.3677C23.9165 22.3412 23.8554 22.3011 23.8043 22.2499C23.7531 22.1988 23.713 22.1377 23.6865 22.0704C23.66 22.0031 23.6476 21.9311 23.65 21.8588V16.3454C23.65 16.2007 23.7075 16.062 23.8098 15.9598C23.912 15.8575 24.0507 15.8 24.1954 15.8H30.3441C30.4888 15.8 30.6275 15.8575 30.7298 15.9598C30.832 16.062 30.8895 16.2007 30.8895 16.3454V21.8643C30.8895 22.0089 30.832 22.1476 30.7298 22.2499C30.6275 22.3522 30.4888 22.4096 30.3441 22.4096Z"
                                fill="#858585" fill-opacity="0.5" />
                            <path
                                d="M38.8625 22.4096H32.7109V22.4042C32.5663 22.4042 32.4276 22.3467 32.3253 22.2444C32.2231 22.1422 32.1656 22.0035 32.1656 21.8588V16.3454C32.1656 16.2007 32.2231 16.062 32.3253 15.9598C32.4276 15.8575 32.5663 15.8 32.7109 15.8H38.8625C39.0071 15.8 39.1458 15.8575 39.2481 15.9598C39.3503 16.062 39.4078 16.2007 39.4078 16.3454V21.8643C39.4078 22.0089 39.3503 22.1476 39.2481 22.2499C39.1458 22.3522 39.0071 22.4096 38.8625 22.4096Z"
                                fill="#858585" fill-opacity="0.5" />
                            <path
                                d="M21.7031 14.5294H15.5516V14.5239C15.4105 14.5132 15.278 14.4524 15.1779 14.3523C15.0779 14.2523 15.017 14.1197 15.0063 13.9786V8.46513C15.0063 8.3205 15.0637 8.18179 15.166 8.07951C15.2683 7.97724 15.407 7.91978 15.5516 7.91978H21.7031C21.8478 7.91978 21.9865 7.97724 22.0887 8.07951C22.191 8.18179 22.2485 8.3205 22.2485 8.46513V13.984C22.2431 14.1269 22.1839 14.2625 22.0828 14.3637C21.9816 14.4648 21.846 14.524 21.7031 14.5294Z"
                                fill="#858585" fill-opacity="0.5" />
                            <path
                                d="M30.3441 14.5294H24.1954V14.5239C24.0507 14.5239 23.912 14.4665 23.8098 14.3642C23.7075 14.2619 23.65 14.1232 23.65 13.9786V8.46513C23.65 8.3205 23.7075 8.18179 23.8098 8.07951C23.912 7.97724 24.0507 7.91978 24.1954 7.91978H30.3441C30.4888 7.91978 30.6275 7.97724 30.7298 8.07951C30.832 8.18179 30.8895 8.3205 30.8895 8.46513V13.984C30.8841 14.1269 30.8249 14.2625 30.7238 14.3637C30.6227 14.4648 30.4871 14.524 30.3441 14.5294Z"
                                fill="#858585" fill-opacity="0.5" />
                            <path
                                d="M38.8625 14.5294H32.7109V14.5239C32.568 14.5185 32.4324 14.4593 32.3313 14.3582C32.2302 14.2571 32.171 14.1215 32.1656 13.9786V8.46513C32.1656 8.3205 32.2231 8.18179 32.3253 8.07951C32.4276 7.97724 32.5663 7.91978 32.7109 7.91978H38.8625C39.0054 7.92518 39.141 7.98437 39.2421 8.0855C39.3432 8.18662 39.4024 8.32222 39.4078 8.46513V13.984C39.4024 14.1269 39.3432 14.2625 39.2421 14.3637C39.141 14.4648 39.0054 14.524 38.8625 14.5294Z"
                                fill="#858585" fill-opacity="0.5" />
                            <path
                                d="M38.8625 6.61641H32.7109V6.60414C32.5681 6.59843 32.4327 6.53914 32.3317 6.43808C32.2306 6.33702 32.1713 6.2016 32.1656 6.05879V0.545346C32.1656 0.400711 32.2231 0.262 32.3253 0.159728C32.4276 0.0574551 32.5663 0 32.7109 0H38.8625C39.0054 0.00539875 39.141 0.0645876 39.2421 0.165712C39.3432 0.266838 39.4024 0.402434 39.4078 0.545346V6.07106C39.4078 6.2157 39.3503 6.35441 39.2481 6.45668C39.1458 6.55895 39.0071 6.61641 38.8625 6.61641Z"
                                fill="#858585" fill-opacity="0.5" />
                            <path
                                d="M47.4407 22.4096H41.2892V22.4042C41.1463 22.3988 41.0107 22.3396 40.9096 22.2385C40.8085 22.1373 40.7493 22.0017 40.7439 21.8588V16.3454C40.7439 16.2007 40.8014 16.062 40.9036 15.9598C41.0059 15.8575 41.1446 15.8 41.2892 15.8H47.4407C47.5854 15.8 47.7241 15.8575 47.8264 15.9598C47.9287 16.062 47.9861 16.2007 47.9861 16.3454V21.8643C47.9861 22.0089 47.9287 22.1476 47.8264 22.2499C47.7241 22.3522 47.5854 22.4096 47.4407 22.4096Z"
                                fill="#858585" fill-opacity="0.5" />
                            <path
                                d="M64.048 17.4813C67.8027 17.4813 69.5519 18.8106 69.7455 18.9728L70.4285 19.4555L70.1368 20.298C69.6736 21.4516 68.9667 22.4914 68.0645 23.3465C66.7052 24.7085 64.2443 26.2982 60.2619 26.2982H59.6143C58.0273 30.3883 55.8582 34.9951 52.2004 39.1138C50.0276 41.5847 47.4691 43.6874 44.6241 45.3403C41.1683 47.313 37.4022 48.6836 33.4868 49.3936C30.6783 49.9116 27.8284 50.1722 24.9726 50.1721C18.6602 50.1721 13.0595 48.9723 9.6211 46.8646C6.5835 44.9913 4.2208 41.9033 2.63382 37.7518C1.2428 33.9626 0.561129 29.9497 0.622866 25.9137C0.621066 25.6273 0.675967 25.3433 0.784396 25.0781C0.892825 24.8129 1.05265 24.5718 1.25464 24.3687C1.45664 24.1656 1.69681 24.0044 1.96137 23.8945C2.22592 23.7846 2.50958 23.7281 2.79608 23.7283H48.7674C49.3509 23.701 52.1335 23.4747 53.85 22.5012C52.4253 20.2312 52.0027 17.5727 52.6843 14.7505C53.0468 13.2786 53.6483 11.8762 54.4649 10.599L55.1125 9.65833L56.1159 10.2418C56.1278 10.2518 56.1606 10.2737 56.2115 10.3078C56.8595 10.7416 60.442 13.1394 61.1017 17.7404C62.0751 17.5737 63.0605 17.487 64.048 17.4813Z"
                                fill="#858585" fill-opacity="0.5" />
                        </svg>
                        <svg width="71" height="48" viewBox="0 0 71 48" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="img-fluid m-3">
                            <path
                                d="M70.2094 33.8207C70.009 32.1954 69.1855 30.7856 67.7552 29.6253C67.7374 29.6037 67.7178 29.5836 67.6966 29.5653L67.6243 29.5135L67.6011 29.4971L66.8417 28.9518L66.8158 28.9327L66.719 28.8645C66.6834 28.8438 66.6454 28.8277 66.6058 28.8168C64.2034 27.3865 60.2261 26.3843 54.141 28.5318C52.6889 26.0885 52.5239 24.1305 53.4961 21.1309C53.6692 20.6087 53.5083 20.2638 52.9902 20.0401C51.9485 19.597 50.5223 19.8233 49.5106 20.0906C49.0389 20.2133 48.7553 20.4805 48.6653 20.8855C48.0245 23.8851 46.162 26.6257 44.3608 29.2708L44.2545 29.4262C43.1446 27.0729 43.375 25.2499 44.1481 22.9661C44.3022 22.5107 44.1809 22.2081 43.7541 21.9817C42.5624 21.3668 40.7749 21.7895 40.0632 21.9994C39.1606 22.2626 38.1925 24.7018 37.1113 27.6224C36.8386 28.3573 36.6041 28.9858 36.4636 29.279C36.1296 29.9607 35.8105 30.7379 35.4724 31.5628C34.7089 33.4294 33.8485 35.5305 32.6187 36.8503C32.1714 35.8618 32.875 34.3034 33.5581 32.7913C34.3666 31.0038 35.1302 29.3144 34.2507 28.2359C34.1117 28.0654 33.9391 27.9252 33.7438 27.8239C33.5485 27.7226 33.3345 27.6624 33.115 27.6469C32.8286 27.6251 32.5411 27.6719 32.2764 27.7833C32.3678 27.0129 32.3719 26.4048 32.1469 25.6699C31.8251 24.6214 30.9893 24.0337 29.8386 24.0651C27.218 24.1414 25.001 26.0939 23.6007 27.7192C22.6681 28.81 20.6011 29.6417 18.7863 30.3711C18.0691 30.6752 17.3874 30.9479 16.8188 31.2206C15.9121 30.4543 14.76 29.6812 13.5465 28.8645C10.1378 26.5766 6.27512 23.9819 6.1415 20.4642C5.95062 15.268 11.8681 11.5826 17.0329 8.95243C20.9474 6.96177 24.3506 5.64194 27.4375 4.92066C31.7733 3.90761 35.4356 4.11213 38.3207 5.52604C39.8996 6.29913 40.6386 7.98028 40.1695 9.70916C38.9424 14.2018 33.858 17.2805 29.51 18.6658C26.8907 19.5002 24.6615 19.8493 22.6926 19.7347C20.2247 19.5916 18.2095 18.3535 17.3478 17.8259C17.2098 17.7316 17.0638 17.6495 16.9115 17.5804L16.872 17.5709C16.794 17.5515 16.7121 17.5539 16.6354 17.578C16.5586 17.602 16.49 17.6468 16.437 17.7073C16.2598 17.9186 16.3225 18.2526 16.3866 18.4217C17.2251 20.6128 18.9567 21.9967 21.5323 22.5353C22.3752 22.7041 23.2333 22.7859 24.0929 22.7793C30.1208 22.7793 37.8121 19.3039 40.6372 16.442C42.5638 14.4922 43.9668 12.4879 44.5476 9.03151C45.1544 5.41151 42.7001 2.89591 40.1995 1.73697C34.1226 -1.06768 27.2207 0.0408159 22.5004 1.46427C16.9783 3.12907 11.2654 6.15596 6.82869 9.77188C1.35846 14.2263 -0.618564 18.3617 0.949422 22.0772C2.55968 25.8853 6.48646 28.2673 10.2837 30.5716C11.5108 31.3146 12.678 32.0223 13.7292 32.7531C13.4129 32.9072 13.0897 33.064 12.7611 33.2208C9.57335 34.7656 5.95743 36.504 3.95178 39.3768C2.49559 41.4697 2.2229 43.5531 3.14188 45.5697C3.63272 46.6427 4.50534 47.3708 5.71746 47.7335C6.348 47.9121 7.001 47.9989 7.65631 47.9912C10.0165 47.9912 12.6139 47.0368 14.0278 46.1546C16.5257 44.5866 18.1441 42.4814 18.8395 39.8977C19.4585 37.5989 19.3099 35.3151 18.41 33.2767L21.471 31.7332C19.9943 36.6417 21.126 39.5732 22.3695 41.1902C22.8276 41.7861 23.6539 42.1447 24.5769 42.161C25.5 42.1774 26.3494 41.8297 26.8294 41.2379C27.7374 40.1131 28.4083 38.7973 29.0259 37.4816C28.9932 38.3406 29.0341 39.2105 29.3273 39.9481C29.5904 40.6121 30.024 41.0525 30.583 41.2216C31.1775 41.4029 31.8742 41.2502 32.545 40.7921C35.5678 38.7237 37.6349 33.7593 39.2956 29.7685C39.5314 29.2013 39.7578 28.6559 39.9773 28.146C40.3882 29.6163 40.9597 31.037 41.6816 32.3822C41.8425 32.674 41.8289 32.8022 41.6107 33.0422C41.2821 33.4021 40.824 33.8371 40.3386 34.2979C38.8688 35.6927 37.039 37.4339 36.7936 38.965C36.6982 39.5786 37.1208 40.1376 37.7767 40.2644C39.7496 40.6571 42.1261 40.0831 44.1359 38.7305C45.9629 37.5034 46.6501 35.7923 46.1811 33.6598C45.727 31.6064 46.7633 29.0567 49.2611 26.0762C49.6702 27.7846 50.2156 29.1658 50.9682 30.3752L50.9477 30.3916C49.1289 31.98 46.6365 34.1547 47.0237 36.793C47.0562 37.044 47.1406 37.2853 47.2716 37.5018C47.4026 37.7182 47.5773 37.905 47.7845 38.0502C48.0059 38.1997 48.2559 38.3018 48.5187 38.3501C48.7815 38.3985 49.0514 38.392 49.3116 38.331C51.6936 37.8306 53.4865 36.823 54.79 35.2537C56.0935 33.6843 55.6176 31.9446 55.1786 30.5947C58.5872 29.6703 61.6223 29.6935 64.4638 30.6629C66.059 31.2083 67.203 32.1041 67.8629 33.3408C68.6933 34.8965 68.2447 36.3322 66.5962 37.3834C66.0904 37.7066 65.8463 37.9043 65.8313 38.1538C65.828 38.2117 65.8386 38.2696 65.8624 38.3225C65.8861 38.3754 65.9222 38.4218 65.9677 38.4578C66.1586 38.6146 66.7476 38.8873 68.0797 38.0488C69.3068 37.2784 70.0267 36.2299 70.2108 34.9128C70.2478 34.5497 70.2474 34.1837 70.2094 33.8207ZM15.7076 37.2375L15.6939 37.4121C15.4812 39.4082 14.4668 41.148 12.6739 42.5932C11.5476 43.5013 10.3246 44.059 9.23112 44.1653C8.46758 44.2389 7.91265 44.1353 7.58269 43.8558C7.3359 43.6472 7.20364 43.335 7.17365 42.9014C6.95004 39.4273 12.3984 35.975 15.4649 34.8392C15.6837 35.6186 15.7658 36.4301 15.7076 37.2375ZM29.6627 27.4397C29.1582 30.3152 27.687 35.7432 25.3746 37.8497C25.2641 37.9506 25.1714 37.9861 25.1291 37.9765C25.0869 37.967 25.0541 37.9165 25.0201 37.8402C24.2483 36.0513 24.5333 33.0299 25.7018 30.6561C26.6003 28.8263 27.8833 27.6142 29.3177 27.2474C29.3772 27.231 29.4387 27.2223 29.5004 27.2215C29.5487 27.2181 29.5967 27.2311 29.6368 27.2583C29.6536 27.285 29.6647 27.315 29.6691 27.3462C29.6736 27.3775 29.6714 27.4093 29.6627 27.4397ZM41.0462 37.922C40.6113 38.376 40.0155 38.3147 40.1559 38.1483L42.3702 35.7977C42.1916 36.6063 41.6639 37.2757 41.0462 37.922ZM50.2319 35.8891C50.0213 35.9928 49.7935 36.0571 49.5597 36.0786C49.497 34.8419 50.6955 33.4498 51.8776 32.5213C52.1953 33.8112 51.5449 35.1746 50.2319 35.8891Z"
                                fill="#858585" fill-opacity="0.5" />
                        </svg>
                        <svg width="67" height="64" viewBox="0 0 67 64" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="img-fluid m-3">
                            <path
                                d="M66.2037 27.2242L59.8367 2.8758C59.6341 2.08502 59.1835 1.37993 58.5509 0.863887C57.9184 0.347847 57.1372 0.047994 56.3218 0.00828118C55.5065 -0.0314316 54.6998 0.191084 54.0201 0.643211C53.3404 1.09534 52.8235 1.7533 52.5449 2.52065L46.8882 17.9136H20.1529L14.4961 2.51425C14.217 1.74702 13.6995 1.08938 13.0194 0.637751C12.3392 0.186121 11.5323 -0.0357419 10.7169 0.00468917C9.90146 0.0451203 9.12044 0.345719 8.48833 0.862414C7.85621 1.37911 7.40625 2.08472 7.20441 2.8758L0.837351 27.2242C-0.103024 30.8076 0.0664239 34.5919 1.32329 38.0769C2.58015 41.5618 4.86522 44.5832 7.87631 46.7414L31.3193 63.3021C31.9623 63.7562 32.7302 64 33.5173 64C34.3045 64 35.0724 63.7562 35.7154 63.3021L59.1584 46.7414C62.1706 44.584 64.457 41.563 65.715 38.078C66.973 34.593 67.1434 30.8082 66.2037 27.2242ZM5.58225 29.4639L29.0828 46.0695L22.4534 50.7568L10.8327 42.55C8.8048 41.0936 7.23392 39.0895 6.30404 36.7724C5.37416 34.4554 5.12379 31.9213 5.58225 29.4671V29.4639ZM33.5205 58.5796L26.8879 53.8923L33.5205 49.205L40.1532 53.8891L33.5205 58.5796ZM56.2084 42.55L44.5877 50.76L37.9583 46.0695L61.4588 29.4639C61.9179 31.9186 61.6679 34.4533 60.738 36.771C59.8081 39.0887 58.2368 41.0933 56.2084 42.55Z"
                                fill="#858585" fill-opacity="0.5" />
                        </svg>
                        <svg width="70" height="37" viewBox="0 0 70 37" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="img-fluid m-3">
                            <path
                                d="M36.0772 10.9407C37.8725 10.9407 39.5541 11.2815 41.1221 11.9632C42.69 12.6449 44.0762 13.5765 45.2806 14.758C46.485 15.9396 47.4167 17.3142 48.0757 18.8821C48.7347 20.4499 49.0756 22.1427 49.0983 23.9605C49.0983 25.7555 48.7575 27.4369 48.0757 29.0048C47.394 30.5726 46.4623 31.9586 45.2806 33.1629C44.099 34.3672 42.7241 35.2988 41.1561 35.9577C39.5882 36.6167 37.8952 36.9575 36.0772 36.9802C34.8728 36.9802 33.7025 36.8212 32.5663 36.5031C31.4301 36.185 30.3734 35.7305 29.3962 35.1397C28.4191 34.549 27.5101 33.8219 26.6693 32.9584C25.8285 32.095 25.1354 31.1293 24.59 30.0613C24.0219 31.1293 23.3288 32.0836 22.5107 32.9243C21.6926 33.765 20.7837 34.4922 19.7838 35.1057C18.7839 35.7192 17.7159 36.185 16.5796 36.5031C15.4434 36.8212 14.2731 36.9802 13.0687 36.9802C11.3189 36.9802 9.66005 36.6508 8.09206 35.9918C6.52408 35.3329 5.13788 34.4126 3.93349 33.2311C2.72909 32.0495 1.78603 30.6976 1.10429 29.1752C0.422561 27.6528 0.0703319 25.9827 0.0476074 24.165V2.55624C0.0476074 1.85185 0.308939 1.24972 0.831601 0.749829C1.35426 0.249943 1.95646 0 2.6382 0C3.31993 0 3.92213 0.249943 4.44479 0.749829C4.96745 1.24972 5.24014 1.85185 5.26287 2.55624V13.531C6.39909 12.6903 7.62621 12.0541 8.94423 11.6224C10.2622 11.1906 11.6371 10.9634 13.0687 10.9407C14.2731 10.9407 15.4434 11.0997 16.5796 11.4179C17.7159 11.736 18.7839 12.1904 19.7838 12.7812C20.7837 13.372 21.6926 14.0991 22.5107 14.9625C23.3288 15.8259 24.0219 16.7916 24.59 17.8596C25.1581 16.7916 25.8512 15.8373 26.6693 14.9966C27.4874 14.1559 28.385 13.4288 29.3622 12.8153C30.3393 12.2018 31.4074 11.736 32.5663 11.4179C33.7252 11.0997 34.8956 10.9407 36.0772 10.9407ZM13.0687 31.7655C14.1368 31.7655 15.148 31.561 16.1024 31.152C17.0569 30.743 17.8863 30.1863 18.5908 29.4819C19.2952 28.7775 19.852 27.9482 20.261 26.9939C20.67 26.0395 20.8746 25.0284 20.8746 23.9605C20.8746 22.8698 20.67 21.8587 20.261 20.9271C19.852 19.9955 19.2952 19.1661 18.5908 18.439C17.8863 17.7119 17.0682 17.1552 16.1365 16.7689C15.2048 16.3826 14.1822 16.1781 13.0687 16.1554C11.9779 16.1554 10.9667 16.3599 10.035 16.7689C9.1033 17.1779 8.27386 17.7346 7.54668 18.439C6.81949 19.1434 6.26274 19.9614 5.87643 20.893C5.49011 21.8246 5.28559 22.8471 5.26287 23.9605C5.26287 25.0284 5.46739 26.0395 5.87643 26.9939C6.28547 27.9482 6.84222 28.7775 7.54668 29.4819C8.25113 30.1863 9.08058 30.743 10.035 31.152C10.9894 31.561 12.0007 31.7655 13.0687 31.7655ZM36.0772 31.7655C37.1453 31.7655 38.1565 31.561 39.1109 31.152C40.0654 30.743 40.8948 30.1863 41.5993 29.4819C42.3037 28.7775 42.8605 27.9482 43.2695 26.9939C43.6786 26.0395 43.8831 25.0284 43.8831 23.9605C43.8831 22.8698 43.6786 21.8587 43.2695 20.9271C42.8605 19.9955 42.3037 19.1661 41.5993 18.439C40.8948 17.7119 40.0767 17.1552 39.145 16.7689C38.2133 16.3826 37.1907 16.1781 36.0772 16.1554C35.0092 16.1554 33.9979 16.3599 33.0435 16.7689C32.0891 17.1779 31.2596 17.7346 30.5552 18.439C29.8507 19.1434 29.294 19.9727 28.8849 20.9271C28.4759 21.8814 28.2714 22.8925 28.2714 23.9605C28.2714 25.0284 28.4759 26.0395 28.8849 26.9939C29.294 27.9482 29.8507 28.7775 30.5552 29.4819C31.2596 30.1863 32.0891 30.743 33.0435 31.152C33.9979 31.561 35.0092 31.7655 36.0772 31.7655ZM69.3117 32.6176C69.6753 33.0493 69.8571 33.5606 69.8571 34.1513C69.8571 34.9239 69.5731 35.5487 69.005 36.0259C68.4368 36.5031 67.7665 36.7416 66.9938 36.7416C66.5848 36.7416 66.1871 36.6621 65.8008 36.5031C65.4145 36.344 65.0736 36.0941 64.7782 35.7532L58.7108 28.289L52.6093 35.7532C52.3366 36.0713 52.0071 36.3099 51.6208 36.469C51.2344 36.628 50.8254 36.7189 50.3936 36.7416C49.6437 36.7416 48.9847 36.5031 48.4166 36.0259C47.8485 35.5487 47.5531 34.9239 47.5303 34.1513C47.5303 33.606 47.7121 33.0947 48.0757 32.6176L55.1317 23.9264L48.0757 15.2352C47.7121 14.758 47.5303 14.2468 47.5303 13.7014C47.5303 13.3152 47.6099 12.963 47.769 12.6449C47.928 12.3267 48.1325 12.0541 48.3825 11.8269C48.6325 11.5996 48.9393 11.4292 49.3029 11.3156C49.6665 11.202 50.0187 11.1338 50.3595 11.1111C50.7686 11.1111 51.1776 11.1906 51.5867 11.3497C51.9957 11.5087 52.3366 11.7587 52.6093 12.0995L58.7108 19.5978L64.7782 12.0995C65.0282 11.7814 65.369 11.5428 65.8008 11.3838C66.2326 11.2247 66.653 11.1338 67.062 11.1111C67.4256 11.1111 67.7665 11.1679 68.0846 11.2815C68.4028 11.3951 68.6982 11.5769 68.9709 11.8269C69.2436 12.0768 69.4594 12.3608 69.6185 12.6789C69.7776 12.997 69.8571 13.3379 69.8571 13.7014C69.8571 14.2468 69.6753 14.758 69.3117 15.2352L62.2217 23.9264L69.3117 32.6176Z"
                                fill="#858585" fill-opacity="0.5" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-5 py-5 px-2">
            <div class="col-md-11 col-12">
                <div class="row justify-content-evenly mb-4 d-flex align-items-center">
                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <img src="./images/mission-future-img.png" width="344" height="549"
                            alt="text to speech - mission and future" class="img-fluid mx-auto d-block">
                    </div>
                    <div class="col-lg-6 col-12">
                        <h2 class="heading2">Our <span class="c-purple">Mission</span> <img src="{{ Vite::asset('resources/images/mission.png') }}"
                                width="39" height="39" alt="mission icon"></h2>
                        <p class="mb-5"> At Text-to-Speech (TTS), we believe in the power of voice to transform
                            interactions and
                            experiences. Our mission is to develop cutting-edge voice technology that enables clear,
                            natural, and accessible communication for all. Whether it's helping businesses connect with
                            customers or individuals enjoying their favorite books, we're committed to making
                            high-quality voice technology available to everyone.</p>
                        <h2 class="heading2">Our <span class="c-purple">Future</span> <img src="{{ Vite::asset('resources/images/future.png') }}"
                                width="39" height="39" alt="mission icon"></h2>
                        <p> At Text-to-Speech (TTS), we believe in the power of voice to transform interactions and
                            experiences. Our mission is to develop cutting-edge voice technology that enables clear,
                            natural, and accessible communication for all. Whether it's helping businesses connect with
                            customers or individuals enjoying their favorite books, we're committed to making
                            high-quality voice technology available to everyone.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-5 px-2">
            <div class="col-md-11 col-12">
                <div class="row justify-content-evenly mb-4">
                    <div class="col-lg-6 col-12 p-2">
                        <div class="light-bg p-4 h-100">
                            <img src="{{ Vite::asset('resources/images/star-emoji.png') }}" width="39" height="39" alt="mission icon" class="mb-2">
                            <h2 class="heading2">Our <span class="c-purple">Values</span> </h2>
                            <div class="d-flex align-items-center py-2 flex-wrap">
                                <p class="ptext-pbg p-2 px-3 me-2">COMMITMENT</p>
                                <p class="ytext-ybg p-2 px-3 me-2">CREATIVITY </p>
                                <p class="ptext-pbg p-2 px-3 me-2">COMMUNITY </p>
                            </div>
                            <p class="mb-0"> Our core values are the heart of everything we do. We are committed to
                                delivering excellence in every aspect of our work, from product development to customer
                                service. Creativity drives our innovation, helping us solve complex challenges and
                                deliver value to our users. Above all, we believe in building a strong community with
                                our employees, partners, and users, fostering an environment of support, learning, and
                                growth.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 p-2">
                        <div class="light-bg p-4 h-100">
                            <img src="{{ Vite::asset('resources/images/trophy.png') }}" width="39" height="39" alt="mission icon" class="mb-2">
                            <h2 class="heading2">Our <span class="c-purple">Achievements</span> </h2>
                            <div class="d-flex align-items-center py-2 flex-wrap">
                                <p class="ptext-pbg p-2 px-3 me-2">MILESTONES</p>
                                <p class="ytext-ybg p-2 px-3 me-2">SUCCESS</p>
                                <p class="ptext-pbg p-2 px-3 me-2">RECOGNITION</p>
                            </div>
                            <p class="mb-0"> Over the years, Text-to-Speech (TTS) has been recognized for its innovative
                                solutions and impact on the industry. We've received [Awards/Recognitions], partnered
                                with leading companies, and most importantly, received positive feedback from the people
                                who use our technology every day. These achievements inspire us to continue our work and
                                set new benchmarks for excellence. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-5 py-5 px-2">
            <div class="col-md-11 col-12 gradient-bg p-5 text-center">
                <h2 class="heading2">Join Us on Our Journey</h2>
                <p>We're always looking for partners, collaborators, and users who share our vision. Whether you're
                    interested in our technology, want to explore a partnership, or simply want to learn more, we invite
                    you to reach out. Together, we can build a future where technology speaks your language.</p>
                <a class="btn btn-secondary p-2 px-3" href="{{route('career')}}" >View Carriers</a>
            </div>
        </div>
    </div>
 @endsection
