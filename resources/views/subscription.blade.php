@extends('common')
@section('title','Subscribe to Text to Speech AI')
@section('description','Elevate content with AI voices. Subscribe for natural voices - narrations, e-learning, audiobooks & more. Transform text to realistic speech easily.')
@section('content')
 <div class="container">
    <div class="row justify-content-center p-2 mt-md-4 mb-5 pb-md-5">
        <div class="col-md-10 col-12 light-bg p-3 p-md-4">
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                <div class="mb-2 mb-sm-0">
                    <p class="mb-0 f24"><b>Subscription</b></p>
                    <p class="heading2 c-purple mb-0">{{ auth()->user()->userSubsc->subscription->package_name ?? '' }}</p>
                </div>
                <a class="btn btn-outline-dark p-2 px-3" href="{{route('pricing',['upgrade' => 1])}}">Upgrade Plan</a>
            </div>
            <table class="table mb-4">
                <tbody>
                    <tr class="border-bottom">
                        <td style="max-width: 200px;">Subscribed to</td>
                        <td>{{ auth()->user()->userSubsc->subscription->name ?? '' }}</td>
                    </tr>
                    <tr class="border-bottom">
                        <td style="max-width: 200px;">Characters used</td>
                        <td>0 / {{ auth()->user()->userSubsc->subscription->characters_allowed ?? '00' }}</td>
                    </tr>
                    <tr class="border-bottom">
                        <td style="max-width: 200px;">Next character reset in</td>
                        <td>{{ auth()->user()->userSubsc->subscription->days ?? '' }} days</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ route('pricing')}}" class="btn btn-secondary p-2 px-3" data-bs-toggle="modal" data-bs-target="#cancelsub">Manage subscription</a>
        </div>
    </div>
</div>

<!-- cancel subscription -->
<div class="modal fade" id="cancelsub" tabindex="-1" aria-labelledby="cancelsubLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div>
                    <button type="button" class="btn-close float-end mt-3 me-3" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="p-md-5 p-4">
                    <p class="f24 mb-2"><b>Cancel Subscription</b></p>
                    <form action="{{ route('user.cancelsubscription')}}" id="frmCancel">
                    @csrf
                    <div class="mb-3">
                        <label for="txtemail" class="form-label">Registered E-Mail</label>
                        <input type="email" class="form-control" id="txtemail"
                            placeholder="name@example.com" name="txtemail" disabled value="{{ auth()->user()->email }}">
                    </div>
                   <div>
                        <p class="mb-2">Choose Reason</p>
                        <select class="form-select mb-3" aria-label="Default select example" name="cmbreason" id="cmbreason">
                            <option value="">Select reason</option>
                            <option value="1">It's too expensive/I found a more affordable alternative.</option>
                            <option value="2">I'm not using it enough to justify the cost.</option>
                            <option value="3">I'm experiencing technical issues/performance problems.</option>
                            <option value="4">The quality doesn't meet my expectations.</option>
                            <option value="5">I'm not satisfied with customer support.</option>
                            <option value="6">My needs have changed/I no longer need the service.</option>
                            <option value="7">I've found another service that better fits my needs.</option>
                            <option value="8">Other reasons</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="reasonDescription" class="form-label">Please specify</label>
                        <textarea class="form-control" id="reasonDescription" rows="3"
                        placeholder="Type here..." name="reasonDescription"></textarea>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-danger p-2 px-3" type="submit" id="btnCancel"><b>Submit</b></button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#frmCancel').on('submit',function(event){
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{ route('user.cancelsubscription')}}",
                data: $(this).serialize(),
                success: function(response) {
                    toastr.success(response.message);
                    setTimeout(() => {
                    location.reload();
                    }, 2500);
                },
                error: function (response) {
                    toastr.error(response.responseJSON.message);
                }
            });
        });
        
    });
</script>
@endsection