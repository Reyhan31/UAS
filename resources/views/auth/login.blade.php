@extends('layout.master')

@section('content')

<div class="container">


    <form action="/login" method="post">
        @csrf

        @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session('loginError')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <h3 class="my-4">@lang('string.LogIn')</h3>
        <div class="row my-3">
            <div class="col">
                <div class="content">
                    <div class="row">
                        <div class="col-3">
                            <label>@lang('string.Email')</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" value="{{ old('email') }}" placeholder="Enter your email">
                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                        </div>
                    </div>
                </div>       
            </div>
        </div>

        <div class="row my-3">
            <div class="col">
                <div class="content">
                    <div class="row">
                        <div class="col-3">
                            <label>@lang('string.Password')</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" value="{{ old('password') }}" placeholder="Enter your password"> 
                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror                   
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="d-flex justify-content-center my-3">
            <div class="btn btn-warning">
                <input class="btn" type="submit" value="Submit">
            </div>
        </div>
            
        <div class="d-flex justify-content-center my-3">
            <div class="button">
                <a href="/register">@lang('string.DontHaveAcc')</a>
            </div>
        </div>
    </form>


</div>
@endsection