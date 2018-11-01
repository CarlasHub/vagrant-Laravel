@extends('layouts.app')

@section('content')
<h1>this is Where the index for the posts will go </h1>
@if(count($posts)> 1)
@else
<p>No posts found</p>
@endif
@endsection 