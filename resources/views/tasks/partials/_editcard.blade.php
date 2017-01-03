@if ( $task->completed == false )
    <div class="c-card c-card__edit c-card--hidden mdl-card mdl-shadow--2dp">
@else
    <div class="c-card c-card__edit c-card--hidden c-card--completed mdl-card mdl-shadow--2dp">
@endif
    {!! Form::model($task, ['method' => 'PATCH', 'route' => ['tasks.update', $task->slug]]) !!}

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            {!! Form::label('name', $task->name, array('class' => 'mdl-textfield__label', 'for' => 'name')) !!}
            {!! Form::text('name', null, array('class' => 'quickadd__name mdl-textfield__input')) !!}
        </div>

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            {!! Form::label('description', $task->description, array('class' => 'mdl-textfield__label', 'for' => 'description')) !!}
            {!! Form::textarea('description', null, array('size' => '30x5', 'class' => 'quickadd__desc mdl-textfield__input')) !!}
        </div>

    {!! Form::close() !!}
</div>