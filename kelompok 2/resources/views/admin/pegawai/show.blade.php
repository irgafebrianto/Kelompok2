@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">pegawai {{ $pegawai->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/pegawai/' . $pegawai->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit pegawai"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/pegawai', $pegawai->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete pegawai',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pegawai->id }}</td>
                                    </tr>
                                    <tr><th> Nama </th><td> {{ $pegawai->nama }} </td></tr><tr><th> Nip </th><td> {{ $pegawai->nip }} </td></tr><tr><th> Alamat </th><td> {{ $pegawai->alamat }} </td></tr>   <tr><th> TTL. </th><td> {{ $pegawai->ttl }} </td></tr>
                                    <tr><th> Jenkel </th><td> {{ $pegawai->jenkel }} </td></tr>  <tr><th> Agama </th><td> {{ $pegawai->agama }} </td></tr> <tr><th> Kebangsaan </th><td> {{ $pegawai->kebangsaan }} </td></tr> <tr><th> Telpon </th><td> {{ $pegawai->telpon }} </td></tr>
                                    <tr><th> Golongan </th><td> {{ $pegawai->golongan }} </td></tr> <tr><th> Nama Istri </th><td> {{ $pegawai->nama_istri }} </td></tr> <tr><th> Pekerjaan Istri </th><td> {{ $pegawai->pekerjaan_istri }} </td></tr>







                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection