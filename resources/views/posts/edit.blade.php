@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title')!!}
            {!! Form::text('title',$post->title,['class'=>'form-control' ,'placeHolder'=>'Title' ])!!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Body')!!}
            {!! Form::textarea('body',$post->body,['id'=>'editor1','class'=>'form-control' ,'placeHolder'=>'Body' , 'enctype'=>'form-data'])!!}
        </div>
        <div class="form-group">
            {!! Form::file('cover_image') !!}
            <br>
            {!! Form::checkbox('delete_Picture','delete_Picture') !!}
            {!! Form::label('delete_Picture','Delete picture')!!}
            
        </div>
        {!!Form::hidden('_method','PUT')!!}
        {!! Form::submit('Submit',['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    <!--<script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
    </script>
    -->
@endsection