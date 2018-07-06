<!-- Extends App Layout -->
@extends('layouts.app')

<!-- Section with content -->
@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <br>
        <p>This is the Laravel application from the "Laravel From Scratch Youtube Series".</p>
        <br>
        <p>
            <!-- Authentication Links -->
            @guest
                <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
                <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
            @else
                Hello {{ Auth::user()->name }}, your <a class="btn btn-primary btn-lg" href="/dashboard" role="button">Dashboard</a> awaits!
            @endguest
        </p>
        

    </div>    
@endsection
