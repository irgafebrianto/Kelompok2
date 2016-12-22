<div class="form-group {{ $errors->has('jabatan') ? 'has-error' : ''}}">
    {!! Form::label('jabatan', 'Jabatan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jabatan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jabatan', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('golongan') ? 'has-error' : ''}}">
    {!! Form::label('golongan', 'Golongan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('golongan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('golongan', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    {!! Form::label('status', 'Status', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
        {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('pangkat') ? 'has-error' : ''}}">
    {!! Form::label('pangkat', 'Pangkat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('pangkat', null, ['class' => 'form-control']) !!}
        {!! $errors->first('pangkat', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('masa_kerja') ? 'has-error' : ''}}">
    {!! Form::label('masa_kerja', 'Masa Kerja', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('masa_kerja', null, ['class' => 'form-control']) !!}
        {!! $errors->first('masa_kerja', '<p class="help-block">:message</p>') !!}
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