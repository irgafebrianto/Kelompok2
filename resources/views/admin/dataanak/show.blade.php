@extends('admin.layout')

@section('content')
        <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h2 class="panel-title" align="center"> Data Anak {{$dataanak->id}}</h2>
                </div>    
                    <div class="panel-body">

                        <a href="{{ url('admin/dataanak/' . $dataanak->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit dataanak"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/dataanak', $dataanak->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete dataanak',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $dataanak->id }}</td>
                                    </tr>
                                    <tr><th> Nama Anak </th><td> {{ $dataanak->nama_anak }} </td></tr><tr><th> Ttl Anak </th><td> {{ $dataanak->ttl_anak }} </td></tr><tr><th> Jenkel Anak </th><td> {{ $dataanak->jenkel_anak }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
           
        </div>
@endsection