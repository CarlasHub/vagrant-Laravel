@extends('layouts.app')
@section('content')

    @if(count($posts)> 1)
        <div class="container">
        <h1>Posts</h1>

        @foreach($posts as $post)
            <div class="well py-3">
               <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
               <small>Written on {{$post->created_at}} by {{$post->author}}</small> 
            </div>
        @endforeach
        {{$posts->links()}}
        </div>
    @else
    <p>No posts found</p>
    @endif


@endsection 