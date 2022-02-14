@extends('layout.logged')

@section('content')
<table class="table table-borderless">
    <thead>
      <tr>
        <th scope="col" class="text-center">@lang('string.Account')</th>
        <th scope="col" class="text-center">@lang('string.Action')</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $u) 
        @if(auth()->user()->account_id == $u->account_id)
            @php
               continue; 
            @endphp
        @endif
        <tr>
        <td class="border border-dark">{{$u->first_name}} {{$u->middle_name}} {{$u->last_name}} - {{$u->role->role_desc}}</td>
        <td class="border border-dark"> 
            <div class="row">
                <div class="col">
                    <form action="/updateUser" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{$u->account_id}}">
                        <input class="btn btn-link" type="submit" value="@lang('string.UpdateRole')" >   
                    </form>
                </div>
                <div class="col">
                    <form action="/deleteUser" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{$u->account_id}}">
                        <input class="btn btn-link" type="submit" value="@lang('string.Delete')">
                    </form>
                </div>
            </div>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection