@extends('layouts.app')

@section('content')
    <a href="/todo/{{$todo->id}}" class="btn btn-outline-info mb-2">Back</a>
<h1 class="mb-3">Edit Todo</h1>

{!! Form::open(['action' => ['TodoController@update', $todo->id], 'method' => 'POST']) !!}
    <div class="card">
        <div class="card-body">
             
                {{ Form::bsText('text', $todo->text) }}
                {{ Form::bsTextArea('body', $todo->body) }}
                {{ Form::bsText('due', $todo->due) }}
                {{ Form::hidden('_method', 'PUT') }}
                {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
                        
        </div>
    </div>
{!! Form::close() !!}
@endsection