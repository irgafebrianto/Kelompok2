@extends('user.layout')

@section('content')
        <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h2 class="panel-title" align="center"> Data Anak</h2>
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
                                    <a href="{{ url('/admin/pegawai/create') }}" class="btn btn-dark btn-xs" title="Add New pegawai"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
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

@endsection