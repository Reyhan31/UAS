@extends('layout.logged')

@section('content')
@if($order->isEmpty())
<div class="text-center m-5">
    <h1>@lang('string.CartEmpty')</h1>
</div>
@else
<table class="table table-borderless">
    <thead>
      <tr>
        <th scope="col" class="text-center">@lang('string.Title')</th>
        <th scope="col" class="text-center"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($order as $o) 
        <tr>
        <td class="border border-dark">{{$o->EBook->title}}</td>
        <td>
            <form action="/deleteOrder" method="post">
            @csrf
        <input type="hidden" name="order_id" value="{{$o->order_id}}">
                <input class="btn btn-link" type="submit" value="Delete" >   
        </form>
    </td>
        </tr>
        @endforeach
    </tbody>
</table>

<form action="/checkout" method="post">
    @csrf
    <div class="d-flex justify-content-end my-3">
        <div class="btn btn-warning">
            <input class="btn" type="submit" value="submit">
        </div>
    </div>
</form>
@endif
@endsection