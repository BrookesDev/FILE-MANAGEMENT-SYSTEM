
@extends('layouts.master')


@section('content')

    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h5 class="page-title" style="margin-top: 30px;">Configuration <span style="color: blue">></span> User</h5>
                    <div class="text-end">
                        @can('create-user')
                        <a class="btn btn-primary" href="" data-bs-toggle="modal" data-bs-target="#modal"> Add New User</a>
                        @endcan
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="">User</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('save_userpage') }}" id="saveUserpage">
                        @csrf
                        <div class="form-group">
                            <label>First Name:</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                     
                        <div class="form-group">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <input type="Password" class="form-control" name="password" required>
                        </div>

                        <div class="form-group">
                            <label>Roles:</label>
                            <select name="roles[]" class="form-control" required>

                                <option value="">Select role</option>
                                @foreach($roles as $role)
                                <option>{{$role}}</option>
                                @endforeach

                            </select>
                        
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
                        <h5 class="card-title">List of Users</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            
                            <table class="table datatable table table-stripped table-center table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Roles</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($users as $user)
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name}}</td>
                                            <td>{{ $user->email}}</td>
                                                <td>
                                                @if(!empty($user->getRoleNames()))
                                                    @foreach($user->getRoleNames() as $v)
                                                        <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                                                    @endforeach
                                                @endif
                                                </td>
                                            <td>
                                                @can('edit-user')
                                                <a class="btn btn-success" href="" data-bs-toggle="modal" data-bs-target="#modal{{$user->id}}"> Edit</a>
                                                @endcan 
                                                @can('delete-user')
                                                <a href="{{ route('deleteUserpage',$user->id) }}" data-id="{{ $user->id }}"
                                                        onclick="return confirm('Are you sure you want to delete this category?')"
                                                        class="btn btn-sm btn-danger" id="deleteRecord"> delete</a>
                                                @endcan
                                            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            @foreach ($users  as $user)
                            <div class="modal fade" id="modal{{$user->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="">Edit User</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{route('updateUserpage',$user->id)}}" id="saveCategories">
                                            
                                                @csrf
                                                <div class="form-group">
                                                    <label>Name:</label>
                                                    <input type="text" class="form-control" name="name" value="{{$user->name}}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email:</label>
                                                    <input type="text" class="form-control" name="email" value="{{$user->email}}">
                                                </div>
                                             
                                                <div class="form-group">
                                                    <label>Roles:</label>
                                                    <select name="roles[]" class="form-control" required>
                        
                                                        <option value="">Select role</option>
                                                        @foreach($roles as $role)
                                                        <option>{{$role}}</option>
                                                        @endforeach
                        
                                                    </select>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-secondary">Save</button>
                                                    <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                            
                                        </div>
                    
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection