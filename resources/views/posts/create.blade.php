@extends('layouts.app')

@section('content')
  <h1>Creat Post</h1>
  {!! Form::open(['action' => 'PostController@store', 'method'=> 'POST']) !!}
    <div class="form-group">
      {{form::label('title', 'Title')}}
      {{form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
      {{form::label('body', 'Body')}}
      {{form::textarea('body', '', ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>
      {{form::submit('submit', ['class' => 'btn btn-primary'])}}
  {!! Form::close() !!}
@endsection
