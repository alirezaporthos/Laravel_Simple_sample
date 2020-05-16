@extends('layouts.app')

@section('content')
     <form method="post" action="save">
          @csrf
          name: <input name="name" value="{{$test->name}}"><br>
          age: <input name="age" value="{{$test->age}}"><br>
          email: <input name="email" value="{{$test->email}}"><br>
          ID: <input name="id" value="{{$test->id}}" ><br><br>
          <button>Save</button>     
          <a href= "delete">Delete</a>
     </form>
@endsection