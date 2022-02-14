@extends('layout.logged')

@section('content')
<h3 class="my-4">{{$user->first_name}} {{$user->middle_name}} {{$user->last_name}}</h3>
<br>

<form action="/updateRole" method="post">
    @csrf
    <input type="hidden" name="user_id" value="{{$user->account_id}}">
    <div class="row">
        <div class="col-1">
            <label>Role</label>
        </div>
        <div class="col-3">
            <select name="role_id" class="@error('role_id') is-invalid @enderror form-control">
                <option value="1" @if(auth()->user()->role_id==1) selected @endif>Admin</option>
                <option value="2" @if(auth()->user()->role_id==2) selected @endif>User</option>
            </select>
            @error('role_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
            @enderror
        </div>       
    </div>

    

    <div class="row my-4">
        <div class="col-3">
            <div class="d-flex justify-content-center my-3">
                <div class="btn btn-warning">
                    <input class="btn" type="submit" value="@lang('string.Submit')" >
                </div>
            </div>
        </div>
    </div>

</form>
    

@endsection