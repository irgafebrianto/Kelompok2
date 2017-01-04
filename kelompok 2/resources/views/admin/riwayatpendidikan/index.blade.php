@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Riwayat Pendidikan</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/riwayatpendidikan/create') }}" class="btn btn-primary btn-xs" title="Add New riwayatpendidikan"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
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
                                            <a href="{{ url('/admin/riwayatpendidikan/' . $item->id) }}" class="btn btn-success btn-xs" title="View riwayatpendidikan"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/riwayatpendidikan/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit riwayatpendidikan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/riwayatpendidikan', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete riwayatpendidikan" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete riwayatpendidikan',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
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