<!-- Extends App Layout -->
@extends('layouts.app')

<!-- Section with content -->
@section('content')
    <br>
    <h1>{{$title}}</h1>
    <br>
    @if(count($services) > 0)
        <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif
@endsection
