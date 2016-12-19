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
        {!! Form::select('jenkel',['laki-laki'=>'Laki-Laki','perempuan'=> 'Perempuan'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('jenkel', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('agama') ? 'has-error' : ''}}">
    {!! Form::label('agama', 'Agama', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('agama', ['islam'=>'Islam','kristen protestan'=> 'Kristen Protestan','katholik'=>'Katholik','budha'=>'Budha','hindu'=>'Hindu','kong hu chu'=>'Kong hu chu','lainnya'=>'Lainnya'],null, ['class' => 'form-control']) !!}
        {!! $errors->first('agama', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('kebangsaan') ? 'has-error' : ''}}">
    {!! Form::label('kebangsaan', 'Kebangsaan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('kebangsaan',['wni'=>'WNI','wna'=>'WNA'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('kebangsaan', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('telpon') ? 'has-error' : ''}}">
    {!! Form::label('telpon', 'Telpon', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('telpon', null, ['class' => 'form-control']) !!}
        {!! $errors->first('telpon', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('golongan') ? 'has-error' : ''}}">
    {!! Form::label('golongan', 'Golongan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('golongan',['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('golongan', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nama_istri') ? 'has-error' : ''}}">
    {!! Form::label('nama_istri', 'Nama Pasangan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama_istri', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_istri', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('pekerjaan_istri') ? 'has-error' : ''}}">
    {!! Form::label('pekerjaan_istri', 'Pekerjaan Pasangan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('pekerjaan_istri', null, ['class' => 'form-control']) !!}
        {!! $errors->first('pekerjaan_istri', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    {!! Form::label('user_id', 'User Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('user_id', auth::id(), ['class' => 'form-control']) !!}
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>