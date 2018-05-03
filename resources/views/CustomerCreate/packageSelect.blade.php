@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{ route('UpdatePackage') }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('patch') }}
       <div class="row">
            <div class="col">
                <div class="form-group"> 
                    <label class="form-control text-center" for="packageSelector">Select A Website Package!</label>
                    <select name="package_id" id="package_id" class="form-control">
                        <option value="Select Package" selected="selected"></option>
                        <option name="package_id" value="{{ $packages[0]['id'] }}">{{ $packages[0]['name'] }}</option>
                        <option name="package_id" value="{{ $packages[1]['id'] }}">{{ $packages[1]['name'] }}</option>
                        <option name="package_id" value="{{ $packages[2]['id'] }}">{{ $packages[2]['name'] }}</option>
                    </select>
                    <input type="submit" class="btn btn-block btn-lg btn-success form-control">
                </div>

                <div class="output">
                    @foreach($packages as $package)
                    <div id="{{ $package->id }}" class="row my-3 packages">
                        <div class="col-lg-6">
                            <img class="img-fluid rounded" style="width:700px; height:450px;" src="{{ url($package->imgUrl . $package->imgName) }}" alt="">
                        </div>
                        <div class="col-lg-6">
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
                            <p>{{ $package->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>   
        </div> 
    </form> 
</div>

@endsection