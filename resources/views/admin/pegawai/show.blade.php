@extends('admin.layout')

@section('content')
        <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h2 class="panel-title" align="center"> Data Pegawai</h2>
                </div>
                    <div class="panel-body">

                        <a href="{{ url('admin/pegawai/' . $pegawai->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit pegawai"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/pegawai', $pegawai->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete pegawai',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>

                                        <th>ID</th><td colspan="2">{{ $pegawai->id }}</td>
                                    </tr>
                                    <tr><th> Nama </th><td colspan="2"> {{ $pegawai->nama }} </td></tr><tr><th> Nip </th><td> {{ $pegawai->nip }} </td></tr><tr><th> Alamat </th><td colspan="2"> {{ $pegawai->alamat }} </td></tr>
                                    <tr><th> Agama </th><td colspan="2"> {{ $pegawai->agama }} </td></tr>
                                    @foreach($pegawai->riwayat_pendidikans()->get() as $item)  
                                    <tr><th> Pendidikan </th><td colspan="2"> {{ $item->pendidikan }} </td></tr>
                                    <tr><th> Tahun </th><td> {{ $item->tahun }} </td></tr>
                                     @endforeach


                                    @foreach($pegawai->data_anaks()->get() as $item)  
                                     
                                    <tr><th> Nama Anak </th><td><a href= "{{url('/admin/dataanak/'.$item->id)}}">LINK DATA ANAK</a></td></tr>
                                
                                     @endforeach 


                                </tbody>
                                     

                                    
                            </table>
                        </div>

                    </div>
            </div>
        </div>
@endsection
