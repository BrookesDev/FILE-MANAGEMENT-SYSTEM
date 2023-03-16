@extends('layouts.master')

@section('content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Role Management</h2>
                </div>
                <div class="pull-left text-end">
                    @can('role-create')
                        <a class="btn btn-success mb-3" href="{{ route('roles.create') }}"> Create New Role</a>
                    @endcan
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        {{-- table table-bordered --}}
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-header">
                        <h5 class="card-title">Role Permission</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table datatable table table-stripped table-center table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $key => $role)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>
                                                <a class="btn btn-info" href="{{ route('roles.show', $role->id) }}">Show</a>
                                                @can('role-edit')
                                                    <a class="btn btn-primary"
                                                        href="{{ route('roles.edit', $role->id) }}">Edit</a>
                                                @endcan
                                                @can('role-delete')
                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                    {!! Form::close() !!}
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $roles->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
