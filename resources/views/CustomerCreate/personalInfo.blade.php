

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Verify Personal Information
        </div>
        <div class="card-body">
            <form action="{{ route('UpdateCustomer') }}" method="post">
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
                <input type="submit" value="Update Profile" class="form-control">         
            </form>
        </div>
    </div>
</div>
@endsection