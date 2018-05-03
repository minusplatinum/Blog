@extends('layouts.app')
@section('content')
<!-- Page Content -->
<div class="container">
    <!-- Portfolio Item Heading -->
    <h1 class="my-4 text-center text-md-left">{{ $template->name }}</h1>
    <!-- Portfolio Item Row -->
    <div class="row m-auto">
        <div class="col-md-8">
            <img class="img-fluid" src="{{ $template->imgUrl }}{{ $template->img1Name }}" alt="">
        </div>

        <div class="col-md-4">
            <h3 class="my-3 text-center text-md-left">Project Description</h3>
            <p class="text-center text-md-left">{{ $template->description }}</p>
            <h3 class="my-3 text-center text-md-left">Template Features</h3>
            <ul class="list-unstyled text-center text-md-left">
                <li>{{ $template->feature1 }}</li>
                <li>{{ $template->feature2 }}</li>
                <li>{{ $template->feature3 }}</li>
                <li>{{ $template->feature4 }}</li>
            </ul>
            <div class="text-center text-md-left">
            <a href="{{ url('/register') }}" class="btn btn-lg btn-success">Get Started!</a>
            <a href="{{ route('showDemo', $template->id) }}" class="btn btn-lg btn-info" target="_blank">View Demo</a>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- Related Projects Row -->
    <h3 class="my-4 text-center text-md-left">Template Thumbnails</h3>
    <div class="row">
        <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
@endsection