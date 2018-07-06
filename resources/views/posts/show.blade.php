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
   <div>
      {{-- Parse HTML --}}
      {!!$post->body!!}
   </div>
   <hr>
   <small>Written at {{$post->created_at}}</small>
@endsection