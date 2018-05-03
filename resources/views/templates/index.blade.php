@extends('layouts.app')
@section('content')
<!-- Page Content -->
<div class="container">
    <div class="row">
        <h1 class="m-auto py-4">Templates</h1>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="row">
                <div class="col-12 bg-primary text-white mb-4">
                    <h3 class="text-center py-4">Categories</h3>
                </div>
                <div class="col-12 list-group text-center">
                    <a href="templates#spTemplate" class="list-group-item">Single Page Websites</a>
                    <a href="templates#mpTemplate" class="list-group-item">Multi Page Websites</a>
                    <a href="templates#waTemplate" class="list-group-item">Website Applications</a>
                </div>
            </div>
        </div><!-- /.col-lg-3 -->

        <div class="col-lg-9">
            <div class="row">
                <div id="spTemplate" class="col-12 bg-primary text-white mb-4">
                    <h3 class="text-center py-4">Single Page Templates</h3>
                </div>
                @foreach($singlePageTemplates as $singlePageTemplate)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-header">
                            <a href="{{ $singlePageTemplate->templateUrl }}"><img class="card-img-top" src="{{ url($singlePageTemplate->imgUrl . $singlePageTemplate->img1Name) }}" alt=""></a>
                            <h4 class="card-title">
                                <a href="{{ $singlePageTemplate->templateUrl }}">{{ $singlePageTemplate->name }}</a>
                            </h4>
                        </div>
                    
                        <div class="card-body">
                            <p class="card-text">{{ $singlePageTemplate->description }}</p>
                            <ul class="list-unstyled">
                                <li>{{ $singlePageTemplate->feature1 }}</li>
                                <li>{{ $singlePageTemplate->feature2 }}</li>
                                <li>{{ $singlePageTemplate->feature3 }}</li>
                                <li>{{ $singlePageTemplate->feature4 }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><!-- /.row -->

            <div class="row">
                <div id="mpTemplate" class="col-12 bg-primary text-white mb-4">
                    <h3 class="text-center py-4">Multi Page Templates</h3>
                </div>
                @foreach($multiPageTemplates as $multiPageTemplate)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-header">
                            <a href="{{ $multiPageTemplate->templateUrl }}"><img class="card-img-top" src="{{ url($multiPageTemplate->imgUrl . $multiPageTemplate->img1Name) }}" alt=""></a>
                            <h4 class="card-title">
                                <a href="{{ $multiPageTemplate->templateUrl }}">{{ $multiPageTemplate->name }}</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $multiPageTemplate->description }}</p>
                            <ul class="list-unstyled">
                                <li>{{ $multiPageTemplate->feature1 }}</li>
                                <li>{{ $multiPageTemplate->feature2 }}</li>
                                <li>{{ $multiPageTemplate->feature3 }}</li>
                                <li>{{ $multiPageTemplate->feature4 }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><!-- /.row -->
            <div class="row">
                <div id="waTemplate" class="col-12 bg-primary text-white mb-4">
                    <h3 class="text-center py-4">Website Application Templates</h3>
                </div>
                @foreach($webAppTemplates as $webAppTemplate)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-header">
                            <a href="{{ $webAppTemplate->templateUrl }}"><img class="card-img-top" src="{{ url($webAppTemplate->imgUrl . $webAppTemplate->img1Name) }}" alt=""></a>
                            <h4 class="card-title">
                                <a href="{{ $webAppTemplate->templateUrl }}">{{ $webAppTemplate->name }}</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $webAppTemplate->description }}</p>
                            <ul class="list-unstyled">
                                <li>{{ $webAppTemplate->feature1 }}</li>
                                <li>{{ $webAppTemplate->feature2 }}</li>
                                <li>{{ $webAppTemplate->feature3 }}</li>
                                <li>{{ $webAppTemplate->feature4 }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><!-- /.row -->                        
        </div><!-- /.col-lg-9 -->
    </div><!-- /.row -->
</div><!-- /.container -->
@endsection