@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Kenaikanpangkat</div>
                    <div class="panel-body">

                        <a href="{{ url('/user/kenaikanpangkat/create') }}" class="btn btn-primary btn-xs" title="Add New kenaikanpangkat"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Nip </th><th> Golongan </th><th> Tahun </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($kenaikanpangkat as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nip }}</td><td>{{ $item->golongan }}</td><td>{{ $item->tahun }}</td><td>{{ $item->tahun_naik }}</td>
                                        <td>
                                            <a href="{{ url('/user/kenaikanpangkat/' . $item->id) }}" class="btn btn-success btn-xs" title="View kenaikanpangkat"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/user/kenaikanpangkat/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit kenaikanpangkat"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $kenaikanpangkat->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection