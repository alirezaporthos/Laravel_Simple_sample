@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
     
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title','',['class'=>'form-control' ,'placeHolder'=>'Title' ]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Body') !!}
            {!! Form::textarea('body','',['id'=>'editor1','class'=>'form-control' ,'placeHolder'=>'Body' ]) !!}
        </div>
        <div class="form-group">
            {!! Form::file('cover_image') !!}
        </div>
    {!! Form::submit('Submit',['class' => 'btn btn-primary']) !!}    
    {!! Form::close() !!}
    <!--<script>
        CKEDITOR.replace("editor1");
    </script>-->

@endsection 