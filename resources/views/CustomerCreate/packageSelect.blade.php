@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{ route('UpdatePackage') }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('patch') }}
        <div class="row card output p-3">
            @foreach($packages as $package)
            <div id="{{ $package->id }}" class="row my-3 packages">
                <div class="col-lg-8">
                    <h2>{{ $package->name }}</h2>
                    <ul>
                        <li>{{ $package->features1 }}</li>
                        <li>{{ $package->features2 }}</li>
                        <li>{{ $package->features3 }}</li>
                        <li>{{ $package->features4 }}</li>
                        <li>{{ $package->features5 }}</li>
                        <li>{{ $package->features6 }}</li>    
                    </ul>
                    <p>{{ $package->description }}</p>
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid rounded" src="{{ url($package->imgUrl . $package->imgName) }}" alt="">
                </div>
            </div>
            
            @endforeach

            <div class="col-12 form-control text-center m-auto"> 
                <select name="package_id" id="package_id" class="form-control my-3">
                    <option value="Select Package" selected="selected">Select A Package</option>
                    <option name="package_id" value="{{ $packages[0]['id'] }}">{{ $packages[0]['name'] }}</option>
                    <option name="package_id" value="{{ $packages[1]['id'] }}">{{ $packages[1]['name'] }}</option>
                    <option name="package_id" value="{{ $packages[2]['id'] }}">{{ $packages[2]['name'] }}</option>
                </select>
                <input type="submit" class="btn btn-block btn-lg btn-success form-control">
            </div>
        </div>  
    </form> 
</div>

@endsection