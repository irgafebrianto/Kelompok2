@extends('user.layout')

@section('content')
        <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h2 class="panel-title" align="center"> Data Anak {{$dataanak->id}}</h2>
                </div>
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

@endsection