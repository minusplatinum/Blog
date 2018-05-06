@extends('layouts.app')
@section('content')
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="">
            <h1 class="m-auto py-4">Featured Template</h1>
        </div>
        <div class="card">
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-fluid img-thumbnail" src="{{ $templates[0]['imgUrl'] . $templates[0]['img1Name'] }}" alt="{{ $templates[0]['name'] }}">
                </div>
                <div class="col-lg-8">
                    <h4>{{ $templates[0]['name'] }}</h4>
                <p>{{ $templates[0]['description'] }}</p>
                </div>
            </div>
        </div>
    </div><!-- /.row -->
    
    <div class="row">
        <div class="card col-12">
            <div class="row">
                @foreach($templates as $template)
                    <div class="col-lg-4">
                        <div class="card-header">
                            <img src="" alt="">
                        </div>
                        <div class="card-body">
                        <h5>{{$template->name}}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div><!-- /.row -->
</div><!-- /.container -->
@endsection