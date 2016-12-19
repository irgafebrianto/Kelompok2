@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Riwayatpendidikan</div>
                    <div class="panel-body">

                        <a href="{{ url('/user/riwayatpendidikan/create') }}" class="btn btn-primary btn-xs" title="Add New riwayatpendidikan"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Tahun </th><th> Pendidikan </th><th> Pegawai Id </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($riwayatpendidikan as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->tahun }}</td><td>{{ $item->pendidikan }}</td><td>{{ $item->pegawai_id }}</td>
                                        <td>
                                            <a href="{{ url('/user/riwayatpendidikan/' . $item->id) }}" class="btn btn-success btn-xs" title="View riwayatpendidikan"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/user/riwayatpendidikan/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit riwayatpendidikan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $riwayatpendidikan->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection