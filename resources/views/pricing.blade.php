@extends('common')
@section('title','Pricing - TextToSpeech.ai')
@section('description','Pricing - TextToSpeech.ai')
@section('content')
 <div class="container">
        <div class="row justify-content-center mb-5 pt-5 px-2">
            <div class="col-md-10 col-lg-7 col-12 text-center mb-2">
                <h1 class="f16 mb-3"><span class="ytext-ybg p-2 px-3">PRICING PLAN</span></h1>
                <p class="heading2 d-flex align-items-center justify-content-center mb-0 flex-wrap">Choose the Plan <img
                        src="{{ Vite::asset('resources/images/money-emoji.png') }}" alt="Money emoji" width="28" height="22" class="ms-2"></p>
                        <p>Explore our range of flexible pricing plans designed to fit every need and budget. Select the option that best aligns with your goals and start unlocking the full potential of our cutting-edge technology today.</p>
            </div>
            <div class="col-md-10 col-12">
                <div class="row justify-content-evenly">
               @include('list-subscriptions')
                 
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-5 pt-5 px-2">
            <div class="col-md-10 col-12 text-center mb-2">
                <h2 class="heading2 d-flex align-items-center justify-content-center">FAQs <img
                        src="{{ Vite::asset('resources/images/faq-emoji.png') }}" alt="faq emoji" width="29" height="37" class="ms-2"></h2>
            </div>
            <div class="col-md-10 col-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <p class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                
                        How Often Are Invoices Issued For Services?
                            </button>
                        </p>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">                              
Billing is conducted monthly, starting on the date of your subscription. You have the flexibility to cancel your subscription at any moment
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <p class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">                               
What's The Limit On Text Output I Can Generate?
                            </button>
                        </p>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                             
For each request, non-subscribers can generate up to 2,500 characters, while subscribers are allowed up to 5,000 characters. Your monthly character allowance varies by your subscription level. To view your current usage and limits, visit the subscription section under your profile.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <p class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                               
When Is It Possible To Terminate My Ongoing Plan?
                            </button>
                        </p>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">                               
You have the option to cancel your subscription whenever you choose. Upon reaching the next billing cycle, your subscription will not renew, downgrading you to the Free tier.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <p class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">                                
Do My Remaining Text Credits Carry Over To The Next Billing Period?
                            </button>
                        </p>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">                               
Characters not used within a month don't carry over to the subsequent month. With each billing cycle, your subscription renews automatically, resetting your character count. Should you opt for a plan upgrade, any characters you haven't used previously will transfer to the new cycle.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <p class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">                                
How Do You Change My Current Subscription Plan?
                            </button>
                        </p>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
To change your plan, log into the platform and click on your profile icon in the upper right corner. Select 'Subscription' from the menu, then choose your new desired plan. For Enterprise-level plans, please reach out to us directly.
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-5 py-5 px-2">
            <div class="col-md-11 col-12 gradient-bg p-5 text-center">
                <h2 class="heading2 d-flex align-items-center justify-content-center">Let’s Talk <img
                    src="{{ Vite::asset('resources/images/lets-talk.png') }}" alt="let's talk emoji" width="32" height="32" class="ms-2"></h2>
                <p>We're always looking for partners, collaborators, and users who share our vision. Whether you're
                    interested in our technology, want to explore a partnership, or simply want to learn more, we invite
                    you to reach out. Together, we can build a future where technology speaks your language.</p>
                <a href="{{route('contact')}}" class="btn btn-secondary p-2 px-3">Contact us</a>
            </div>
        </div>
    </div>
@endsection