@extends('app')

@section('title', 'Manager')

@section('content')

<div class="tasks__list">

  @if ( !$tasks )
    You have no tasks

  @else
        <div class="o-grid">
            <div class="o-container">
                <div class="c-card c-card__add mdl-card">
                    {!! Form::model(new App\Task, ['route' => ['tasks.store'], 'class'=>'c-form__quickadd']) !!}
                        @include('tasks/partials/_quickadd')
                    {!! Form::close() !!}
                </div>
            @foreach( $tasks as $task )

                @include('tasks/partials/_showcard')
                @include('tasks/partials/_editcard')

            @endforeach
            </div>
        </div>
      @endif

</div>

@endsection
