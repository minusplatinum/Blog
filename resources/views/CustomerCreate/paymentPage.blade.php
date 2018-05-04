@extends('layouts.app')
@section('content')
<form action="{{ route('customerPaymentPost') }}" method="post">
  @csrf
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="{{ config('services.stripe.key') }}"
            data-description="Website Package"
            data-amount="50000"
            data-locale="auto">
    </script>
  </form>
@endsection