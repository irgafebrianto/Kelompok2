<div class="form-group {{ $errors->has('nip') ? 'has-error' : ''}}">
    {!! Form::label('nip', 'Nip', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nip', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nip', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('golongan') ? 'has-error' : ''}}">
    {!! Form::label('golongan', 'Golongan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('golongan',['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('golongan', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tahun') ? 'has-error' : ''}}">
    {!! Form::label('tahun', 'Tahun', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('tahun', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tahun', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tahun_naik') ? 'has-error' : ''}}">
    {!! Form::label('tahun_naik', 'Tahun Naik', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('tahun_naik', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tahun_naik', '<p class="help-block">:message</p>') !!}
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