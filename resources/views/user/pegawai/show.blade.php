@extends('user.layout')

@section('content')
        <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h2 class="panel-title" align="center"> Data Pegawai</h2>
                </div>
                    <div class="panel-body">

                        <a href="{{ url('user/pegawai/' . $pegawai->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit pegawai"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <th>ID</th><td colspan="2">{{ $pegawai->id }}</td></tr>
                                    <tr><th> Nama </th><td colspan="2"> {{ $pegawai->nama }}</td></tr>
                                    <tr><th> Nip </th><td> {{ $pegawai->nip }} </td></tr><tr>
                                    <th> Alamat </th><td colspan="2"> {{ $pegawai->alamat }} </td></tr>
                                    <tr><th> Agama </th><td colspan="2"> {{ $pegawai->agama }}</td></tr>
                                    <tr><th> Telepon </th><td colspan="2"> {{ $pegawai->telpon }}</td></tr>
                                    <tr><th> Golongan </th><td colspan="2"> {{ $pegawai->golongan }}</td></tr>
                                    <tr><th> Nama Pasangan </th><td colspan="2"> {{ $pegawai->nama_istri }}</td></tr>


                                    @foreach($pegawai->data_anaks()->get() as $item)  
                                     
                                    <tr><th> Nama Anak </th><td><a href= "{{url('/user/dataanak/'.$item->id)}}">LINK DATA ANAK</a></td></tr>
                                
                                     @endforeach 

                                    @foreach($pegawai->data_kepegawaians()->get() as $item)  
                                     
                                    <tr><th> Data Kepegawaian </th><td><a href= "{{url('/user/datakepegawaian/'.$item->id)}}">LINK DATA KEPEGAWAIAN</a></td></tr>
                                
                                     @endforeach 

                                    
                                </tbody>
                            </table>
                        </div>

                    </div>
            </div>
        </div>

       

 
         <div class="row">
         <div class="col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h2 class="panel-title" align="center"> Riwayat Pendidikan</h2>
                </div>
                <div class="panel-body">
                        @foreach($pegawai->riwayat_pendidikans()->get() as $item) 
                        <a href="{{ url('user/riwayatpendidikan/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Riwayat Pendidikan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        @endforeach
                        <br/>
                        <br/>

                <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                @foreach($pegawai->riwayat_pendidikans()->get() as $item) 
                                    
                                    <tr><th> Tahun </th><td> {{ $item->tahun }} </td></tr><tr><th> Pendidikan </th><td> {{ $item->pendidikan }}</td></tr>
                                @endforeach
                                </tbody>
                            </table>
                </div>
            </div> 
            </div>
        </div>   


                    <div class="col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h2 class="panel-title" align="center"> Kenaikan Pangkat</h2>
                </div>
                 <div class="panel-body">
                       
                        <br/>
                        <br/>

                    <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                @foreach($pegawai->kenaikan_pangkats()->get() as $item) 
                                    
                                    <tr><th> Tahun </th><td> {{ $item->tahun }} </td></tr><tr><th> Tahun Naik </th><td> {{ $item->tahun_naik }}</td></tr>
                                @endforeach
                                </tbody>
                            </table>
            

                        </div>

                        </div></div></div>

                        </div>



             

@endsection
