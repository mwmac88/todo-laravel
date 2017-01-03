@if ( $task->completed == false )
    <div class="c-card mdl-card mdl-shadow--2dp">
@else
    <div class="c-card c-card--completed mdl-card mdl-shadow--2dp">
@endif

    {!! Form::model($task, ['method' => 'PATCH', 'route' => ['tasks.update', $task->slug], 'class' => 'c-form__check']) !!}
        {!! Form::hidden('completed', false) !!}
        {!! Form::checkbox('completed', true) !!}
        {!! Form::submit('Check') !!}
    {!! Form::close() !!}

    <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">{{ $task->name }}</h2>
    </div>
    <div class="mdl-card__supporting-text mdl-card--expand">
        {{ str_limit($task->description, 150) }}
    </div>
    <div class="c-card__actions mdl-card__actions mdl-card--border">
        <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect c-btn c-btn__edit" id={{ 'edit'.$task->id }}>
            <i class="material-icons">create</i>
            <div class="mdl-tooltip" data-mdl-for={{ 'edit'.$task->id }}>
                Edit
            </div>
        </button>
        <form action="./tasks/{{ $task->slug }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect c-btn c-btn__delete" id={{ 'delete'.$task->id }}>
                <i class="material-icons">remove_circle</i>
                <div class="mdl-tooltip" data-mdl-for={{ 'delete'.$task->id }}>
                    Delete
                </div>
            </button>
        </form>
    </div>
</div>