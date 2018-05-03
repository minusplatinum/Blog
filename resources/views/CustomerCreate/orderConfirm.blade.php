@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mt-2 pt-2">
        <div class="col-12">
            <h3 class="text-center">Order Confirmation</h3>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <form id="updateCustomer" action="{{ route('UpdateCustomer') }}" method="post">
                {{ csrf_field() }}
                {{ method_field('patch') }}
                <div class="row">
                    <div class="col-6">
                        <label for="fName">First Name</label>
                        <div>
                            <input name="fName" id="fName" type="text" class="form-control" value="{{$user->fName}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="lName">Last Name</label>
                        <div>
                            <input name="lName" id="lName" type="text" class="form-control" value="{{$user->lName}}">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <label for="username">Username</label>
                        <div>
                        <input name="username" id="username" type="text" class="form-control" value="{{ $user->username }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="email">Email Address</label>
                        <div>
                            <input name="email" id="email" type="text" class="form-control" value="{{$user->email}}">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <label for="phone1">Telephone</label>
                        <div>
                            <input name="phone1" id="phone1" type="text" class="form-control" value="{{$user->phone1}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <label name="" for="phone2">Cellphone</label>
                        <div>
                            <input name="phone2" id="phone2" type="text" class="form-control" value="{{$user->phone2}}">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <label for="streetAddress">Address</label>
                        <div>
                            <input name="streetAddress" id="streetAddress" type="text" class="form-control" value="{{$user->streetAddress}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="city">City</label>
                        <div>
                            <input name="city" id="city" type="text" class="form-control" value="{{$user->city}}">
                        </div>
                    </div>
                </div>
                <hr> 
                <div class="row">
                    <div class="col-4">
                        <label for="province">Province</label>
                        <div>
                            <input name="province" id="province" type="text" class="form-control" value="{{$user->province}}">
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="postal">Postal Code</label>
                        <div>
                            <input name="postal" id="postal" type="text" class="form-control" value="{{$user->postal}}">
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="country">Country</label>
                        <div>
                            <input name="country" id="country" type="text" class="form-control" value="{{$user->country}}">
                        </div>
                    </div>                                
                </div>
                <hr>
            </form> 
        </div>
    </div>
    <hr>
    <div class="row my-2 px-2">
        <div class="col-lg-4">
            <img src="{{ url('storage/cover_images/noimage.jpg') }}" alt="Package Image">
        </div>
        <div class="col-lg-6">
            <input type="hidden" name="package_id" value="{{ $package->id }}">
            <h4>{{ $package->name }}</h4>
            <p>{{ $package->description }}</p>
            <span>${{ $package->price }}</span>
        </div>
        <div class="col-lg-2">
                <a class="btn btn-lg btn-info" href="{{ url('customer/select-package') }}">Edit Package</a>
        </div>
    </div>
    <hr>
    <div class="row my-2 px-2">
        <div class="col-lg-4">
            <img src="{{ url('storage/cover_images/noimage.jpg') }}" alt="Package Image">
        </div>
        <div class="col-lg-6">
        <input type="hidden" name="template_id" value="{{ $template->id }}">
        <h4>{{ $template->name }}</h4>
            <p>{{ $template->description }}</p>
            <span>{{ $template->templateType }}</span>
        </div>
        <div class="col-lg-2">
                <a class="btn btn-lg btn-info" href="{{ url('customer/select-template') }}">Edit Template</a>
        </div>
    </div>
    <hr>
    <button form="updateCustomer" type="submit" >Continue To Payment</button>
</div>       
@endsection