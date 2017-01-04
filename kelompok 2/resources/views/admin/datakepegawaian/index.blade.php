@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Data Kepegawaian</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/datakepegawaian/create') }}" class="btn btn-primary btn-xs" title="Add New datakepegawaian"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Jabatan </th><th> Golongan </th><th> Status </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($datakepegawaian as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->jabatan }}</td><td>{{ $item->golongan }}</td><td>{{ $item->status }}</td>
                                        <td>
                                            <a href="{{ url('/admin/datakepegawaian/' . $item->id) }}" class="btn btn-success btn-xs" title="View datakepegawaian"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/datakepegawaian/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit datakepegawaian"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/datakepegawaian', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete datakepegawaian" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete datakepegawaian',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $datakepegawaian->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection