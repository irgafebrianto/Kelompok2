<div class="form-group {{ $errors->has('nama_anak') ? 'has-error' : ''}}">
    {!! Form::label('nama_anak', 'Nama Anak', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama_anak', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_anak', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('ttl_anak') ? 'has-error' : ''}}">
    {!! Form::label('ttl_anak', 'Ttl Anak', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('ttl_anak', null, ['class' => 'form-control']) !!}
        {!! $errors->first('ttl_anak', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('jenkel_anak') ? 'has-error' : ''}}">
    {!! Form::label('jenkel_anak', 'Jenkel Anak', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jenkel_anak', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jenkel_anak', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('anak_ke') ? 'has-error' : ''}}">
    {!! Form::label('anak_ke', 'Anak Ke', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('anak_ke', null, ['class' => 'form-control']) !!}
        {!! $errors->first('anak_ke', '<p class="help-block">:message</p>') !!}
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