@extends('user.layout')

@section('content')
    <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h2 class="panel-title" align="center"> Edit pegawai {{ $pegawai->id }}</h2>
                </div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($pegawai, [
                            'method' => 'PATCH',
                            'url' => ['/user/pegawai', $pegawai->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('user.pegawai.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
            </div>
    </div>
@endsection