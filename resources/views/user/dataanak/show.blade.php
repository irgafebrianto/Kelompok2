@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">dataanak {{ $dataanak->id }}</div>
                    <div class="panel-body">
                         
                        <a href="{{ url('user/pegawai') }}" class="btn btn-danger btn-xs" title="Kembali"> Kembali<span baria-hidden="true"/></a>
                        
                        <a href="{{ url('user/dataanak/' . $dataanak->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit dataanak"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $dataanak->id }}</td>
                                    </tr>
                                    <tr><th> Nama Anak </th><td> {{ $dataanak->nama_anak }} </td></tr><tr><th> Ttl Anak </th><td> {{ $dataanak->ttl_anak }} </td></tr><tr><th> Jenkel Anak </th><td> {{ $dataanak->jenkel_anak }} </td></tr>
                                    <tr>
                                        <th>Anak Ke</th><td>{{ $dataanak->anak_ke }}</td>
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