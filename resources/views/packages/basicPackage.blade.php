@extends('layouts.app')
@section('content')
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-10 m-auto">
            <div class="card mt-4">
            <img class="card-img-top img-fluid" src="{{ url('/storage/cover_images/BasicWebsitePackage.jpg') }}" style="max-height:400px;"  alt="">
                <div class="card-body">
                    <h3 class="card-title">Basic Website Package</h3>
                    <h4><small>Starting at </small>$99</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
                </div>
            </div> <!-- /.card -->

            <div class="card card-outline-secondary my-4">
                <div class="card-header">
                    Product Features
                </div>
                <div class="card-body">
                    <ul>
                        <li>Simplicity: It doesn’t get much easier than offering a visitor everything they need on one page. There’s no learning curve for navigation—everyone knows how to scroll, and the rise of mobile has made scrolling second nature to most users.</li>
                        <li>Mobile-friendly: Single-page websites are easy to adapt to mobile because their design will remain largely the same. Most one-page templates are responsive, and usually look as great on smartphones and tablets as they do on a desktop computer.</li>
                        <li>Higher conversion rates: Whatever your conversion metrics are—newsletter sign-ups, sales, subscriptions—single-page websites get the job done. With every step of the conversion funnel on one page, customers begin the process sooner and move through it more quickly.</li>
                        <li>Easy to maintain: It’s one page. It doesn’t get easier than that.</li>
                    </ul>
                <a href="{{ url('/register') }}" class="btn btn-success">Sign Up!</a>
                </div>
            </div><!-- /.card -->
        </div><!-- /.col-lg-9 -->
    </div>
</div><!-- /.container -->

@endsection