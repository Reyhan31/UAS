@extends('layout.master')

@section('content')




    <form action="/register" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row my-3">
            <div class="col">
                <div class="content">
                    <div class="row">
                        <div class="col-3">
                            <label>@lang('string.FirstName')</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control @error('first_name') is-invalid @enderror" type="text" name="first_name" value="{{ old('first_name') }}"  placeholder="Enter your first name">
                                @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="content">
                    <div class="row">
                        <div class="col-3">
                            <label>@lang('string.MiddleName')</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control @error('middle_name') is-invalid @enderror" type="text" name="middle_name" value="{{ old('middle_name') }}" placeholder="Enter your middle name">
                            @error('middle_name')
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
                            <label>@lang('string.LastName')</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control @error('last_name') is-invalid @enderror" type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Enter your last name">
                            @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                        </div>
                    </div>
                </div>
            </div>
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
                            <label>@lang('string.Gender')</label>
                        </div>
                        <div class="col-9">
    
                            <input type="radio" id="male" name="gender_id" value="1" >Male
                            <input type="radio" id="female" name="gender_id" value="2">Female
                            @error('gender_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="content">
                    <div class="row">
                        <div class="col-3">
    
                            <label>@lang('string.Role')</label>
                        </div>
                        <div class="col-9">
    
                            <select name="role_id" class="@error('role_id') is-invalid @enderror form-control">
                                <option value="">Select</option>
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                            @error('role_id')
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
            <div class="col">
                <div class="content">
                    <div class="row">
                        <div class="col-3">
                            <label class="form-label">@lang('string.DisplayPic')</label>
                        </div>
                        <div class="col-9">
                            <input type="file" name="image" id="image" class = "@error('image') is-invalid @enderror">
                            @error('image')
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
                <input class="btn" type="submit" value="@lang('string.Submit')" >
            </div>
        </div>
            
        <div class="d-flex justify-content-center my-3">
            <div class="button">
                <a href="/login">@lang('string.AlreadyAcc')</a>
            </div>
        </div>
    </form>



@endsection