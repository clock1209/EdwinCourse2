@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ route('users.index') }}" class="btn btn-outline-secondary btn-xs">Lista de Usuarios</a>
                        &#9656; Crear Usuario
                    </div>

                    <div class="panel-body">
                        {!! Form::open(['route' => 'users.store', 'method' => 'post', 'class' => 'form-horizontal']) !!}
                            @include('user.partials.inputs', ['user' => null])
                            <div class="center">
                                <a href="{{ \URL::previous() }}" class="btn btn-danger btn-sm"> <i class="fa fa-reply"></i> Regresar</a>
                                <button type="reset" class="btn btn-sm"> <i class="fa fa-trash"></i> Limpiar</button>
                                <button type="submit" class="btn btn-primary btn-sm"> <i class="fa fa-save"></i> Guardar</button>
                            </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .chain {
            text-decoration: none;
        }
        .asterisk {
            font-size: 7px;
            color: #e60000;
            position: relative;
            bottom: 6px;
            left: 3px;
        }
    </style>

@endpush