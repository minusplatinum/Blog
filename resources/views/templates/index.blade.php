@extends('layouts.app')
@section('content')
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="m-auto">
            <h1 class="py-4">Featured Template</h1>
        </div>
        <div class="card p-3">
            <div class="row">
                <div class="col-lg-4">
                    <img img class="img-fluid img-thumbnail p-2" src="{{ $templates[0]['imgUrl'] . $templates[0]['img1Name'] }}" alt="{{ $templates[0]['name'] }}">
                </div>
                <div class="col-lg-8 py-3 text-center text-lg-left">
                    <h4>{{ $templates[0]['name'] }}</h4>
                    <p>{{ $templates[0]['description'] }}</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li>{{ $templates[0]['feature1'] }}</li>
                                <li>{{ $templates[0]['feature2'] }}</li>
                                <li>{{ $templates[0]['feature3'] }}</li>
                                <li>{{ $templates[0]['feature4'] }}</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 d-flex align-items-end justify-content-around">
                            <a class="btn btn-block btn-lg btn-success mr-2" href="{{ route('register') }}">Get Started!</a>
                            <a class="btn btn-block btn-lg btn-info mr-2" href="{{ url('templates/' . $templates[0]['id']) }}">Learn More!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.row -->
    <br>
    <div class="row my-3">
        <div class="card p-3">
            <div class="row">
                @foreach($templates as $template)
                <div class="col-lg-4">
                    <div class="card h-100">
                        <div class="card-header">
                            <img img class="img-fluid img-thumbnail" src="{{ $template->imgUrl . $template->img1Name }}" alt="{{ $template->name }}">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-center">{{ $template->name }}</h4>
                            <p class="card-text text-center">{{ $template->description }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-lg btn-block btn-info">Learn More!</a>
                        </div>
                    </div><!-- /.card -->
                </div><!-- /.col-md-4 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.card-->
    </div><!-- /.row --> 
</div><!-- /.container -->
@endsection