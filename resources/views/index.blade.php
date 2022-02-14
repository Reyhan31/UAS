@extends('layout.master')

@section('content')
<div class=" d-flex justify-content-center" id="homeCard">
    <div class="textHomeCard d-flex flex-column align-items-center">
        @if(!empty($Msg))
            <h2>{{$Msg}}</h2>
        @else
            <h2>@lang('string.notif.title')</h2>
        @endif
        
        @auth    
        <small class="d-block text-center mt-3"><a href="/home" style="text-decoration: none">@lang('string.clickHome') </a></small>
        @endauth

    </div>
</div>

@endsection