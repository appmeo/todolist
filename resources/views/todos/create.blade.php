@extends('layouts.app')

@section('content')

<h1 class="mb-3">Create Todo</h1>
{!! Form::open(['action' => 'TodoController@store', 'method' => 'POST']) !!}
    <div class="card">
        <div class="card-body">
             
                {{ Form::bsText('text') }}
                {{ Form::bsTextArea('body') }}
                {{ Form::bsText('due') }}
                {{ Form::bsSubmit('Save', ['class' => 'btn btn-primary']) }}
                        
        </div>
        
    </div>
{!! Form::close() !!}
@endsection