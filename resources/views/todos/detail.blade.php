@extends('layouts.app')

@section('content')

<h1 class="mb-3">Todo detail </h1>
<a href="/" class="btn btn-outline-info mb-2">Go back</a>
<div class="card">
    <div class="card-body">
            <h5 class="card-title">{{$todo->text}} </h5>
            <p>{{$todo->body}} </p>
            <span class="badge badge-danger">{{$todo->due}}</span>
            <br>
            <br>
            <hr>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-primary">Edit</a>
    {!! Form::open(['action' => ['TodoController@destroy', $todo->id], 'method' => 'POST', 'class' => 'float-right']) !!}
	{{ Form::hidden('_method', 'DELETE') }}
   	{{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}
    </div>
    
</div>
 
@endsection