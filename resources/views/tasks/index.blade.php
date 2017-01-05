@extends('app')

@section('title', 'Manager')

@section('content')

<div class="tasks__list">

  @if ( !$tasks )
    You have no tasks

  @else
        <div class="o-grid">
            <div class="o-container">
                <div class="o-container__cards">
                    <div class="c-card c-card__add mdl-card">
                        {!! Form::model(new App\Task, ['route' => ['tasks.store'], 'class'=>'c-form__quickadd']) !!}
                            @include('tasks/partials/_quickadd')
                        {!! Form::close() !!}
                    </div>
                </div>
            @foreach( $tasks as $task )
                <div class="o-container__cards">
                    @include('tasks/partials/_showcard')
                    @include('tasks/partials/_editcard')
                </div>
            @endforeach
            </div>
        </div>
      @endif

</div>

@endsection
