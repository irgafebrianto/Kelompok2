@extends('admin.layout')

@section('content')
        <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h2 class="panel-title" align="center"> Data Riwayat Pendidikan {{$riwayatpendidikan->id}}</h2>
                </div>    
                    <div class="panel-body">

                        <a href="{{ url('admin/riwayatpendidikan/' . $riwayatpendidikan->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit riwayatpendidikan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/riwayatpendidikan', $riwayatpendidikan->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete riwayatpendidikan',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
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