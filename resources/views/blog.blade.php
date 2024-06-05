@extends('common')
@section('title','TextToSpeech.ai Blog - Insights and Tips')
@section('description','Dive into our blog for the latest trends, tips, and insights in the text-to-speech world. Enhance your knowledge and your projects with TextToSpeech.ai.')
@section('content')
  <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 col-12">
                <h1 class="heading2 my-3 text-center">BLOGS</h1>
                <div class="mb-5">
                    <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                    <div class="position-relative align-content-center p-4 light-bg mx-md-5 mx-2"
                        style="margin-top: -50px;">
                        <figure class="d-flex justify-content-end blog-btn-margin">
                            <a href="{{route('blog-view')}}">
                                <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_d_242_1489)">
                                        <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                    </g>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                        fill="white" />
                                    <defs>
                                        <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                            <feOffset dy="4" />
                                            <feGaussianBlur stdDeviation="7" />
                                            <feComposite in2="hardAlpha" operator="out" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_242_1489" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_242_1489"
                                                result="shape" />
                                        </filter>
                                    </defs>
                                </svg>
                            </a>
                        </figure>
                        <p class="f24 mb-0 fw-bold">Card title</p>
                        <p class="card-text">Some quick example text to build on the card title and make up mple text to
                            build on the card title and make build on the card title and make the bulk of
                            the card's content.</p>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin"
                                    style="margin-top: -60px;margin-bottom: -20px;">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5 px-2">
            <div class="col-md-10 col-12 light-bg p-4 text-center">
                <h2 class="heading2 mb-3">Search <img src="./images/magnifying-glass-emoji.png" width="32" height="32"
                        alt="magnifying-glass-emoji"></h2>
                <div class="d-flex mx-auto d-block" style="max-width: 600px;">
                    <input type="text" class="form-control h-40px" placeholder="Search">
                    <button class="btn btn-secondary px-2 mx-2"><svg width="25" height="25" viewBox="0 0 25 25"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12 5C8.68629 5 6 7.68629 6 11C6 14.3137 8.68629 17 12 17C15.3137 17 18 14.3137 18 11C18 7.68629 15.3137 5 12 5ZM4 11C4 6.58172 7.58172 3 12 3C16.4183 3 20 6.58172 20 11C20 15.4183 16.4183 19 12 19C7.58172 19 4 15.4183 4 11Z"
                                fill="var(--bs-body-bg)" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M9.17157 8.17157C9.92172 7.42143 10.9391 7 12 7C12.5523 7 13 7.44772 13 8C13 8.55228 12.5523 9 12 9C11.4696 9 10.9609 9.21071 10.5858 9.58579C10.2107 9.96086 10 10.4696 10 11C10 11.5523 9.55228 12 9 12C8.44772 12 8 11.5523 8 11C8 9.93913 8.42143 8.92172 9.17157 8.17157ZM17.2929 16.2929C17.6834 15.9024 18.3166 15.9024 18.7071 16.2929L21.7071 19.2929C22.0976 19.6834 22.0976 20.3166 21.7071 20.7071C21.3166 21.0976 20.6834 21.0976 20.2929 20.7071L17.2929 17.7071C16.9024 17.3166 16.9024 16.6834 17.2929 16.2929Z"
                                fill="var(--bs-body-bg)" />
                        </svg>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 col-12">
                <p class="text-center mb-4"><span class="ytext-ybg p-2 px-3">POPULAR POSTS</span></p>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin"
                                    style="margin-top: -60px;margin-bottom: -20px;">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin"
                                    style="margin-top: -60px;margin-bottom: -20px;">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-outline-dark p-2 px-3 my-4 mx-auto d-block">VIEW MORE</button>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 col-12 p-md-4 px-4">
                <div class="row justify-content-evenly gradient-bg pt-4 px-md-4 pb-0 px-2">
                    <div class="col-lg-8 col-12 mb-4">
                        <p class="heading2">Speak effortlessly with our AI text-to-SPEECH tool.</p>
                        <p>Transform your words into speech with our easy-to-use AI voice tool.</p>
                        <a href="{{route('speech-synthesis')}}" class="btn btn-outline-dark p-2 px-3 text-uppercase">Let’s Get Started</a>
                    </div>
                    <div class="col-lg-4 col-12">
                        <img src="{{ Vite::asset('resources/images/blog-girl-img.png') }}" alt="blog-girl-img"
                            class="img-fluid mx-auto d-block blog-girl-img">
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 col-12">
                <p class="text-center mb-4"><span class="ptext-pbg p-2 px-3 text-uppercase">blog Category Name</span>
                </p>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin"
                                    style="margin-top: -60px;margin-bottom: -20px;">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin"
                                    style="margin-top: -60px;margin-bottom: -20px;">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-outline-dark p-2 px-3 my-4 mx-auto d-block">VIEW MORE</button>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 col-12">
                <p class="text-center mb-4"><span class="ytext-ybg p-2 px-3 text-uppercase">blog Category Name</span>
                </p>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin"
                                    style="margin-top: -60px;margin-bottom: -20px;">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin"
                                    style="margin-top: -60px;margin-bottom: -20px;">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-outline-dark p-2 px-3 my-4 mx-auto d-block">VIEW MORE</button>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 col-12">
                <p class="text-center mb-4"><span class="ptext-pbg p-2 px-3 text-uppercase">blog Category Name</span>
                </p>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin"
                                    style="margin-top: -60px;margin-bottom: -20px;">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin"
                                    style="margin-top: -60px;margin-bottom: -20px;">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-outline-dark p-2 px-3 my-4 mx-auto d-block">VIEW MORE</button>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 col-12">
                <p class="text-center mb-4"><span class="ytext-ybg p-2 px-3 text-uppercase">blog Category Name</span>
                </p>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin"
                                    style="margin-top: -60px;margin-bottom: -20px;">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin"
                                    style="margin-top: -60px;margin-bottom: -20px;">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/sample-blog-img.jpg') }}" class="card-img-top rounded-4" alt="...">
                            <div class="card-body p-4">
                                <figure class="d-flex justify-content-end blog-btn-margin">
                                    <a  href="{{route('blog-view')}}">
                                        <svg width="74" height="74" viewBox="0 0 74 74" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_d_242_1489)">
                                                <circle cx="37" cy="33" r="23" fill="#AD12F6" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.3931 23.9256C36.8647 24.454 36.8647 25.3106 37.3931 25.839L43.2011 31.647H28.8791C28.1319 31.647 27.5262 32.2527 27.5262 32.9999C27.5262 33.7472 28.1319 34.3529 28.8791 34.3529H43.2011L37.3931 40.1609C36.8647 40.6893 36.8647 41.5459 37.3931 42.0743C37.9214 42.6026 38.778 42.6026 39.3064 42.0743L47.424 33.9566C47.9524 33.4283 47.9524 32.5716 47.424 32.0433L39.3064 23.9256C38.778 23.3973 37.9214 23.3973 37.3931 23.9256Z"
                                                fill="white" />
                                            <defs>
                                                <filter id="filter0_d_242_1489" x="0" y="0" width="74" height="74"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                        result="hardAlpha" />
                                                    <feOffset dy="4" />
                                                    <feGaussianBlur stdDeviation="7" />
                                                    <feComposite in2="hardAlpha" operator="out" />
                                                    <feColorMatrix type="matrix"
                                                        values="0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0 0.581667 0 0 0 0.39 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                        result="effect1_dropShadow_242_1489" />
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                        in2="effect1_dropShadow_242_1489" result="shape" />
                                                </filter>
                                            </defs>
                                        </svg>
                                    </a>
                                </figure>
                                <p class="f24 mb-0 fw-bold">Blog title latest sample blog title.....</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-outline-dark p-2 px-3 my-4 mx-auto d-block">VIEW MORE</button>
            </div>
        </div>
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-10 col-12 p-md-4 px-4">
                <div class="row d-md-flex align-items-center gradient-bg p-4">
                    <div class="col-md-9 col-12 mb-4 mb-md-0">
                        <p class="f24 mb-0 fw-bold">Experience the future of communication with our AI voice generation
                            tool, where clarity meets innovation.</p>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="button-wrapper mx-auto d-block">
                            <a href="{{route('speech-synthesis')}}" class="button px-4 gradient-bg text-light" type="button"
                                aria-label="go-to-dashboard">Let’s Get Started</a>
                            <div class="button-bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection