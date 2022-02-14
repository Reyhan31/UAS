@extends('layout.logged')

@section('content')

@if(session()->has('Error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session('Error')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

<p><b>@lang('string.Title')</b> : {{$details->title}}</p>
<p><b>@lang('string.Author')</b> : {{$details->author}}</p>
<p><b>@lang('string.Description')</b> : </p>
<p>{{$details->description}}</p>


<form action="/rent" method="post">
    @csrf
    <input type="hidden" name="ebook_id" value="{{$details->ebook_id}}">
    <div class="d-flex justify-content-end my-3">
        <div class="btn btn-warning">
            <input class="btn" type="submit" value="rent">
        </div>
    </div>
</form>

@endsection