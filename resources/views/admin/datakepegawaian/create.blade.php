@extends('admin.layout')

@section('content')
        <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h2 class="panel-title" align="center"> Tambah Data Kepeegawaian</h2>
                </div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/datakepegawaian', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.datakepegawaian.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
@endsection