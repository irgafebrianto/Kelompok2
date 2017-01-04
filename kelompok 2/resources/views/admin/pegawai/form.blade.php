<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    {!! Form::label('nama', 'Nama', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nip') ? 'has-error' : ''}}">
    {!! Form::label('nip', 'Nip', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nip', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nip', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
    {!! Form::label('alamat', 'Alamat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
        {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('ttl') ? 'has-error' : ''}}">
    {!! Form::label('ttl', 'Ttl', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('ttl', null, ['class' => 'form-control']) !!}
        {!! $errors->first('ttl', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('jenkel') ? 'has-error' : ''}}">
    {!! Form::label('jenkel', 'Jenkel', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jenkel', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jenkel', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('agama') ? 'has-error' : ''}}">
    {!! Form::label('agama', 'Agama', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('agama', null, ['class' => 'form-control']) !!}
        {!! $errors->first('agama', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('kebangsaan') ? 'has-error' : ''}}">
    {!! Form::label('kebangsaan', 'Kebangsaan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('kebangsaan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('kebangsaan', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('telpon') ? 'has-error' : ''}}">
    {!! Form::label('telpon', 'Telepon', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('telpon', null, ['class' => 'form-control']) !!}
        {!! $errors->first('telpon', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('golongan') ? 'has-error' : ''}}">
    {!! Form::label('golongan', 'Golongan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('golongan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('golongan', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nama_istri') ? 'has-error' : ''}}">
    {!! Form::label('nama_istri', 'Nama Istri', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama_istri', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_istri', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('pekerjaan_istri') ? 'has-error' : ''}}">
    {!! Form::label('pekerjaan_istri', 'Pekerjaan Istri', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('pekerjaan_istri', null, ['class' => 'form-control']) !!}
        {!! $errors->first('pekerjaan_istri', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>