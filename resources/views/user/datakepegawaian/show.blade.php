@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">datakepegawaian {{ $datakepegawaian->id }}</div>
                    <div class="panel-body">

                         <a href="{{ url('user/pegawai') }}" class="btn btn-danger btn-xs" title="Kembali"> Kembali<span baria-hidden="true"/></a>

                        <a href="{{ url('user/datakepegawaian/' . $datakepegawaian->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit datakepegawaian"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                       
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $datakepegawaian->id }}</td>
                                    </tr>
                                    <tr><th> Jabatan </th><td> {{ $datakepegawaian->jabatan }} </td></tr><tr><th> Golongan </th><td> {{ $datakepegawaian->golongan }} </td></tr><tr><th> Status </th><td> {{ $datakepegawaian->status }} </td></tr>
                                     <tr>
                                        <th>Pangkat</th><td>{{ $datakepegawaian->pangkat }}</td>
                                    </tr>
                                     <tr>
                                        <th>Masa Kerja</th><td>{{ $datakepegawaian->masa_kerja }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection