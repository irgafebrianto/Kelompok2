@extends('user.layout')

@section('content')
        <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h2 class="panel-title" align="center"> Data Kepegawaian {{$datakepegawaian->id}}</h2>
                </div>
                    <div class="panel-body">                   
                       <a href="{{ url('user/pegawai') }}" class="glyphicon glyphicon-backward"> Back<span baria-hidden="true"/></a></br></br>

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
@endsection