@extends('admin.layout')

@section('content')
    <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h2 class="panel-title" align="center"> Edit data kenaikan pangkat {{ $kenaikanpangkat->id }}</h2>
                </div>
                    <div class="panel-body">
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($kenaikanpangkat, [
                            'method' => 'PATCH',
                            'url' => ['/admin/kenaikanpangkat', $kenaikanpangkat->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.kenaikanpangkat.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
@endsection