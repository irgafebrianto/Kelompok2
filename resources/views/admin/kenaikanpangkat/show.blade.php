@extends('admin.layout')

@section('content')
        <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h2 class="panel-title" align="center"> Data Kenaikan Pangkat {{$kenaikanpangkat->id}}</h2>
                </div>    
                    <div class="panel-body">

                        <a href="{{ url('admin/kenaikanpangkat/' . $kenaikanpangkat->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit kenaikanpangkat"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/kenaikanpangkat', $kenaikanpangkat->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete kenaikanpangkat',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $kenaikanpangkat->id }}</td>
                                    </tr>
                                    <tr><th> Nip </th><td> {{ $kenaikanpangkat->nip }} </td></tr><tr><th> Golongan </th><td> {{ $kenaikanpangkat->golongan }} </td></tr><tr><th> Tahun </th><td> {{ $kenaikanpangkat->tahun }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection