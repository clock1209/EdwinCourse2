@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Lista de Usuarios
                        <div class="pull-right">
                            <a class="btn btn-success btn-xs" href="{{ route('users.create') }}">
                                <i class="fa fa-user"></i> Crear Usuario
                            </a>
                        </div>
                    </div>

                    <div class="panel-body">
                        <table id="table" class="table table-responsive table-hover table-condensed nowrap">
                            <thead>
                            <tr>
                                <td> ID</td>
                                <td> Name</td>
                                <td> Email</td>
                                <td> Opciones</td>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('#table').DataTable({
            ajax: '/users',
            processing: true,
            serverSide: true,
            // scrollX: true,
            fixedColumns:   {
                leftColumns: 0,
                rightColumns: 1
            },
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {
                    data: 'options',
                    name: 'options',
                    orderable: false,
                    serchable: false,
                    bSearchable: false
                }
            ]
        });
    </script>
@endpush