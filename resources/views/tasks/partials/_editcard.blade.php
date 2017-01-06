@if ( $task->completed == false )
    <div class="c-card c-card__edit mdl-card mdl-shadow--2dp">
@else
    <div class="c-card c-card__edit c-card--completed mdl-card mdl-shadow--2dp">
@endif
    {!! Form::model($task, ['method' => 'PATCH', 'route' => ['tasks.update', $task->slug]]) !!}

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label c-card__text">
            {!! Form::label('name', 'Edit Name', array('class' => 'mdl-textfield__label', 'for' => 'name')) !!}
            {!! Form::text('name', null, array('class' => 'quickadd__name mdl-textfield__input')) !!}
        </div>

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label c-card__text">
            {!! Form::label('description', 'Edit Description', array('class' => 'mdl-textfield__label', 'for' => 'description')) !!}
            {!! Form::textarea('description', null, array('size' => '30x7', 'class' => 'quickadd__desc mdl-textfield__input')) !!}
        </div>

        <div class="actions mdl-card__actions">
            {!! Form::button('<i class="material-icons">done</i>', array('type' => 'submit', 'class' => 'mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored c-btn c-btn__done')) !!}
        </div>
    {!! Form::close() !!}
</div>