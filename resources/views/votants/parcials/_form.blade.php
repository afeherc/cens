<div class="form-group">
    {!! Form::label('dni', 'DNI:&nbsp; ') !!}
    {!! Form::text('dni') !!}
</div>

<div class="form-group">
    {!! Form::label('nom', 'Nom:&nbsp; ') !!}
    {!! Form::text('nom') !!}
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:&nbsp; ') !!}
    {!! Form::text('slug') !!}
</div>

<div class="form-group">
    {!! Form::label('dataNaixement', 'Data de Naixement:&nbsp; ') !!}
    {!! Form::text('dataNaixement') !!} &nbsp;(aaaa-mm-dd)
</div>

<div class="form-group">
    {!! Form::submit($submit_text) !!}
</div>
