@extends('admin.layout')

@section('content')
    <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h2 class="panel-title" align="center"> Edit data riwayat pendidikan {{ $riwayatpendidikan->id }}</h2>
                </div>
                    <div class="panel-body">
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($riwayatpendidikan, [
                            'method' => 'PATCH',
                            'url' => ['/admin/riwayatpendidikan', $riwayatpendidikan->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.riwayatpendidikan.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
    </div>
@endsection