       <!-- profile modal  -->
    <div class="modal fade" id="ProfileModal" tabindex="-1" aria-labelledby="ProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div>
                        <button type="button" class="btn-close float-end mt-3 me-3" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="p-md-5 p-4">
                        <p class="f24 mb-2"><b>Profile</b></p>
                        <form method="post" action="{{route('user.update')}}">
                            @csrf
                            @method('patch')
                            
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" name="email" value="{{auth()->user()?->email}}" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                            <div class="mb-2">
                                <label for="nameofuser" class="form-label">Name</label>
                                <input type="text" name="name" value="{{auth()->user()?->name}}" class="form-control" id="nameofuser" placeholder="Name">
                                @error('name')
                                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            
                                </span>
                                @enderror
                            </div>
                            <div>
                                <p class="mb-2">Country</p>
                                <select class="form-select mb-3" name="country" aria-label="Default select example">
                                <option value="">Select Country</option>
                                    @foreach($countries as $country)
                                    <option value="{{$country->id}}" {{ auth()->user()?->countries->contains($country->id) ? 'selected' : '' }}>{{$country->country_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-secondary p-2 px-3 mb-5">Save</button>
                        </form>
                        <div class="d-grid">
                            <button class="btn btn-danger p-2 px-3" data-bs-toggle="modal"
                                data-bs-target="#DeleteAccount"><b>Delete Account</b></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Account Modal  -->
    <div class="modal fade" id="DeleteAccount" tabindex="-1" aria-labelledby="DeleteAccountLabel" aria-hidden="true">
        <div id="liveAlertPlaceholder" class="mx-2 m-md-5"></div>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div>
                        <button type="button" class="btn-close float-end mt-3 me-3" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="p-5">
                        <button class="btn p-0 mb-2">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg" data-bs-toggle="modal"
                                data-bs-target="#ProfileModal">
                                <circle cx="17.5" cy="17.5" r="17.5" fill="#CF69FF" fill-opacity="0.14" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.2287 10.5956C18.6307 10.9976 18.6307 11.6494 18.2287 12.0514L13.8096 16.4705H24.7067C25.2752 16.4705 25.7361 16.9314 25.7361 17.4999C25.7361 18.0685 25.2752 18.5294 24.7067 18.5294H13.8096L18.2287 22.9485C18.6307 23.3505 18.6307 24.0023 18.2287 24.4043C17.8267 24.8063 17.1749 24.8063 16.7729 24.4043L10.5964 18.2279C10.1944 17.8258 10.1944 17.1741 10.5964 16.772L16.7729 10.5956C17.1749 10.1936 17.8267 10.1936 18.2287 10.5956Z"
                                    fill="#8E8FA6" />
                            </svg>
                        </button>
                        <p class="f24 mb-2"><b>Do you really want to delete your account?</b></p>
                        <div class="ytext-ybg p-3 d-flex align-items-center mb-3">
                            <svg width="50" height="50" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="me-3">
                                <path
                                    d="M12 21.8929C6.477 21.8929 2 17.4159 2 11.8929C2 6.37094 6.477 1.89294 12 1.89294C17.523 1.89294 22 6.37094 22 11.8929C22 17.4159 17.523 21.8929 12 21.8929ZM12 6.89294C11.7348 6.89294 11.4804 6.9983 11.2929 7.18584C11.1054 7.37337 11 7.62773 11 7.89294V12.8929C11 13.1582 11.1054 13.4125 11.2929 13.6001C11.4804 13.7876 11.7348 13.8929 12 13.8929C12.2652 13.8929 12.5196 13.7876 12.7071 13.6001C12.8946 13.4125 13 13.1582 13 12.8929V7.89294C13 7.62773 12.8946 7.37337 12.7071 7.18584C12.5196 6.9983 12.2652 6.89294 12 6.89294ZM12 16.8929C12.2652 16.8929 12.5196 16.7876 12.7071 16.6001C12.8946 16.4125 13 16.1582 13 15.8929C13 15.6277 12.8946 15.3734 12.7071 15.1858C12.5196 14.9983 12.2652 14.8929 12 14.8929C11.7348 14.8929 11.4804 14.9983 11.2929 15.1858C11.1054 15.3734 11 15.6277 11 15.8929C11 16.1582 11.1054 16.4125 11.2929 16.6001C11.4804 16.7876 11.7348 16.8929 12 16.8929Z"
                                    fill="#E49900" />
                            </svg>
                            <p class="text-start mb-0">The deletion is permanent and you will no longer be able to
                                create account with this
                                email.</p>
                        </div>
                        <p>Please confirm the deletion of your account by typing in your email address below:</p>
                        <form method="post" action="{{route('user.delete')}}">
                            @csrf
                            @method('delete')
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" id="exampleFormControlInput2"
                                    placeholder="name@example.com">
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-danger p-2 px-3" type="submit"><b>Delete Account</b></button>
                            </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cancel Subscription Modal  -->
    <div class="modal fade" id="CancelSubscription" tabindex="-1" aria-labelledby="CancelSubscriptionLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div>
                        <button type="button" class="btn-close float-end mt-3 me-3" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="p-md-5 p-4">
                        <p class="f24 mb-2"><b>Cancel Subscription</b></p>
                        <form method="post" action="{{route('user.update')}}">
                            @csrf
                            @method('patch')
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">Registered Email</label>
                                <input type="email" name="email" value="{{auth()->user()?->email}}" class="form-control" id="cancelEmail"
                                    placeholder="name@example.com">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                            <div>
                                <p class="mb-2">Choose Reason</p>
                                <select class="form-select mb-3" name="cmbreason" aria-label="Default select example">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div>
                                <p class="mb-2">Please Specify</p>
                                <textarea class="form-control dashboard-input" name="specifymsg" minlength="100" maxlength="1000" id="specifymsgTextarea" rows="7" required=""></textarea>
                            </div>
                            
                        </form>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-danger p-2 px-3" data-bs-toggle="modal"
                                data-bs-target="#CancelSubscription"><b>Submit</b></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Share and earn Modal  -->
    <div class="modal fade" id="ShareAndEarn" tabindex="-1" aria-labelledby="ShareAndEarnLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div>
                        <button type="button" class="btn-close float-end mt-3 me-3" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="p-md-5 p-4">
                        <p class="f24 mb-2"><b>Creator Affiliate Program</b></p>
                        <p>Make money telling people about a product you love!</p>
                        <div class="text-center my-5">
                            <p>To know more about this Program?</p>
                            <div class="d-grid">
                                <a href="{{route('affiliate')}}" class="btn btn-secondary p-2 px-3">Click Here</a>
                            </div>
                        </div>
                        <!-- <div class="light-bg p-3">
                            <p><b>Your unique referral link</b></p>
                            <input type="text" class="form-control mb-3" id="" placeholder="Click to generate">
                            <div class="mb-3">
                                <button class="btn btn-secondary p-2 px-3 me-2">Generate</button>
                                <button class="btn btn-outline-dark p-2 px-3">Copy</button>
                            </div>
                            <p class="mb-0">By generating a link you agree to our <a href="{{route('affiliate')}}">Affiliate Program
                                    terms.</a>
                            </p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
