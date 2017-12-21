@extends('layouts.app')

@section('content')
<a href="http://localhost:8889/lsapp/public/posts" class="btn btn-default">Go Back</a>
  <h1>{{$post->title}}</h1>
  <div class="">
    {{-- i used this lik {!!$post->body!!} cuz a source in editor body --}}
    {!!$post->body!!}
  </div><hr>
  <small>Written on {{$post->created_at}}</small>

@endsection
