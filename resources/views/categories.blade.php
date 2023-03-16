
@extends('layouts.master')


@section('content')

    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h5 class="page-title" style="margin-top: 30px;">Configuration <span style="color: blue">></span> Category</h5>
                    <div class="text-end">
                        @can('create-category')
                        <a class="btn btn-primary" href="" data-bs-toggle="modal" data-bs-target="#modal"> Add New Category</a>
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
                        <h3 class="modal-title" id="">Category</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('save_category') }}" id="saveCategories">
                        @csrf
                        <div class="form-group">
                            <label>category:</label>
                            <input type="text" class="form-control" name="description" required>
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
                        <h5 class="card-title"></h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-stripped table-center table-hover datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Categories</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($categories as $category)
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $category->description}}</td>
                                            <td>
                                                @can('edit-category')
                                                <a class="btn btn-success" href="" data-bs-toggle="modal" data-bs-target="#modal{{$category->id}}"> Edit</a>
                                                @endcan 
                                                @can('delete-category')
                                                <a href="{{ route('deletecategories',$category->id) }}" data-id="{{ $category->id }}"
                                                        onclick="return confirm('Are you sure you want to delete this category?')"
                                                        class="btn btn-sm btn-danger" id="deleteRecord"> delete</a>
                                                @endcan
                                            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            @foreach ($categories  as $category)
                            <div class="modal fade" id="modal{{$category->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="">Edit Categories</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{route('update_categories',$category->id)}}" id="saveCategories">
                                                @csrf
                                                <div class="form-group">
                                                    <label>Category:</label>
                                                    <input type="text" class="form-control" name="description" value="{{$category->description}}">
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
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection