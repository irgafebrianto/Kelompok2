@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">kenaikanpangkat {{ $kenaikanpangkat->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('user/pegawai') }}" class="btn btn-danger btn-xs" title="Kembali"> Kembali<span baria-hidden="true"/></a>

                        <a href="{{ url('user/kenaikanpangkat/' . $kenaikanpangkat->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit kenaikanpangkat"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                       
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $kenaikanpangkat->id }}</td>
                                    </tr>
                                    <tr><th> Nip </th><td> {{ $kenaikanpangkat->nip }} </td></tr><tr><th> Golongan </th><td> {{ $kenaikanpangkat->golongan }} </td></tr><tr><th> Tahun </th><td> {{ $kenaikanpangkat->tahun }} </td></tr>
                                    <tr><th> Tahun Naik</th><td> {{ $kenaikanpangkat->tahun_naik }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection