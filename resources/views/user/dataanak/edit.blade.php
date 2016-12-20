@extends('user.layout')

@section('content')
    <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h2 class="panel-title" align="center"> Edit data anak {{ $dataanak->id }}</h2>
                </div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($dataanak, [
                            'method' => 'PATCH',
                            'url' => ['/user/dataanak', $dataanak->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('user.dataanak.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>

@endsection