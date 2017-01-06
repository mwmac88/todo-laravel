{{--FILE NOT IN USE - SINGLE SHOW TASK VIEW--}}

@extends('app')

@section('content')
    <h2>
        {{ $task->name }}
    </h2>

    {{ $task->description }}

@endsection
