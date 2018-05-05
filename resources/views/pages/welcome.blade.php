@extends('layouts.app')

@section('content')
<div class="container-fluid welcomeImage py-5">
    <div class="container">
        <div id="welcomeCarousel" class="carousel" data-ride="carousel">
            <div class="carousel-inner" style="background-color:#f4f4f4;">
                <div class="carousel-item active">
                    <div style="min-height:300px;" class="welcomeSlide1 d-flex flex-column text-center py-4">
                        <h1 class="display-4">Welcome To RDS Web Design!</h1>
                        <p class="lead text-muted font-weight-bold mb-0">Where We Focus On Coding Your Business's Future</p>
                        <p class="lead text-muted font-weight-bold"> For Online Success!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div style="min-height:300px;" class="welcomeSlide2 text-center py-3">
                        <h1 class="display-4">Basic Website Packages</h1>
                        <p class="lead text-muted font-weight-bold mx-3 my-0">Learn why our Basic Website Package isnt so basic!</p>
                        
                        <a class="btn btn-success btn-lg" href="/packages/1" role="button">Learn More!</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div style="min-height:300px;" class="welcomeSlide3 text-center py-3">
                        <h1 class="display-4">Premium Website Packages</h1>
                        <p class="lead text-muted font-weight-bold mx-3 my-0">starting at just</p>
                        <h1>$299</h1>
                        <a class="btn btn-success btn-lg" href="{{ url('/packages/2')}}" role="button">Learn More!</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div style="min-height:300px;" class="welcomeSlide4 text-center py-3">
                        <h1 class="display-4">Website Application Packages</h1>
                        <p class="lead text-muted font-weight-bold mx-3 my-0">starting at just</p>
                        <h1>$499</h1>
                        <a class="btn btn-success btn-lg" href="{{ url('/packages/3')}}" role="button">Learn More!</a>
                    </div>
                </div>    
            </div>
        </div>
        <!-- Call to Action Well -->
        <div class="card text-white bg-primary my-4 text-center">
            <div class="card-body">
                <p class="text-white m-0 lead">Looking for a website to help grow your business online? Check out one of the packages below to get started!</p>
            </div>
        </div>
    </div><!-- container end -->
    <div class="container text-center py-3">
            <!-- Content Row -->
        <div class="row">
            <div data-aos="fade-right" class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                            <h2 class="card-title ">Basic Website Package</h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Looking for a low cost solution for getting your business online? Then the basic website package is a perfect choice. Starting at just $99 you can have a responsive website thats</p>
                        <ul class="list-unstyled">
                            <li>Mobile Friendly</li>
                            <li>Includes Up To 5 Pages</li>
                            <li>Google Maps</li>
                            <li>And More!</li>
                            <h6>Click the link below for more information!</h6>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="/packages#BasicWebsitePackage" class="btn btn-lg btn-block btn-success">More Info</a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div data-aos="fade-up" class="col-md-4 mb-4">
                <div class="card h-100">
                        <div class="card-header">
                                <h2 class="card-title">Premium Website Package</h2>
                        </div>
                    <div class="card-body">
                        
                        <p class="card-text">Looking for a low cost solution for getting your business online? Then the basic website package is a perfect choice. Starting at just $99 you can have a responsive website thats</p>
                        <ul class="list-unstyled">
                            <li>Mobile Friendly</li>
                            <li>Includes Up To 5 Pages</li>
                            <li>Google Maps</li>
                            <li>And More!</li>
                            <h6>Click the link below for more information!</h6>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="{{ url('packages#PremiumWebsitePackage')}}" class="btn btn-lg btn-block btn-success">More Info</a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div data-aos="fade-left" class="col-md-4 mb-4">
                <div class="card h-100">
                        <div class="card-header">
                                <h2 class="card-title">Website Application Package</h2>
                        </div>
                    <div class="card-body">
                        
                        <p class="card-text">Looking for a low cost solution for getting your business online? Then the basic website package is a perfect choice. Starting at just $99 you can have a responsive website thats</p>
                        <ul class="list-unstyled">
                            <li>Mobile Friendly</li>
                            <li>Includes Up To 5 Pages</li>
                            <li>Google Maps</li>
                            <li>And More!</li>
                            <h6>Click the link below for more information!</h6>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="{{ url('/packages#WebsiteApplicationPackage')}}" class="btn btn-lg btn-block btn-success">More Info</a>
                    </div>
                </div>
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

    <div class="container text-center">
        <div data-aos="fade-up-left" class="text-white bg-primary text-center my-3">
            <div class="card-body">
                <h3 class="text-white">Services We Offer</h3>
            </div>
        </div>
        
        <div data-aos="slide-up" class="row mx-0 pt-4">
            <div class="col-sm-4 serviceItems">
                <span><i class="material-icons text-primary" style="font-size: 70px">web</i></span>
                <h4 class="">Custom Website Design</h4>
                <ul class="list-unstyled">
                    <li>Custom Website Components</li>
                    <li>Taylored For Your Business</li>
                    <li>Improve Google Rankings</li>
                    <li>Unique Website designs</li>
                </ul>
            </div>
            <div class="col-sm-4 serviceItems">
                <span><i class="material-icons text-primary" style="font-size: 70px">devices</i></span>
                <h4>Responsive Website Design</h4>
                <ul class="list-unstyled">
                    <li>Flexible Content Placement</li>
                    <li>Friendly User Experience</li>
                    <li>Easy To Customize</li>
                    <li>SEO Friendly</li>
                    
                </ul>
            </div>
            <div class="col-sm-4 serviceItems">
                <span><i class="material-icons text-primary" style="font-size: 70px">add_shopping_cart</i></span>
                <h4>Ecommerce Website Design</h4>
                <ul class="list-unstyled">
                    <li>Inventory Management</li>
                    <li>Reach to a bigger market</li>
                    <li>Sell Your Products 24/7</li>
                    <li>Gain Search Engine Traffic</li>
                </ul>
            </div>
        </div>
        <div class="row mx-0">
            <div class="col-sm-4 serviceItems">
                <span><i class="material-icons text-primary" style="font-size: 70px">contact_mail</i></span>
                <h4>Content Management Systems</h4>
                <ul class="list-unstyled">
                    <li>Wide Variety OF Templates</li>
                    <li>Reduce Development Costs</li>
                    <li>Customize Your Own Content</li>
                    <li>Have Multiple User Accounts</li>
                </ul>
            </div>
            <div class="col-sm-4 serviceItems">
                <span><i class="material-icons text-primary" style="font-size: 70px">aspect_ratio</i></span>
                <h4>Website Redesign Services</h4>
                <ul class="list-unstyled">
                    <li>Freshen Up Your Website</li>
                    <li>Add Modern features</li>
                    <li>Reach More Customers</li>
                    <li>Improve Website Performance</li>
                </ul>
            </div>
            <div class="col-sm-4 serviceItems">
                <span><i class="material-icons text-primary" style="font-size: 70px">supervisor_account</i></span>
                <h4>Customer Support Services</h4>
                <ul class="list-unstyled">
                    <li>Customer Website Troubleshooting</li>
                    <li>Customer Webmail Configuration</li>
                    <li>Website Domain Registration</li>
                    <li>Customer Technical Support</li>
                </ul>
            </div>
        </div>
    </div><!-- container end -->

    <div class="container" id="templates">
        <div class="col-12 text-white bg-primary text-center mt-5">
            <div class="card-body">
                <h3 class="text-white">Website Templates</h3>
            </div>
        </div>
    
        <div class="row card-group text-center py-3">
            <div class="col-12 col-md-8 col-lg-4 mb-3">
                <div class="card box-shadow">
                    <div class="card-header">
                        <img style="max-height:200px;" class="card-img-top" src="{{ url('storage/images/onePage.png') }}" alt="Card image cap">
                        <h4 class="">Single Page Website Templates</h4>
                    </div>
                    <div class="card-body">
                        <p class="lead text-muted font-weight-bold">Use a single page website to compel visitors to action by making navigation seamless and content easy to digest.</p>
                        <ul class="list-unstyled">
                            <li>Responsive Website Design</li>
                            <li>Great For Mobile Devices</li>
                            <li>Improve User Engagement</li>
                            <li>User Friendly Site Navigation</li>
                        </ul>
                        <a href="templates#spTemplate"><button type="button" class="btn btn-lg btn-block btn-primary">Explore!</button></a>
                    </div>
                </div> <!-- Card End -->        
            </div><!-- Col End -->
            <div class="col-12 col-md-8 col-lg-4 mb-3">
                <div class="card box-shadow">
                    <div class="card-header">
                        <img style="max-height:200px;" class="card-img-top" src="{{ url('storage/images/multiPage.png') }}" alt="Card image cap">
                        <h4 class="px-2">Multi Page Website Templates</h4>
                    </div>
                    <div class="card-body">
                        <p class="lead text-muted font-weight-bold">Use a single page website to compel visitors to action by making navigation seamless and content easy to digest.</p>
                        <ul class="list-unstyled">
                            <li>Responsive Website Design</li>
                            <li>Great For Mobile Devices</li>
                            <li>Improve User Engagement</li>
                            <li>User Friendly Site Navigation</li>
                        </ul>
                        <a href="templates#mpTemplate"><button type="button" class="btn btn-lg btn-block btn-primary">Explore!</button></a>
                    </div>
                </div> <!-- Card End -->        
            </div><!-- Col End -->
            <div class="col-12 col-md-8 col-lg-4 mb-3">
                <div class="card box-shadow">
                    <div class="card-header">
                        <img style="max-height:200px;" class="card-img-top" src="{{ url('storage/images/webApp.png') }}" alt="Card image cap">
                        <h4 class="">Website Application Templates</h4>
                    </div>
                    <div class="card-body">
                        <p class="lead text-muted font-weight-bold">Use a single page website to compel visitors to action by making navigation seamless and content easy to digest.</p>
                        <ul class="list-unstyled">
                            <li>Responsive Website Design</li>
                            <li>Great For Mobile Devices</li>
                            <li>Improve User Engagement</li>
                            <li>User Friendly Site Navigation</li>
                        </ul>
                    <a href="{{ url('/templates#waTemplate') }}"><button type="button" class="btn btn-lg btn-block btn-primary">Explore!</button></a>
                    </div>
                </div> <!-- Card End -->        
            </div><!-- Col End -->
        </div><!-- Row Card Deck End -->
    </div><!-- Container -->  
</div>
@endsection
