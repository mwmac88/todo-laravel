<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::label('name', 'New Task Name', array('class' => 'mdl-textfield__label', 'for' => 'name')) !!}
    {!! Form::text('name', null, array('class' => 'quickadd__name mdl-textfield__input')) !!}
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::label('description', 'New Task Descritpion', array('class' => 'mdl-textfield__label', 'for' => 'description')) !!}
    {!! Form::textarea('description', null, array('size' => '30x5', 'class' => 'quickadd__desc mdl-textfield__input')) !!}
</div>

 {!! Form::button('<i class="material-icons">add</i>', array('type' => 'submit', 'class' => 'mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored')) !!}
