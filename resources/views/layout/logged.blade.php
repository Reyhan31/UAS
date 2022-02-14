@extends('layout.master')

@section('navbar')
    @auth
    <nav class="navbar navbar-expand-lg navbar-light fs-4 bg-warning d-flex justify-content-center">
    <div class="container-fluid justify-content-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item mx-4">
                    <a class="nav-link" href="/home" >@lang('string.Home')</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="/cart" >@lang('string.Cart')</a>
                </li>   
                <li class="nav-item mx-4">
                <a class="nav-link" href="/profile" >@lang('string.Profile')</a>
                </li>  
                @if(auth()->user()->role_id==1)
                <li class="nav-item mx-4">
                    <a class="nav-link" href="/admin" >@lang('string.accMaintain')</a>
                </li>                
                @endif
            </ul>
        </div>
    </div>
    </nav>
    @endauth    
@endsection
