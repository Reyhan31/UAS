@extends('layout.logged')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col" class="text-center">@lang('string.Author')</th>
        <th scope="col" class="text-center">@lang('string.Title')</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($books as $b) 
        <tr>
        <td>{{$b->author}}</td>
        <td><a href="details/{{$b->ebook_id}}">{{$b->title}}</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection