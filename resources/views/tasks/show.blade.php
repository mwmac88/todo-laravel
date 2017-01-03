@extends('app')

@section('content')
    <h2>
        {{ $task->name }}
    </h2>

    {{ $task->description }}

@endsection
