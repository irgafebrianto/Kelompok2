@extends('admin.layout')

@section('content')
        <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h2 class="panel-title" align="center"> Data Kenaikan Pangkat Pegawai</h2>
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
                                    <a href="{{ url('/admin/kenaikanpangkat/create') }}" class="btn btn-dark btn-xs" title="Add New kenaikanpangkat"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
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
                                        <th>ID</th><th> Nip </th><th> Golongan </th><th> Tahun </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($kenaikanpangkat as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nip }}</td><td>{{ $item->golongan }}</td><td>{{ $item->tahun }}</td>
                                        <td>
                                            <a href="{{ url('/admin/kenaikanpangkat/' . $item->id) }}" class="btn btn-success btn-xs" title="View kenaikanpangkat"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/kenaikanpangkat/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit kenaikanpangkat"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/kenaikanpangkat', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete kenaikanpangkat" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete kenaikanpangkat',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
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