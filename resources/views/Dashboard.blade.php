@extends('layouts.app')

@section('content')
<div class="container">
    
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <h1>Dashboard</h1>
                    {{--
                    <a href="posts/create" class="btn btn-primary">Create Post</a>
                    <br></br>
                    
                    @if(count($posts) > 0)
                    <h3>Your Posts</h3>
                    <table class='table table-striped'>
                    <tr>
                        <td>Title</td>
                        <td></td>
                        <td></td>
                    </tr>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-success ">Edit</a>                            </td>
                            <td>{!!Form::open(['action' => ['PostsController@destroy' , $post->id ], 'method'=>'POST' , 'class' => 'float-right']) !!}
                                {{Form::hidden('_method','DELETE') }}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                    @endforeach
                    </table>
                    @else 
                    <h3>You have no post</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
    --}}
</div>
@endsection
