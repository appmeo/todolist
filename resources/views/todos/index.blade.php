@extends('layouts.app')

@section('content')

<h1 class="mb-3">Todos</h1>
@if(count($todos) > 0)
    @foreach($todos as $todo)
        <div class="card mb-2">
            <div class="card-body">
                <h3><a href="todo/{{$todo->id}}">{{$todo->text}}</a><span class="badge badge-danger float-right">{{$todo->due}}</span></h3>
            </div>
        </div>
        
    @endforeach
@endif
@endsection

