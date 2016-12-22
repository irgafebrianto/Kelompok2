@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Data Kepegawaian {{ $datakepegawaian->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/datakepegawaian/' . $datakepegawaian->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit datakepegawaian"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/datakepegawaian', $datakepegawaian->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete datakepegawaian',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $datakepegawaian->id }}</td>
                                    </tr>
                                    <tr><th> Jabatan </th><td> {{ $datakepegawaian->jabatan }} </td></tr><tr><th> Golongan </th><td> {{ $datakepegawaian->golongan }} </td></tr><tr><th> Status </th><td> {{ $datakepegawaian->status }} </td></tr>
                                    <tr><th> Pangkat </th><td> {{ $datakepegawaian->pangkat }} </td></tr>  <tr><th> Masa Kerja </th><td> {{ $datakepegawaian->masa_kerja }} </td></tr>  <tr><th> Pegawai ID </th><td> {{ $datakepegawaian->pegawai_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection