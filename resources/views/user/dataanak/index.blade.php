@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dataanak</div>
                    <div class="panel-body">

                        
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Nama Anak </th><th> Ttl Anak </th><th> Jenkel Anak </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($dataanak as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nama_anak }}</td><td>{{ $item->ttl_anak }}</td><td>{{ $item->jenkel_anak }}</td>
                                        <td>
                                            <a href="{{ url('/user/dataanak/' . $item->id) }}" class="btn btn-success btn-xs" title="View dataanak"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/user/dataanak/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit dataanak"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                           
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $dataanak->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection