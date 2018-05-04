@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row card my-3">
    <div class="col-12 card-header text-center">
      <h3>Payment Page!</h3>
    </div>

    <div class="col-12 card-body">
      <div class="row">
        <div class="col-lg-6">
          <h4><u>Customer Information</u></h4>
          <p>
            <h6>Name: {{ $user->fName .' '. $user->lName }}</h6>
            <h6>Email: {{ $user->email }}</h6>
            <h6>Telephone: {{ $user->phone1 }}</h6>
          </p>
        </div>
        <div class="col-lg-6">
          <h4><u>Customer Address</u></h4>
          <p>
            <h6>{{ $user->streetAddress }}</h6>
            <h6>{{ $user->city .', '. $user->province }}</h6>
            <h6>{{ $user->postal .', '. $user->country }}</h6>
          </p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-12">
        <h5>{{ $package->name }}</h5>
        <p>{{ $package->description }}</p>
        <span>${{ $package->price }}</span>
        </div>
      </div>
      <hr>
      <div class="row">
          <div class="col-12">
          <h5>{{ $template->name }}</h5>
          <p>{{ $template->description }}</p>
          <span>{{ $template->templateType }}</span>
          </div>
        </div>
    </div>

    <div class="col-12 card-footer">
      <form action="{{ route('customerPaymentPost') }}" method="post">
        @csrf
        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="{{ config('services.stripe.key') }}"
          data-name="{{ config('app.name') }}"
          data-description="{{ $package->name }}"
          data-image="{{ url($package->imgUrl . $package->imgName) }}"
          data-amount="{{ $package->price * 100 }}"
          data-locale="auto">
        </script>
      </form>
    </div>
  </div>
</div>
@endsection