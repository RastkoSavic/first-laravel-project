<!-- Extends App Layout -->
@extends('layouts.app')

<!-- Edit Post form -->
@section('content')
   <br>
   <h1>Edit Post</h1>
   <br>
   {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
      <div class="form-group">
         {{Form::label('title', 'Title')}}
         {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
      </div>
      <div class="form-group">
         {{Form::label('body', 'Body')}}
         
         {{-- CKEDITOR TEXTAREA --}}
         {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body'])}}
      </div>
      {{-- Change the method --}}
      {{Form::hidden('_method', 'PUT')}}
      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
   {!! Form::close() !!}  
@endsection