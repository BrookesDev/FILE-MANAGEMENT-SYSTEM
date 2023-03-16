@extends('layouts.master')


@section('content')

<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h5 class="page-title" style="margin-top: 30px;">Configuration<span style="color: blue">></span>Manage Permission</h5>
                <div class="text-end">
                    {{-- @can('create-user') --}}
                    <a class="btn btn-primary" href="" data-bs-toggle="modal" data-bs-target="#modal"> Add new permission</a>
                    {{-- @endcan --}}
                </div>
            </div>
        </div>
    </div>
        <!-- Modal -->
        <div class="modal fade" id="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="">Permission</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{route('savepermission')}}" id="">
                        @csrf
                        <div class="form-group">
                            <label>new permission:</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-secondary">Save</button>
                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-header">
                        <h5 class="card-title">List of Permission</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            
                            <table class="table datatable table table-stripped table-center table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Permission Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($permissions as $permission) 
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $permission->name}}</td>
                                         </td>
                                            <td>
                                                {{-- @can('edit-user')
                                                <a class="btn btn-success" href="" data-bs-toggle="modal" data-bs-target="#modal{{$permissin->id}}"> Edit</a>
                                                @endcan  --}}
                                                {{-- @can('delete-permission') --}}
                                                <a href="{{ route('delete_permission',$permission->id) }}" data-id="{{ $permission->id }}"
                                                        onclick="return confirm('Are you sure you want to delete this category?')"
                                                        class="btn btn-sm btn-danger" id="deleteRecord"> delete</a>
                                                {{-- @endcan --}}
                                            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

@endsection