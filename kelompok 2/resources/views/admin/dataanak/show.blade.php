@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Data Anak {{ $dataanak->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/dataanak/' . $dataanak->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit dataanak"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/dataanak', $dataanak->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete dataanak',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $dataanak->id }}</td>
                                    </tr>
                                    <tr><th> Nama Anak </th><td> {{ $dataanak->nama_anak }} </td></tr><tr><th> Ttl Anak </th><td> {{ $dataanak->ttl_anak }} </td></tr><tr><th> Jenkel Anak </th><td> {{ $dataanak->jenkel_anak }} </td></tr>
                                    <tr><th> anak Pegawai ID </th><td> {{ $dataanak->pegawai_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection