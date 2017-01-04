<div class="form-group {{ $errors->has('tahun') ? 'has-error' : ''}}">
    {!! Form::label('tahun', 'Tahun', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tahun', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tahun', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('pendidikan') ? 'has-error' : ''}}">
    {!! Form::label('pendidikan', 'Pendidikan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('pendidikan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('pendidikan', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('pegawai_id') ? 'has-error' : ''}}">
    {!! Form::label('pegawai_id', 'Pegawai Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('pegawai_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('pegawai_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>