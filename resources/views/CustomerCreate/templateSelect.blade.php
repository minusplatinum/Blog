@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{ route('UpdateTemplate') }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('patch') }}
       <div class="row">
            <div class="form-control"> 
                <select name="template_id" id="template_id" class="form-control">
                    <option value="Select a template" selected="selected">Select A Template</option>
                    <option name="template_id" value="{{ $templates[0]['id'] }}">{{ $templates[0]['name'] }}</option>
                    <option name="package_id" value="{{ $templates[1]['id'] }}">{{ $templates[1]['name'] }}</option>
                    <option name="package_id" value="{{ $templates[2]['id'] }}">{{ $templates[2]['name'] }}</option>
                    <option name="package_id" value="{{ $templates[3]['id'] }}">{{ $templates[3]['name'] }}</option>
                    <option name="package_id" value="{{ $templates[4]['id'] }}">{{ $templates[4]['name'] }}</option>
                    <option name="package_id" value="{{ $templates[5]['id'] }}">{{ $templates[5]['name'] }}</option>
                </select>
                <input type="submit" class="btn btn-block btn-lg btn-success form-control my-2">
            </div>
            <div class="row">
                @foreach($templates as $template)
                    <div class="col-md-6 my-4">
                        <div class="card h-100">
                            <div class="card-header">
                                <img class="card-img-top" src="{{ url($template->imgUrl . $template->img1Name) }}" alt="">
                                <h4 class="card-title">
                                    {{ $template->name }}
                                </h4>
                            </div>
                        
                            <div class="card-body">
                                <p class="card-text">{{ $template->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        
       </div>
    </form> 
</div>
@endsection