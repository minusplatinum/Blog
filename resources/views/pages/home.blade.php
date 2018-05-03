@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>My Account</h1>
        </div>            
    </div>

    <div class="row">
        <div class="col-4">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs flex-column" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="viewProfile-tab" data-toggle="tab" href="#viewProfile" role="tab" aria-controls="viewProfile" aria-selected="true">View User Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="updateUser-tab" data-toggle="tab" href="#updateUser" role="tab" aria-controls="updateUser" aria-selected="false">Update User Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="myPackages-tab" data-toggle="tab" href="#myPackages" role="tab" aria-controls="myPackages" aria-selected="false">My Packages</a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link" id="purchaseHistory-tab" data-toggle="tab" href="#purchaseHistory" role="tab" aria-controls="purchaseHistory" aria-selected="false">Purchase History</a>
                </li>
            </ul>
        </div>
        
        <!-- Tab panes -->
        <div class="col-8">
            <div class="tab-content">
                <div class="tab-pane active" id="viewProfile" role="tabpanel" aria-labelledby="viewProfile-tab">
                    <div class="row">
                        <div class="col-6">
                            <label for="fName">First Name</label>
                            <div>
                            <span>{{ $user->fName }}</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="lName">Last Name</label>
                            <div>
                                <span>{{$user->lName}}</span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <label for="username">Username</label>
                            <div>
                            <span>{{ $user->username }}</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="email">Email Address</label>
                            <div>
                                <span>{{$user->email}}</span>
                            </div>
                        </div>
                    </div> 
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <label for="phone1">Telephone Number</label>
                            <div>
                                <span>{{$user->phone1}}</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="phone2">Cellphone Number</label>
                            <div>
                                <span>{{$user->phone2}}</span>
                            </div>
                        </div>
                    </div> 
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <label for="streetAddress">Address</label>
                            <div>
                            <span>{{ $user->streetAddress }}</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="city">City</label>
                            <div>
                                <span>{{$user->city}}</span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <label for="province">Province</label>
                            <div>
                            <span>{{ $user->province }}</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="postal">Postal Code</label>
                            <div>
                                <span>{{$user->postal}}</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="country">Country</label>
                            <div>
                                <span>{{$user->country}}</span>
                            </div>
                        </div>
                    </div>
                    <hr>           
                </div>

                <div class="tab-pane" id="updateUser" role="tabpanel" aria-labelledby="updateUser-tab">
                    <form action="{{ route('updateProfile', $user) }}" method="post">
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
                <div class="tab-pane" id="myPackages" role="tabpanel" aria-labelledby="myPackages-tab">

                </div>
                <div class="tab-pane" id="purchaseHistory" role="tabpanel" aria-labelledby="purchaseHistory-tab">
                    
                </div>                 
            </div>
        </div>
    </div>
</div>
@endsection