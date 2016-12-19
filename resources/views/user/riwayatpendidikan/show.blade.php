@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">riwayatpendidikan {{ $riwayatpendidikan->id }}</div>
                    <div class="panel-body">
                    
                         <a href="{{ url('user/pegawai') }}" class="btn btn-danger btn-xs" title="Kembali"> Kembali<span baria-hidden="true"/></a>
                        
                        <a href="{{ url('user/riwayatpendidikan/' . $riwayatpendidikan->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit riwayatpendidikan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $riwayatpendidikan->id }}</td>
                                    </tr>
                                    <tr><th> Tahun </th><td> {{ $riwayatpendidikan->tahun }} </td></tr><tr><th> Pendidikan </th><td> {{ $riwayatpendidikan->pendidikan }} </td></tr><tr><th> Pegawai Id </th><td> {{ $riwayatpendidikan->pegawai_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection