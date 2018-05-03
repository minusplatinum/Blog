@extends('layouts.app')
@section('content')
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-10 m-auto">
            <div class="card mt-4">
            <img class="card-img-top img-fluid" style="max-height:400px;" src="{{ url('/storage/cover_images/PremiumWebsitePackage.png') }}" alt="">
                <div class="card-body">
                    <h3 class="card-title">Premium Website Package</h3>
                    <h4><small>Starting at </small>$299</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
                </div>
            </div> <!-- /.card -->

            <div class="card card-outline-secondary my-4">
                <div class="card-header">
                    Product Features
                </div>
                <div class="card-body">
                    
                    <a href="{{ url('/register') }}" class="btn btn-success">Sign Up!</a>
                </div>
            </div><!-- /.card -->
        </div><!-- /.col-lg-9 -->
    </div>
</div><!-- /.container -->
@endsection