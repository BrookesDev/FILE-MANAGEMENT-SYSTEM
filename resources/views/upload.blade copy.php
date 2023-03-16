@extends('layouts.master')


@section('content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title" style="margin-top: 30px;">Upload Documents</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-header">
                        <h4 class="card-title">List of Documents</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-stripped table-center table-hover datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Title</th>
                                        <th>Categories</th>
                                        <th>File</th>
                                        <th>Uploaded by</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($uploads as $upload)
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $upload->title }}</td>
                                            <td>{{ $upload->categories }}</td>
                                            <td>{{ $upload->file }}</td>
                                            <td>{{ $upload->user->name }}</td>
                                            <td>
                                                <a href="{{asset("file/$upload->file")}}" target="_blank" class="btn btn-success" href=""
                                                    data-bs-target="{{ $upload->id }}"> view</a>
                                                <a class="btn btn-success" href="{{ route('editUploadhome', $upload->id) }}">edit</a>
                                                    <a href="{{ route('deleteupload',$upload->id) }}" data-id="{{ $upload->id }}"
                                                        onclick="return confirm('Are you sure you want to delete this category?')"
                                                        class="btn btn-sm btn-danger" id="deleteRecord"> delete</a>
                                            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
