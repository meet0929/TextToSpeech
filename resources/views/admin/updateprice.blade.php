@extends('common')
@section('content')
 <div class="col-md-12 col-12 p-3 p-md-0">
                    <form action="{{ route('admin.update.price',['id'=> $price->id]) }}" method="POST">
                        @csrf
                        <div class="gradient-bg p-3 p-md-4 rounded-4">
                            <p class="heading3">Update Subscription</p>
                 
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name" id="contactname" placeholder="name" value="{{$price->name}}">
                                <label for="contactname">Name</label>
                            </div>
                                <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="package_name" id="contactname" placeholder="name" value="{{$price->package_name}}">
                                <label for="contactname">Package Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="price" id="" value="{{$price->price}}"
                                >
                                <label for="contactemail">Price</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="contactsubject" name="type" value="{{$price->type}}">
                                <label for="contactsubject">type</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="contactsubject" name="characters_allowed" value="{{$price->characters_allowed}}">
                                <label for="contactsubject">Characters Allowed</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="currency" name="currency"  value="{{$price->currency}}">
                                <label for="currency">currency</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a description here" name="description" id="description"
                                    style="height: 400px">{{$price->description}}</textarea>
                                <label for="description">Description</label>
                            </div>
                            <button class="btn btn-secondary p-2 px-3">Submit</button>
                        </div>
                    </form>
                    </div>
@endsection