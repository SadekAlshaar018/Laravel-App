@extends('layouts.app')

@section('content')
<a href="http://localhost:8889/lsapp/public/posts" class="btn btn-default">Go Back</a>
<a href="http://localhost:8889/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-default"> Edite</a>
  {{-- form for edit post and function  --}}
  {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
    {{form::hidden('_method', 'DELETE')}}
    {{form::submit('Delete', ['class' => 'btn btn-danger'])}}
  {!!Form::close()!!}
  <h1>{{$post->title}}</h1>
  <div class="">
    {{-- i used this lik {!!$post->body!!} cuz a source in editor body --}}
    {!!$post->body!!}
  </div><hr>
  <small>Written on {{$post->created_at}}</small>
  {{-- <a href="/posts/{{$post->id}}/editor" class="btn btn-default"> Edite</a> --}}
@endsection
