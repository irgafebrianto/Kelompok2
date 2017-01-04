@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">kenaikanpangkat {{ $kenaikanpangkat->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/kenaikanpangkat/' . $kenaikanpangkat->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit kenaikanpangkat"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/kenaikanpangkat', $kenaikanpangkat->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete kenaikanpangkat',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $kenaikanpangkat->id }}</td>
                                    </tr>
                                    <tr><th> Nip </th><td> {{ $kenaikanpangkat->nip }} </td></tr><tr><th> Golongan </th><td> {{ $kenaikanpangkat->golongan }} </td></tr><tr><th> Tahun </th><td> {{ $kenaikanpangkat->tahun }} </td></tr>
                                    <tr><th> Pegawai ID </th><td> {{ $kenaikanpangkat->pegawai_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection