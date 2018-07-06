<!-- Extends App Layout -->
@extends('layouts.app')

<!-- Section with content -->
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <br>
                    <br>
                    <h3>Your Blog Posts</h3>
                    <hr>
                    
                    {{-- Post Table --}}
                    @if(count($posts) > 0)

                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Written on</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
                                    <td>{{$post->created_at}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a></td>
                                    <td>
                                        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>No posts found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
