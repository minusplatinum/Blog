@extends('layouts.app')
@section('content')
<div class="container">
    @foreach($packages as $package)
<div id="{{ str_replace_array(' ', ['',''], $package->name) }}" name="{{ str_replace_array(' ', ['',''], $package->name) }}" class="row px-3 py-3">
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
    </div><!-- /.row -->
    <hr>
    <!-- Call to Action Section -->
    <div class="row mb-4">
        <div class="col-md-8">
            <p>Think a {{ $package->name }} is for you? Click the link to get started!</p>
        </div>
        <div class="col-md-4">
        <a class="btn btn-lg btn-success btn-block" href="{{ url('/packages/' . $package->id) }}">Get Started!</a>
        </div>
    </div>
    <hr>
    @endforeach
</div>
@endsection