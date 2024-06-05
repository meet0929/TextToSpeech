     @foreach($subscriptions as $index=>$subscription) 
                    <div class="col-md-6 col-lg-4 col-12 p-2 {{$index==1 ? '' : 'mt-lg-5' }} ">
                        <div class="{{$index==1 ? 'purple-bg position-relative' : 'light-bg h-100 position-relative up-animation ' }} p-4">
                            <p class="float-end {{ $index==1  ? 'wtext-wbg' : 'ytext-ybg ' }}  p-2 px-3">{{$subscription->package_name}}</p><br>
                            <p><span class="heading2 {{ $index==1  ? 'text-white' : '' }}">{{$subscription->currency}}{{$subscription->price}}</span>/{{$subscription->type}}</p>
                            <hr>
                            <p><b>{{$subscription->name}}</b></p>
                       
                            {!! $subscription->description !!}
                           <?php 
                           if($subscription->id==1) {
                              $button = 'START CREATING';
                           } else if($subscription->id==2) {
                              $button = 'GET PRO FEATURE';
                           } else if($subscription->id==3) {
                              $button = 'UNLOCK ENTERPRICE POWER';
                           } else {
                              $button = 'START CREATING';
                           }
                           ?>
                            <div class="d-grid justify-items-center" style="margin-top: 4rem !important;">
                                @if($subscription->price !=1) 
                                <form method="post" action = "{{route('user.subscription.store')}}">
                                    @csrf
                                    <input type="hidden" name="price" value=" {{$subscription->price}}">
                                    <input type="hidden" name="subscription_id" value=" {{$subscription->id}}">
                                    <input type="hidden" name="upgrade" value=" {{ (request()->get('upgrade')) ? request()->get('upgrade') : 0 }}">
                                    <button type="submit" class="btn {{ $index==1  ? 'btn-outline-light-2' : 'btn-outline-color' }} p-2 px-3 mb-3 position-absolute" style="bottom: 0; width: 85%; ">{{$button}}</button>
                                </form>
                                @else
                                 <form method="post" action = "{{route('user.subscription.store')}}">
                                    @csrf
                                    <input type="hidden" name="price" value=" {{$subscription->price}}">
                                    <input type="hidden" name="subscription_id" value=" {{$subscription->id}}">
                                    <input type="hidden" name="upgrade" value=" {{ (request()->get('upgrade')) ? request()->get('upgrade') : 0 }}">
                                <button type="submit" class="btn btn-outline-color  p-2 px-3 mb-3 position-absolute" style="bottom: 0; width: 85%; ">{{$button}}</button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
     @endforeach