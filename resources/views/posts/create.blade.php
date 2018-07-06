<!-- Extends App Layout -->
@extends('layouts.app')

<!-- Create Post form -->
@section('content')
   <br>
   <h1>Create Post</h1>
   <br>
   {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
      <div class="form-group">
         {{Form::label('title', 'Title')}}
         {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
      </div>
      <div class="form-group">
         {{Form::label('body', 'Body')}}
         
         {{-- CKEDITOR TEXTAREA --}}
         {{Form::textarea('body', '', ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body'])}}
      </div>
      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
   {!! Form::close() !!}  
@endsection