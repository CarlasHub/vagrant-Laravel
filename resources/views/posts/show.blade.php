@extends('layouts.app')
@section('content')
    <div class="container">
    <h1>{{$post->title}}</h1>
      <div>
        {{$post->body}}
    </div>
    <!--edit button --> 
    <a href="/posts/{{$post->id}}/edit" class="btn text-info pull-right"><u>Edit</u></a>
    <!--delete button -->
    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'Post'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class'=>'btn btn-danger pull-right'])}}
    {!! Form::close() !!}
    <br>
    <small>Create on {{$post->created_at}}</small>
    <br>
    <hr>
    <!--go back button-->
    <a href="/posts" class="btn btn-default"><u>Go Back</u></a>
    </div>
@endsection 