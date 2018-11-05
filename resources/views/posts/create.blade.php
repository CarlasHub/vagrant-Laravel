@extends('layouts.app')
@section('content')

    {!! Form::open(['action' => 'PostsController@store', 'method ' => 'POST']) !!}
    <div class="container">

      <form>
        <h1 class="text-center">Create Post</h1>
        <div class="text-right">
          <a href="/posts" class="btn text-danger"><u>Discard</u></a>
        </div>
        <div class="row">
          <div class="col-md-8 offset-2">
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title','', ['class' => 'form-control'])}}
            </div>
          </div>
       

          <div class="col-md-8 offset-2">
            <div class="form-group">
                {{Form::label('author', 'Author')}}
                {{Form::text('author','', ['class' => 'form-control', 'id' => ''])}}
            </div>
          </div>
          
        
          <div class="col-md-8 offset-2">
            <div class="form-group">
                {{Form::label('body', 'Write your message')}}
                {{Form::textarea('body','', ['id' => 'article-ckeditor','class' => 'form-control'])}}
            </div>
          </div>

       
         <div class="col-md-8 offset-2 text-right">
            <div class="form-group">
                {{Form::submit('Submit',['class' => 'btn btn-primary'] )}}
            
                
           </div>
       </div>
     </div>
    </form>
    </div>
       
    {!! Form::close() !!}
@endsection