@extends('admin.layout')

@section('content')
        <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h2 class="panel-title" align="center"> Data Kepegawaian</h2>
                </div>
                    <div class="panel-body"> 
                        
                        <br/>
                                     

                        <form id="form_filter" >
                                    <div class="row form-inline form-horizontal"> 
                                        <div class="col-sm-12 col-md-9">
                                        </div>
                                        <div class="col-sm-12 col-md-9">
                                            <div id="datatable-default_filter" class="dataTables_filter">

                                    <td colspan="5">
                                        <a href="{{ url('/admin/datakepegawaian/create') }}" class="btn btn-dark btn-xs" title="Add New datakepegawaian"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                                     </td>
                                                <label><input class="form-control" value="{{isset($_GET['search'])?$_GET['search']:''}}" name="search" placeholder="Search" aria-controls="datatable-default">
                                                </label></div>
                                        </div>
                                    </div>
                        </form>   

                    
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
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