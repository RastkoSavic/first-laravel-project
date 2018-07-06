<!-- Extends App Layout -->
@extends('layouts.app')

<!-- Displays single Post -->
@section('content')
   <br>
   <a href="/posts" class="btn btn-outline-secondary">Go Back</a>
   <br>
   <br>
   <h1>{{$post->title}}</h1>
   <hr>
   <br>
      {{-- TODO:
            Fix Image Size
      --}}
   <img style="width: 100%;" src="/storage/cover_images/{{$post->cover_image}}" alt="">
   <br>
   <br>
   <div>
      {{-- Parse HTML --}}
      {!!$post->body!!}
   </div>
   <hr>
   <small>Written at {{$post->created_at}} by {{$post->user->name}}</small>
   <hr>

   {{-- Access Control For Guests --}}
   @if(!Auth::guest())
      
      {{-- Access Control For Users --}}
      @if(Auth::user()->id == $post->user_id)

            {{-- Add clearfix for Edit and Delete buttons --}}
            <div class="clearfix">
                  <a href="/posts/{{$post->id}}/edit" class="float-left btn btn-info">Edit</a>
                  {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                  {!! Form::close() !!}
            </div>
      @endif
   @endif
    
@endsection