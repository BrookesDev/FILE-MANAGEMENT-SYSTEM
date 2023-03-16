
@extends('layouts.master')


@section('content')

    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h5 class="page-title" style="margin-top: 30px;">Configuration <span style="color: blue">></span> User</h5>
                    <div class="text-end">
                        <a class="btn btn-primary" href="" data-bs-toggle="modal" data-bs-target="#modal"> Add New User</a>
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
                            <input type="text" class="form-control" name="fname" required>
                        </div>
                        <div class="form-group">
                            <label>Last Name:</label>
                            <input type="text" class="form-control" name="lname" required>
                        </div>
                        <div class="form-group">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name="user" required>
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <input type="Password" class="form-control" name="password" required>
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
                            <table class="table table-stripped table-center table-hover datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>S/N</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        {{-- <th>Password</th> --}}
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($userpages as $userpage)
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $userpage->fname}}</td>
                                            <td>{{ $userpage->lname}}</td>
                                            <td>{{ $userpage->user}}</td>
                                            {{-- <td>{{ $userpage->password}}</td> --}}
                                            <td>
                                                <a class="btn btn-success" href="" data-bs-toggle="modal" data-bs-target="#modal{{$userpage->id}}"> Edit</a>
                                                 <a href="{{ route('deleteUserpage',$userpage->id) }}" data-id="{{ $userpage->id }}"
                                                        onclick="return confirm('Are you sure you want to delete this category?')"
                                                        class="btn btn-sm btn-danger" id="deleteRecord"> delete</a>
                                            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            @foreach ($userpages  as $userpage)
                            <div class="modal fade" id="modal{{$userpage->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="">Edit User</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{route('updateUserpage',$userpage->id)}}" id="saveCategories">
                                                @csrf
                                                <div class="form-group">
                                                    <label>First Name:</label>
                                                    <input type="text" class="form-control" name="fname" value="{{$userpage->fname}}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Last Name:</label>
                                                    <input type="text" class="form-control" name="lname" value="{{$userpage->lname}}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Username:</label>
                                                    <input type="text" class="form-control" name="user" value="{{$userpage->user}}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password:</label>
                                                    <input type="password" class="form-control" name="password" value="{{$userpage->password}}">
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